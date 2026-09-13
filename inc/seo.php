<?php
/**
 * Lightweight SEO Module
 *
 * - Meta box for SEO title & description on pages/posts
 * - Output <title> and <meta description> in <head>
 * - XML Sitemap at /sitemap.xml
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

/* =========================================================================
   1. META BOX — Admin UI
   ========================================================================= */

/**
 * Register SEO meta box for pages and posts
 */
function ulx_seo_add_meta_box() {
    $post_types = ['page', 'post'];
    foreach ($post_types as $type) {
        add_meta_box(
            'ulx_seo_meta',
            'SEO Settings',
            'ulx_seo_meta_box_html',
            $type,
            'normal',
            'high'
        );
    }
}
add_action('add_meta_boxes', 'ulx_seo_add_meta_box');

/**
 * Render meta box HTML
 */
function ulx_seo_meta_box_html($post) {
    $seo_title = get_post_meta($post->ID, '_ulx_seo_title', true);
    $seo_desc  = get_post_meta($post->ID, '_ulx_seo_description', true);
    wp_nonce_field('ulx_seo_save', '_ulx_seo_nonce');
    ?>
    <style>
        .ulx-seo-field { margin-bottom: 16px; }
        .ulx-seo-field label { display: block; font-weight: 600; margin-bottom: 4px; }
        .ulx-seo-field input,
        .ulx-seo-field textarea { width: 100%; }
        .ulx-seo-field .description { color: #666; font-size: 12px; margin-top: 4px; }
        .ulx-seo-counter { font-size: 12px; color: #666; text-align: right; }
        .ulx-seo-counter.over { color: #d63638; font-weight: 600; }
        .ulx-seo-preview { background: #fff; border: 1px solid #ddd; border-radius: 8px; padding: 16px; margin-top: 16px; }
        .ulx-seo-preview-title { color: #1a0dab; font-size: 18px; line-height: 1.3; margin: 0 0 4px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; }
        .ulx-seo-preview-url { color: #006621; font-size: 13px; margin: 0 0 4px; }
        .ulx-seo-preview-desc { color: #545454; font-size: 13px; line-height: 1.5; margin: 0; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; }
    </style>

    <div class="ulx-seo-field">
        <label for="ulx_seo_title">SEO Title</label>
        <input type="text" id="ulx_seo_title" name="ulx_seo_title"
               value="<?php echo esc_attr($seo_title); ?>"
               placeholder="<?php echo esc_attr(get_the_title($post)); ?>"
               maxlength="120" />
        <div class="ulx-seo-counter">
            <span id="ulx-title-count"><?php echo mb_strlen($seo_title); ?></span> / 60
        </div>
        <p class="description">Recommended: 50–60 characters. Leave blank to use page title + site name.</p>
    </div>

    <div class="ulx-seo-field">
        <label for="ulx_seo_description">Meta Description</label>
        <textarea id="ulx_seo_description" name="ulx_seo_description"
                  rows="3" maxlength="320"
                  placeholder="Brief description of this page for search engines..."><?php echo esc_textarea($seo_desc); ?></textarea>
        <div class="ulx-seo-counter">
            <span id="ulx-desc-count"><?php echo mb_strlen($seo_desc); ?></span> / 160
        </div>
        <p class="description">Recommended: 120–160 characters. Leave blank to use excerpt or auto-generated.</p>
    </div>

    <div class="ulx-seo-preview">
        <p style="margin:0 0 8px; font-size:12px; color:#999; font-weight:600;">Google Preview</p>
        <p class="ulx-seo-preview-title" id="ulx-preview-title">
            <?php echo esc_html($seo_title ?: get_the_title($post) . ' - ' . get_bloginfo('name')); ?>
        </p>
        <p class="ulx-seo-preview-url"><?php echo esc_url(get_permalink($post)); ?></p>
        <p class="ulx-seo-preview-desc" id="ulx-preview-desc">
            <?php echo esc_html($seo_desc ?: wp_trim_words(wp_strip_all_tags($post->post_content), 25, '...')); ?>
        </p>
    </div>

    <script>
    (function(){
        const titleInput = document.getElementById('ulx_seo_title');
        const descInput  = document.getElementById('ulx_seo_description');
        const titleCount = document.getElementById('ulx-title-count');
        const descCount  = document.getElementById('ulx-desc-count');
        const previewTitle = document.getElementById('ulx-preview-title');
        const previewDesc  = document.getElementById('ulx-preview-desc');
        const defaultTitle = <?php echo wp_json_encode(get_the_title($post) . ' - ' . get_bloginfo('name')); ?>;
        const defaultDesc  = <?php echo wp_json_encode(wp_trim_words(wp_strip_all_tags($post->post_content), 25, '...')); ?>;

        function update() {
            const tLen = titleInput.value.length;
            const dLen = descInput.value.length;
            titleCount.textContent = tLen;
            descCount.textContent = dLen;
            titleCount.parentElement.className = 'ulx-seo-counter' + (tLen > 60 ? ' over' : '');
            descCount.parentElement.className = 'ulx-seo-counter' + (dLen > 160 ? ' over' : '');
            previewTitle.textContent = titleInput.value || defaultTitle;
            previewDesc.textContent = descInput.value || defaultDesc;
        }

        titleInput.addEventListener('input', update);
        descInput.addEventListener('input', update);
    })();
    </script>
    <?php
}

/**
 * Save SEO meta data
 */
function ulx_seo_save_meta($post_id) {
    if (!isset($_POST['_ulx_seo_nonce']) || !wp_verify_nonce($_POST['_ulx_seo_nonce'], 'ulx_seo_save')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (isset($_POST['ulx_seo_title'])) {
        update_post_meta($post_id, '_ulx_seo_title', sanitize_text_field($_POST['ulx_seo_title']));
    }
    if (isset($_POST['ulx_seo_description'])) {
        update_post_meta($post_id, '_ulx_seo_description', sanitize_textarea_field($_POST['ulx_seo_description']));
    }
}
add_action('save_post', 'ulx_seo_save_meta');

/* =========================================================================
   2. FRONTEND OUTPUT — <title> and <meta description>
   ========================================================================= */

/**
 * Override document title with SEO title if set
 */
function ulx_seo_document_title($title) {
    if (is_singular()) {
        $seo_title = get_post_meta(get_the_ID(), '_ulx_seo_title', true);
        if ($seo_title) {
            return esc_html($seo_title);
        }
    }
    return $title;
}
add_filter('pre_get_document_title', 'ulx_seo_document_title', 20);

/**
 * Output meta description in <head>
 */
function ulx_seo_meta_description() {
    $desc = '';

    if (is_singular()) {
        $desc = get_post_meta(get_the_ID(), '_ulx_seo_description', true);
        if (!$desc) {
            $post = get_post();
            if ($post) {
                $desc = wp_trim_words(wp_strip_all_tags($post->post_content), 25, '...');
            }
        }
    } elseif (is_home() || is_front_page()) {
        $desc = get_bloginfo('description');
    }

    if ($desc) {
        echo '<meta name="description" content="' . esc_attr($desc) . '">' . "\n";
    }
}
add_action('wp_head', 'ulx_seo_meta_description', 1);

/**
 * Output Open Graph basic tags
 */
function ulx_seo_og_tags() {
    if (!is_singular()) {
        return;
    }

    $post      = get_post();
    $seo_title = get_post_meta($post->ID, '_ulx_seo_title', true) ?: get_the_title();
    $seo_desc  = get_post_meta($post->ID, '_ulx_seo_description', true)
                 ?: wp_trim_words(wp_strip_all_tags($post->post_content), 25, '...');
    $image     = get_the_post_thumbnail_url($post->ID, 'large') ?: '';

    echo '<meta property="og:type" content="website">' . "\n";
    echo '<meta property="og:title" content="' . esc_attr($seo_title) . '">' . "\n";
    echo '<meta property="og:description" content="' . esc_attr($seo_desc) . '">' . "\n";
    echo '<meta property="og:url" content="' . esc_url(get_permalink()) . '">' . "\n";
    if ($image) {
        echo '<meta property="og:image" content="' . esc_url($image) . '">' . "\n";
    }
}
add_action('wp_head', 'ulx_seo_og_tags', 2);

/* =========================================================================
   3. XML SITEMAP
   ========================================================================= */

/**
 * Register sitemap rewrite rules
 */
function ulx_seo_sitemap_rewrite() {
    add_rewrite_rule('sitemap\.xml$', 'index.php?ulx_sitemap=1', 'top');
}
add_action('init', 'ulx_seo_sitemap_rewrite');

/**
 * Register query var
 */
function ulx_seo_sitemap_query_var($vars) {
    $vars[] = 'ulx_sitemap';
    return $vars;
}
add_filter('query_vars', 'ulx_seo_sitemap_query_var');

/**
 * Intercept request and output sitemap XML
 */
function ulx_seo_sitemap_template() {
    if (!get_query_var('ulx_sitemap')) {
        return;
    }

    header('Content-Type: application/xml; charset=UTF-8');
    header('X-Robots-Tag: noindex');

    echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

    // Home page
    echo ulx_seo_sitemap_url(home_url('/'), '1.0', 'weekly');

    // Published pages (exclude thank-you, privacy, terms if desired)
    $pages = get_posts([
        'post_type'      => 'page',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
        'orderby'        => 'menu_order',
        'order'          => 'ASC',
    ]);

    foreach ($pages as $page) {
        if (intval($page->ID) === intval(get_option('page_on_front'))) {
            continue; // already added as home
        }
        $priority = '0.8';
        echo ulx_seo_sitemap_url(get_permalink($page), $priority, 'monthly', $page->post_modified);
    }

    // Published posts (blog)
    $posts = get_posts([
        'post_type'      => 'post',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
        'orderby'        => 'date',
        'order'          => 'DESC',
    ]);

    foreach ($posts as $post) {
        echo ulx_seo_sitemap_url(get_permalink($post), '0.6', 'monthly', $post->post_modified);
    }

    echo '</urlset>';
    exit;
}
add_action('template_redirect', 'ulx_seo_sitemap_template');

/**
 * Build a single <url> entry
 */
function ulx_seo_sitemap_url($loc, $priority = '0.5', $changefreq = 'monthly', $lastmod = '') {
    $xml  = "  <url>\n";
    $xml .= "    <loc>" . esc_url($loc) . "</loc>\n";
    if ($lastmod) {
        $xml .= "    <lastmod>" . mysql2date('Y-m-d', $lastmod) . "</lastmod>\n";
    }
    $xml .= "    <changefreq>" . esc_html($changefreq) . "</changefreq>\n";
    $xml .= "    <priority>" . esc_html($priority) . "</priority>\n";
    $xml .= "  </url>\n";
    return $xml;
}

/**
 * Add sitemap URL to robots.txt
 */
function ulx_seo_robots_sitemap($output, $public) {
    if ($public) {
        $output .= "\nSitemap: " . home_url('/sitemap.xml') . "\n";
    }
    return $output;
}
add_filter('robots_txt', 'ulx_seo_robots_sitemap', 10, 2);

/**
 * Disable WordPress default sitemaps (wp-sitemap.xml) to avoid conflict
 */
add_filter('wp_sitemaps_enabled', '__return_false');

/* =========================================================================
   4. RETIRED PAGE REDIRECTS
   ========================================================================= */

/**
 * 301 redirect retired URLs (still indexed by search engines) to their replacement
 */
function ulx_seo_retired_redirects() {
    $path = trim((string) wp_parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

    $redirects = [
        'industry/cnc-aerospace-parts' => '/industry/',
    ];

    if (isset($redirects[$path])) {
        wp_safe_redirect(home_url($redirects[$path]), 301);
        exit;
    }
}
add_action('template_redirect', 'ulx_seo_retired_redirects', 1);
