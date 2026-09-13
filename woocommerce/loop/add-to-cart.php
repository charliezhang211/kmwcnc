<?php
/**
 * Loop Add to Cart — B2B replacement: "View Details" button
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

global $product;
?>

<a href="<?php echo esc_url(get_permalink($product->get_id())); ?>"
   class="ulx-loop-inquiry btn-accent btn-sm w-full flex items-center justify-center gap-1.5 mt-3">
    <?php esc_html_e('View Details', 'ulx'); ?>
</a>
