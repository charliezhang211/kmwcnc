<?php
/**
 * Description Tab Panel — KMW CNC B2B
 *
 * Removes the default duplicate "Description" heading.
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

global $post;
?>

<div class="prose prose-sm max-w-none ulx-product-description"
     style="color: var(--color-text); line-height: 1.8;">
    <?php the_content(); ?>
</div>
