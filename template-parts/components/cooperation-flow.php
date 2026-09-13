<?php
/**
 * Cooperation Flow Section
 *
 * 5-step B2B cooperation process.
 *
 * @package ULX
 */

$steps = [
    [
        'num'   => '01',
        'title' => __('Send Inquiry', 'ulx'),
        'desc'  => __('Contact us with your product requirements, target quantity, and any customization needs.', 'ulx'),
    ],
    [
        'num'   => '02',
        'title' => __('Get Quotation', 'ulx'),
        'desc'  => __('We reply within 24 hours with a detailed quote including unit price, MOQ, and lead time.', 'ulx'),
    ],
    [
        'num'   => '03',
        'title' => __('Sample Confirmation', 'ulx'),
        'desc'  => __('We produce a pre-production sample for your approval. Revisions are made until you are satisfied.', 'ulx'),
    ],
    [
        'num'   => '04',
        'title' => __('Mass Production', 'ulx'),
        'desc'  => __('Once the sample is approved, we begin production with full quality inspections at each stage.', 'ulx'),
    ],
    [
        'num'   => '05',
        'title' => __('Delivery & After-Sales', 'ulx'),
        'desc'  => __('Products are shipped to your destination. We provide tracking and full after-sales support.', 'ulx'),
    ],
];

$contact_page = get_page_by_path('contact');
$quote_url    = $contact_page ? get_permalink($contact_page->ID) : home_url('/contact/');
?>

<section class="py-16 lg:py-24" style="background-color: var(--color-primary);">
    <div class="<?php ulx_container_class(); ?>">

        <!-- Heading -->
        <div class="text-center mb-14">
            <p class="text-sm font-semibold uppercase tracking-widest mb-2" style="color: var(--color-accent);">
                <?php esc_html_e('Simple & Transparent', 'ulx'); ?>
            </p>
            <h2 class="text-3xl lg:text-4xl font-bold text-white">
                <?php esc_html_e('How We Work Together', 'ulx'); ?>
            </h2>
        </div>

        <!-- Steps -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6 lg:gap-4 mb-12">
            <?php foreach ($steps as $i => $step) : ?>
            <div class="relative flex flex-col items-center text-center px-2">
                <!-- Number circle -->
                <div class="w-14 h-14 rounded-full flex items-center justify-center text-xl font-bold mb-4 flex-shrink-0 relative z-10"
                     style="background-color: var(--color-accent); color: #fff;">
                    <?php echo esc_html($step['num']); ?>
                </div>
                <!-- Connector line (hidden on last) -->
                <?php if ($i < count($steps) - 1) : ?>
                <div class="hidden lg:block absolute top-7 left-[calc(50%+28px)] right-0 h-px"
                     style="background-color: color-mix(in srgb, var(--color-accent) 30%, transparent);"></div>
                <?php endif; ?>

                <h3 class="text-base font-bold text-white mb-2">
                    <?php echo esc_html($step['title']); ?>
                </h3>
                <p class="text-sm leading-relaxed" style="color: rgba(255,255,255,0.6);">
                    <?php echo esc_html($step['desc']); ?>
                </p>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Bottom CTA -->
        <div class="text-center">
            <a href="<?php echo esc_url($quote_url); ?>" class="btn-accent btn-lg">
                <?php esc_html_e('Start Your Inquiry Now', 'ulx'); ?>
            </a>
        </div>

    </div>
</section>
