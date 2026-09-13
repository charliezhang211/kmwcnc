<?php
/**
 * Single Product Content — B2B Layout
 *
 * Gallery (left) + Summary (right).
 * Price hidden, inquiry popup replaces add-to-cart.
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

global $product;

do_action('woocommerce_before_single_product');

if (post_password_required()) {
    echo get_the_password_form(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    return;
}
?>

<div id="product-<?php the_ID(); ?>" <?php wc_product_class('ulx-single-product', $product); ?>>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-14">

        <!-- ── Gallery ── -->
        <div class="ulx-product-gallery-wrap">
            <?php do_action('woocommerce_before_single_product_summary'); ?>
        </div>

        <!-- ── Summary ── -->
        <div class="ulx-product-summary flex flex-col gap-5">

            <!-- Category tags -->
            <?php $terms = get_the_terms($product->get_id(), 'product_cat');
            if ($terms && !is_wp_error($terms)) : ?>
                <div class="flex flex-wrap gap-2">
                    <?php foreach ($terms as $term) : ?>
                        <a href="<?php echo esc_url(get_term_link($term)); ?>"
                           class="text-xs font-semibold px-2.5 py-1 rounded-full"
                           style="background-color: color-mix(in srgb, var(--color-primary) 8%, transparent); color: var(--color-primary);">
                            <?php echo esc_html($term->name); ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <!-- Title -->
            <h1 class="text-2xl lg:text-3xl font-bold leading-tight" style="color: var(--color-primary);">
                <?php the_title(); ?>
            </h1>

            <!-- SKU / Model -->
            <?php if ($product->get_sku()) : ?>
                <p class="text-sm" style="color: var(--color-muted);">
                    <?php esc_html_e('Model:', 'ulx'); ?>
                    <span class="font-medium" style="color: var(--color-text);">
                        <?php echo esc_html($product->get_sku()); ?>
                    </span>
                </p>
            <?php endif; ?>

            <!-- Short description -->
            <?php if ($product->get_short_description()) : ?>
                <div class="text-sm leading-relaxed" style="color: var(--color-muted);">
                    <?php echo wp_kses_post($product->get_short_description()); ?>
                </div>
            <?php endif; ?>

            <!-- Divider -->
            <hr style="border-color: var(--color-border);">

            <!-- Specs / Attributes Table -->
            <?php
            $attributes = $product->get_attributes();
            if (!empty($attributes)) : ?>
                <div>
                    <h3 class="text-sm font-bold uppercase tracking-wider mb-3" style="color: var(--color-primary);">
                        <?php esc_html_e('Specifications', 'ulx'); ?>
                    </h3>
                    <table class="w-full text-sm border-collapse">
                        <tbody>
                            <?php foreach ($attributes as $attribute) :
                                if (!$attribute->get_visible()) continue;
                                $values = wc_get_product_terms(
                                    $product->get_id(),
                                    $attribute->get_name(),
                                    ['fields' => 'names']
                                );
                                if (empty($values)) continue;
                            ?>
                                <tr style="border-bottom: 1px solid var(--color-border);">
                                    <td class="py-2 pr-4 font-medium w-2/5" style="color: var(--color-text);">
                                        <?php echo esc_html(wc_attribute_label($attribute->get_name())); ?>
                                    </td>
                                    <td class="py-2" style="color: var(--color-muted);">
                                        <?php echo esc_html(implode(', ', $values)); ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>

            <!-- Price on Request -->
            <div class="flex items-center gap-3 py-3 px-4 rounded-lg" style="background-color: color-mix(in srgb, var(--color-primary) 5%, transparent); border: 1px solid color-mix(in srgb, var(--color-primary) 12%, transparent);">
                <?php echo ulx_icon('email', 'w-4 h-4 flex-shrink-0'); ?>
                <span class="text-sm font-medium" style="color: var(--color-primary);">
                    <?php esc_html_e('Price available on request. Response within 24 hours.', 'ulx'); ?>
                </span>
            </div>

            <!-- Inquiry CTA -->
            <div class="flex flex-col sm:flex-row gap-3">
                <button type="button"
                        data-popup="ulx-inquiry"
                        class="btn-accent flex-1 justify-center">
                    <?php esc_html_e('Request a Quote', 'ulx'); ?>
                </button>
                <a href="tel:+8615889750371"
                   class="btn-outline flex-shrink-0 gap-2">
                    <?php echo ulx_icon('phone', 'w-4 h-4'); ?>
                    <?php esc_html_e('Call Us', 'ulx'); ?>
                </a>
            </div>

            <!-- Trust badges -->
            <div class="grid grid-cols-3 gap-3 pt-2">
                <?php
                $badges = [
                    ['icon' => 'shield', 'text' => __('Quality Tested', 'ulx')],
                    ['icon' => 'custom', 'text' => __('OEM Available', 'ulx')],
                    ['icon' => 'truck',  'text' => __('Global Shipping', 'ulx')],
                ];
                foreach ($badges as $b) : ?>
                    <div class="flex flex-col items-center gap-1.5 text-center p-3 rounded-lg" style="background-color: var(--color-surface); border: 1px solid var(--color-border);">
                        <span style="color: var(--color-accent);"><?php echo ulx_icon($b['icon'], 'w-5 h-5'); ?></span>
                        <span class="text-xs font-medium" style="color: var(--color-text);"><?php echo esc_html($b['text']); ?></span>
                    </div>
                <?php endforeach; ?>
            </div>

        </div><!-- /.summary -->
    </div><!-- /.grid -->

    <!-- ── Tabs: Description / Specs / OEM ── -->
    <div class="mt-12 pt-10" style="border-top: 1px solid var(--color-border);">
        <?php do_action('woocommerce_after_single_product_summary'); ?>
    </div>

</div><!-- /#product-xxx -->

<?php
// Inquiry Popup — product info passed as args
get_template_part('template-parts/components/inquiry-popup', null, [
    'product_name' => get_the_title(),
    'product_sku'  => $product->get_sku(),
    'product_url'  => get_permalink(),
]);

do_action('woocommerce_after_single_product');
?>
