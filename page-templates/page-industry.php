<?php
/**
 * Template Name: Industry
 *
 * KMW CNC — Industry overview page.
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

get_header();
?>

<main id="primary">

    <!-- ① Hero Banner -->
    <section class="relative py-14 lg:py-20 text-white overflow-hidden">
        <img src="http://kmwcnc.com/wp-content/uploads/2025/12/industry-hub-page-banenr.webp"
             alt="" class="absolute inset-0 w-full h-full object-cover" aria-hidden="true" />
        <div class="absolute inset-0 bg-primary/80"></div>
        <div class="<?php ulx_container_class('relative z-10'); ?>">
            <?php ulx_breadcrumb(true); ?>
            <h1 class="text-4xl lg:text-5xl font-bold text-center mb-4" style="font-family: var(--font-heading);">
                Precision Manufacturing Solutions for Critical Industries
            </h1>
            <p class="text-center text-white/80 max-w-3xl mx-auto mb-8">
                From life-saving medical devices to automotive and robotics components, KMW CNC delivers ISO 9001 certified parts tailored to your industry's specific standards.
            </p>
            <div class="text-center">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent">
                    Get an Industry-Specific Quote
                </a>
            </div>
        </div>
    </section>

    <!-- ② Industries We Serve -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Industries We Serve
                </h2>
                <p class="text-muted max-w-3xl mx-auto">
                    Delivering precision manufacturing solutions tailored to the unique demands of your sector.
                </p>
            </div>

            <?php
            $industries = [
                [
                    'title' => 'Medical Devices',
                    'desc'  => 'ISO 13485-certified production for surgical instruments and implants with strict sterilization and finish control.',
                    'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/11/Medical-application.webp',
                    'link'  => '/industry/cnc-medical-parts/',
                ],
                [
                    'title' => 'Automotive & EV',
                    'desc'  => 'Rapid prototyping and volume production for EV battery housings, connectors, and transmission components.',
                    'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/11/Automotive-application.webp',
                    'link'  => '/industry/cnc-auto-parts/',
                ],
                [
                    'title' => 'Electronic Components',
                    'desc'  => 'CNC machined heat sinks, enclosures, and RFI shielding components ensuring optimal thermal performance.',
                    'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/11/CNC-Electronic-Components-application.webp',
                    'link'  => '/industry/cnc-electronic-components/',
                ],
                [
                    'title' => 'Industrial Hardware',
                    'desc'  => 'Durable fasteners, brackets, valves, and custom fittings for general industrial machinery and equipment.',
                    'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/11/CNC-Hardware-Parts-application.webp',
                    'link'  => '/industry/cnc-hardware-parts/',
                ],
                [
                    'title' => 'Robotics & Automation',
                    'desc'  => 'High-precision gears, joints, and end-effectors for industrial robots and collaborative automation systems.',
                    'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/11/Robotics-applocation.webp',
                    'link'  => '/industry/robotics-automation-parts/',
                ],
            ];
            ?>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <?php foreach ($industries as $item) : ?>
                    <a href="<?php echo esc_url(home_url($item['link'])); ?>" class="group bg-surface rounded-lg overflow-hidden border border-border/50 hover:shadow-lg transition-shadow">
                        <div class="aspect-[4/3] overflow-hidden">
                            <img src="<?php echo esc_url($item['img']); ?>" alt="<?php echo esc_attr($item['title']); ?>"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" />
                        </div>
                        <div class="p-5 text-center">
                            <h3 class="font-bold text-primary mb-2" style="font-family: var(--font-heading);">
                                <?php echo esc_html($item['title']); ?>
                            </h3>
                            <p class="text-sm text-muted leading-relaxed"><?php echo esc_html($item['desc']); ?></p>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ③ Why Industries Choose KMW -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <h2 class="text-3xl lg:text-4xl font-bold text-primary text-center mb-12" style="font-family: var(--font-heading);">
                Why Industries Choose KMW
            </h2>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                <?php
                $reasons = [
                    ['icon' => 'file-text',  'title' => 'Material Traceability', 'desc' => 'MTR Reports provided'],
                    ['icon' => 'check',      'title' => 'ISO 9001 Quality',      'desc' => 'Strict tolerance control'],
                    ['icon' => 'shield',     'title' => 'IP Protection',          'desc' => 'NDA for sensitive designs'],
                    ['icon' => 'globe',      'title' => 'Global Logistics',       'desc' => 'DDP Shipping available'],
                ];
                foreach ($reasons as $r) : ?>
                    <div class="text-center">
                        <div class="w-16 h-16 rounded-2xl bg-primary text-white flex items-center justify-center mx-auto mb-5">
                            <?php echo ulx_icon($r['icon'], 'w-7 h-7'); ?>
                        </div>
                        <h3 class="font-bold text-primary mb-1" style="font-family: var(--font-heading);">
                            <?php echo esc_html($r['title']); ?>
                        </h3>
                        <p class="text-sm text-muted"><?php echo esc_html($r['desc']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ④ CTA -->
    <section class="py-16 lg:py-20 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="relative rounded-xl overflow-hidden">
                <img src="https://kmwcnc.com/wp-content/uploads/2025/12/cnc-mancing.webp"
                     alt="" class="absolute inset-0 w-full h-full object-cover" aria-hidden="true" />
                <div class="absolute inset-0 bg-primary/85"></div>
                <div class="relative z-10 px-8 py-14 lg:px-16 lg:py-20 text-center">
                    <h2 class="text-2xl lg:text-3xl font-bold text-white mb-4" style="font-family: var(--font-heading);">
                        Not sure which process is right for your part?
                    </h2>
                    <p class="text-white/70 max-w-2xl mx-auto mb-8">
                        Upload your drawing, and our engineers will recommend the most cost-effective manufacturing method for you.
                    </p>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent">
                        Get a Recommendation & Quote
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
