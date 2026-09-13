<?php
/**
 * Blog Posts List Page (home.php)
 *
 * WordPress uses this file when a static front page is set and a separate
 * "Blog" page is assigned in Settings > Reading.
 *
 * Layout:
 *  ① Full-width hero (blog page title + tagline + category pills)
 *  ② Featured first post — large editorial card
 *  ③ Remaining posts — 3-column responsive grid
 *  ④ Pagination
 *
 * @package ULX
 */

get_header();

// Blog page object (the assigned "Posts page")
$blog_page    = get_post( get_option('page_for_posts') );
$blog_title   = $blog_page ? get_the_title( $blog_page ) : __( 'Blog', 'ulx' );

// All top-level categories for filter pills
$all_cats = get_categories( [ 'hide_empty' => true, 'number' => 10 ] );
?>

<main id="primary">

    <!-- ═══════════════════════════════════════
         ① BLOG HERO
         ═══════════════════════════════════════ -->
    <section class="relative py-14 lg:py-20 text-white overflow-hidden">
        <img src="http://kmwcnc.com/wp-content/uploads/2025/11/capabilities-banner.webp"
             alt="" class="absolute inset-0 w-full h-full object-cover" aria-hidden="true" />
        <div class="absolute inset-0 bg-primary/80"></div>
        <div class="<?php ulx_container_class('relative z-10'); ?>">

            <?php ulx_breadcrumb( true ); ?>

            <!-- Label -->
            <p class="text-sm font-semibold uppercase tracking-widest mb-3"
               style="color: var(--color-accent);">
                <?php esc_html_e( 'Industry Insights & Resources', 'ulx' ); ?>
            </p>

            <!-- Title -->
            <h1 class="text-4xl lg:text-5xl font-bold leading-tight" style="font-family: var(--font-heading);">
                <?php echo esc_html( $blog_title ); ?>
            </h1>

            <p class="mt-4 text-white/70 max-w-xl leading-relaxed">
                <?php esc_html_e( 'Expert knowledge on CNC machining, precision manufacturing, material selection, and B2B sourcing — straight from the factory.', 'ulx' ); ?>
            </p>

            <!-- Category filter pills -->
            <?php if ( $all_cats ) : ?>
                <div class="flex flex-wrap gap-2 mt-8">
                    <?php foreach ( $all_cats as $cat ) : ?>
                        <a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>"
                           class="inline-flex items-center px-4 py-1.5 text-xs font-semibold uppercase tracking-wide rounded-full border border-white/25 text-white/75 transition-all duration-150 hover:bg-white hover:text-primary hover:border-white">
                            <?php echo esc_html( $cat->name ); ?>
                            <span class="ml-1.5 text-[10px] opacity-60">(<?php echo esc_html( $cat->count ); ?>)</span>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

        </div>
    </section><!-- /.hero -->


    <div class="<?php ulx_container_class( 'py-10 lg:py-14' ); ?>">

        <?php if ( have_posts() ) : ?>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'template-parts/blog/card' ); ?>
                <?php endwhile; ?>
            </div>

            <!-- Pagination -->
            <div class="mt-12">
                <?php ulx_pagination(); ?>
            </div>

        <?php else : ?>
            <?php get_template_part( 'template-parts/content/none' ); ?>
        <?php endif; ?>

    </div><!-- /.container -->

</main>

<?php get_footer(); ?>
