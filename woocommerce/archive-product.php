<?php
/**
 * WooCommerce Archive Product (Shop Page)
 *
 * B2B catalog layout: sidebar filter (left) + product grid (right).
 * No prices shown. Each card has an inquiry button.
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

// Remove default wrappers — we handle the container manually here
remove_action('woocommerce_before_main_content', 'ulx_woo_wrapper_start', 10);
remove_action('woocommerce_after_main_content',  'ulx_woo_wrapper_end',   10);

get_header();
?>

<!-- Archive Hero Banner -->
<div class="py-10 lg:py-14 text-white" style="background-color: var(--color-primary);">
    <div class="<?php ulx_container_class(); ?>">
        <?php ulx_breadcrumb(true); ?>
        <?php if (is_product_category()) :
            $cat = get_queried_object(); ?>
            <h1 class="text-3xl lg:text-4xl font-bold"><?php echo esc_html($cat->name); ?></h1>
            <?php if ($cat->description) : ?>
                <p class="mt-2 text-white/65 max-w-xl"><?php echo esc_html($cat->description); ?></p>
            <?php endif; ?>
        <?php else : ?>
            <h1 class="text-3xl lg:text-4xl font-bold"><?php esc_html_e('All Products', 'ulx'); ?></h1>
            <p class="mt-2 text-white/65"><?php esc_html_e('Precision CNC machined parts, made to your drawings. Inquiry for pricing.', 'ulx'); ?></p>
        <?php endif; ?>
    </div>
</div>

<main id="primary" class="py-10 lg:py-14" style="background-color: var(--color-surface);">
    <div class="<?php ulx_container_class(); ?>">
        <div class="flex flex-col lg:flex-row gap-8 lg:gap-10">

            <!-- ── Sidebar ── -->
            <aside class="w-full lg:w-64 flex-shrink-0 space-y-6">

                <!-- Product Categories -->
                <div class="rounded-xl p-5" style="background-color: var(--color-card); border: 1px solid var(--color-border);">
                    <h3 class="text-sm font-bold uppercase tracking-wider mb-4" style="color: var(--color-primary);">
                        <?php esc_html_e('Categories', 'ulx'); ?>
                    </h3>
                    <?php
                    $cats = get_terms([
                        'taxonomy'   => 'product_cat',
                        'hide_empty' => true,
                        'parent'     => 0,
                        'exclude'    => get_option('default_product_cat'),
                    ]);
                    if (!is_wp_error($cats) && !empty($cats)) :
                        $current_cat = is_product_category() ? get_queried_object()->term_id : 0;
                    ?>
                        <ul class="space-y-1">
                            <li>
                                <a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>"
                                   class="flex items-center justify-between py-1.5 px-2 text-sm rounded transition-colors <?php echo !$current_cat ? 'font-semibold' : 'hover:bg-neutral-50'; ?>"
                                   style="color: <?php echo !$current_cat ? 'var(--color-primary)' : 'var(--color-text)'; ?>">
                                    <?php esc_html_e('All Products', 'ulx'); ?>
                                </a>
                            </li>
                            <?php foreach ($cats as $cat) :
                                $is_active = ($cat->term_id === $current_cat);
                            ?>
                                <li>
                                    <a href="<?php echo esc_url(get_term_link($cat)); ?>"
                                       class="flex items-center justify-between py-1.5 px-2 text-sm rounded transition-colors <?php echo $is_active ? 'font-semibold' : 'hover:bg-neutral-50'; ?>"
                                       style="color: <?php echo $is_active ? 'var(--color-primary)' : 'var(--color-text)'; ?>; <?php echo $is_active ? 'background-color: color-mix(in srgb, var(--color-primary) 6%, transparent);' : ''; ?>">
                                        <span><?php echo esc_html($cat->name); ?></span>
                                        <span class="text-xs px-1.5 py-0.5 rounded-full" style="background-color: var(--color-border); color: var(--color-muted);">
                                            <?php echo esc_html($cat->count); ?>
                                        </span>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>

                <!-- Inquiry CTA -->
                <div class="rounded-xl p-5 text-white" style="background-color: var(--color-primary);">
                    <p class="text-sm font-bold mb-2"><?php esc_html_e('Need custom specs?', 'ulx'); ?></p>
                    <p class="text-xs text-white/65 mb-4 leading-relaxed">
                        <?php esc_html_e('Tell us your requirements and we\'ll quote within 24 hours.', 'ulx'); ?>
                    </p>
                    <?php
                    $contact = get_page_by_path('contact');
                    $url     = $contact ? get_permalink($contact->ID) : home_url('/contact/');
                    ?>
                    <a href="<?php echo esc_url($url); ?>" class="btn-accent btn-sm w-full justify-center">
                        <?php esc_html_e('Get a Quote', 'ulx'); ?>
                    </a>
                </div>

            </aside>

            <!-- ── Main Content ── -->
            <div class="flex-1 min-w-0">

                <?php do_action('woocommerce_before_main_content'); ?>

                <?php if (woocommerce_product_loop()) : ?>

                    <!-- Toolbar: count + sort -->
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 mb-6 pb-4" style="border-bottom: 1px solid var(--color-border);">
                        <p class="text-sm" style="color: var(--color-muted);">
                            <?php woocommerce_result_count(); ?>
                        </p>
                        <?php woocommerce_catalog_ordering(); ?>
                    </div>

                    <?php woocommerce_product_loop_start(); ?>

                    <?php while (have_posts()) : ?>
                        <?php the_post(); ?>
                        <?php wc_get_template_part('content', 'product'); ?>
                    <?php endwhile; ?>

                    <?php woocommerce_product_loop_end(); ?>

                    <!-- Pagination -->
                    <div class="mt-10">
                        <?php woocommerce_pagination(); ?>
                    </div>

                <?php else : ?>
                    <?php do_action('woocommerce_no_products_found'); ?>
                <?php endif; ?>

                <?php do_action('woocommerce_after_main_content'); ?>

            </div><!-- /.flex-1 -->
        </div><!-- /.flex -->
    </div><!-- /.container -->
</main>

<?php get_footer(); ?>
