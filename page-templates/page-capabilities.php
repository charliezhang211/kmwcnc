<?php
/**
 * Template Name: Capabilities
 *
 * KMW CNC — Comprehensive Manufacturing Solutions overview page.
 * Links to all 9 capability sub-pages.
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

get_header();
?>

<main id="primary">

    <!-- ① Hero Banner -->
    <section class="relative py-14 lg:py-20 text-white overflow-hidden">
        <img src="http://kmwcnc.com/wp-content/uploads/2025/12/capacity-hero-banner.webp"
             alt="" class="absolute inset-0 w-full h-full object-cover" style="object-position: center 85%;" aria-hidden="true" />
        <div class="absolute inset-0 bg-primary/80"></div>
        <div class="<?php ulx_container_class('relative z-10'); ?>">
            <?php ulx_breadcrumb(true); ?>
            <h1 class="text-4xl lg:text-5xl font-bold text-center mb-4" style="font-family: var(--font-heading);">
                Comprehensive Manufacturing Solutions
            </h1>
            <p class="text-center text-white/80 max-w-2xl mx-auto mb-8">
                From rapid prototyping to mass production, KMW CNC is your one-stop shop for precision metal and plastic parts. ISO 9001 Certified.
            </p>
            <div class="text-center">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent">
                    Request a General Quote
                </a>
            </div>
        </div>
    </section>

    <!-- ② Core Manufacturing Capabilities -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-6">
                <h2 class="text-3xl lg:text-4xl font-bold text-primary" style="font-family: var(--font-heading);">
                    Core Manufacturing Capabilities
                </h2>
            </div>
            <p class="text-center text-muted max-w-3xl mx-auto mb-12">
                One-stop solution for complex metal and plastic parts. We combine advanced CNC Milling &amp; Turning, Die Casting, and Wire EDM precision to deliver prototypes and production runs with tolerances as tight as &plusmn;0.005mm
            </p>

            <?php
            $capabilities = [
                [
                    'title' => 'CNC Machining',
                    'desc'  => 'Custom precision machining solutions, offering tight tolerances from one-off prototypes to high-volume production.',
                    'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/12/cnc-mancing.webp',
                    'url'   => '/capabilities/cnc-machining/',
                ],
                [
                    'title' => 'CNC Milling Services',
                    'desc'  => '3, 4, and 5-axis milling for complex geometries and tight tolerances (+/- 0.005mm).',
                    'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/11/CNC-Milling-Services.webp',
                    'url'   => '/capabilities/cnc-milling-parts/',
                ],
                [
                    'title' => 'CNC Turning Services',
                    'desc'  => 'Precision lathe machining for cylindrical parts, shafts, and bushings with live tooling capabilities.',
                    'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/11/CNC-Turning-Services.webp',
                    'url'   => '/capabilities/cnc-turning-parts/',
                ],
                [
                    'title' => 'CNC Drilling Services',
                    'desc'  => 'Deep hole drilling, reaming, and threading services for varied industrial applications.',
                    'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/11/CNC-Drilling-Tapping.webp',
                    'url'   => '/capabilities/cnc-drilling-parts/',
                ],
                [
                    'title' => 'Wire EDM Services',
                    'desc'  => 'High-precision spark erosion for hard metals, complex shapes, and tight tolerances (+/- 0.003mm).',
                    'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/12/001Wire-EDM.webp',
                    'url'   => '/capabilities/wire-edm-services/',
                ],
                [
                    'title' => '5-Axis CNC Machining Services',
                    'desc'  => 'Complex geometries and multi-sided parts machined in a single setup for ultimate precision and reduced lead times.',
                    'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/12/5-Axis-CNC-Machining-Services.webp',
                    'url'   => '/capabilities/5-axis-cnc-machining-services/',
                ],
                [
                    'title' => 'Rapid Prototyping Services',
                    'desc'  => 'Accelerate product development with functional metal and plastic prototypes delivered in as fast as 1-3 days.',
                    'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/12/fastc-prototypes-.webp',
                    'url'   => '/capabilities/rapid-prototyping-services/',
                ],
                [
                    'title' => 'Die Casting Services',
                    'desc'  => 'Cost-effective solution for high-volume production of Aluminum and Zinc alloy parts.',
                    'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/11/Die-Casting.webp',
                    'url'   => '/capabilities/die-casting-services/',
                ],
                [
                    'title' => 'Custom Mold Services',
                    'desc'  => 'High-precision custom molds for plastic injection and die casting mass production.',
                    'img'   => 'http://kmwcnc.com/wp-content/uploads/2026/01/custom-mold-services.webp',
                    'url'   => '/capabilities/custom-mold-services/',
                ],
            ];
            ?>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                <?php foreach ($capabilities as $cap) : ?>
                    <a href="<?php echo esc_url(home_url($cap['url'])); ?>"
                       class="group bg-card rounded-lg overflow-hidden border border-border/50 shadow-sm hover:shadow-md transition-shadow">
                        <div class="aspect-[4/3] overflow-hidden">
                            <img src="<?php echo esc_url($cap['img']); ?>"
                                 alt="<?php echo esc_attr($cap['title']); ?>"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                 loading="lazy" />
                        </div>
                        <div class="p-5 text-center">
                            <h3 class="text-base font-bold text-primary mb-2" style="font-family: var(--font-heading);">
                                <?php echo esc_html($cap['title']); ?>
                            </h3>
                            <p class="text-sm text-muted leading-relaxed">
                                <?php echo esc_html($cap['desc']); ?>
                            </p>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ③ Why Choose KMW -->
    <section class="py-16 lg:py-20 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <h2 class="text-3xl lg:text-4xl font-bold text-primary text-center mb-12" style="font-family: var(--font-heading);">
                Why Choose KMW for Manufacturing?
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
                <?php
                $reasons = [
                    [
                        'icon'  => 'trophy',
                        'title' => 'ISO 9001 Certified',
                        'desc'  => 'Consistent quality management system ensuring reliable, repeatable results every time.',
                        'tag'   => 'CERTIFIED QMS',
                    ],
                    [
                        'icon'  => 'clipboard',
                        'title' => 'Free DFM Analysis',
                        'desc'  => 'We optimize your design for manufacturability and lower production costs.',
                        'tag'   => 'COST SAVINGS',
                    ],
                    [
                        'icon'  => 'package',
                        'title' => 'Global Shipping',
                        'desc'  => 'Door-to-door delivery worldwide via DHL/FedEx. We handle all customs clearance.',
                        'tag'   => 'DHL / FEDEX',
                    ],
                ];
                foreach ($reasons as $r) :
                ?>
                    <div class="rounded-xl p-6 lg:p-8 bg-surface border border-border/50">
                        <div class="w-12 h-12 rounded-lg flex items-center justify-center mb-4 bg-accent/10 text-accent">
                            <?php echo ulx_icon($r['icon'], 'w-6 h-6'); ?>
                        </div>
                        <h3 class="text-lg font-bold text-primary mb-2" style="font-family: var(--font-heading);">
                            <?php echo esc_html($r['title']); ?>
                        </h3>
                        <p class="text-sm text-muted leading-relaxed mb-4">
                            <?php echo esc_html($r['desc']); ?>
                        </p>
                        <span class="inline-block text-xs font-bold uppercase tracking-wider px-3 py-1.5 rounded bg-accent text-white">
                            <?php echo esc_html($r['tag']); ?>
                        </span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ④ CTA -->
    <section class="pb-16 lg:pb-20 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="relative rounded-xl overflow-hidden px-6 py-14 lg:py-20 text-center">
                <img src="http://kmwcnc.com/wp-content/uploads/2025/12/cnc-mancing.webp"
                     alt="" class="absolute inset-0 w-full h-full object-cover" aria-hidden="true" />
                <div class="absolute inset-0 bg-primary/85"></div>
                <div class="relative z-10">
                    <h2 class="text-2xl lg:text-3xl font-bold text-white mb-4" style="font-family: var(--font-heading);">
                        Not sure which process is right for your part?
                    </h2>
                    <p class="text-white/70 max-w-2xl mx-auto mb-8">
                        Upload your drawing, and our engineers will recommend the most cost-effective manufacturing method for you.
                    </p>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent">
                        Get a Recommendation &amp; Quote
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
