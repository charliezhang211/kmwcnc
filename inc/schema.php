<?php
/**
 * JSON-LD Structured Data
 *
 * Outputs schema.org markup for Organization, Product, and BreadcrumbList.
 * Helps search engines understand the site content and show rich results.
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

/**
 * Output JSON-LD schema in <head>
 */
function ulx_output_schema() {
    $schemas = [];

    // Organization — output on every page
    $schemas[] = ulx_schema_organization();

    // BreadcrumbList — on inner pages (not home)
    if (!is_front_page()) {
        $breadcrumb = ulx_schema_breadcrumb();
        if ($breadcrumb) {
            $schemas[] = $breadcrumb;
        }
    }

    // Product — on single WooCommerce product pages
    if (is_singular('product')) {
        global $product;
        if (!$product instanceof WC_Product) {
            $product = wc_get_product(get_the_ID());
        }
        if ($product) {
            $schemas[] = ulx_schema_product($product);
        }
    }

    foreach ($schemas as $schema) {
        echo '<script type="application/ld+json">' . "\n";
        echo wp_json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        echo "\n" . '</script>' . "\n";
    }
}
add_action('wp_head', 'ulx_output_schema', 5);

/**
 * Organization schema — KMW CNC company information
 */
function ulx_schema_organization() {
    return [
        '@context'    => 'https://schema.org',
        '@type'       => 'Organization',
        '@id'         => home_url('/#organization'),
        'name'        => 'KMW CNC',
        'legalName'   => 'Shenzhen Kaimingwei Technology Co., Limited',
        'url'         => home_url('/'),
        'logo'        => [
            '@type' => 'ImageObject',
            'url'   => has_custom_logo()
                ? wp_get_attachment_image_url(get_theme_mod('custom_logo'), 'full')
                : '',
        ],
        'description' => esc_html__('ISO 9001 certified precision CNC machining manufacturer in Shenzhen, China. Rapid prototyping and low-volume production with tolerances down to ±0.005mm, serving customers in 30+ countries.', 'ulx'),
        'foundingDate' => '2014-04',
        'email'       => ulx_contact('email'),
        'address'     => [
            '@type'           => 'PostalAddress',
            'streetAddress'   => 'Building B, Jinhao Entrepreneurship Park, Dafu Industrial Zone, Guanlan',
            'addressLocality' => 'Longhua District, Shenzhen',
            'addressRegion'   => 'Guangdong',
            'addressCountry'  => 'CN',
        ],
        'contactPoint' => [
            [
                '@type'             => 'ContactPoint',
                'telephone'         => ulx_contact('phone'),
                'email'             => ulx_contact('email'),
                'contactType'       => 'sales',
                'areaServed'        => 'Worldwide',
                'availableLanguage' => ['English', 'Chinese'],
            ],
        ],
        'sameAs' => [],
    ];
}

/**
 * BreadcrumbList schema
 */
function ulx_schema_breadcrumb() {
    $items    = [];
    $position = 1;

    // Home
    $items[] = [
        '@type'    => 'ListItem',
        'position' => $position++,
        'name'     => esc_html__('Home', 'ulx'),
        'item'     => home_url('/'),
    ];

    // Single page/post
    if (is_singular() && !is_front_page()) {
        $items[] = [
            '@type'    => 'ListItem',
            'position' => $position++,
            'name'     => get_the_title(),
            'item'     => get_permalink(),
        ];
    }

    if (count($items) < 2) {
        return null;
    }

    return [
        '@context'        => 'https://schema.org',
        '@type'           => 'BreadcrumbList',
        'itemListElement' => $items,
    ];
}

/**
 * Product schema for WooCommerce single product
 */
function ulx_schema_product(WC_Product $product) {
    $schema = [
        '@context'    => 'https://schema.org',
        '@type'       => 'Product',
        'name'        => get_the_title(),
        'url'         => get_permalink(),
        'description' => wp_strip_all_tags($product->get_short_description() ?: $product->get_description()),
        'sku'         => $product->get_sku() ?: '',
        'brand'       => [
            '@type' => 'Brand',
            'name'  => 'KMW CNC',
        ],
        'manufacturer' => [
            '@type' => 'Organization',
            '@id'   => home_url('/#organization'),
        ],
        'offers' => [
            '@type'           => 'Offer',
            'url'             => get_permalink(),
            'priceCurrency'   => get_woocommerce_currency(),
            'price'           => '0',
            'priceValidUntil' => date('Y-12-31', strtotime('+1 year')),
            'availability'    => $product->is_in_stock()
                ? 'https://schema.org/InStock'
                : 'https://schema.org/OutOfStock',
            'seller'          => [
                '@type' => 'Organization',
                '@id'   => home_url('/#organization'),
            ],
        ],
    ];

    // Product image
    $image_id = $product->get_image_id();
    if ($image_id) {
        $image_url = wp_get_attachment_image_url($image_id, 'full');
        if ($image_url) {
            $schema['image'] = $image_url;
        }
    }

    // Product category
    $terms = get_the_terms($product->get_id(), 'product_cat');
    if ($terms && !is_wp_error($terms)) {
        $schema['category'] = esc_html($terms[0]->name);
    }

    // Product attributes as additionalProperty
    $attributes = $product->get_attributes();
    if ($attributes) {
        $additional = [];
        foreach ($attributes as $attr) {
            if (!$attr->get_visible()) {
                continue;
            }
            $name   = wc_attribute_label($attr->get_name());
            $values = $attr->is_taxonomy()
                ? wc_get_product_terms($product->get_id(), $attr->get_name(), ['fields' => 'names'])
                : $attr->get_options();

            if ($values) {
                $additional[] = [
                    '@type'       => 'PropertyValue',
                    'name'        => esc_html($name),
                    'value'       => esc_html(implode(', ', $values)),
                ];
            }
        }
        if ($additional) {
            $schema['additionalProperty'] = $additional;
        }
    }

    return $schema;
}
