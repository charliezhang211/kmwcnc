<?php
/**
 * Single Post Template — Blog Detail
 *
 * Layout:
 *  ① Full-width hero (featured image bg + title + meta)
 *  ② Two-column: 8/12 content | 4/12 sticky TOC sidebar
 *  ③ Company author box below content
 *
 * @package ULX
 */

get_header();

$contact_page = get_page_by_path( 'contact' );
$quote_url    = $contact_page ? get_permalink( $contact_page->ID ) : home_url( '/contact/' );
?>

<main id="primary">

<?php while ( have_posts() ) : the_post(); ?>

    <?php
    $categories = get_the_category();
    $toc        = ulx_get_toc_headings();
    ?>

    <!-- ═══════════════════════════════════════
         ① BLOG HERO
         ═══════════════════════════════════════ -->
    <section class="relative py-14 lg:py-20 text-white overflow-hidden">
        <?php if ( has_post_thumbnail() ) : ?>
            <img src="<?php echo esc_url( get_the_post_thumbnail_url( null, 'full' ) ); ?>"
                 alt="" class="absolute inset-0 w-full h-full object-cover" aria-hidden="true" />
        <?php else : ?>
            <img src="http://kmwcnc.com/wp-content/uploads/2025/11/capabilities-banner.webp"
                 alt="" class="absolute inset-0 w-full h-full object-cover" aria-hidden="true" />
        <?php endif; ?>
        <div class="absolute inset-0 bg-primary/80"></div>
        <div class="<?php ulx_container_class('relative z-10'); ?>">

            <?php ulx_breadcrumb( true ); ?>

            <!-- Category badges -->
            <?php if ( $categories ) : ?>
                <div class="flex flex-wrap gap-2 mb-5">
                    <?php foreach ( array_slice( $categories, 0, 2 ) as $cat ) : ?>
                        <a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>"
                           class="inline-flex items-center px-3 py-1 text-xs font-semibold uppercase tracking-widest rounded-full transition-opacity hover:opacity-80"
                           style="background-color: color-mix(in srgb, var(--color-accent) 18%, transparent); color: var(--color-accent); border: 1px solid color-mix(in srgb, var(--color-accent) 35%, transparent);">
                            <?php echo esc_html( $cat->name ); ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <!-- Title -->
            <h1 class="text-4xl lg:text-5xl font-bold leading-tight max-w-3xl" style="font-family: var(--font-heading);">
                <?php the_title(); ?>
            </h1>

            <!-- Excerpt -->
            <?php if ( has_excerpt() ) : ?>
                <p class="mt-4 text-white/70 text-base lg:text-lg leading-relaxed max-w-2xl">
                    <?php echo esc_html( get_the_excerpt() ); ?>
                </p>
            <?php endif; ?>

            <!-- Meta bar -->
            <div class="flex flex-wrap items-center gap-x-3 gap-y-2 text-sm text-white/60 mt-8">
                <span><?php esc_html_e( 'KMW CNC Team', 'ulx' ); ?></span>
                <span class="text-white/30" aria-hidden="true">&middot;</span>
                <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
                <span class="text-white/30" aria-hidden="true">&middot;</span>
                <span><?php ulx_reading_time(); ?></span>
            </div>

        </div><!-- /.container -->
    </section><!-- /.hero -->


    <!-- ═══════════════════════════════════════
         MOBILE TOC (dropdown, visible < lg only)
         ═══════════════════════════════════════ -->
    <?php if ( count( $toc ) >= 2 ) : ?>
        <div class="lg:hidden border-b" style="border-color: var(--color-border); background-color: var(--color-card);">
            <div class="<?php ulx_container_class( 'py-3' ); ?>">
                <div class="ulx-mobile-toc relative">
                    <button type="button"
                            class="ulx-mobile-toc-toggle w-full flex items-center justify-between gap-3 px-4 py-3 text-sm font-medium rounded-lg transition-colors"
                            style="background-color: color-mix(in srgb, var(--color-primary) 6%, transparent); color: var(--color-text);"
                            aria-expanded="false">
                        <span class="flex items-center gap-2">
                            <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 style="color: var(--color-accent);" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                      d="M4 6h16M4 10h12M4 14h8M4 18h6"/>
                            </svg>
                            <?php esc_html_e( 'Contents', 'ulx' ); ?>
                        </span>
                        <svg class="ulx-mobile-toc-chevron w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <nav class="ulx-mobile-toc-panel hidden mt-1 rounded-lg overflow-hidden"
                         style="border: 1px solid var(--color-border); background-color: var(--color-card);"
                         aria-label="<?php esc_attr_e( 'Table of contents', 'ulx' ); ?>">
                        <ol class="py-2">
                            <?php foreach ( $toc as $i => $heading ) : ?>
                                <li>
                                    <a href="#<?php echo esc_attr( $heading['id'] ); ?>"
                                       class="ulx-toc-link flex items-center gap-3 px-4 py-2.5 text-sm transition-colors"
                                       data-target="<?php echo esc_attr( $heading['id'] ); ?>"
                                       data-mobile-toc>
                                        <span class="flex-shrink-0 w-5 h-5 rounded-full flex items-center justify-center text-xs font-bold"
                                              style="background-color: color-mix(in srgb, var(--color-border) 55%, transparent); color: var(--color-muted);">
                                            <?php echo esc_html( $i + 1 ); ?>
                                        </span>
                                        <span style="color: var(--color-text);">
                                            <?php echo esc_html( $heading['text'] ); ?>
                                        </span>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <!-- ═══════════════════════════════════════
         ② CONTENT + SIDEBAR
         ═══════════════════════════════════════ -->
    <div class="<?php ulx_container_class( 'py-10 lg:py-14' ); ?>">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12">

            <!-- ── Main Content (8 cols) ── -->
            <div class="lg:col-span-8 min-w-0">
                <article id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?>>

                    <!-- Post body -->
                    <div class="prose prose-neutral prose-lg max-w-none
                                prose-headings:text-[var(--color-primary)] prose-headings:font-bold
                                prose-a:text-[var(--color-accent)] prose-a:no-underline hover:prose-a:underline
                                prose-img:rounded-xl prose-img:shadow-sm
                                prose-blockquote:border-[var(--color-accent)] prose-blockquote:not-italic prose-blockquote:text-[var(--color-muted)]
                                prose-code:text-[var(--color-primary)] prose-code:bg-[color-mix(in srgb, var(--color-border) 35%, transparent)] prose-code:rounded prose-code:px-1 prose-code:py-0.5 prose-code:before:content-none prose-code:after:content-none">
                        <?php the_content(); ?>
                    </div>

                    <!-- Tags -->
                    <?php if ( has_tag() ) : ?>
                        <div class="mt-8 pt-6 border-t border-border">
                            <div class="flex flex-wrap gap-2">
                                <?php foreach ( get_the_tags() as $tag ) : ?>
                                    <a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>"
                                       class="inline-block text-xs font-medium px-3 py-1.5 rounded-full transition-colors"
                                       style="color: var(--color-muted); background-color: color-mix(in srgb, var(--color-border) 35%, transparent); border: 1px solid var(--color-border);">
                                        #<?php echo esc_html( $tag->name ); ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>


                    <!-- ── ③ AUTHOR BOX ── -->
                    <div class="mt-10 rounded-2xl overflow-hidden" style="border: 1px solid var(--color-border);">

                        <!-- Top accent bar -->
                        <div class="h-1" style="background: linear-gradient(90deg, var(--color-primary), var(--color-accent));"></div>

                        <div class="p-6 lg:p-8 flex flex-col sm:flex-row gap-5 items-start" style="background-color: var(--color-card);">

                            <!-- Avatar -->
                            <div class="flex-shrink-0">
                                <img src="https://kmwcnc.com/wp-content/uploads/2025/12/kmw-ava-e1766365877820-300x296.webp"
                                     alt="Rock — KMW CNC"
                                     class="w-14 h-14 rounded-full object-cover shadow-sm" />
                            </div>

                            <!-- Info -->
                            <div class="flex-1 min-w-0">
                                <h3 class="text-xl font-bold mb-2" style="color: var(--color-primary); font-family: var(--font-heading);">
                                    Hey there, I'm Rock!
                                </h3>
                                <p class="text-sm leading-relaxed mb-4" style="color: var(--color-muted);">
                                    I am the author of this article and a CNC machining specialist at <strong class="text-text">KMW CNC</strong>, with over ten years of hands-on industry experience. I'm glad to share my practical knowledge and insights through this blog. KMW CNC provides reliable and cost-effective machining services from China. If you have any questions or machining needs, feel free to reach out anytime — I'm always happy to help.
                                </p>
                                <a href="<?php echo esc_url( $quote_url ); ?>" class="btn-primary">
                                    Contact Us Now
                                </a>
                            </div>

                        </div>
                    </div><!-- /.author-box -->


                    <!-- Post navigation (prev / next) -->
                    <div class="mt-10 pt-8 border-t border-border grid grid-cols-2 gap-6">
                        <?php
                        $prev = get_previous_post();
                        $next = get_next_post();
                        ?>
                        <div>
                            <?php if ( $prev ) : ?>
                                <span class="block text-xs uppercase tracking-wider mb-1.5"
                                      style="color: var(--color-muted);">
                                    <?php esc_html_e( '← Previous', 'ulx' ); ?>
                                </span>
                                <a href="<?php echo esc_url( get_permalink( $prev ) ); ?>"
                                   class="text-sm font-medium leading-snug line-clamp-2 transition-colors hover:text-primary"
                                   style="color: var(--color-text);">
                                    <?php echo esc_html( $prev->post_title ); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="text-right">
                            <?php if ( $next ) : ?>
                                <span class="block text-xs uppercase tracking-wider mb-1.5"
                                      style="color: var(--color-muted);">
                                    <?php esc_html_e( 'Next →', 'ulx' ); ?>
                                </span>
                                <a href="<?php echo esc_url( get_permalink( $next ) ); ?>"
                                   class="text-sm font-medium leading-snug line-clamp-2 transition-colors hover:text-primary"
                                   style="color: var(--color-text);">
                                    <?php echo esc_html( $next->post_title ); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>

                </article>
            </div><!-- /.main-content -->


            <!-- ── Sidebar (4 cols) ── -->
            <aside class="lg:col-span-4">
                <div class="sticky top-24 space-y-6">

                    <!-- ── TOC MODULE ── -->
                    <?php if ( count( $toc ) >= 2 ) : ?>
                        <div class="ulx-toc rounded-xl overflow-hidden"
                             style="border: 1px solid var(--color-border);">

                            <!-- Header -->
                            <div class="px-5 py-4 flex items-center gap-2.5"
                                 style="background-color: var(--color-primary);">
                                <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     style="color: var(--color-accent);" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                          d="M4 6h16M4 10h12M4 14h8M4 18h6"/>
                                </svg>
                                <span class="text-sm font-semibold text-white uppercase tracking-wider">
                                    <?php esc_html_e( 'Contents', 'ulx' ); ?>
                                </span>
                            </div>

                            <!-- TOC list -->
                            <nav aria-label="<?php esc_attr_e( 'Table of contents', 'ulx' ); ?>"
                                 style="background-color: var(--color-card);">
                                <ol class="py-2">
                                    <?php foreach ( $toc as $i => $heading ) : ?>
                                        <li>
                                            <a href="#<?php echo esc_attr( $heading['id'] ); ?>"
                                               class="ulx-toc-link flex items-start gap-3 px-5 py-2.5 text-sm transition-all duration-150"
                                               data-target="<?php echo esc_attr( $heading['id'] ); ?>">
                                                <span class="ulx-toc-num flex-shrink-0 w-5 h-5 rounded-full flex items-center justify-center text-xs font-bold mt-0.5 transition-colors"
                                                      style="background-color: color-mix(in srgb, var(--color-border) 55%, transparent); color: var(--color-muted);">
                                                    <?php echo esc_html( $i + 1 ); ?>
                                                </span>
                                                <span class="ulx-toc-text leading-snug"
                                                      style="color: var(--color-text);">
                                                    <?php echo esc_html( $heading['text'] ); ?>
                                                </span>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ol>
                            </nav>

                        </div><!-- /.ulx-toc -->
                    <?php endif; ?>

                    <!-- ── B2B Inquiry Form ── -->
                    <div class="rounded-xl overflow-hidden shadow-lg" style="border: 1px solid var(--color-border); background-color: var(--color-card);">
                        <div class="px-5 py-4" style="background-color: var(--color-primary);">
                            <h3 class="text-sm font-semibold text-white uppercase tracking-wider">
                                Request a Quote Today
                            </h3>
                        </div>
                        <div class="p-5">
                            <p class="text-xs leading-relaxed mb-4" style="color: var(--color-muted);">
                                Precision CNC machining solutions designed for complex and high-performance production projects.
                            </p>
                            <form action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post" class="space-y-4">
                                <input type="hidden" name="action" value="ulx_sidebar_quote" />
                                <?php wp_nonce_field( 'ulx_sidebar_quote', '_ulx_nonce' ); ?>
                                <div>
                                    <label class="block text-sm font-medium mb-1" style="color: var(--color-text);">
                                        Name <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" name="name" required
                                           class="w-full px-3 py-2 text-sm rounded-md border outline-none transition-colors focus:border-accent"
                                           style="border-color: var(--color-border); background-color: var(--color-surface);" />
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-1" style="color: var(--color-text);">
                                        Email <span class="text-red-500">*</span>
                                    </label>
                                    <input type="email" name="email" required
                                           class="w-full px-3 py-2 text-sm rounded-md border outline-none transition-colors focus:border-accent"
                                           style="border-color: var(--color-border); background-color: var(--color-surface);" />
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-1" style="color: var(--color-text);">
                                        Message <span class="text-red-500">*</span>
                                    </label>
                                    <textarea name="message" rows="4" required
                                              class="w-full px-3 py-2 text-sm rounded-md border outline-none transition-colors focus:border-accent resize-y"
                                              style="border-color: var(--color-border); background-color: var(--color-surface);"></textarea>
                                </div>
                                <button type="submit" class="btn-accent btn-sm">
                                    Submit
                                </button>
                            </form>
                        </div>
                    </div>


                </div><!-- /.sticky -->
            </aside><!-- /.sidebar -->

        </div><!-- /.grid -->
    </div><!-- /.container -->

<?php endwhile; ?>

</main>

<?php get_footer(); ?>
