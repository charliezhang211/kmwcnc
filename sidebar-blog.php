<?php
/**
 * Blog Sidebar
 *
 * @package ULX
 */

if (!is_active_sidebar('sidebar-blog')) {
    return;
}
?>

<div class="space-y-8">
    <?php dynamic_sidebar('sidebar-blog'); ?>
</div>
