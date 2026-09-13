<?php
/**
 * Product Loop Start
 *
 * Dynamic columns: 4 on desktop, 3 on tablet, 2 on mobile.
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

$columns = wc_get_loop_prop('columns', get_option('woocommerce_catalog_columns', 4));
?>
<ul class="products grid gap-5 list-none p-0 m-0
    <?php echo $columns >= 4 ? 'grid-cols-2 sm:grid-cols-3 lg:grid-cols-4' : 'grid-cols-2 sm:grid-cols-3'; ?>">
