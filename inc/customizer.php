<?php
/**
 * Theme Customizer Settings
 *
 * Registers customizer panels, sections, settings, and controls
 * for theme skin configuration (colors, fonts, buttons).
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

/**
 * Register Customizer settings
 */
function ulx_customize_register($wp_customize) {

    // ═══════════════════════════════════════════
    // Panel: Theme Skin
    // ═══════════════════════════════════════════
    $wp_customize->add_panel('ulx_skin', [
        'title'    => __('Theme Skin', 'ulx'),
        'priority' => 30,
    ]);

    // ───────────────────────────────────────────
    // Section: Colors
    // ───────────────────────────────────────────
    $wp_customize->add_section('ulx_colors', [
        'title' => __('Brand Colors', 'ulx'),
        'panel' => 'ulx_skin',
    ]);

    $color_settings = [
        'ulx_color_primary' => [
            'label'   => __('Primary Color', 'ulx'),
            'default' => '#1e3424',
            'desc'    => __('Main brand color. Used for header, buttons, links.', 'ulx'),
        ],
        'ulx_color_secondary' => [
            'label'   => __('Secondary Color', 'ulx'),
            'default' => '#142130',
            'desc'    => __('Supporting dark color. Used for footer and secondary elements.', 'ulx'),
        ],
        'ulx_color_accent' => [
            'label'   => __('Accent Color', 'ulx'),
            'default' => '#d97706',
            'desc'    => __('CTA color. Used for quote buttons and highlights.', 'ulx'),
        ],
        'ulx_color_surface' => [
            'label'   => __('Surface / Background', 'ulx'),
            'default' => '#f8f7f4',
            'desc'    => __('Main background color.', 'ulx'),
        ],
        'ulx_color_text' => [
            'label'   => __('Text Color', 'ulx'),
            'default' => '#1a1a1a',
            'desc'    => __('Primary text color.', 'ulx'),
        ],
        'ulx_color_muted' => [
            'label'   => __('Muted Text', 'ulx'),
            'default' => '#6b7280',
            'desc'    => __('Secondary/muted text color.', 'ulx'),
        ],
        'ulx_color_border' => [
            'label'   => __('Border Color', 'ulx'),
            'default' => '#d1d5db',
            'desc'    => __('Default border color.', 'ulx'),
        ],
    ];

    foreach ($color_settings as $id => $args) {
        $wp_customize->add_setting($id, [
            'default'           => $args['default'],
            'sanitize_callback' => 'sanitize_hex_color',
            'transport'         => 'postMessage',
        ]);

        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, $id, [
            'label'       => $args['label'],
            'description' => $args['desc'],
            'section'     => 'ulx_colors',
        ]));
    }

    // ───────────────────────────────────────────
    // Section: Typography
    // ───────────────────────────────────────────
    $wp_customize->add_section('ulx_typography', [
        'title' => __('Typography', 'ulx'),
        'panel' => 'ulx_skin',
    ]);

    // Font Family Preset
    $wp_customize->add_setting('ulx_font_family', [
        'default'           => 'dm-sans',
        'sanitize_callback' => 'ulx_sanitize_font_choice',
    ]);

    $wp_customize->add_control('ulx_font_family', [
        'label'   => __('Font Family', 'ulx'),
        'section' => 'ulx_typography',
        'type'    => 'select',
        'choices' => [
            'system'        => __('System Default (fastest)', 'ulx'),
            'inter'         => 'Inter',
            'dm-sans'       => 'DM Sans',
            'outfit'        => 'Outfit',
            'space-grotesk' => 'Space Grotesk',
        ],
    ]);

    // Base Font Size
    $wp_customize->add_setting('ulx_font_size_base', [
        'default'           => '16',
        'sanitize_callback' => 'absint',
        'transport'         => 'postMessage',
    ]);

    $wp_customize->add_control('ulx_font_size_base', [
        'label'       => __('Base Font Size (px)', 'ulx'),
        'section'     => 'ulx_typography',
        'type'        => 'number',
        'input_attrs' => [
            'min'  => 14,
            'max'  => 20,
            'step' => 1,
        ],
    ]);

    // Heading Font Weight
    $wp_customize->add_setting('ulx_heading_weight', [
        'default'           => '700',
        'sanitize_callback' => 'ulx_sanitize_font_weight',
        'transport'         => 'postMessage',
    ]);

    $wp_customize->add_control('ulx_heading_weight', [
        'label'   => __('Heading Font Weight', 'ulx'),
        'section' => 'ulx_typography',
        'type'    => 'select',
        'choices' => [
            '400' => __('Regular (400)', 'ulx'),
            '600' => __('Semi Bold (600)', 'ulx'),
            '700' => __('Bold (700)', 'ulx'),
        ],
    ]);

    // ───────────────────────────────────────────
    // Section: Buttons
    // ───────────────────────────────────────────
    $wp_customize->add_section('ulx_buttons', [
        'title' => __('Buttons', 'ulx'),
        'panel' => 'ulx_skin',
    ]);

    // Button Border Radius
    $wp_customize->add_setting('ulx_btn_radius', [
        'default'           => 'none',
        'sanitize_callback' => 'ulx_sanitize_btn_radius',
        'transport'         => 'postMessage',
    ]);

    $wp_customize->add_control('ulx_btn_radius', [
        'label'   => __('Button Corner Style', 'ulx'),
        'section' => 'ulx_buttons',
        'type'    => 'select',
        'choices' => [
            'none'   => __('Sharp (0px)', 'ulx'),
            'small'  => __('Slightly Rounded (4px)', 'ulx'),
            'medium' => __('Rounded (8px)', 'ulx'),
            'full'   => __('Pill (9999px)', 'ulx'),
        ],
    ]);

    // Button Text Transform
    $wp_customize->add_setting('ulx_btn_transform', [
        'default'           => 'uppercase',
        'sanitize_callback' => 'ulx_sanitize_btn_transform',
        'transport'         => 'postMessage',
    ]);

    $wp_customize->add_control('ulx_btn_transform', [
        'label'   => __('Button Text Style', 'ulx'),
        'section' => 'ulx_buttons',
        'type'    => 'select',
        'choices' => [
            'none'       => __('Normal', 'ulx'),
            'uppercase'  => __('UPPERCASE', 'ulx'),
        ],
    ]);

    // Button Font Weight
    $wp_customize->add_setting('ulx_btn_weight', [
        'default'           => '600',
        'sanitize_callback' => 'ulx_sanitize_font_weight',
        'transport'         => 'postMessage',
    ]);

    $wp_customize->add_control('ulx_btn_weight', [
        'label'   => __('Button Font Weight', 'ulx'),
        'section' => 'ulx_buttons',
        'type'    => 'select',
        'choices' => [
            '400' => __('Regular', 'ulx'),
            '600' => __('Semi Bold', 'ulx'),
            '700' => __('Bold', 'ulx'),
        ],
    ]);

    // ───────────────────────────────────────────
    // Section: Layout
    // ───────────────────────────────────────────
    $wp_customize->add_section('ulx_layout', [
        'title' => __('Layout', 'ulx'),
        'panel' => 'ulx_skin',
    ]);

    // Container Max Width
    $wp_customize->add_setting('ulx_container_width', [
        'default'           => '1280',
        'sanitize_callback' => 'absint',
    ]);

    $wp_customize->add_control('ulx_container_width', [
        'label'       => __('Container Max Width (px)', 'ulx'),
        'section'     => 'ulx_layout',
        'type'        => 'number',
        'input_attrs' => [
            'min'  => 1024,
            'max'  => 1536,
            'step' => 16,
        ],
    ]);

    // Shop Columns
    $wp_customize->add_setting('ulx_shop_columns', [
        'default'           => '4',
        'sanitize_callback' => 'absint',
    ]);

    $wp_customize->add_control('ulx_shop_columns', [
        'label'   => __('Shop Grid Columns', 'ulx'),
        'section' => 'ulx_layout',
        'type'    => 'select',
        'choices' => [
            '3' => __('3 Columns', 'ulx'),
            '4' => __('4 Columns', 'ulx'),
        ],
    ]);

    // Header Style
    $wp_customize->add_setting('ulx_header_style', [
        'default'           => 'standard',
        'sanitize_callback' => 'ulx_sanitize_header_style',
    ]);

    $wp_customize->add_control('ulx_header_style', [
        'label'   => __('Header Style', 'ulx'),
        'section' => 'ulx_layout',
        'type'    => 'select',
        'choices' => [
            'standard'    => __('Standard', 'ulx'),
            'transparent' => __('Transparent (for hero)', 'ulx'),
            'centered'    => __('Centered Logo', 'ulx'),
        ],
    ]);
}
add_action('customize_register', 'ulx_customize_register');

// ═══════════════════════════════════════════
// Sanitize callbacks
// ═══════════════════════════════════════════

function ulx_sanitize_font_choice($input) {
    $valid = ['system', 'inter', 'dm-sans', 'outfit', 'space-grotesk'];
    return in_array($input, $valid) ? $input : 'inter';
}

function ulx_sanitize_font_weight($input) {
    $valid = ['400', '600', '700'];
    return in_array($input, $valid) ? $input : '600';
}

function ulx_sanitize_btn_radius($input) {
    $valid = ['none', 'small', 'medium', 'full'];
    return in_array($input, $valid) ? $input : 'none';
}

function ulx_sanitize_btn_transform($input) {
    $valid = ['none', 'uppercase'];
    return in_array($input, $valid) ? $input : 'uppercase';
}

function ulx_sanitize_header_style($input) {
    $valid = ['standard', 'transparent', 'centered'];
    return in_array($input, $valid) ? $input : 'standard';
}
