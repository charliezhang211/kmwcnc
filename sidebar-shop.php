<?php
/**
 * Shop Sidebar
 *
 * @package ULX
 */

if (!is_active_sidebar('sidebar-shop')) {
    return;
}
?>

<div class="space-y-6">
    <?php dynamic_sidebar('sidebar-shop'); ?>
</div>
