<?php
/**
 * WooCommerce Hooks
 *
 * Customize WooCommerce output via hooks instead of template overrides where possible.
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

// ═══════════════════════════════════════════
// Product Loop / Shop Page
// ═══════════════════════════════════════════

/**
 * Customize product card wrapper
 */
remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5);

function ulx_product_card_open() {
    echo '<div class="ulx-product-card group">';
    echo '<a href="' . esc_url(get_the_permalink()) . '" class="block">';
}
add_action('woocommerce_before_shop_loop_item', 'ulx_product_card_open', 10);

function ulx_product_card_close() {
    echo '</a>';
    echo '</div>';
}
add_action('woocommerce_after_shop_loop_item', 'ulx_product_card_close', 10);

/**
 * Customize product thumbnail wrapper
 */
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);

function ulx_product_thumbnail() {
    echo '<div class="aspect-square overflow-hidden bg-neutral-100 mb-4">';
    echo '<img src="' . esc_url(get_the_post_thumbnail_url(get_the_ID(), 'ulx-product-card')) . '" ';
    echo 'alt="' . esc_attr(get_the_title()) . '" ';
    echo 'class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" ';
    echo 'loading="lazy" />';
    echo '</div>';
}
add_action('woocommerce_before_shop_loop_item_title', 'ulx_product_thumbnail', 10);

/**
 * Customize product title in loop
 */
remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);

function ulx_product_title() {
    echo '<h3 class="text-sm font-medium text-text group-hover:text-primary transition-colors line-clamp-2">' . get_the_title() . '</h3>';
}
add_action('woocommerce_shop_loop_item_title', 'ulx_product_title', 10);

/**
 * Remove price display in loop (B2B: price on request via woo-b2b.php filter)
 */
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);

/**
 * Remove default rating from loop (add back if needed)
 */
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);

/**
 * Remove default add-to-cart button from loop, add inquiry button.
 */
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);

function ulx_loop_inquiry_button() {
    global $product;
    echo '<a href="' . esc_url(get_permalink($product->get_id())) . '" class="btn-accent btn-sm mt-3 w-full justify-center">'
        . esc_html__('View Details', 'ulx')
        . '</a>';
}
add_action('woocommerce_after_shop_loop_item', 'ulx_loop_inquiry_button', 10);

// ═══════════════════════════════════════════
// Single Product
// ═══════════════════════════════════════════

/**
 * Customize sale badge
 */
remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_sale_flash', 10);

function ulx_sale_badge() {
    global $product;
    if ($product->is_on_sale()) {
        echo '<span class="absolute top-3 left-3 z-10 bg-accent text-white text-xs font-semibold px-2 py-1 rounded-[var(--btn-radius)]">' . esc_html__('Sale', 'ulx') . '</span>';
    }
}
add_action('woocommerce_before_shop_loop_item_title', 'ulx_sale_badge', 9);
add_action('woocommerce_before_single_product_summary', 'ulx_sale_badge', 9);

// Cart fragments disabled — B2B site has no cart.

// ═══════════════════════════════════════════
// Breadcrumb
// ═══════════════════════════════════════════

/**
 * Remove default WooCommerce breadcrumb (we use our own)
 */
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
