<?php
/**
 * No Results / Content None
 *
 * @package ULX
 */
?>

<div class="text-center py-16">
    <h2 class="text-xl font-semibold mb-4"><?php esc_html_e('Nothing found', 'ulx'); ?></h2>
    <p class="text-muted mb-6"><?php esc_html_e('It seems we can\'t find what you\'re looking for. Try a search?', 'ulx'); ?></p>
    <?php get_search_form(); ?>
</div>
