<?php
/**
 * Default page template
 *
 * @package ULX
 */

get_header();
?>

<main id="primary" class="py-8 lg:py-12">
    <div class="<?php ulx_container_class(); ?>">

        <?php ulx_breadcrumb(); ?>

        <?php while (have_posts()) : the_post(); ?>

            <article id="page-<?php the_ID(); ?>" <?php post_class('max-w-3xl'); ?>>
                <h1 class="text-3xl lg:text-4xl font-[var(--font-weight-heading)] mb-8">
                    <?php the_title(); ?>
                </h1>

                <div class="prose prose-neutral max-w-none">
                    <?php the_content(); ?>
                </div>
            </article>

        <?php endwhile; ?>

    </div>
</main>

<?php
get_footer();
