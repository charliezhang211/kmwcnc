<?php
/**
 * Template Tags
 *
 * Custom template tags for use in theme templates.
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

/**
 * Display post date
 */
function ulx_posted_on() {
    $time_string = '<time datetime="%1$s">%2$s</time>';
    printf(
        $time_string,
        esc_attr(get_the_date(DATE_W3C)),
        esc_html(get_the_date())
    );
}

/**
 * Display post author
 */
function ulx_posted_by() {
    printf(
        '<a href="%1$s" class="hover:text-primary transition-colors">%2$s</a>',
        esc_url(get_author_posts_url(get_the_author_meta('ID'))),
        esc_html(get_the_author())
    );
}

/**
 * Display post categories
 */
function ulx_post_categories( $link = true ) {
    $categories = get_the_category();
    if (!empty($categories)) {
        foreach ($categories as $cat) {
            if ( $link ) {
                printf(
                    '<a href="%1$s" class="inline-block text-xs font-semibold uppercase tracking-wider text-accent hover:text-primary transition-colors">%2$s</a>',
                    esc_url(get_category_link($cat->term_id)),
                    esc_html($cat->name)
                );
            } else {
                printf(
                    '<span class="inline-block text-xs font-semibold uppercase tracking-wider text-accent">%s</span>',
                    esc_html($cat->name)
                );
            }
        }
    }
}

/**
 * Display estimated reading time
 */
function ulx_reading_time() {
    $content = get_post_field('post_content', get_the_ID());
    $word_count = str_word_count(strip_tags($content));
    $reading_time = max(1, ceil($word_count / 200));
    printf(
        esc_html__('%d min read', 'ulx'),
        $reading_time
    );
}

/**
 * Display pagination
 */
function ulx_pagination() {
    the_posts_pagination([
        'mid_size'  => 2,
        'prev_text' => '&larr; ' . esc_html__('Previous', 'ulx'),
        'next_text' => esc_html__('Next', 'ulx') . ' &rarr;',
        'class'     => 'ulx-pagination',
    ]);
}

/**
 * Display post navigation (single post)
 */
function ulx_post_navigation() {
    the_post_navigation([
        'prev_text' => '<span class="text-xs text-muted uppercase tracking-wider">' . esc_html__('Previous', 'ulx') . '</span><span class="block text-text font-medium mt-1">%title</span>',
        'next_text' => '<span class="text-xs text-muted uppercase tracking-wider">' . esc_html__('Next', 'ulx') . '</span><span class="block text-text font-medium mt-1">%title</span>',
    ]);
}
