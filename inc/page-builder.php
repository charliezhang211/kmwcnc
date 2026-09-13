<?php
/**
 * Page Builder — Auto-create WP pages from theme page templates
 *
 * Scans page-templates/*.php for "Template Name:" headers and provides
 * an admin UI to create/manage the corresponding WordPress pages.
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

// ─────────────────────────────────────────────
// 1. Scan templates
// ─────────────────────────────────────────────

/**
 * Scan page-templates/ and return metadata for each template file.
 *
 * @return array[] Each entry: { file, template_name, slug, title, is_front }
 */
function ulx_scan_page_templates() {
    $dir     = ULX_DIR . '/page-templates/';
    $results = [];

    if (!is_dir($dir)) return $results;

    foreach (glob($dir . 'page-*.php') as $file) {
        $basename = basename($file);                         // page-home.php
        $slug     = str_replace(['page-', '.php'], '', $basename); // home

        // Read first 10 lines to find Template Name
        $handle = fopen($file, 'r');
        if (!$handle) continue;

        $template_name = '';
        $lines_read    = 0;
        while (($line = fgets($handle)) !== false && $lines_read < 10) {
            if (preg_match('/\*\s*Template Name:\s*(.+)/', $line, $m)) {
                $template_name = trim($m[1]);
                break;
            }
            $lines_read++;
        }
        fclose($handle);

        if (!$template_name) continue;

        $results[] = [
            'file'          => 'page-templates/' . $basename,
            'template_name' => $template_name,
            'slug'          => $slug,
            'title'         => $template_name,  // default title = template name
            'is_front'      => ( $slug === 'home' ),
            'is_posts'      => ( $slug === 'blog' ),
        ];
    }

    // Sort: home first, rest alphabetically
    usort($results, function ($a, $b) {
        if ($a['is_front']) return -1;
        if ($b['is_front']) return  1;
        return strcmp($a['slug'], $b['slug']);
    });

    return $results;
}

// ─────────────────────────────────────────────
// 2. Helpers
// ─────────────────────────────────────────────

/**
 * Find a page by its assigned page template (stored in _wp_page_template meta).
 *
 * This is the most reliable lookup because the template meta never changes
 * when users rename the slug, set a parent, or reorganize pages.
 *
 * @param  string        $template_file  e.g. 'page-templates/page-5-axis.php'
 * @return WP_Post|null
 */
function ulx_get_page_by_template( $template_file ) {
    $pages = get_posts([
        'post_type'      => 'page',
        'post_status'    => 'any',
        'posts_per_page' => 1,
        'meta_key'       => '_wp_page_template',
        'meta_value'     => $template_file,
    ]);
    return $pages ? $pages[0] : null;
}

/**
 * Find a page by post_name (slug), ignoring parent hierarchy.
 * Used only for known root-level pages like 'home' and 'blog'.
 *
 * @param  string        $slug
 * @return WP_Post|null
 */
function ulx_get_page_by_slug( $slug ) {
    global $wpdb;
    $page_id = $wpdb->get_var( $wpdb->prepare(
        "SELECT ID FROM {$wpdb->posts} WHERE post_name = %s AND post_type = 'page' AND post_status != 'trash' LIMIT 1",
        $slug
    ) );
    return $page_id ? get_post( (int) $page_id ) : null;
}

// ─────────────────────────────────────────────
// 3. Core: create a single page
// ─────────────────────────────────────────────

/**
 * Create one WP page from template metadata. Idempotent.
 *
 * @param  array $tpl  One entry from ulx_scan_page_templates()
 * @return int|WP_Error  Post ID on success / already-exists, WP_Error on fail
 */
function ulx_create_page_from_template($tpl) {
    // Already exists? Match by assigned template meta — immune to slug/parent changes.
    $existing = ulx_get_page_by_template($tpl['file']);
    if ($existing) {
        $page_id = $existing->ID;
    } else {
        $page_id = wp_insert_post([
            'post_title'   => $tpl['title'],
            'post_name'    => $tpl['slug'],
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_content' => '',
            'menu_order'   => 0,
        ]);

        if (is_wp_error($page_id)) return $page_id;

        update_post_meta($page_id, '_wp_page_template', $tpl['file']);
    }

    // Set as static front page (always runs, even for existing pages)
    if ($tpl['is_front']) {
        update_option('show_on_front', 'page');
        update_option('page_on_front', $page_id);
    }

    // Set as WordPress "Posts page" (always runs, even for existing pages)
    if ( ! empty( $tpl['is_posts'] ) ) {
        update_option( 'show_on_front',  'page' );
        update_option( 'page_for_posts', $page_id );

        // Ensure page_on_front is also set — WordPress requires both options
        if ( ! (int) get_option( 'page_on_front' ) ) {
            $home = ulx_get_page_by_slug( 'home' );
            if ( $home ) {
                update_option( 'page_on_front', $home->ID );
            }
        }
    }

    return $page_id;
}

// ─────────────────────────────────────────────
// 3. Handle POST actions
// ─────────────────────────────────────────────

function ulx_page_builder_handle_actions() {
    if (!is_admin() || !current_user_can('manage_options')) return;
    if (empty($_POST['ulx_page_builder_nonce'])) return;
    if (!wp_verify_nonce($_POST['ulx_page_builder_nonce'], 'ulx_page_builder')) return;

    $action = sanitize_key($_POST['ulx_action'] ?? '');

    if ($action === 'create_all') {
        $templates = ulx_scan_page_templates();
        $created = $skipped = 0;
        foreach ($templates as $tpl) {
            $result = ulx_create_page_from_template($tpl);
            if (!is_wp_error($result)) {
                // If page existed before this run it was "skipped"
                // We track created count by checking post date ≈ now
                $post = get_post($result);
                if ($post && (time() - strtotime($post->post_date_gmt)) < 5) {
                    $created++;
                } else {
                    $skipped++;
                }
            }
        }
        // Flush rewrite rules so new page slugs resolve
        flush_rewrite_rules();
        wp_safe_redirect(add_query_arg([
            'page'       => 'ulx-page-builder',
            'ulx_notice' => 'created',
            'created'    => $created,
            'skipped'    => $skipped,
        ], admin_url('themes.php')));
        exit;
    }

    if ($action === 'create_one') {
        $slug = sanitize_title($_POST['ulx_slug'] ?? '');
        foreach (ulx_scan_page_templates() as $tpl) {
            if ($tpl['slug'] === $slug) {
                ulx_create_page_from_template($tpl);
                if ($tpl['is_front'] || ! empty($tpl['is_posts'])) flush_rewrite_rules();
                break;
            }
        }
        wp_safe_redirect(add_query_arg([
            'page'       => 'ulx-page-builder',
            'ulx_notice' => 'one_created',
            'slug'       => $slug,
        ], admin_url('themes.php')));
        exit;
    }

    if ($action === 'delete_one') {
        $post_id = (int) ($_POST['ulx_post_id'] ?? 0);
        if ($post_id) {
            wp_delete_post($post_id, true);
            flush_rewrite_rules();
        }
        wp_safe_redirect(add_query_arg([
            'page'       => 'ulx-page-builder',
            'ulx_notice' => 'deleted',
        ], admin_url('themes.php')));
        exit;
    }
}
add_action('admin_init', 'ulx_page_builder_handle_actions');

// ─────────────────────────────────────────────
// 4. Register admin menu
// ─────────────────────────────────────────────

function ulx_page_builder_menu() {
    add_theme_page(
        __('Page Setup', 'ulx'),
        __('Page Setup', 'ulx'),
        'manage_options',
        'ulx-page-builder',
        'ulx_page_builder_render'
    );
}
add_action('admin_menu', 'ulx_page_builder_menu');

// ─────────────────────────────────────────────
// 5. Render admin page
// ─────────────────────────────────────────────

function ulx_page_builder_render() {
    $templates  = ulx_scan_page_templates();
    $nonce      = wp_create_nonce('ulx_page_builder');
    $notice     = $_GET['ulx_notice'] ?? '';

    // Count missing pages
    $missing = 0;
    foreach ($templates as $tpl) {
        if (!ulx_get_page_by_template($tpl['file'])) $missing++;
    }
    ?>
    <div class="wrap">
        <h1><?php esc_html_e('ULX — Page Setup', 'ulx'); ?></h1>
        <p class="description" style="margin-bottom:16px;">
            <?php esc_html_e('Automatically create WordPress pages from theme page templates. Each template in page-templates/ becomes one page.', 'ulx'); ?>
        </p>

        <?php // ── Notices ── ?>
        <?php if ($notice === 'created') : ?>
            <div class="notice notice-success is-dismissible"><p>
                <?php
                $c = (int)($_GET['created'] ?? 0);
                $s = (int)($_GET['skipped'] ?? 0);
                printf(
                    esc_html__('Done! %d page(s) created, %d already existed.', 'ulx'),
                    $c, $s
                );
                ?>
            </p></div>
        <?php elseif ($notice === 'one_created') : ?>
            <div class="notice notice-success is-dismissible"><p>
                <?php printf(esc_html__('Page "%s" created.', 'ulx'), esc_html($_GET['slug'] ?? '')); ?>
            </p></div>
        <?php elseif ($notice === 'deleted') : ?>
            <div class="notice notice-warning is-dismissible"><p>
                <?php esc_html_e('Page deleted.', 'ulx'); ?>
            </p></div>
        <?php endif; ?>

        <?php // ── Create All button ── ?>
        <?php if ($missing > 0) : ?>
        <form method="post" style="margin-bottom:20px;">
            <?php wp_nonce_field('ulx_page_builder', 'ulx_page_builder_nonce'); ?>
            <input type="hidden" name="ulx_action" value="create_all">
            <button type="submit" class="button button-primary button-large">
                <?php printf(
                    esc_html__('Create All Missing Pages (%d)', 'ulx'),
                    $missing
                ); ?>
            </button>
        </form>
        <?php else : ?>
        <p style="margin-bottom:20px;">
            <span style="color:#2e7d32;font-weight:600;">&#10003; <?php esc_html_e('All pages are set up.', 'ulx'); ?></span>
        </p>
        <?php endif; ?>

        <?php // ── Pages table ── ?>
        <table class="wp-list-table widefat fixed striped" style="max-width:900px;">
            <thead>
                <tr>
                    <th style="width:180px;"><?php esc_html_e('Template File', 'ulx'); ?></th>
                    <th style="width:180px;"><?php esc_html_e('Template Name', 'ulx'); ?></th>
                    <th style="width:120px;"><?php esc_html_e('Page Slug', 'ulx'); ?></th>
                    <th style="width:80px;"><?php esc_html_e('Status', 'ulx'); ?></th>
                    <th><?php esc_html_e('Actions', 'ulx'); ?></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($templates as $tpl) :
                $existing = ulx_get_page_by_template($tpl['file']);
                $exists   = (bool) $existing;
            ?>
                <tr>
                    <td>
                        <code style="font-size:11px;"><?php echo esc_html($tpl['file']); ?></code>
                        <?php if ($tpl['is_front']) : ?>
                            <br><span style="color:#d97706;font-size:11px;font-weight:600;">&#9733; <?php esc_html_e('Front Page', 'ulx'); ?></span>
                        <?php endif; ?>
                        <?php if ( ! empty( $tpl['is_posts'] ) ) : ?>
                            <br><span style="color:#1976d2;font-size:11px;font-weight:600;">&#9654; <?php esc_html_e('Posts Page', 'ulx'); ?></span>
                        <?php endif; ?>
                    </td>
                    <td><?php echo esc_html($tpl['template_name']); ?></td>
                    <td><code><?php echo esc_html($exists ? $existing->post_name : $tpl['slug']); ?></code></td>
                    <td>
                        <?php if ($exists) : ?>
                            <span style="color:#2e7d32;font-weight:600;">&#10003; <?php esc_html_e('Exists', 'ulx'); ?></span>
                        <?php else : ?>
                            <span style="color:#c62828;font-weight:600;">&#10007; <?php esc_html_e('Missing', 'ulx'); ?></span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php if ($exists) : ?>
                            <a href="<?php echo esc_url(get_edit_post_link($existing->ID)); ?>" class="button button-small">
                                <?php esc_html_e('Edit', 'ulx'); ?>
                            </a>
                            <a href="<?php echo esc_url(get_permalink($existing->ID)); ?>" class="button button-small" target="_blank">
                                <?php esc_html_e('View', 'ulx'); ?>
                            </a>
                            <form method="post" style="display:inline;" onsubmit="return confirm('<?php esc_attr_e('Delete this page?', 'ulx'); ?>')">
                                <?php wp_nonce_field('ulx_page_builder', 'ulx_page_builder_nonce'); ?>
                                <input type="hidden" name="ulx_action" value="delete_one">
                                <input type="hidden" name="ulx_post_id" value="<?php echo esc_attr($existing->ID); ?>">
                                <button type="submit" class="button button-small button-link-delete">
                                    <?php esc_html_e('Delete', 'ulx'); ?>
                                </button>
                            </form>
                        <?php else : ?>
                            <form method="post" style="display:inline;">
                                <?php wp_nonce_field('ulx_page_builder', 'ulx_page_builder_nonce'); ?>
                                <input type="hidden" name="ulx_action" value="create_one">
                                <input type="hidden" name="ulx_slug" value="<?php echo esc_attr($tpl['slug']); ?>">
                                <button type="submit" class="button button-primary button-small">
                                    <?php esc_html_e('Create Page', 'ulx'); ?>
                                </button>
                            </form>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

        <p style="margin-top:16px;color:#666;font-size:12px;">
            <?php esc_html_e('Tip: To add a new page template, create page-templates/page-{slug}.php with a "Template Name:" header comment.', 'ulx'); ?>
        </p>

        <?php if ( class_exists('WooCommerce') ) : ?>
        <h2 style="margin-top:32px;"><?php esc_html_e('WooCommerce Pages', 'ulx'); ?></h2>
        <p class="description" style="margin-bottom:16px;">
            <?php esc_html_e('These pages are managed by WooCommerce. URL structure: /products/{category}/{product}/', 'ulx'); ?>
        </p>
        <table class="wp-list-table widefat fixed striped" style="max-width:900px;">
            <thead>
                <tr>
                    <th style="width:160px;"><?php esc_html_e('Purpose', 'ulx'); ?></th>
                    <th style="width:120px;"><?php esc_html_e('Page Slug', 'ulx'); ?></th>
                    <th style="width:80px;"><?php esc_html_e('Status', 'ulx'); ?></th>
                    <th><?php esc_html_e('Actions', 'ulx'); ?></th>
                </tr>
            </thead>
            <tbody>
            <?php
            $woo_pages = [
                'shop'       => [ 'label' => __('Products (Shop)', 'ulx'),    'option' => 'woocommerce_shop_page_id',    'note' => __('★ Set as WooCommerce shop page', 'ulx') ],
                'cart'       => [ 'label' => __('Cart (disabled)', 'ulx'),     'option' => 'woocommerce_cart_page_id',    'note' => __('Redirects to Contact (B2B)', 'ulx') ],
                'checkout'   => [ 'label' => __('Checkout (disabled)', 'ulx'),'option' => 'woocommerce_checkout_page_id','note' => __('Redirects to Contact (B2B)', 'ulx') ],
                'my-account' => [ 'label' => __('My Account', 'ulx'),          'option' => 'woocommerce_myaccount_page_id','note' => '' ],
            ];
            foreach ( $woo_pages as $slug => $cfg ) :
                $page_id  = (int) get_option( $cfg['option'] );
                $page     = $page_id ? get_post( $page_id ) : get_page_by_path( $slug );
                $exists   = (bool) $page;
            ?>
                <tr>
                    <td>
                        <strong><?php echo esc_html( $cfg['label'] ); ?></strong>
                        <?php if ( $cfg['note'] ) : ?>
                            <br><span style="color:#d97706;font-size:11px;"><?php echo esc_html( $cfg['note'] ); ?></span>
                        <?php endif; ?>
                    </td>
                    <td><code><?php echo esc_html( $slug ); ?></code></td>
                    <td>
                        <?php if ( $exists ) : ?>
                            <span style="color:#2e7d32;font-weight:600;">&#10003; <?php esc_html_e('Exists', 'ulx'); ?></span>
                        <?php else : ?>
                            <span style="color:#c62828;font-weight:600;">&#10007; <?php esc_html_e('Missing', 'ulx'); ?></span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php if ( $exists ) : ?>
                            <a href="<?php echo esc_url( get_edit_post_link( $page->ID ) ); ?>" class="button button-small">
                                <?php esc_html_e('Edit', 'ulx'); ?>
                            </a>
                            <a href="<?php echo esc_url( get_permalink( $page->ID ) ); ?>" class="button button-small" target="_blank">
                                <?php esc_html_e('View', 'ulx'); ?>
                            </a>
                        <?php else : ?>
                            <span style="color:#999;font-size:12px;"><?php esc_html_e('Auto-created by WooCommerce on setup', 'ulx'); ?></span>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <?php endif; ?>

    </div>
    <?php
}

// ─────────────────────────────────────────────
// 6. Self-heal: ensure page_for_posts is set
// ─────────────────────────────────────────────

/**
 * If a published "blog" page exists but WordPress doesn't know it's
 * the Posts page, wire it up automatically and flush rewrite rules once.
 * Runs on admin_init so it self-heals without user intervention.
 */
function ulx_ensure_blog_page_option() {
    // Only run once per deploy — bail if already correct
    $blog = ulx_get_page_by_slug( 'blog' );
    if ( ! $blog || $blog->post_status !== 'publish' ) return;

    $current = (int) get_option( 'page_for_posts' );
    if ( $current === $blog->ID ) return; // already set, nothing to do

    // Wire it up
    update_option( 'show_on_front',  'page' );
    update_option( 'page_for_posts', $blog->ID );

    // Ensure front page is also set
    if ( ! (int) get_option( 'page_on_front' ) ) {
        $home = ulx_get_page_by_slug( 'home' );
        if ( $home ) {
            update_option( 'page_on_front', $home->ID );
        }
    }

    flush_rewrite_rules();
}
add_action( 'admin_init', 'ulx_ensure_blog_page_option' );
