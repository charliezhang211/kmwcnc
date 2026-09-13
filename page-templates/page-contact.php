<?php
/**
 * Template Name: Contact
 *
 * KMW CNC contact / inquiry page.
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

get_header();
?>

<main id="primary">

    <!-- ① Page Hero Banner -->
    <section class="relative py-14 lg:py-20 text-white overflow-hidden">
        <img src="http://kmwcnc.com/wp-content/uploads/2025/12/cnc-mancing.webp"
             alt="" class="absolute inset-0 w-full h-full object-cover" aria-hidden="true" />
        <div class="absolute inset-0 bg-primary/80"></div>
        <div class="<?php ulx_container_class('relative z-10'); ?>">
            <?php ulx_breadcrumb(true); ?>
            <h1 class="text-4xl lg:text-5xl font-bold text-center" style="font-family: var(--font-heading);">
                Contact Us
            </h1>
        </div>
    </section>

    <!-- ② Main Content -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16">

                <!-- Left: Contact Info -->
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-8" style="font-family: var(--font-heading);">
                        How Can We Serve?
                    </h2>

                    <div class="space-y-1">
                        <?php
                        $contacts = [
                            [
                                'icon'  => 'email',
                                'title' => 'Email',
                                'text'  => '<a href="mailto:sales@kmwcnc.com" class="hover:text-primary transition-colors">sales@kmwcnc.com</a>',
                            ],
                            [
                                'icon'  => 'phone',
                                'title' => 'Phone Number',
                                'text'  => '<a href="tel:+8615889750371" class="hover:text-primary transition-colors">+86 15889750371</a>',
                            ],
                            [
                                'icon'  => 'whatsapp',
                                'title' => 'WhatsApp',
                                'text'  => '<a href="https://wa.me/8615889750371" target="_blank" rel="noopener" class="hover:text-primary transition-colors">+86 15889750371</a>',
                            ],
                            [
                                'icon'  => 'location',
                                'title' => 'Shenzhen Office',
                                'text'  => 'Building B, Jinhao Entrepreneurship Park, Dafu Industrial Zone, Guanlan, Longhua District, Shenzhen',
                            ],
                            [
                                'icon'  => 'location',
                                'title' => 'Hong Kong Office',
                                'text'  => 'RM 102, 1/F, THE CLOUD, 111 TUNG CHAU STREET, Tai Kok Tsui, Hong Kong',
                            ],
                        ];
                        foreach ($contacts as $c) :
                        ?>
                            <div class="flex items-start gap-4 p-5 rounded-lg hover:bg-card transition-colors">
                                <div class="w-11 h-11 rounded-full flex items-center justify-center flex-shrink-0 bg-primary text-white">
                                    <?php echo ulx_icon($c['icon'], 'w-5 h-5'); ?>
                                </div>
                                <div class="pt-0.5">
                                    <p class="text-sm font-bold text-text mb-0.5">
                                        <?php echo esc_html($c['title']); ?>
                                    </p>
                                    <p class="text-sm text-muted leading-relaxed">
                                        <?php
                                        // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                                        echo $c['text'];
                                        ?>
                                    </p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- What happens next -->
                    <div class="mt-8 rounded-xl p-6 bg-card border border-border/50">
                        <h3 class="font-bold text-sm uppercase tracking-wider text-primary mb-4">
                            What Happens Next?
                        </h3>
                        <?php
                        $steps = [
                            'We review your inquiry within 24 hours.',
                            'Our engineer provides DFM feedback and quote.',
                            'You confirm — we start production.',
                            'Quality inspection, then global shipping.',
                        ];
                        ?>
                        <ol class="space-y-3">
                            <?php foreach ($steps as $i => $step) : ?>
                                <li class="flex items-start gap-3 text-sm text-text">
                                    <span class="w-6 h-6 rounded-full flex items-center justify-center text-xs font-bold flex-shrink-0 text-white bg-accent">
                                        <?php echo esc_html($i + 1); ?>
                                    </span>
                                    <?php echo esc_html($step); ?>
                                </li>
                            <?php endforeach; ?>
                        </ol>
                    </div>
                </div>

                <!-- Right: Inquiry Form -->
                <div>
                    <div class="rounded-xl p-6 lg:p-10 bg-card border border-border/50 shadow-sm">
                        <h2 class="text-xl font-bold text-primary mb-6" style="font-family: var(--font-heading);">
                            Request a Quote
                        </h2>
                        <?php get_template_part('template-parts/components/inquiry-form'); ?>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ③ Map -->
    <section class="bg-surface pb-16">
        <div class="<?php ulx_container_class(); ?>">
            <div class="rounded-xl overflow-hidden border border-border/50 h-72 lg:h-96">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.5!2d114.0468!3d22.5635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjLCsDMzJzQ4LjYiTiAxMTTCsDAyJzQ4LjUiRQ!5e0!3m2!1sen!2shk!4v1"
                    class="w-full h-full border-0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="KMW CNC Shenzhen Office Location">
                </iframe>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
