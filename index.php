<?php
/**
 * The main template file (fallback)
 *
 * @package ULX
 */

get_header();
?>

<main id="primary" class="py-8 lg:py-12">
    <div class="<?php ulx_container_class(); ?>">

        <?php ulx_breadcrumb(); ?>

        <?php if (have_posts()) : ?>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-12">

                <!-- Content -->
                <div class="lg:col-span-2 space-y-8">
                    <?php while (have_posts()) : the_post(); ?>
                        <?php get_template_part('template-parts/blog/card'); ?>
                    <?php endwhile; ?>

                    <?php ulx_pagination(); ?>
                </div>

                <!-- Sidebar -->
                <aside class="lg:col-span-1">
                    <?php get_sidebar('blog'); ?>
                </aside>

            </div>

        <?php else : ?>
            <?php get_template_part('template-parts/content/none'); ?>
        <?php endif; ?>

    </div>
</main>

<?php
get_footer();
