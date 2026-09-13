<?php
/**
 * Archive Template — Category, Tag, Date, Author
 *
 * Layout:
 *  ① Full-width hero (archive type label + title + description + category filter pills)
 *  ② Post count bar + Back to Blog link
 *  ③ 3-column responsive post grid
 *  ④ Pagination
 *
 * @package ULX
 */

get_header();

// ── Resolve archive identity ──
$archive_type  = '';
$archive_title = '';
$archive_desc  = '';
$hero_img      = '';

if ( is_category() ) {
    $term          = get_queried_object();
    $archive_type  = __( 'Category', 'ulx' );
    $archive_title = single_cat_title( '', false );
    $archive_desc  = category_description();
    if ( $term && ! is_wp_error( $term ) ) {
        $hero_img = get_term_meta( $term->term_id, 'thumbnail_url', true );
    }
} elseif ( is_tag() ) {
    $archive_type  = __( 'Tag', 'ulx' );
    $archive_title = single_tag_title( '', false );
    $archive_desc  = tag_description();
} elseif ( is_author() ) {
    $archive_type  = __( 'Author', 'ulx' );
    $archive_title = get_the_author();
    $archive_desc  = get_the_author_meta( 'description' );
} elseif ( is_year() ) {
    $archive_type  = __( 'Year', 'ulx' );
    $archive_title = get_the_date( 'Y' );
} elseif ( is_month() ) {
    $archive_type  = __( 'Monthly Archive', 'ulx' );
    $archive_title = get_the_date( 'F Y' );
} elseif ( is_day() ) {
    $archive_type  = __( 'Daily Archive', 'ulx' );
    $archive_title = get_the_date();
} else {
    $archive_title = post_type_archive_title( '', false );
}

// Top-level categories for filter pills
$all_cats    = get_categories( [ 'hide_empty' => true, 'number' => 12 ] );
$current_cat = is_category() ? get_queried_object() : null;

// Blog root URL
$blog_page_id  = (int) get_option( 'page_for_posts' );
$blog_page_url = $blog_page_id ? get_permalink( $blog_page_id ) : home_url( '/blog/' );
?>

<main id="primary">

    <!-- ═══════════════════════════════════════
         ① ARCHIVE HERO
         ═══════════════════════════════════════ -->
    <section class="relative py-14 lg:py-20 text-white overflow-hidden">
        <img src="http://kmwcnc.com/wp-content/uploads/2025/11/capabilities-banner.webp"
             alt="" class="absolute inset-0 w-full h-full object-cover" aria-hidden="true" />
        <div class="absolute inset-0 bg-primary/80"></div>
        <div class="<?php ulx_container_class('relative z-10'); ?>">

            <?php ulx_breadcrumb( true ); ?>

            <!-- Archive type label -->
            <?php if ( $archive_type ) : ?>
                <p class="text-sm font-semibold uppercase tracking-widest mb-3"
                   style="color: var(--color-accent);">
                    <?php echo esc_html( $archive_type ); ?>
                </p>
            <?php endif; ?>

            <!-- Archive title -->
            <h1 class="text-4xl lg:text-5xl font-bold leading-tight" style="font-family: var(--font-heading);">
                <?php echo esc_html( $archive_title ); ?>
            </h1>

            <!-- Archive description -->
            <?php if ( $archive_desc ) : ?>
                <p class="mt-4 text-white/70 max-w-xl leading-relaxed">
                    <?php echo wp_kses_post( $archive_desc ); ?>
                </p>
            <?php endif; ?>

            <!-- Category filter pills -->
            <?php if ( $all_cats && ( is_category() || is_tag() ) ) : ?>
                <div class="flex flex-wrap gap-2 mt-8">
                    <!-- "All" pill linking back to blog -->
                    <a href="<?php echo esc_url( $blog_page_url ); ?>"
                       class="inline-flex items-center px-4 py-1.5 text-xs font-semibold uppercase tracking-wide rounded-full border border-white/25 text-white/75 transition-colors duration-150 hover:bg-white hover:text-primary hover:border-white">
                        <?php esc_html_e( 'All', 'ulx' ); ?>
                    </a>
                    <?php foreach ( $all_cats as $cat ) :
                        $is_active = $current_cat && $current_cat->term_id === $cat->term_id;
                    ?>
                        <a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>"
                           class="inline-flex items-center px-4 py-1.5 text-xs font-semibold uppercase tracking-wide rounded-full border transition-colors duration-150 <?php echo $is_active
                               ? 'bg-accent border-accent text-white'
                               : 'border-white/25 text-white/75 hover:bg-white hover:text-primary hover:border-white'; ?>">
                            <?php echo esc_html( $cat->name ); ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

        </div>
    </section><!-- /.hero -->


    <!-- ═══════════════════════════════════════
         ② + ③  POST COUNT + GRID
         ═══════════════════════════════════════ -->
    <div class="<?php ulx_container_class( 'py-10 lg:py-14' ); ?>">

        <?php if ( have_posts() ) : ?>

            <!-- Count bar -->
            <div class="flex items-center justify-between mb-8">
                <div class="flex items-center gap-3">
                    <?php global $wp_query; ?>
                    <span class="text-sm font-semibold uppercase tracking-widest"
                          style="color: var(--color-muted);">
                        <?php printf(
                            /* translators: %d = total posts */
                            esc_html( _n( '%d Article', '%d Articles', (int) $wp_query->found_posts, 'ulx' ) ),
                            (int) $wp_query->found_posts
                        ); ?>
                    </span>
                    <div class="h-px w-10" style="background-color: var(--color-border);"></div>
                </div>

                <a href="<?php echo esc_url( $blog_page_url ); ?>"
                   class="text-xs font-semibold uppercase tracking-wider flex items-center gap-1.5 transition-colors hover:text-primary"
                   style="color: var(--color-muted);">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"/>
                    </svg>
                    <?php esc_html_e( 'All Posts', 'ulx' ); ?>
                </a>
            </div>

            <!-- 3-col grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'template-parts/blog/card' ); ?>
                <?php endwhile; ?>
            </div>

            <!-- ④ Pagination -->
            <div class="mt-12">
                <?php ulx_pagination(); ?>
            </div>

        <?php else : ?>

            <!-- Empty state -->
            <div class="text-center py-20">
                <div class="w-12 h-12 rounded-xl flex items-center justify-center mx-auto mb-4"
                     style="background-color: color-mix(in srgb, var(--color-primary) 7%, transparent);">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         style="color: var(--color-muted);" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                              d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                </div>
                <p class="font-semibold mb-1" style="color: var(--color-text);">
                    <?php esc_html_e( 'No articles found', 'ulx' ); ?>
                </p>
                <p class="text-sm mb-6" style="color: var(--color-muted);">
                    <?php esc_html_e( 'Try browsing another category or return to the blog.', 'ulx' ); ?>
                </p>
                <a href="<?php echo esc_url( $blog_page_url ); ?>" class="btn-primary btn-sm">
                    <?php esc_html_e( 'Back to Blog', 'ulx' ); ?>
                </a>
            </div>

        <?php endif; ?>

    </div><!-- /.container -->

</main>

<?php get_footer(); ?>
