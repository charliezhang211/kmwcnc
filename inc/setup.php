<?php
/**
 * Theme Setup
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function ulx_setup() {
    // Make theme available for translation
    load_theme_textdomain('ulx', ULX_DIR . '/languages');

    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails
    add_theme_support('post-thumbnails');

    // Custom image sizes
    add_image_size('ulx-hero', 1920, 800, true);
    add_image_size('ulx-blog-card', 640, 400, true);
    add_image_size('ulx-blog-featured', 1200, 600, true);

    // Register navigation menus
    register_nav_menus([
        'primary'   => esc_html__('Primary Menu', 'ulx'),
        'footer'    => esc_html__('Footer Menu', 'ulx'),
        'mobile'    => esc_html__('Mobile Menu', 'ulx'),
    ]);

    // HTML5 markup support
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ]);

    // Custom logo support
    add_theme_support('custom-logo', [
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ]);

    // Add support for responsive embeds
    add_theme_support('responsive-embeds');

    // Add support for wide alignment (Gutenberg)
    add_theme_support('align-wide');

    // WebP image generation (WordPress 6.1+)
    add_theme_support('webp-uploads');

    // Disable core block patterns (we use our own)
    remove_theme_support('core-block-patterns');
}
add_action('after_setup_theme', 'ulx_setup');

/**
 * Allow WebP uploads in media library
 */
function ulx_allow_webp_upload($mimes) {
    $mimes['webp'] = 'image/webp';
    return $mimes;
}
add_filter('upload_mimes', 'ulx_allow_webp_upload');

/**
 * Register widget areas.
 */
function ulx_widgets_init() {
    register_sidebar([
        'name'          => esc_html__('Blog Sidebar', 'ulx'),
        'id'            => 'sidebar-blog',
        'description'   => esc_html__('Sidebar for blog pages.', 'ulx'),
        'before_widget' => '<div id="%1$s" class="widget %2$s mb-6">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title text-sm font-semibold uppercase tracking-wider text-muted mb-3">',
        'after_title'   => '</h3>',
    ]);

    register_sidebar([
        'name'          => esc_html__('Footer Column 1', 'ulx'),
        'id'            => 'footer-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title text-sm font-semibold uppercase tracking-wider mb-4">',
        'after_title'   => '</h4>',
    ]);

    register_sidebar([
        'name'          => esc_html__('Footer Column 2', 'ulx'),
        'id'            => 'footer-2',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title text-sm font-semibold uppercase tracking-wider mb-4">',
        'after_title'   => '</h4>',
    ]);

    register_sidebar([
        'name'          => esc_html__('Footer Column 3', 'ulx'),
        'id'            => 'footer-3',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title text-sm font-semibold uppercase tracking-wider mb-4">',
        'after_title'   => '</h4>',
    ]);
}
add_action('widgets_init', 'ulx_widgets_init');

/**
 * Performance: Remove unnecessary head items
 */
function ulx_cleanup_head() {
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wp_shortlink_wp_head');
    remove_action('wp_head', 'rest_output_link_wp_head');
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('admin_print_styles', 'print_emoji_styles');
}
add_action('after_setup_theme', 'ulx_cleanup_head');

/**
 * Remove WordPress block library CSS if not using Gutenberg on frontend
 */
function ulx_dequeue_block_styles() {
    if (!is_admin()) {
        wp_dequeue_style('wp-block-library');
        wp_dequeue_style('wp-block-library-theme');
        wp_dequeue_style('global-styles');
    }
}
add_action('wp_enqueue_scripts', 'ulx_dequeue_block_styles', 100);

/**
 * Disable XML-RPC
 */
add_filter('xmlrpc_enabled', '__return_false');

/**
 * Limit post revisions
 */
if (!defined('WP_POST_REVISIONS')) {
    define('WP_POST_REVISIONS', 5);
}

/**
 * Auto-create all theme pages on first activation.
 * Delegates to page-builder.php which scans page-templates/ dynamically.
 */
function ulx_auto_create_pages_on_activation() {
    if (get_option('ulx_pages_created_v2')) return;

    foreach (ulx_scan_page_templates() as $tpl) {
        ulx_create_page_from_template($tpl);
    }

    flush_rewrite_rules();
    update_option('ulx_pages_created_v2', true);
}
add_action('after_switch_theme', 'ulx_auto_create_pages_on_activation');
