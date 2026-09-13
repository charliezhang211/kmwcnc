<?php
/**
 * Custom Search Form
 *
 * @package ULX
 */
?>

<form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" class="relative max-w-xl mx-auto">
    <label class="sr-only" for="search-field"><?php esc_html_e('Search', 'ulx'); ?></label>
    <input
        type="search"
        id="search-field"
        name="s"
        placeholder="<?php esc_attr_e('Search products, articles...', 'ulx'); ?>"
        value="<?php echo get_search_query(); ?>"
        class="w-full h-12 pl-4 pr-12 bg-neutral-100 border-0 rounded-[var(--btn-radius)] text-sm text-text placeholder:text-muted focus:outline-none focus:ring-2 focus:ring-primary/20"
    />
    <button type="submit" class="absolute right-3 top-1/2 -translate-y-1/2 text-muted hover:text-primary transition-colors" aria-label="<?php esc_attr_e('Search', 'ulx'); ?>">
        <?php echo ulx_icon('search', 'w-5 h-5'); ?>
    </button>
</form>
