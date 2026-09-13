<?php
/**
 * Single Product Tabs — KMW CNC B2B
 *
 * Clean underline-style tab navigation, Vanilla JS, no duplicate headings.
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

$product_tabs = apply_filters('woocommerce_product_tabs', []);

if (empty($product_tabs)) {
    return;
}

$first_key = array_key_first($product_tabs);
?>

<div class="ulx-product-tabs">

    <!-- Tab Nav -->
    <div class="flex gap-0 overflow-x-auto" style="border-bottom: 2px solid var(--color-border);" role="tablist">
        <?php foreach ($product_tabs as $key => $tab) : ?>
            <button
                type="button"
                role="tab"
                data-ulx-tab="<?php echo esc_attr($key); ?>"
                aria-controls="tab-panel-<?php echo esc_attr($key); ?>"
                aria-selected="<?php echo $key === $first_key ? 'true' : 'false'; ?>"
                class="ulx-tab-btn px-5 py-3 text-sm whitespace-nowrap font-medium transition-colors duration-150 bg-transparent border-b-2 -mb-[2px] focus:outline-none<?php echo $key === $first_key ? ' ulx-tab-active' : ''; ?>"
                style="border-color: <?php echo $key === $first_key ? 'var(--color-primary)' : 'transparent'; ?>; color: <?php echo $key === $first_key ? 'var(--color-primary)' : 'var(--color-muted)'; ?>;">
                <?php echo wp_kses_post(apply_filters('woocommerce_product_' . $key . '_tab_title', $tab['title'], $key)); ?>
            </button>
        <?php endforeach; ?>
    </div>

    <!-- Tab Panels -->
    <?php foreach ($product_tabs as $key => $tab) : ?>
        <div
            id="tab-panel-<?php echo esc_attr($key); ?>"
            role="tabpanel"
            data-ulx-panel="<?php echo esc_attr($key); ?>"
            class="ulx-tab-panel pt-8 pb-4<?php echo $key !== $first_key ? ' hidden' : ''; ?>">
            <?php
            if (isset($tab['callback'])) {
                call_user_func($tab['callback'], $key, $tab);
            }
            ?>
        </div>
    <?php endforeach; ?>

    <?php do_action('woocommerce_product_after_tabs'); ?>

</div>

<script>
(function () {
    const container = document.currentScript.closest('.ulx-product-tabs') ||
        document.querySelector('.ulx-product-tabs');
    if (!container) return;

    const buttons = container.querySelectorAll('[data-ulx-tab]');
    const panels  = container.querySelectorAll('[data-ulx-panel]');

    buttons.forEach(function (btn) {
        btn.addEventListener('click', function () {
            const target = btn.dataset.ulxTab;

            buttons.forEach(function (b) {
                const isActive = b.dataset.ulxTab === target;
                b.setAttribute('aria-selected', isActive ? 'true' : 'false');
                b.style.borderColor = isActive ? 'var(--color-primary)' : 'transparent';
                b.style.color       = isActive ? 'var(--color-primary)' : 'var(--color-muted)';
                b.classList.toggle('ulx-tab-active', isActive);
            });

            panels.forEach(function (p) {
                p.classList.toggle('hidden', p.dataset.ulxPanel !== target);
            });
        });
    });
})();
</script>
