<?php
/**
 * WooCommerce Setup
 *
 * Theme support and configuration for WooCommerce.
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

/**
 * Declare WooCommerce support
 */
function ulx_woo_setup() {
    add_theme_support('woocommerce', [
        'thumbnail_image_width' => 600,
        'single_image_width'    => 800,
        'product_grid'          => [
            'default_rows'    => 4,
            'min_rows'        => 1,
            'default_columns' => 4,
            'min_columns'     => 2,
            'max_columns'     => 4,
        ],
    ]);

    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}
add_action('after_setup_theme', 'ulx_woo_setup');

/**
 * Override shop columns from customizer
 */
function ulx_woo_loop_columns() {
    return absint(get_theme_mod('ulx_shop_columns', 4));
}
add_filter('loop_shop_columns', 'ulx_woo_loop_columns');

/**
 * Products per page
 */
function ulx_woo_products_per_page() {
    $columns = ulx_woo_loop_columns();
    return $columns * 4; // 4 rows
}
add_filter('loop_shop_per_page', 'ulx_woo_products_per_page');

/**
 * Remove default WooCommerce wrapper
 */
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

function ulx_woo_wrapper_start() {
    echo '<main id="primary" class="py-8 lg:py-12">';
    echo '<div class="' . esc_attr(ulx_container()) . '">';
}
add_action('woocommerce_before_main_content', 'ulx_woo_wrapper_start', 10);

function ulx_woo_wrapper_end() {
    echo '</div>';
    echo '</main>';
}
add_action('woocommerce_after_main_content', 'ulx_woo_wrapper_end', 10);

/**
 * Remove default WooCommerce sidebar
 */
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

/**
 * Disable default WooCommerce styles completely
 */
add_filter('woocommerce_enqueue_styles', '__return_empty_array');

// ═══════════════════════════════════════════
// Custom URL Structure
//
//   Shop (all products): /products/
//   Category archive:    /{cat-slug}/
//   Product detail:      /{cat-slug}/{product-slug}/
//
//   Breadcrumb: Home > Products > {Category} > {Product}
//   (Products layer shown in breadcrumb, absent from URL)
// ═══════════════════════════════════════════

/**
 * Force WooCommerce permalink options.
 *   product_base  = /%product_cat% → WooCommerce generates /cat/product/ natively
 *   category_base = products       → WC internal registration; overridden below by term_link
 */
function ulx_woo_permalink_options( $value ) {
    if ( ! is_array( $value ) ) {
        $value = [];
    }
    $value['product_base']   = '/%product_cat%'; // /cnc-milling-parts/part-name/
    $value['category_base']  = 'products';        // WC uses this for its own rewrite; we override with term_link
    $value['tag_base']       = $value['tag_base']       ?? 'product-tag';
    $value['attribute_base'] = $value['attribute_base'] ?? '';
    return $value;
}
add_filter( 'option_woocommerce_permalinks',         'ulx_woo_permalink_options' );
add_filter( 'default_option_woocommerce_permalinks', 'ulx_woo_permalink_options' );

/**
 * Override displayed category URL to short form: /{cat-slug}/
 * WooCommerce internally still registers /products/{cat}/ rewrites,
 * but all links, breadcrumbs, and sitemaps use this short URL.
 */
add_filter( 'term_link', function( $url, $term, $taxonomy ) {
    if ( $taxonomy !== 'product_cat' ) return $url;
    // Handle parent > child hierarchy
    $slug = $term->slug;
    if ( $term->parent ) {
        $parent = get_term( $term->parent, 'product_cat' );
        if ( $parent && ! is_wp_error( $parent ) ) {
            return home_url( '/' . $parent->slug . '/' . $slug . '/' );
        }
    }
    return home_url( '/' . $slug . '/' );
}, 10, 3 );

/**
 * Add top-priority rewrite rules so /{cat}/ and /{cat}/{product}/ resolve correctly.
 * These run BEFORE WordPress's page/post rules.
 * The request filter below validates and falls through to pages when slug isn't a real category.
 */
add_action( 'init', function() {
    // Category pagination: /cnc-milling-parts/page/2/
    add_rewrite_rule(
        '^([^/]+)/page/([0-9]{1,})/?$',
        'index.php?product_cat=$matches[1]&paged=$matches[2]',
        'top'
    );
    // Product detail: /cnc-milling-parts/part-name/
    add_rewrite_rule(
        '^([^/]+)/([^/]+)/?$',
        'index.php?product_cat=$matches[1]&name=$matches[2]&post_type=product',
        'top'
    );
    // Category archive: /cnc-milling-parts/
    add_rewrite_rule(
        '^([^/]+)/?$',
        'index.php?product_cat=$matches[1]',
        'top'
    );
}, 5 );

/**
 * Validate rewrite matches against actual product_cat terms.
 * If the slug is NOT a real product category, fall through to WordPress
 * page/post resolution so regular pages (/about/, /contact/) still work.
 */
add_filter( 'request', function( $vars ) {
    // Single-segment /{slug}/ — validate as product_cat or fall through
    if ( ! empty( $vars['product_cat'] ) && empty( $vars['name'] ) && empty( $vars['paged'] ) ) {
        $slug = sanitize_title( $vars['product_cat'] );
        $term = get_term_by( 'slug', $slug, 'product_cat' );
        if ( ! $term || is_wp_error( $term ) ) {
            unset( $vars['product_cat'] );
            // Check if it's a page
            $page = get_page_by_path( $slug );
            if ( $page ) {
                $vars['pagename'] = $slug;
            } else {
                // Hand off to WordPress: set 'name' so WP resolves post/CPT normally
                $vars['name'] = $slug;
            }
        }
    }
    // Paginated /{slug}/page/N/ — validate category
    if ( ! empty( $vars['product_cat'] ) && ! empty( $vars['paged'] ) ) {
        $slug = sanitize_title( $vars['product_cat'] );
        $term = get_term_by( 'slug', $slug, 'product_cat' );
        if ( ! $term || is_wp_error( $term ) ) {
            unset( $vars['product_cat'] );
            unset( $vars['paged'] );
        }
    }
    // Two-segment /{cat}/{product}/ — validate both
    if ( ! empty( $vars['product_cat'] ) && ! empty( $vars['name'] ) ) {
        $cat_slug  = sanitize_title( $vars['product_cat'] );
        $prod_slug = sanitize_title( $vars['name'] );
        $term = get_term_by( 'slug', $cat_slug, 'product_cat' );
        $post = $term ? get_page_by_path( $prod_slug, OBJECT, 'product' ) : null;
        if ( ! $term || ! $post ) {
            unset( $vars['product_cat'] );
            unset( $vars['name'] );
            unset( $vars['post_type'] );
            // Check if it's a parent/child page path
            $page = get_page_by_path( $cat_slug . '/' . $prod_slug );
            if ( $page ) {
                $vars['pagename'] = $cat_slug . '/' . $prod_slug;
            } else {
                // Let WordPress resolve by slug (could be a blog post)
                $vars['name'] = $prod_slug;
            }
        }
    }
    return $vars;
}, 5 );

/**
 * Auto-flush rewrite rules once after theme switch or when the
 * custom permalink option has never been persisted.
 */
function ulx_maybe_flush_rewrite_rules() {
    if ( get_option( 'ulx_rewrite_flushed_v1' ) ) {
        return;
    }
    flush_rewrite_rules( false );
    update_option( 'ulx_rewrite_flushed_v1', true );
}
add_action( 'init', 'ulx_maybe_flush_rewrite_rules', 99 );

/**
 * Admin notice: remind to flush rules if needed.
 * Shown once after theme activation.
 */
function ulx_permalink_admin_notice() {
    if ( ! current_user_can( 'manage_options' ) ) return;
    if ( get_option( 'ulx_permalink_notice_dismissed' ) ) return;

    $flush_url = add_query_arg( 'ulx_flush_rules', '1', admin_url( 'options-permalink.php' ) );
    ?>
    <div class="notice notice-info is-dismissible" id="ulx-permalink-notice">
        <p>
            <strong><?php esc_html_e( 'ULX Theme:', 'ulx' ); ?></strong>
            <?php esc_html_e( 'Custom product URL structure is active (/products/{cat}/{product}/). If you see 404 errors, please', 'ulx' ); ?>
            <a href="<?php echo esc_url( $flush_url ); ?>"><?php esc_html_e( 'save your permalink settings', 'ulx' ); ?></a>.
        </p>
    </div>
    <?php
}
add_action( 'admin_notices', 'ulx_permalink_admin_notice' );

/**
 * Dismiss the notice + flush rules when admin saves Permalinks page.
 */
function ulx_handle_flush_request() {
    if ( ! is_admin() || ! current_user_can( 'manage_options' ) ) return;
    if ( empty( $_GET['ulx_flush_rules'] ) ) return;

    delete_option( 'ulx_rewrite_flushed_v1' ); // force re-flush
    flush_rewrite_rules( false );
    update_option( 'ulx_rewrite_flushed_v1', true );
    update_option( 'ulx_permalink_notice_dismissed', true );

    wp_safe_redirect( add_query_arg( 'settings-updated', 'true', admin_url( 'options-permalink.php' ) ) );
    exit;
}
add_action( 'admin_init', 'ulx_handle_flush_request' );

// Force a one-time re-flush after code changes (bump the version suffix to re-trigger)
if ( ! get_option( 'ulx_rewrite_flushed_v2' ) ) {
    delete_option( 'ulx_rewrite_flushed_v1' );
    update_option( 'ulx_rewrite_flushed_v2', true );
}

// ═══════════════════════════════════════════
// Auto-create "Products" shop page
// ═══════════════════════════════════════════

/**
 * Create a "Products" page (slug: products) and assign it as the
 * WooCommerce shop page. Runs once on init so it fires after WooCommerce
 * has finished setting up.
 *
 * URL result: /products/ → full product catalog
 */
function ulx_ensure_shop_page() {
    // Only run once
    if ( get_option( 'ulx_shop_page_created' ) ) {
        return;
    }

    $existing = get_page_by_path( 'products' );

    if ( ! $existing ) {
        $page_id = wp_insert_post( [
            'post_title'   => __( 'Products', 'ulx' ),
            'post_name'    => 'products',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_content' => '',
        ] );
    } else {
        $page_id = $existing->ID;
    }

    if ( $page_id && ! is_wp_error( $page_id ) ) {
        // Set as WooCommerce shop page
        update_option( 'woocommerce_shop_page_id', $page_id );
        update_option( 'ulx_shop_page_created', true );
        // Force rewrite flush on next request
        delete_option( 'ulx_rewrite_flushed_v1' );
    }
}
add_action( 'init', 'ulx_ensure_shop_page', 20 );

// ═══════════════════════════════════════════
// B2B: Remove unnecessary metaboxes from product editor
// ═══════════════════════════════════════════

function ulx_remove_product_metaboxes() {
    // Product Data (pricing, inventory, shipping tabs — not needed for B2B)
    remove_meta_box( 'woocommerce-product-data', 'product', 'normal' );
    // Reviews / Comments
    remove_meta_box( 'commentsdiv', 'product', 'normal' );
    // Brands taxonomy
    remove_meta_box( 'tagsdiv-product_brand', 'product', 'side' );
    remove_meta_box( 'product_branddiv', 'product', 'side' );
}
add_action( 'add_meta_boxes', 'ulx_remove_product_metaboxes', 99 );

// ═══════════════════════════════════════════
// B2B: Simplify product sorting options
// ═══════════════════════════════════════════

function ulx_simplify_catalog_orderby( $options ) {
    return [
        'menu_order' => $options['menu_order'] ?? __( 'Default sorting', 'woocommerce' ),
        'popularity' => $options['popularity'] ?? __( 'Sort by popularity', 'woocommerce' ),
        'date'       => $options['date']       ?? __( 'Sort by latest', 'woocommerce' ),
    ];
}
add_filter( 'woocommerce_catalog_orderby', 'ulx_simplify_catalog_orderby' );
