<?php
/**
 * Template Name: Thank You
 *
 * Shown after a successful inquiry form submission.
 *
 * @package ULX
 */

get_header();

$contact_page = get_page_by_path('contact');
$contact_url  = $contact_page ? get_permalink($contact_page->ID) : home_url('/contact/');
?>

<main id="primary">

    <!-- Hero -->
    <section class="relative py-16 lg:py-24 text-white overflow-hidden">
        <img src="http://kmwcnc.com/wp-content/uploads/2025/11/capabilities-banner.webp"
             alt="" class="absolute inset-0 w-full h-full object-cover" aria-hidden="true" />
        <div class="absolute inset-0 bg-primary/80"></div>
        <div class="<?php ulx_container_class('relative z-10 text-center'); ?>">

            <!-- Check icon -->
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-full mb-6"
                 style="background-color: color-mix(in srgb, var(--color-accent) 15%, transparent); border: 2px solid color-mix(in srgb, var(--color-accent) 40%, transparent);">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor" stroke-width="2.5" style="color: var(--color-accent);">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                </svg>
            </div>

            <p class="text-sm font-semibold uppercase tracking-widest mb-3" style="color: var(--color-accent);">
                <?php esc_html_e('Inquiry Received', 'ulx'); ?>
            </p>
            <h1 class="text-4xl lg:text-5xl font-bold leading-tight" style="font-family: var(--font-heading);">
                <?php esc_html_e('Thank You!', 'ulx'); ?>
            </h1>
            <p class="mt-4 text-white/70 max-w-lg mx-auto leading-relaxed">
                <?php esc_html_e('Your inquiry has been sent successfully. Our engineering team will review your requirements and get back to you within 24 hours.', 'ulx'); ?>
            </p>

        </div>
    </section>

    <!-- What happens next -->
    <section class="py-16 lg:py-20">
        <div class="<?php ulx_container_class(); ?>">
            <div class="max-w-2xl mx-auto">

                <h2 class="text-xl font-bold text-center mb-10" style="color: var(--color-primary); font-family: var(--font-heading);">
                    <?php esc_html_e('What Happens Next?', 'ulx'); ?>
                </h2>

                <ol class="space-y-6">
                    <?php
                    $steps = [
                        [
                            'title' => __('Technical Review', 'ulx'),
                            'desc'  => __('Our engineering team reviews your drawings, specs, and material requirements to ensure manufacturability.', 'ulx'),
                        ],
                        [
                            'title' => __('Custom Quote Prepared', 'ulx'),
                            'desc'  => __('We prepare a detailed quotation based on your part complexity, material, quantity, and surface finish requirements.', 'ulx'),
                        ],
                        [
                            'title' => __('We Reach Out', 'ulx'),
                            'desc'  => __('You will receive our quote by email within 24 hours. For urgent requests, contact us directly via phone or WhatsApp.', 'ulx'),
                        ],
                        [
                            'title' => __('Prototyping & Production', 'ulx'),
                            'desc'  => __('Once confirmed, we start with prototype samples (if needed) and proceed to full CNC production on your schedule.', 'ulx'),
                        ],
                    ];
                    foreach ($steps as $i => $step) : ?>
                        <li class="flex items-start gap-5">
                            <span class="w-9 h-9 rounded-full flex items-center justify-center text-sm font-bold flex-shrink-0 text-white"
                                  style="background-color: var(--color-accent);">
                                <?php echo esc_html($i + 1); ?>
                            </span>
                            <div class="pt-1">
                                <p class="font-semibold text-sm mb-0.5" style="color: var(--color-primary);">
                                    <?php echo esc_html($step['title']); ?>
                                </p>
                                <p class="text-sm leading-relaxed" style="color: var(--color-muted);">
                                    <?php echo esc_html($step['desc']); ?>
                                </p>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ol>

                <!-- Urgent contact -->
                <div class="mt-10 rounded-xl p-6 flex flex-col sm:flex-row items-start sm:items-center gap-4"
                     style="background-color: color-mix(in srgb, var(--color-primary) 5%, transparent); border: 1px solid var(--color-border);">
                    <div class="flex-1">
                        <p class="font-semibold text-sm mb-1" style="color: var(--color-primary);">
                            <?php esc_html_e('Need an urgent reply?', 'ulx'); ?>
                        </p>
                        <p class="text-sm" style="color: var(--color-muted);">
                            <?php esc_html_e('Call or WhatsApp us directly:', 'ulx'); ?>
                            <a href="tel:+8615889750371" class="font-medium hover:underline" style="color: var(--color-primary);">+86 15889750371</a>
                            &nbsp;/&nbsp;
                            <a href="https://wa.me/8615889750371" class="font-medium hover:underline" style="color: var(--color-primary);">WhatsApp: +86 15889750371</a>
                        </p>
                    </div>
                </div>

                <!-- CTA buttons -->
                <div class="mt-10 flex flex-col sm:flex-row gap-3 justify-center">
                    <a href="<?php echo esc_url(home_url('/capabilities/cnc-machining/')); ?>" class="btn-accent text-center justify-center">
                        <?php esc_html_e('Explore Our Capabilities', 'ulx'); ?>
                    </a>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-outline text-center justify-center">
                        <?php esc_html_e('Back to Home', 'ulx'); ?>
                    </a>
                </div>

            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
