<?php
/**
 * Product Card Component — B2B
 *
 * Used inside WooCommerce loop and standalone contexts.
 * No price shown. Inquiry button instead of Add to Cart.
 *
 * @package ULX
 */

global $product;

if (!$product) return;

$contact = get_page_by_path('contact');
$url     = $contact
    ? add_query_arg('product', urlencode(get_the_title()), get_permalink($contact->ID))
    : home_url('/contact/');
?>

<div class="ulx-product-card group flex flex-col" style="background-color: var(--color-card); border: 1px solid var(--color-border); border-radius: 8px; overflow: hidden;">

    <!-- Thumbnail -->
    <a href="<?php echo esc_url(get_the_permalink()); ?>" class="block relative aspect-[4/3] overflow-hidden bg-neutral-100 flex-shrink-0">
        <?php if (has_post_thumbnail()) : ?>
            <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'ulx-product-card')); ?>"
                 alt="<?php echo esc_attr(get_the_title()); ?>"
                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                 loading="lazy" />
        <?php else : ?>
            <div class="w-full h-full flex items-center justify-center" style="background-color: color-mix(in srgb, var(--color-primary) 4%, transparent);">
                <?php echo ulx_icon('factory', 'w-10 h-10 opacity-20'); ?>
            </div>
        <?php endif; ?>
    </a>

    <!-- Info -->
    <div class="p-4 flex flex-col flex-1">
        <!-- Category -->
        <?php $terms = get_the_terms($product->get_id(), 'product_cat');
        if ($terms && !is_wp_error($terms)) : ?>
            <span class="text-xs mb-1" style="color: var(--color-accent);">
                <?php echo esc_html($terms[0]->name); ?>
            </span>
        <?php endif; ?>

        <!-- Title -->
        <h3 class="text-sm font-semibold leading-snug line-clamp-2 mb-2 group-hover:underline transition-colors"
            style="color: var(--color-text);">
            <a href="<?php echo esc_url(get_the_permalink()); ?>">
                <?php the_title(); ?>
            </a>
        </h3>

        <!-- SKU -->
        <?php if ($product->get_sku()) : ?>
            <p class="text-xs mb-3" style="color: var(--color-muted);">
                <?php esc_html_e('Model:', 'ulx'); ?> <?php echo esc_html($product->get_sku()); ?>
            </p>
        <?php endif; ?>

        <!-- Spacer -->
        <div class="flex-1"></div>

        <!-- CTA -->
        <a href="<?php echo esc_url($url); ?>"
           class="ulx-loop-inquiry btn-accent btn-sm w-full flex items-center justify-center gap-1.5 mt-3">
            <?php echo ulx_icon('email', 'w-3.5 h-3.5'); ?>
            <?php esc_html_e('Get a Quote', 'ulx'); ?>
        </a>
    </div>

</div>
