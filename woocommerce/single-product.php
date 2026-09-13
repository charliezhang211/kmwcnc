<?php
/**
 * WooCommerce Single Product — KMW CNC B2B
 *
 * Two-column layout: gallery (left) + product summary (right).
 * No price shown. Inquiry button replaces Add to Cart.
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

// Remove default wrappers — handled manually below
remove_action('woocommerce_before_main_content', 'ulx_woo_wrapper_start', 10);
remove_action('woocommerce_after_main_content',  'ulx_woo_wrapper_end',   10);

get_header();
?>

<main id="primary" style="background-color: var(--color-surface);">

    <!-- Breadcrumb bar -->
    <div class="py-4" style="background-color: var(--color-card); border-bottom: 1px solid var(--color-border);">
        <div class="<?php ulx_container_class(); ?>">
            <?php ulx_breadcrumb(); ?>
        </div>
    </div>

    <!-- Product Main -->
    <div class="<?php ulx_container_class('py-10 lg:py-14'); ?>">
        <?php while (have_posts()) : the_post(); ?>
        <?php wc_get_template_part('content', 'single-product'); ?>
        <?php endwhile; ?>
    </div>

</main>

<?php get_footer(); ?>
