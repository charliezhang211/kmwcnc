<?php
/**
 * WooCommerce B2B Adaptations
 *
 * Disables cart/checkout/payment flow and replaces with inquiry-based B2B flow.
 * Products are shown as a catalog. Visitors inquire instead of purchasing directly.
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

// ═══════════════════════════════════════════
// Hide Prices
// ═══════════════════════════════════════════

/**
 * Replace price HTML with "Price on Request" label.
 */
function ulx_b2b_hide_price($price, $product) {
    return '<span class="ulx-price-on-request text-sm font-medium text-muted">'
        . esc_html__('Price on Request', 'ulx')
        . '</span>';
}
add_filter('woocommerce_get_price_html', 'ulx_b2b_hide_price', 10, 2);

// ═══════════════════════════════════════════
// Disable Add to Cart
// ═══════════════════════════════════════════

/**
 * Remove add-to-cart button from single product page.
 * Also removes the reviews tab and review count from product tabs.
 */
function ulx_b2b_remove_add_to_cart_single() {
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);
}
add_action('init', 'ulx_b2b_remove_add_to_cart_single');

/**
 * Remove the Reviews tab from single product tabs.
 */
function ulx_b2b_remove_reviews_tab($tabs) {
    unset($tabs['reviews']);
    return $tabs;
}
add_filter('woocommerce_product_tabs', 'ulx_b2b_remove_reviews_tab', 99);

/**
 * Disable WooCommerce product reviews entirely.
 */
add_filter('woocommerce_product_reviews_enabled', '__return_false');
add_filter('comments_open', function($open, $post_id) {
    if ($post_id && get_post_type($post_id) === 'product') {
        return false;
    }
    return $open;
}, 10, 2);

/**
 * Prevent adding items to cart via URL (?add-to-cart=...).
 */
add_filter('woocommerce_add_to_cart_validation', '__return_false');

/**
 * Redirect cart page to contact/inquiry page.
 */
function ulx_b2b_redirect_cart() {
    if (is_cart()) {
        $contact = get_page_by_path('contact');
        $url     = $contact ? get_permalink($contact->ID) : home_url('/');
        wp_safe_redirect(esc_url_raw($url));
        exit;
    }
}
add_action('template_redirect', 'ulx_b2b_redirect_cart');

/**
 * Redirect checkout page to contact/inquiry page.
 */
function ulx_b2b_redirect_checkout() {
    if (is_checkout() && !is_order_received_page()) {
        $contact = get_page_by_path('contact');
        $url     = $contact ? get_permalink($contact->ID) : home_url('/');
        wp_safe_redirect(esc_url_raw($url));
        exit;
    }
}
add_action('template_redirect', 'ulx_b2b_redirect_checkout');

// ═══════════════════════════════════════════
// Remove Cart / Account UI Elements
// ═══════════════════════════════════════════

/**
 * Remove WooCommerce cart widget.
 */
add_filter('woocommerce_widget_cart_is_hidden', '__return_true');

/**
 * Remove cart from WooCommerce menu items.
 */
add_filter('woocommerce_add_to_cart_redirect', function() {
    return home_url('/');
});

/**
 * Disable WooCommerce cart fragments AJAX (no cart = no need).
 */
function ulx_b2b_disable_cart_fragments() {
    wp_dequeue_script('wc-cart-fragments');
}
add_action('wp_enqueue_scripts', 'ulx_b2b_disable_cart_fragments', 99);

// ═══════════════════════════════════════════
// Inquiry Button on Single Product
// ═══════════════════════════════════════════

/**
 * Add "Request a Quote" button on single product page (replaces add-to-cart).
 */
function ulx_b2b_inquiry_button_single() {
    global $product;

    $contact = get_page_by_path('contact');
    $url     = $contact
        ? add_query_arg('product', urlencode(get_the_title()), get_permalink($contact->ID))
        : home_url('/contact/');
    ?>
    <div class="ulx-inquiry-wrap mt-4">
        <a href="<?php echo esc_url($url); ?>"
           class="btn-accent w-full sm:w-auto inline-flex items-center justify-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
            <?php esc_html_e('Request a Quote', 'ulx'); ?>
        </a>
        <p class="text-xs text-muted mt-2">
            <?php esc_html_e('We respond within 24 hours.', 'ulx'); ?>
        </p>
    </div>
    <?php
}
add_action('woocommerce_single_product_summary', 'ulx_b2b_inquiry_button_single', 30);

// ═══════════════════════════════════════════
// Clean Up Admin Menu (B2B — no payments, no comments)
// ═══════════════════════════════════════════

/**
 * Remove WooCommerce Payments, Comments, and other irrelevant admin menu items.
 * Runs late (priority 99) so all plugins have already registered their menus.
 */
function ulx_b2b_clean_admin_menu() {
    global $menu, $submenu;

    // ── WordPress core Comments (PHP removal) ──
    remove_menu_page('edit-comments.php');

    // ── WooCommerce main menu ──
    remove_menu_page('woocommerce');

    // ── WooCommerce: sweep unwanted top-level menus ──
    $blocked = [ 'payment', 'wcpay', 'analytic', 'marketing' ];
    foreach ( $menu as $key => $item ) {
        $slug = $item[2] ?? '';
        foreach ( $blocked as $kw ) {
            if ( stripos( $slug, $kw ) !== false ) {
                unset( $menu[ $key ] );
                break;
            }
        }
    }
    if ( isset( $submenu['woocommerce'] ) ) {
        foreach ( $submenu['woocommerce'] as $key => $item ) {
            $slug = $item[2] ?? '';
            foreach ( $blocked as $kw ) {
                if ( stripos( $slug, $kw ) !== false ) {
                    unset( $submenu['woocommerce'][ $key ] );
                    break;
                }
            }
        }
    }
}
add_action('admin_menu', 'ulx_b2b_clean_admin_menu', 999);

/**
 * Remove the Comments item from the admin bar.
 */
function ulx_b2b_clean_admin_bar( $wp_admin_bar ) {
    $wp_admin_bar->remove_node('comments');
}
add_action('admin_bar_menu', 'ulx_b2b_clean_admin_bar', 999);

/**
 * CSS fallback — hides items that survive PHP removal (React-rendered WooCommerce nav,
 * separator ghost left by Comments removal, etc.).
 */
function ulx_b2b_admin_hide_css() {
    ?>
    <style id="ulx-b2b-admin-hide">
        /* ── Comments menu + its orphaned separator ── */
        #menu-comments,
        #menu-comments + li.wp-menu-separator { display: none !important; }

        /* ── WooCommerce Payments (various slug/ID patterns) ── */
        /* Classic admin: <li id="toplevel_page_..."> */
        #toplevel_page_wc-admin-path--payments-overview,
        #toplevel_page_wcpay-overview,
        #toplevel_page_woocommerce-payments { display: none !important; }

        /* New WC React nav: data-item-id attribute */
        li[data-item-id*="payment"],
        li[data-item-id*="wcpay"],
        li[data-item-id*="analytic"],
        li[data-item-id*="marketing"],
        a[href*="path=/payments"],
        a[href*="path=/analytics"],
        a[href*="path=/marketing"] { display: none !important; }

        /* WC Admin sidebar (React) */
        .woocommerce-navigation-item--payments,
        .woocommerce-navigation-item--analytics,
        .woocommerce-navigation-item--marketing,
        .components-navigation__item a[href*="payments"],
        .components-navigation__item a[href*="analytics"],
        .components-navigation__item a[href*="marketing"] { display: none !important; }

        /* Classic admin top-level <li> fallback */
        #toplevel_page_wc-admin-path--analytics-overview,
        #toplevel_page_wc-admin-path--marketing { display: none !important; }

        /* WooCommerce main menu */
        #toplevel_page_woocommerce { display: none !important; }
    </style>
    <?php
}
add_action('admin_head', 'ulx_b2b_admin_hide_css');
