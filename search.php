<?php
/**
 * Search Results Template
 *
 * @package ULX
 */

get_header();
?>

<main id="primary" class="py-8 lg:py-12">
    <div class="<?php ulx_container_class(); ?>">

        <header class="mb-8">
            <h1 class="text-2xl font-[var(--font-weight-heading)]">
                <?php printf(esc_html__('Search results for: %s', 'ulx'), '<span class="text-primary">' . get_search_query() . '</span>'); ?>
            </h1>
        </header>

        <?php if (have_posts()) : ?>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php while (have_posts()) : the_post(); ?>
                    <?php
                    if (get_post_type() === 'product') {
                        get_template_part('template-parts/components/product-card');
                    } else {
                        get_template_part('template-parts/blog/card');
                    }
                    ?>
                <?php endwhile; ?>
            </div>

            <div class="mt-10">
                <?php ulx_pagination(); ?>
            </div>

        <?php else : ?>
            <?php get_template_part('template-parts/content/none'); ?>
        <?php endif; ?>

    </div>
</main>

<?php
get_footer();
