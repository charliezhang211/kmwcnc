<?php
/**
 * Floating Contact — Quote + WhatsApp
 *
 * Desktop : labelled rail pinned to the right edge.
 * Mobile  : full-width bottom action bar.
 *
 * Two actions only — "Get a Quote" (opens the inquiry drawer) and WhatsApp.
 * On product pages the Quote button hands off to the PDP popup
 * (inquiry-popup.php) so the product context is submitted with the form.
 *
 * Styles are self-contained (only .input / .btn-accent come from the compiled
 * bundle) so the widget renders without a Vite rebuild.
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

$ulx_phone    = ulx_contact('phone');
$ulx_email    = ulx_contact('email');
$ulx_whatsapp = ulx_contact('whatsapp');

// Current URL — used for the WhatsApp prefill and as a hidden form field.
global $wp;
$ulx_current_url = home_url(isset($wp->request) && $wp->request !== '' ? user_trailingslashit($wp->request) : '/');

// Prefilled WhatsApp message carries the page the visitor came from.
$ulx_wa_text = sprintf(
    /* translators: 1: page title, 2: page URL */
    __("Hi KMW CNC, I'd like a quote for CNC machined parts.\nPage: %1\$s\n%2\$s", 'ulx'),
    wp_get_document_title(),
    $ulx_current_url
);
$ulx_wa_href = ulx_whatsapp_link($ulx_wa_text);

$ulx_has_error = isset($_GET['inquiry']) && $_GET['inquiry'] === 'error';
?>

<style id="ulx-fab-styles">
/* ── Desktop rail ─────────────────────────────────── */
.ulx-fab {
    position: fixed;
    right: 16px;
    top: 50%;
    transform: translateY(-50%);
    z-index: 90;
    width: 64px;
    border-radius: 12px;
    overflow: hidden;
    background: var(--color-card, #fff);
    box-shadow: 0 10px 32px rgba(20, 30, 50, 0.20);
    font-family: var(--font-body);
}
.ulx-fab-status {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 4px;
    height: 22px;
    background: var(--color-primary);
    color: rgba(255, 255, 255, 0.9);
    font-size: 8px;
    font-weight: 700;
    letter-spacing: 0.06em;
    text-transform: uppercase;
}
.ulx-fab-dot {
    width: 5px;
    height: 5px;
    border-radius: 50%;
    background: #34d399;
    box-shadow: 0 0 0 0 rgba(52, 211, 153, 0.7);
    animation: ulx-dot-pulse 2.2s ease-out infinite;
}
@keyframes ulx-dot-pulse {
    0%   { box-shadow: 0 0 0 0 rgba(52, 211, 153, 0.7); }
    70%  { box-shadow: 0 0 0 7px rgba(52, 211, 153, 0); }
    100% { box-shadow: 0 0 0 0 rgba(52, 211, 153, 0); }
}
.ulx-fab-btn {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 5px;
    width: 100%;
    padding: 11px 3px 10px;
    border: 0;
    color: #fff;
    text-align: center;
    text-decoration: none;
    cursor: pointer;
    transition: background-color 0.18s ease;
    -webkit-tap-highlight-color: transparent;
}
.ulx-fab-btn svg { width: 21px; height: 21px; }
.ulx-fab-btn span {
    font-size: 10px;
    font-weight: 700;
    line-height: 1.2;
    letter-spacing: 0;
}
.ulx-fab-btn:focus-visible {
    outline: 2px solid #fff;
    outline-offset: -4px;
}
.ulx-fab-btn--quote { background: var(--color-accent); }
.ulx-fab-btn--quote:hover { background: color-mix(in srgb, var(--color-accent) 87%, #000); }
.ulx-fab-btn--wa { background: #25D366; }
.ulx-fab-btn--wa:hover { background: #1EBE5B; }
.ulx-fab-hint {
    padding: 6px 3px;
    background: var(--color-card, #fff);
    color: var(--color-muted);
    font-size: 8.5px;
    font-weight: 600;
    line-height: 1.3;
    text-align: center;
    border-top: 1px solid var(--color-border);
}

/* ── Mobile bottom bar ────────────────────────────── */
@media (max-width: 767px) {
    body { padding-bottom: calc(58px + env(safe-area-inset-bottom, 0px)); }

    .ulx-fab {
        top: auto;
        right: 0;
        left: 0;
        bottom: 0;
        width: 100%;
        transform: none;
        border-radius: 0;
        display: flex;
        box-shadow: 0 -4px 20px rgba(20, 30, 50, 0.18);
        padding-bottom: env(safe-area-inset-bottom, 0px);
    }
    .ulx-fab-status,
    .ulx-fab-hint { display: none; }
    .ulx-fab-btn {
        flex: 1;
        flex-direction: row;
        gap: 8px;
        padding: 0;
        height: 58px;
    }
    .ulx-fab-btn svg { width: 20px; height: 20px; }
    .ulx-fab-btn span { font-size: 13px; letter-spacing: 0.02em; }
}

/* ── Drawer ───────────────────────────────────────── */
.ulx-drawer {
    position: fixed;
    inset: 0;
    z-index: 9998;
    display: flex;
    justify-content: flex-end;
    align-items: stretch;
    visibility: hidden;
    opacity: 0;
    transition: opacity 0.22s ease, visibility 0.22s;
}
.ulx-drawer.is-open { visibility: visible; opacity: 1; }
.ulx-drawer-overlay {
    position: absolute;
    inset: 0;
    background: rgba(15, 23, 32, 0.55);
    backdrop-filter: blur(4px);
}
.ulx-drawer-panel {
    position: relative;
    width: 420px;
    max-width: 100%;
    background: var(--color-surface);
    display: flex;
    flex-direction: column;
    box-shadow: -12px 0 40px rgba(15, 23, 32, 0.25);
    transform: translateX(100%);
    transition: transform 0.28s cubic-bezier(0.32, 0.72, 0, 1);
    font-family: var(--font-body);
}
.ulx-drawer.is-open .ulx-drawer-panel { transform: translateX(0); }

.ulx-drawer-head {
    flex-shrink: 0;
    background: var(--color-primary);
    color: #fff;
    padding: 20px;
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 12px;
}
.ulx-drawer-head h2 {
    font-family: var(--font-heading);
    font-size: 21px;
    font-weight: 700;
    line-height: 1.2;
    margin: 0;
    color: #fff;
}
.ulx-drawer-head p {
    margin: 6px 0 0;
    font-size: 13px;
    line-height: 1.45;
    color: rgba(255, 255, 255, 0.68);
}
.ulx-drawer-close {
    width: 32px;
    height: 32px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 0;
    border-radius: 999px;
    background: transparent;
    color: rgba(255, 255, 255, 0.78);
    cursor: pointer;
    transition: background-color 0.18s ease;
}
.ulx-drawer-close:hover { background: rgba(255, 255, 255, 0.15); }
.ulx-drawer-close svg { width: 20px; height: 20px; }

.ulx-drawer-body {
    flex: 1;
    overflow-y: auto;
    padding: 18px 20px 28px;
}

/* Trust points */
.ulx-trust {
    list-style: none;
    margin: 0 0 18px;
    padding: 14px 16px;
    background: var(--color-card);
    border: 1px solid var(--color-border);
    border-radius: 10px;
}
.ulx-trust li {
    display: flex;
    align-items: flex-start;
    gap: 9px;
    font-size: 12.5px;
    line-height: 1.5;
    color: var(--color-text);
}
.ulx-trust li + li { margin-top: 9px; }
.ulx-trust svg {
    width: 16px;
    height: 16px;
    flex-shrink: 0;
    margin-top: 1px;
    color: var(--color-accent);
}
.ulx-trust strong { font-weight: 700; }

.ulx-field { margin-bottom: 13px; }
.ulx-field label {
    display: block;
    margin-bottom: 6px;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.05em;
    text-transform: uppercase;
    color: var(--color-text);
}
.ulx-field .req { color: #ef4444; }
.ulx-field textarea.input {
    height: auto;
    padding-block: 10px;
    resize: vertical;
}
.ulx-field .ulx-hint {
    margin: 6px 0 0;
    font-size: 11.5px;
    line-height: 1.45;
    color: var(--color-muted);
}
.ulx-drawer-note {
    margin: 10px 0 0;
    font-size: 11.5px;
    text-align: center;
    color: var(--color-muted);
}
.ulx-drawer-alert {
    margin-bottom: 14px;
    padding: 12px;
    border-radius: 8px;
    font-size: 13px;
    font-weight: 500;
    background: rgba(239, 68, 68, 0.08);
    color: rgb(185, 28, 28);
    border: 1px solid rgba(239, 68, 68, 0.25);
}

/* WhatsApp fallback inside the drawer */
.ulx-drawer-alt {
    margin-top: 22px;
    padding-top: 18px;
    border-top: 1px solid var(--color-border);
    text-align: center;
}
.ulx-drawer-alt p {
    margin: 0 0 10px;
    font-size: 12.5px;
    color: var(--color-muted);
}
.ulx-wa-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 9px;
    width: 100%;
    height: 46px;
    border-radius: var(--btn-radius);
    background: #25D366;
    color: #fff;
    font-size: 14px;
    font-weight: 700;
    text-decoration: none;
    transition: background-color 0.18s ease;
}
.ulx-wa-btn:hover { background: #1EBE5B; }
.ulx-wa-btn svg { width: 19px; height: 19px; }

@media (max-width: 767px) {
    .ulx-drawer { align-items: flex-end; justify-content: center; }
    .ulx-drawer-panel {
        width: 100%;
        max-height: 92dvh;
        border-radius: 16px 16px 0 0;
        transform: translateY(100%);
        box-shadow: 0 -12px 40px rgba(15, 23, 32, 0.25);
    }
    .ulx-drawer.is-open .ulx-drawer-panel { transform: translateY(0); }
    .ulx-drawer-head h2 { font-size: 19px; }
}

@media (prefers-reduced-motion: reduce) {
    .ulx-fab-dot { animation: none; }
    .ulx-drawer,
    .ulx-drawer-panel { transition: none; }
}
</style>

<!-- ── Floating contact ── -->
<div class="ulx-fab" id="ulx-fab">

    <div class="ulx-fab-status">
        <span class="ulx-fab-dot" aria-hidden="true"></span>
        <span><?php esc_html_e('Online', 'ulx'); ?></span>
    </div>

    <button type="button"
            class="ulx-fab-btn ulx-fab-btn--quote"
            data-ulx-drawer-open>
        <?php echo ulx_icon('clipboard', 'w-6 h-6'); ?>
        <span><?php esc_html_e('Get a Quote', 'ulx'); ?></span>
    </button>

    <a href="<?php echo esc_url($ulx_wa_href); ?>"
       class="ulx-fab-btn ulx-fab-btn--wa"
       target="_blank"
       rel="noopener nofollow">
        <?php echo ulx_icon('whatsapp', 'w-6 h-6'); ?>
        <span><?php esc_html_e('WhatsApp', 'ulx'); ?></span>
    </a>

    <p class="ulx-fab-hint"><?php esc_html_e('Reply in 24h', 'ulx'); ?></p>
</div>

<!-- ── Inquiry drawer ── -->
<div class="ulx-drawer"
     id="ulx-inquiry-drawer"
     role="dialog"
     aria-modal="true"
     aria-labelledby="ulx-drawer-title"
     data-auto-open="<?php echo $ulx_has_error ? 'true' : 'false'; ?>">

    <div class="ulx-drawer-overlay" data-ulx-drawer-close></div>

    <div class="ulx-drawer-panel">

        <div class="ulx-drawer-head">
            <div>
                <h2 id="ulx-drawer-title"><?php esc_html_e('Get Your Free Quote', 'ulx'); ?></h2>
                <p><?php esc_html_e('Tell us what you need to machine. A real engineer — not a bot — replies within 24 hours.', 'ulx'); ?></p>
            </div>
            <button type="button"
                    class="ulx-drawer-close"
                    data-ulx-drawer-close
                    aria-label="<?php esc_attr_e('Close', 'ulx'); ?>">
                <?php echo ulx_icon('close', 'w-5 h-5'); ?>
            </button>
        </div>

        <div class="ulx-drawer-body">

            <ul class="ulx-trust">
                <li>
                    <?php echo ulx_icon('check', 'w-4 h-4'); ?>
                    <span><strong><?php esc_html_e('Free DFM review', 'ulx'); ?></strong> — <?php esc_html_e('we flag cost drivers before you tool up.', 'ulx'); ?></span>
                </li>
                <li>
                    <?php echo ulx_icon('check', 'w-4 h-4'); ?>
                    <span><strong><?php esc_html_e('Prototype to 10,000+ pcs', 'ulx'); ?></strong> — <?php esc_html_e('3/4/5-axis CNC, turning, EDM, die casting.', 'ulx'); ?></span>
                </li>
                <li>
                    <?php echo ulx_icon('check', 'w-4 h-4'); ?>
                    <span><strong><?php esc_html_e('Your drawings stay confidential', 'ulx'); ?></strong> — <?php esc_html_e('NDA signed on request.', 'ulx'); ?></span>
                </li>
            </ul>

            <?php if ($ulx_has_error) : ?>
                <div class="ulx-drawer-alert">
                    <?php esc_html_e('Something went wrong. Please try again or reach us on WhatsApp.', 'ulx'); ?>
                </div>
            <?php endif; ?>

            <form method="POST" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" novalidate>
                <input type="hidden" name="action" value="ulx_inquiry_submit">
                <input type="hidden" name="ulx_source" value="floating_widget">
                <input type="hidden" name="ulx_page_url" value="<?php echo esc_url($ulx_current_url); ?>">
                <?php wp_nonce_field('ulx_inquiry_submit', 'ulx_inquiry_nonce'); ?>

                <div class="ulx-field">
                    <label for="ulx-fab-name"><?php esc_html_e('Your Name', 'ulx'); ?> <span class="req">*</span></label>
                    <input type="text" id="ulx-fab-name" name="ulx_name" class="input" required placeholder="John Smith">
                </div>

                <div class="ulx-field">
                    <label for="ulx-fab-email"><?php esc_html_e('Work Email', 'ulx'); ?> <span class="req">*</span></label>
                    <input type="email" id="ulx-fab-email" name="ulx_email" class="input" required placeholder="you@company.com">
                </div>

                <div class="ulx-field">
                    <label for="ulx-fab-company"><?php esc_html_e('Company', 'ulx'); ?></label>
                    <input type="text" id="ulx-fab-company" name="ulx_company" class="input" placeholder="Acme Engineering">
                </div>

                <div class="ulx-field">
                    <label for="ulx-fab-phone"><?php esc_html_e('Phone / WhatsApp', 'ulx'); ?></label>
                    <input type="tel" id="ulx-fab-phone" name="ulx_phone" class="input" placeholder="+1 555 000 0000">
                </div>

                <div class="ulx-field">
                    <label for="ulx-fab-message"><?php esc_html_e('Your Requirements', 'ulx'); ?> <span class="req">*</span></label>
                    <textarea id="ulx-fab-message" name="ulx_message" rows="4" class="input" required
                              placeholder="<?php esc_attr_e('e.g. 500 pcs aluminum 6061 housings, ±0.02 mm, anodized black, needed in 4 weeks.', 'ulx'); ?>"></textarea>
                    <p class="ulx-hint">
                        <?php esc_html_e('The more detail — material, quantity, tolerance, finish, target price — the faster and sharper our quote.', 'ulx'); ?>
                    </p>
                </div>

                <button type="submit" class="btn-accent" style="width:100%;">
                    <?php esc_html_e('Send Inquiry', 'ulx'); ?>
                </button>
                <p class="ulx-drawer-note">
                    <?php
                    printf(
                        /* translators: %s: sales email address */
                        esc_html__('No spam, ever. Quotes come straight from %s.', 'ulx'),
                        esc_html($ulx_email)
                    );
                    ?>
                </p>
            </form>

            <div class="ulx-drawer-alt">
                <p><?php esc_html_e('Have drawings ready or need an answer now?', 'ulx'); ?></p>
                <a href="<?php echo esc_url($ulx_wa_href); ?>" class="ulx-wa-btn" target="_blank" rel="noopener nofollow">
                    <?php echo ulx_icon('whatsapp', 'w-5 h-5'); ?>
                    <span><?php echo esc_html(sprintf(__('Chat on WhatsApp %s', 'ulx'), $ulx_whatsapp)); ?></span>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
(function () {
    var drawer = document.getElementById('ulx-inquiry-drawer');
    if (!drawer) return;

    // Product pages ship their own popup with the product pre-filled — defer to it.
    var pdpPopup = document.getElementById('ulx-inquiry-popup');
    var lastFocus = null;

    function openDrawer() {
        lastFocus = document.activeElement;
        drawer.classList.add('is-open');
        document.body.style.overflow = 'hidden';
        var first = drawer.querySelector('input:not([type="hidden"])');
        if (first) setTimeout(function () { first.focus(); }, 120);
    }

    function closeDrawer() {
        drawer.classList.remove('is-open');
        document.body.style.overflow = '';
        if (lastFocus && lastFocus.focus) lastFocus.focus();
    }

    document.querySelectorAll('[data-ulx-drawer-open]').forEach(function (el) {
        el.addEventListener('click', function (e) {
            e.preventDefault();
            if (pdpPopup) {
                // Reuse the PDP popup so the product context is submitted.
                var trigger = document.querySelector('[data-popup="ulx-inquiry"]');
                if (trigger) { trigger.click(); return; }
            }
            openDrawer();
        });
    });

    drawer.querySelectorAll('[data-ulx-drawer-close]').forEach(function (el) {
        el.addEventListener('click', closeDrawer);
    });

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && drawer.classList.contains('is-open')) closeDrawer();
    });

    // Reopen after a failed submit — unless the PDP popup already auto-opens.
    if (drawer.dataset.autoOpen === 'true' && !pdpPopup) {
        openDrawer();
    }
})();
</script>
