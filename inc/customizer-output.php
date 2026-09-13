<?php
/**
 * Customizer CSS Output
 *
 * Generates and outputs CSS custom properties based on Customizer settings.
 * Tailwind v4 uses native hex/hsl colors, no more RGB triplet hack needed.
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

/**
 * Get button radius value from setting
 */
function ulx_get_btn_radius_value() {
    $setting = get_theme_mod('ulx_btn_radius', 'small');
    $map = [
        'none'   => '0px',
        'small'  => '4px',
        'medium' => '8px',
        'full'   => '9999px',
    ];
    return $map[$setting] ?? '4px';
}

/**
 * Output CSS custom properties to <head>
 */
function ulx_output_customizer_css() {
    // Colors (native hex — Tailwind v4 handles opacity natively)
    $primary   = get_theme_mod('ulx_color_primary', '#141E32');
    $accent    = get_theme_mod('ulx_color_accent', '#EF8D21');
    $surface   = get_theme_mod('ulx_color_surface', '#ebedf0');
    $card      = get_theme_mod('ulx_color_card', '#f8f9fa');
    $text      = get_theme_mod('ulx_color_text', '#1a1a1a');
    $muted     = get_theme_mod('ulx_color_muted', '#6b7280');
    $border    = get_theme_mod('ulx_color_border', '#d1d5db');

    // Buttons
    $btn_radius = ulx_get_btn_radius_value();

    // Layout
    $container_width = get_theme_mod('ulx_container_width', '1280') . 'px';

    ?>
<style id="ulx-custom-properties">
:root {
    --color-primary: <?php echo esc_attr($primary); ?>;
    --color-accent: <?php echo esc_attr($accent); ?>;
    --color-surface: <?php echo esc_attr($surface); ?>;
    --color-card: <?php echo esc_attr($card); ?>;
    --color-text: <?php echo esc_attr($text); ?>;
    --color-muted: <?php echo esc_attr($muted); ?>;
    --color-border: <?php echo esc_attr($border); ?>;

    --font-heading: 'Barlow', system-ui, -apple-system, 'Segoe UI', sans-serif;
    --font-body: 'Inter', system-ui, -apple-system, 'Segoe UI', sans-serif;

    --btn-radius: <?php echo esc_attr($btn_radius); ?>;
    --container-width: <?php echo esc_attr($container_width); ?>;
}
</style>
    <?php
}
add_action('wp_head', 'ulx_output_customizer_css', 5);
