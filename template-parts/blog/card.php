<?php
/**
 * Blog Post Card
 *
 * Used in blog archive, index, and related posts.
 *
 * @package ULX
 */
?>

<?php $ulx_is_sticky = is_sticky( get_the_ID() ); ?>
<article <?php post_class( 'group' . ( $ulx_is_sticky ? ' relative rounded-lg ring-2 ring-accent/70 p-3 -m-3' : '' ) ); ?>>
    <?php if ( $ulx_is_sticky ) : ?>
        <span class="absolute top-2 right-2 z-10 inline-flex items-center gap-1 px-2 py-0.5 text-[10px] font-bold uppercase tracking-wide rounded-full bg-accent text-white shadow">
            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.957a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.37 2.448a1 1 0 00-.364 1.118l1.287 3.957c.3.921-.755 1.688-1.54 1.118l-3.37-2.448a1 1 0 00-1.175 0l-3.37 2.448c-.784.57-1.838-.197-1.539-1.118l1.287-3.957a1 1 0 00-.364-1.118L2.05 9.384c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69l1.286-3.957z"/>
            </svg>
            <?php esc_html_e( 'Pinned', 'ulx' ); ?>
        </span>
    <?php endif; ?>
    <a href="<?php the_permalink(); ?>" class="block">

        <!-- Thumbnail -->
        <?php if (has_post_thumbnail()) : ?>
            <div class="aspect-[16/10] overflow-hidden bg-neutral-100 mb-4 rounded-lg">
                <?php the_post_thumbnail('ulx-blog-card', [
                    'class'   => 'w-full h-full object-cover transition-transform duration-500 group-hover:scale-105',
                    'loading' => 'lazy',
                ]); ?>
            </div>
        <?php endif; ?>

        <!-- Meta -->
        <div class="flex items-center gap-2 text-xs text-muted mb-2">
            <?php ulx_post_categories( false ); ?>
            <span>&middot;</span>
            <?php ulx_posted_on(); ?>
        </div>

        <!-- Title -->
        <h2 class="text-lg font-semibold text-text group-hover:text-primary transition-colors line-clamp-2 mb-2">
            <?php the_title(); ?>
        </h2>

        <!-- Excerpt -->
        <p class="text-sm text-muted line-clamp-3 mb-4">
            <?php echo esc_html(ulx_truncate(get_the_excerpt(), 140)); ?>
        </p>

        <!-- Read More -->
        <span class="inline-flex items-center gap-1.5 text-sm font-semibold transition-colors group-hover:text-accent"
              style="color: var(--color-primary);">
            <?php esc_html_e('Read More', 'ulx'); ?>
            <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
        </span>

    </a>
</article>
