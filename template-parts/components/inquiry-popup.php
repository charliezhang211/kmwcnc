<?php
/**
 * Inquiry Popup — PDP Quote Request
 *
 * Mobile  : bottom sheet, slides up
 * Desktop : centered dialog, fixed 520px wide
 *
 * $args:
 *   product_name  string
 *   product_sku   string
 *   product_url   string
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

$product_name = $args['product_name'] ?? '';
$product_sku  = $args['product_sku']  ?? '';
$product_url  = $args['product_url']  ?? '';

$has_error = isset($_GET['inquiry']) && $_GET['inquiry'] === 'error';
$auto_open = $has_error;
?>

<style>
/* Mobile: slide up from bottom */
#ulx-inquiry-popup .ulx-popup-dialog {
    transform: translateY(100%);
    transition: transform 0.3s cubic-bezier(0.32, 0.72, 0, 1);
    max-height: 92dvh;
    max-height: 92vh;
}
/* Desktop: centered dialog with fixed width */
@media (min-width: 768px) {
    #ulx-inquiry-popup .ulx-popup-dialog {
        width: 560px !important;
        max-width: calc(100vw - 2rem) !important;
        border-radius: 16px !important;
        max-height: 88vh;
        transform: translateY(12px) scale(0.97);
        opacity: 0;
        transition: transform 0.22s ease, opacity 0.22s ease;
    }
}
#ulx-inquiry-popup:not(.hidden) .ulx-popup-dialog {
    transform: translateY(0) scale(1);
    opacity: 1;
}
#ulx-inquiry-popup {
    transition: opacity 0.2s ease;
}
#ulx-inquiry-popup.hidden {
    pointer-events: none;
}
</style>

<!-- ── Inquiry Popup ── -->
<div id="ulx-inquiry-popup"
     role="dialog"
     aria-modal="true"
     aria-labelledby="ulx-popup-title"
     data-auto-open="<?php echo $auto_open ? 'true' : 'false'; ?>"
     class="fixed inset-0 z-[9999] flex items-end md:items-center justify-center hidden"
     style="padding: 0;">

    <!-- Overlay -->
    <div id="ulx-popup-overlay"
         class="absolute inset-0"
         style="background: rgba(15,23,32,0.55); backdrop-filter: blur(4px);"></div>

    <!-- Dialog: mobile = bottom sheet, desktop = centered modal 560px -->
    <div class="ulx-popup-dialog relative bg-card flex flex-col overflow-hidden shadow-2xl"
         style="width: 100%; border-radius: 16px 16px 0 0;">

        <!-- Header -->
        <div class="flex items-center justify-between px-5 py-4 flex-shrink-0"
             style="background-color: var(--color-primary);">
            <div>
                <h2 id="ulx-popup-title" class="text-base font-semibold leading-tight" style="color: #fff;">
                    <?php esc_html_e('Request a Quote', 'ulx'); ?>
                </h2>
                <p class="text-xs mt-0.5" style="color: rgba(255,255,255,0.6);">
                    <?php esc_html_e('We respond within 24 hours', 'ulx'); ?>
                </p>
            </div>
            <button type="button"
                    id="ulx-popup-close"
                    class="w-8 h-8 flex items-center justify-center rounded-full transition-colors flex-shrink-0"
                    style="color: rgba(255,255,255,0.75);"
                    onmouseover="this.style.background='rgba(255,255,255,0.15)'"
                    onmouseout="this.style.background='transparent'"
                    aria-label="<?php esc_attr_e('Close', 'ulx'); ?>">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <!-- Scrollable body -->
        <div class="overflow-y-auto flex-1" style="background-color: var(--color-surface);">

            <!-- Product info -->
            <div class="px-5 pt-4">
                <div class="flex items-center gap-3 px-3.5 py-2.5 rounded-lg"
                     style="background: color-mix(in srgb, var(--color-primary) 5%, transparent); border: 1px solid color-mix(in srgb, var(--color-primary) 14%, transparent);">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" style="color: var(--color-accent);">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                    </svg>
                    <div class="min-w-0">
                        <p class="text-sm font-semibold truncate" style="color: var(--color-primary);">
                            <?php echo esc_html($product_name ?: __('Selected Product', 'ulx')); ?>
                        </p>
                        <?php if ($product_sku) : ?>
                            <p class="text-xs" style="color: var(--color-muted);">
                                <?php esc_html_e('Model:', 'ulx'); ?> <?php echo esc_html($product_sku); ?>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- Alerts -->
            <?php if ($has_error) : ?>
                <div class="mx-5 mt-4 p-3.5 rounded-lg text-sm font-medium"
                     style="background: rgba(239,68,68,0.08); color: rgb(185,28,28); border: 1px solid rgba(239,68,68,0.25);">
                    <?php esc_html_e('Something went wrong. Please try again or contact us by phone.', 'ulx'); ?>
                </div>
            <?php endif; ?>

            <!-- Form -->
            <form method="POST"
                  action="<?php echo esc_url(admin_url('admin-post.php')); ?>"
                  class="px-5 pt-4 pb-6 space-y-3.5"
                  novalidate>

                <input type="hidden" name="action"          value="ulx_inquiry_submit">
                <input type="hidden" name="ulx_product"     value="<?php echo esc_attr($product_name); ?>">
                <input type="hidden" name="ulx_product_sku" value="<?php echo esc_attr($product_sku); ?>">
                <input type="hidden" name="ulx_product_url" value="<?php echo esc_attr($product_url); ?>">
                <input type="hidden" name="ulx_source"      value="pdp_popup">
                <?php wp_nonce_field('ulx_inquiry_submit', 'ulx_inquiry_nonce'); ?>

                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-semibold mb-1.5 uppercase tracking-wide" style="color: var(--color-text);">
                            <?php esc_html_e('Your Name', 'ulx'); ?> <span class="text-red-500">*</span>
                        </label>
                        <input type="text" name="ulx_name" required class="input" placeholder="John Smith">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold mb-1.5 uppercase tracking-wide" style="color: var(--color-text);">
                            <?php esc_html_e('Company', 'ulx'); ?> <span class="text-red-500">*</span>
                        </label>
                        <input type="text" name="ulx_company" required class="input" placeholder="Acme Outdoors">
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-semibold mb-1.5 uppercase tracking-wide" style="color: var(--color-text);">
                            <?php esc_html_e('Email', 'ulx'); ?> <span class="text-red-500">*</span>
                        </label>
                        <input type="email" name="ulx_email" required class="input" placeholder="you@company.com">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold mb-1.5 uppercase tracking-wide" style="color: var(--color-text);">
                            <?php esc_html_e('Phone / WhatsApp', 'ulx'); ?>
                        </label>
                        <input type="tel" name="ulx_phone" class="input" placeholder="+1 555 000 0000">
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-semibold mb-1.5 uppercase tracking-wide" style="color: var(--color-text);">
                            <?php esc_html_e('Est. Quantity', 'ulx'); ?>
                        </label>
                        <select name="ulx_quantity" class="input">
                            <option value=""><?php esc_html_e('Select…', 'ulx'); ?></option>
                            <option value="Under 100"><?php esc_html_e('< 100 pcs', 'ulx'); ?></option>
                            <option value="100-500"><?php esc_html_e('100 – 500 pcs', 'ulx'); ?></option>
                            <option value="500-1000"><?php esc_html_e('500 – 1,000 pcs', 'ulx'); ?></option>
                            <option value="1000-5000"><?php esc_html_e('1,000 – 5,000 pcs', 'ulx'); ?></option>
                            <option value="5000+"><?php esc_html_e('5,000+ pcs', 'ulx'); ?></option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-semibold mb-1.5 uppercase tracking-wide" style="color: var(--color-text);">
                            <?php esc_html_e('Destination', 'ulx'); ?>
                        </label>
                        <input type="text" name="ulx_country" class="input" placeholder="e.g. United States">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-semibold mb-1.5 uppercase tracking-wide" style="color: var(--color-text);">
                        <?php esc_html_e('Additional Requirements', 'ulx'); ?>
                    </label>
                    <textarea name="ulx_message" rows="3" class="input h-auto py-2.5 resize-none"
                              placeholder="<?php esc_attr_e('Customization needs, target price, timeline, OEM details…', 'ulx'); ?>"></textarea>
                </div>

                <div class="pt-1">
                    <button type="submit" class="btn-accent w-full">
                        <?php esc_html_e('Send Inquiry', 'ulx'); ?>
                    </button>
                    <p class="text-xs text-center mt-2" style="color: var(--color-muted);">
                        <?php esc_html_e('Your information is kept strictly confidential.', 'ulx'); ?>
                    </p>
                </div>

            </form>
        </div><!-- /body -->
    </div><!-- /dialog -->
</div><!-- /popup -->

<script>
(function () {
    var popup    = document.getElementById('ulx-inquiry-popup');
    var overlay  = document.getElementById('ulx-popup-overlay');
    var closeBtn = document.getElementById('ulx-popup-close');

    if (!popup) return;

    function openPopup() {
        popup.classList.remove('hidden');
        // rAF so CSS transition fires after display change
        requestAnimationFrame(function () {
            popup.style.opacity = '1';
        });
        document.body.style.overflow = 'hidden';
        var first = popup.querySelector('input:not([type="hidden"])');
        if (first) setTimeout(function () { first.focus(); }, 80);
    }

    function closePopup() {
        popup.classList.add('hidden');
        popup.style.opacity = '';
        document.body.style.overflow = '';
    }

    document.querySelectorAll('[data-popup="ulx-inquiry"]').forEach(function (el) {
        el.addEventListener('click', function (e) {
            e.preventDefault();
            openPopup();
        });
    });

    if (closeBtn) closeBtn.addEventListener('click', closePopup);
    if (overlay)  overlay.addEventListener('click', closePopup);

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && !popup.classList.contains('hidden')) closePopup();
    });

    if (popup.dataset.autoOpen === 'true') {
        openPopup();
    }
})();
</script>
