<?php
/**
 * OEM / ODM CTA Section
 *
 * Highlights customization capabilities and links to OEM page.
 *
 * @package ULX
 */

$oem_page     = get_page_by_path('oem');
$oem_url      = $oem_page ? get_permalink($oem_page->ID) : home_url('/oem/');
$contact_page = get_page_by_path('contact');
$quote_url    = $contact_page ? get_permalink($contact_page->ID) : home_url('/contact/');

$capabilities = [
    __('Drawing & 3D File Review', 'ulx'),
    __('Prototype to Production', 'ulx'),
    __('50+ Materials Available', 'ulx'),
    __('Surface Finishing Options', 'ulx'),
    __('Custom Logo & Part Marking', 'ulx'),
    __('Low MOQ Available', 'ulx'),
];
?>

<section class="py-16 lg:py-24 relative overflow-hidden" style="background-color: var(--color-secondary);">
    <div class="<?php ulx_container_class(); ?>">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <!-- Left: Text -->
            <div>
                <p class="text-sm font-semibold uppercase tracking-widest mb-3" style="color: var(--color-accent);">
                    <?php esc_html_e('Custom Manufacturing', 'ulx'); ?>
                </p>
                <h2 class="text-3xl lg:text-4xl font-bold text-white mb-5 leading-tight">
                    <?php esc_html_e('One-Stop OEM / ODM Solutions for Your Brand', 'ulx'); ?>
                </h2>
                <p class="text-white/65 leading-relaxed mb-8">
                    <?php esc_html_e('From drawing to finished part — machining, finishing, and inspection handled in house. Whether you need a single prototype or a full production run, our engineering team delivers.', 'ulx'); ?>
                </p>
                <div class="flex flex-wrap gap-3">
                    <a href="<?php echo esc_url($quote_url); ?>" class="btn-accent">
                        <?php esc_html_e('Request OEM Quote', 'ulx'); ?>
                    </a>
                    <a href="<?php echo esc_url($oem_url); ?>"
                       class="inline-flex items-center justify-center h-11 px-6 text-sm font-semibold border border-white/30 text-white hover:bg-white/10 transition-colors"
                       style="border-radius: var(--btn-radius);">
                        <?php esc_html_e('Learn More', 'ulx'); ?>
                    </a>
                </div>
            </div>

            <!-- Right: Capabilities list -->
            <div class="grid grid-cols-2 gap-3">
                <?php foreach ($capabilities as $cap) : ?>
                <div class="flex items-center gap-3 p-4 rounded-lg" style="background-color: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1);">
                    <?php echo ulx_icon('check', 'w-4 h-4 flex-shrink-0'); ?>
                    <span class="text-sm font-medium text-white"><?php echo esc_html($cap); ?></span>
                </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</section>
