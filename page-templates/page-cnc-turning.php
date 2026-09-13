<?php
/**
 * Template Name: CNC Turning Parts
 *
 * KMW CNC — CNC Turning Services & Turned Parts (capabilities sub-page).
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

get_header();
?>

<main id="primary">

    <!-- ① Hero Banner -->
    <section class="relative py-14 lg:py-20 text-white overflow-hidden">
        <img src="http://kmwcnc.com/wp-content/uploads/2025/12/cnc-turning-banner.webp"
             alt="" class="absolute inset-0 w-full h-full object-cover" aria-hidden="true" />
        <div class="absolute inset-0 bg-primary/80"></div>
        <div class="<?php ulx_container_class('relative z-10'); ?>">
            <?php ulx_breadcrumb(true); ?>
            <h1 class="text-4xl lg:text-5xl font-bold text-center mb-4" style="font-family: var(--font-heading);">
                Precision CNC Turning Services &amp; Turned Parts
            </h1>
            <p class="text-center text-white/80 max-w-3xl mx-auto mb-8">
                Expert CNC lathe machining for cylindrical parts, shafts, bushings, and complex turned components. Tolerances down to &plusmn;0.005mm. ISO 9001 certified.
            </p>
            <div class="text-center">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent">
                    Request a Turning Quote
                </a>
            </div>
        </div>
    </section>

    <!-- ② Intro -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class('text-center'); ?>">
            <h2 class="text-3xl lg:text-4xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                Expert CNC Lathe &amp; Turning Manufacturer
            </h2>
            <p class="text-muted max-w-3xl mx-auto leading-relaxed">
                KMW CNC specializes in precision CNC turning for round, cylindrical, and axially symmetric components. Equipped with multi-axis CNC lathes with live tooling and Swiss-type turning centers, we produce shafts, pins, bushings, connectors, and complex turned parts with exceptional accuracy and surface finish.
            </p>
        </div>
    </section>

    <!-- ③ Technical Specifications -->
    <section class="py-16 lg:py-20 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                        CNC Turning Technical Specifications
                    </h2>
                    <p class="text-muted leading-relaxed">
                        Explore our turning capacity, standard tolerances, and lathe equipment details. KMW CNC operates multi-axis CNC lathes with live tooling and Swiss-type turning centers to deliver precision cylindrical components for every industry.
                    </p>
                </div>

                <div class="overflow-x-auto rounded-lg border border-border/50">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th class="text-left px-5 py-3 font-semibold">Capability</th>
                                <th class="text-left px-5 py-3 font-semibold">Specification</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-border/50">
                            <tr class="bg-card">
                                <td class="px-5 py-3 font-medium text-text">Processes</td>
                                <td class="px-5 py-3 text-muted">CNC Turning, Mill-Turn, Swiss Turning, Multi-Axis Lathe</td>
                            </tr>
                            <tr class="bg-surface">
                                <td class="px-5 py-3 font-medium text-text">Max. Turning Diameter</td>
                                <td class="px-5 py-3 text-muted">Up to &Oslash;500mm</td>
                            </tr>
                            <tr class="bg-card">
                                <td class="px-5 py-3 font-medium text-text">Max. Length</td>
                                <td class="px-5 py-3 text-muted">Up to 1500mm</td>
                            </tr>
                            <tr class="bg-surface">
                                <td class="px-5 py-3 font-medium text-text">Tolerance</td>
                                <td class="px-5 py-3 text-muted">&plusmn;0.005mm (standard &plusmn;0.05mm)</td>
                            </tr>
                            <tr class="bg-card">
                                <td class="px-5 py-3 font-medium text-text">Surface</td>
                                <td class="px-5 py-3 text-muted">Ra 0.4 - 3.2 &mu;m (as-turned)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- ④ Our CNC Machining Expertise — Carousel -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <h2 class="text-2xl lg:text-3xl font-bold text-primary text-center mb-10" style="font-family: var(--font-heading);">
                Our CNC Machining Expertise
            </h2>

            <?php
            $expertise = [
                ['img' => 'http://kmwcnc.com/wp-content/uploads/2025/11/Aluminum-CNC-Parts.webp',      'title' => 'Aluminum CNC Parts',         'desc' => 'Lightweight and versatile. We machine standard grades like 6061 and 7075 for automotive, robotics, and industrial structural components.'],
                ['img' => 'http://kmwcnc.com/wp-content/uploads/2025/11/Stainless-Steel-Parts.webp',   'title' => 'Stainless Steel Parts',      'desc' => 'High tensile strength and corrosion resistance. Ideal for medical devices and marine applications using SS304 and SS316L.'],
                ['img' => 'http://kmwcnc.com/wp-content/uploads/2025/11/Brass-Bronze-Machining.webp',  'title' => 'Brass & Bronze Machining',   'desc' => 'Low friction and excellent electrical conductivity. Perfect for bushings, bearings, and electrical connectors.'],
                ['img' => 'http://kmwcnc.com/wp-content/uploads/2025/11/Machined-Plastic-Parts.webp',  'title' => 'Machined Plastic Parts',     'desc' => 'From PEEK to Delrin (POM). We machine complex plastic geometries without molds for rapid testing and insulation.'],
                ['img' => 'http://kmwcnc.com/wp-content/uploads/2025/11/5-Axis-Complex-Parts.webp',    'title' => '5-Axis Complex Parts',       'desc' => 'One-setup machining for the most challenging geometries. Reduces tolerance accumulation and speeds up production.'],
                ['img' => 'http://kmwcnc.com/wp-content/uploads/2025/11/Rapid-Prototyping-1.webp',     'title' => 'Rapid Prototyping',          'desc' => 'Fast turnaround (3 days) for functional prototypes. Validate your design before committing to expensive tooling.'],
                ['img' => 'http://kmwcnc.com/wp-content/uploads/2025/11/Low-Volume-Production.webp',   'title' => 'Low-Volume Production',      'desc' => 'Bridge production gaps with small batch runs (100-1000 pcs). No Minimum Order Quantity (MOQ) required.'],
                ['img' => 'http://kmwcnc.com/wp-content/uploads/2025/11/Anodized-Finished-Parts.webp', 'title' => 'Anodized & Finished Parts',  'desc' => 'Enhance durability and aesthetics. We offer Type II/III anodizing, powder coating, and bead blasting services.'],
            ];
            ?>
            <div class="ulx-carousel relative">
                <div class="overflow-hidden">
                    <div class="ulx-carousel-track flex gap-6 transition-transform duration-500 ease-in-out">
                        <?php foreach ($expertise as $item) : ?>
                            <div class="rounded-lg overflow-hidden bg-card border border-border/50 flex-shrink-0">
                                <div class="aspect-square overflow-hidden bg-surface">
                                    <img src="<?php echo esc_url($item['img']); ?>" alt="<?php echo esc_attr($item['title']); ?>"
                                         class="w-full h-full object-cover" loading="lazy" />
                                </div>
                                <div class="p-5 text-center">
                                    <h3 class="font-bold text-primary mb-2" style="font-family: var(--font-heading);"><?php echo esc_html($item['title']); ?></h3>
                                    <p class="text-sm text-muted leading-relaxed"><?php echo esc_html($item['desc']); ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- Nav buttons -->
                <button data-carousel="prev" class="absolute left-2 top-1/3 -translate-y-1/2 w-10 h-10 rounded bg-primary/70 text-white flex items-center justify-center hover:bg-primary transition-colors z-10" aria-label="Previous">
                    <?php echo ulx_icon('chevron-down', 'w-5 h-5 rotate-90'); ?>
                </button>
                <button data-carousel="next" class="absolute right-2 top-1/3 -translate-y-1/2 w-10 h-10 rounded bg-primary/70 text-white flex items-center justify-center hover:bg-primary transition-colors z-10" aria-label="Next">
                    <?php echo ulx_icon('chevron-down', 'w-5 h-5 -rotate-90'); ?>
                </button>
                <!-- Dots -->
                <div class="ulx-carousel-dots flex items-center justify-center gap-2 mt-6"></div>
            </div>
        </div>
    </section>

    <!-- ⑤ Complex Mill-Turn Capabilities -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="rounded-xl overflow-hidden">
                    <img src="http://kmwcnc.com/wp-content/uploads/2025/11/Complex-Parts-Section-1024x683.webp"
                         alt="Complex Mill-Turn Parts" class="w-full h-auto" loading="lazy" />
                </div>
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                        Complex Mill-Turn Capabilities
                    </h2>
                    <p class="text-muted leading-relaxed mb-6">
                        Our CNC turning centers with live tooling combine turning and milling operations in a single setup — eliminating re-fixturing, reducing cycle times, and ensuring tighter tolerances. Ideal for complex parts requiring cross-holes, flats, slots, and off-axis features on cylindrical workpieces.
                    </p>
                    <ul class="space-y-2 text-sm text-text">
                        <li class="flex items-start gap-2"><?php echo ulx_icon('check', 'w-4 h-4 text-accent flex-shrink-0 mt-0.5'); ?> Live tooling for milling, drilling, and tapping on lathe</li>
                        <li class="flex items-start gap-2"><?php echo ulx_icon('check', 'w-4 h-4 text-accent flex-shrink-0 mt-0.5'); ?> Y-axis and C-axis control for off-center features</li>
                        <li class="flex items-start gap-2"><?php echo ulx_icon('check', 'w-4 h-4 text-accent flex-shrink-0 mt-0.5'); ?> Sub-spindle for complete part machining in one setup</li>
                        <li class="flex items-start gap-2"><?php echo ulx_icon('check', 'w-4 h-4 text-accent flex-shrink-0 mt-0.5'); ?> Reduces tolerance accumulation from multiple setups</li>
                    </ul>
                    <div class="mt-6">
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent btn-sm">
                            <?php esc_html_e('Get a Quote', 'ulx'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ⑥ Precision Swiss Machining for Micro Parts -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="order-2 lg:order-1">
                    <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                        Precision Swiss Machining for Micro Parts
                    </h2>
                    <p class="text-muted leading-relaxed mb-6">
                        Our Swiss-type CNC turning centers are purpose-built for small-diameter, high-precision components. With guide bushing support and sliding headstock design, we achieve exceptional accuracy on long, slender parts — ideal for medical, electronics, and watchmaking applications.
                    </p>
                    <div class="space-y-2 text-sm text-text">
                        <ul class="space-y-2">
                            <li class="flex items-start gap-2"><?php echo ulx_icon('check', 'w-4 h-4 text-accent flex-shrink-0 mt-0.5'); ?> <strong>Micro-Turning:</strong> Parts as small as &Oslash;0.5mm with &plusmn;0.002mm accuracy.</li>
                            <li class="flex items-start gap-2"><?php echo ulx_icon('check', 'w-4 h-4 text-accent flex-shrink-0 mt-0.5'); ?> <strong>Bar Feed:</strong> Continuous bar-fed production for high-volume efficiency.</li>
                            <li class="flex items-start gap-2"><?php echo ulx_icon('check', 'w-4 h-4 text-accent flex-shrink-0 mt-0.5'); ?> <strong>Applications:</strong> Medical pins, electrical contacts, precision shafts, and connectors.</li>
                        </ul>
                    </div>
                    <div class="mt-6">
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent btn-sm">
                            <?php esc_html_e('Get a Quote', 'ulx'); ?>
                        </a>
                    </div>
                </div>
                <div class="order-1 lg:order-2 rounded-xl overflow-hidden">
                    <img src="http://kmwcnc.com/wp-content/uploads/2025/11/High-Speed-Efficiency-Large-Scale.webp"
                         alt="Swiss CNC Turning" class="w-full h-auto" loading="lazy" />
                </div>
            </div>
        </div>
    </section>

    <!-- ⑦ Materials Sourced for Performance -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="rounded-xl overflow-hidden">
                    <img src="http://kmwcnc.com/wp-content/uploads/2025/11/Material-Diversity-Section.webp"
                         alt="CNC Turning Materials" class="w-full h-auto" loading="lazy" />
                </div>
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                        Materials Sourced for Performance
                    </h2>
                    <p class="text-muted leading-relaxed mb-6">
                        We turn a wide range of metals and engineering plastics, sourced from certified suppliers with full material traceability. Whether you need free-machining brass for connectors or medical-grade titanium for implants, KMW CNC has your material covered.
                    </p>
                    <div class="space-y-2 text-sm text-text">
                        <p><strong>Key Materials:</strong></p>
                        <ul class="space-y-2">
                            <li class="flex items-start gap-2"><?php echo ulx_icon('check', 'w-4 h-4 text-accent flex-shrink-0 mt-0.5'); ?> Aluminum: 6061, 7075, 2024, 5052</li>
                            <li class="flex items-start gap-2"><?php echo ulx_icon('check', 'w-4 h-4 text-accent flex-shrink-0 mt-0.5'); ?> Stainless Steel: 303, 304, 316L, 17-4PH</li>
                            <li class="flex items-start gap-2"><?php echo ulx_icon('check', 'w-4 h-4 text-accent flex-shrink-0 mt-0.5'); ?> Brass: C360 (free-machining), C260, C270</li>
                            <li class="flex items-start gap-2"><?php echo ulx_icon('check', 'w-4 h-4 text-accent flex-shrink-0 mt-0.5'); ?> Titanium: Grade 2, Grade 5 (Ti-6Al-4V)</li>
                            <li class="flex items-start gap-2"><?php echo ulx_icon('check', 'w-4 h-4 text-accent flex-shrink-0 mt-0.5'); ?> Plastics: PEEK, POM (Delrin), Nylon, PTFE</li>
                        </ul>
                    </div>
                    <div class="mt-6">
                        <a href="<?php echo esc_url(home_url('/materials/')); ?>" class="btn-accent btn-sm">
                            <?php esc_html_e('View All Materials', 'ulx'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ⑧ The KMW CNC Advantage -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="order-2 lg:order-1">
                    <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                        The KMW CNC Advantage
                    </h2>
                    <p class="text-muted leading-relaxed mb-6">
                        What sets us apart from countless contract manufacturers: At KMW CNC, we combine engineering-driven manufacturing with global-grade quality. Our CNC turning processes and tooling setups are optimized in-house to minimize cycle time without sacrificing accuracy.
                    </p>
                    <div class="space-y-2 text-sm text-text">
                        <p><strong>Key Benefits:</strong></p>
                        <ul class="space-y-2">
                            <li class="flex items-start gap-2"><?php echo ulx_icon('check', 'w-4 h-4 text-accent flex-shrink-0 mt-0.5'); ?> <strong>Fast Turnaround:</strong> Prototypes in as fast as 1-3 days.</li>
                            <li class="flex items-start gap-2"><?php echo ulx_icon('check', 'w-4 h-4 text-accent flex-shrink-0 mt-0.5'); ?> <strong>Scalability:</strong> No MOQ, seamless transition to volume.</li>
                            <li class="flex items-start gap-2"><?php echo ulx_icon('check', 'w-4 h-4 text-accent flex-shrink-0 mt-0.5'); ?> <strong>Transparency:</strong> Real-time project updates and quality control.</li>
                        </ul>
                    </div>
                    <div class="mt-6">
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent btn-sm">
                            <?php esc_html_e('Contact Us', 'ulx'); ?>
                        </a>
                    </div>
                </div>
                <div class="order-1 lg:order-2 rounded-xl overflow-hidden">
                    <img src="http://kmwcnc.com/wp-content/uploads/2026/09/kmw-cnc-adv.webp"
                         alt="KMW CNC Advantage" class="w-full h-auto" loading="lazy" />
                </div>
            </div>
        </div>
    </section>

    <!-- ⑨ Surface Treatments -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-12">
                <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Surface Treatments for Function &amp; Aesthetics
                </h2>
                <p class="text-muted max-w-2xl mx-auto">
                    From enhancing rust-proofing to adding wear resistance, choose the perfect finish for your turned parts.
                </p>
            </div>

            <?php
            $treatments = [
                ['title' => 'As-Machined (Standard)',           'desc' => 'The most cost-effective option. CNC turned parts retain their natural, clean machined finish. Tolerances and surface roughness as specified (Ra 0.8-3.2μm typical).'],
                ['title' => 'Bead Blasting',                    'desc' => 'A uniform matte or satin finish produced by blasting glass beads or other media — removes tool marks and provides an elegant, professional look.'],
                ['title' => 'Anodizing Type II (Standard)',     'desc' => 'Protective oxide layer on aluminum parts. Available in multiple colors (black, blue, red, gold). Provides corrosion resistance and a decorative finish.'],
                ['title' => 'Anodizing Type III (Hardcoat)',    'desc' => 'Thicker, harder oxide layer for demanding applications. Excellent wear and corrosion resistance — ideal for automotive, robotics, and industrial equipment parts.'],
                ['title' => 'Powder Coating',                   'desc' => 'Durable, thick coating available in many colors. Applied electrostatically and cured under heat. Excellent for enclosures, brackets, and housing parts.'],
                ['title' => 'Electropolishing / Passivation',   'desc' => 'Electrochemical surface treatment for stainless steel parts. Smooths micro-irregularities, improves corrosion resistance, and creates a bright, sanitary finish.'],
            ];
            ?>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php foreach ($treatments as $t) : ?>
                    <div class="bg-surface rounded-lg p-6 border border-border/50">
                        <h3 class="font-bold text-primary mb-2 text-sm" style="font-family: var(--font-heading);">
                            <?php echo esc_html($t['title']); ?>
                        </h3>
                        <p class="text-sm text-muted leading-relaxed">
                            <?php echo esc_html($t['desc']); ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ⑩ CNC Machining Solutions for Critical Industries -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-12">
                <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    CNC Machining Solutions for Critical Industries
                </h2>
                <p class="text-muted max-w-3xl mx-auto">
                    From medical and automotive to electronics and robotics, our turned parts perform in the most demanding environments.
                </p>
            </div>

            <?php
            $industries = [
                [
                    'title' => 'CNC Medical Parts',
                    'desc'  => 'Surgical instruments, implant components, and diagnostic housings. Bio-compatible materials and finishes for healthcare applications.',
                    'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/11/Medical-application.webp',
                    'url'   => '/industry/cnc-medical-parts/',
                    'btn'   => 'Request Medical Quote',
                ],
                [
                    'title' => 'CNC Auto Parts',
                    'desc'  => 'Engine shafts, transmission components, custom connectors, and precision turned parts for complex automotive applications.',
                    'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/11/Automotive-application.webp',
                    'url'   => '/industry/cnc-auto-parts/',
                    'btn'   => 'Request Auto Quote',
                ],
                [
                    'title' => 'CNC Electronic Components',
                    'desc'  => 'Precision contacts, pins, and connectors for consumer electronics, telecom, and IoT devices.',
                    'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/11/CNC-Electronic-Components-application.webp',
                    'url'   => '/industry/cnc-electronic-components/',
                    'btn'   => 'Request Electronics Quote',
                ],
                [
                    'title' => 'CNC Hardware Parts',
                    'desc'  => 'Durable fasteners, standoffs, and custom hardware — hinges, threaded inserts, and precision turned components.',
                    'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/11/CNC-Hardware-Parts-application.webp',
                    'url'   => '/industry/cnc-hardware-parts/',
                    'btn'   => 'Request Hardware Quote',
                ],
                [
                    'title' => 'Robotics &amp; Automation',
                    'desc'  => 'Powering smart manufacturing. We produce precision shafts, couplings, and turned components for robotics and automation systems.',
                    'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/11/Robotics-applocation.webp',
                    'url'   => '/industry/robotics-automation-parts/',
                    'btn'   => 'Request Robotics Quote',
                ],
            ];
            ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                <?php foreach ($industries as $ind) : ?>
                    <div class="rounded-lg overflow-hidden bg-card border border-border/50">
                        <div class="aspect-[4/3] overflow-hidden">
                            <img src="<?php echo esc_url($ind['img']); ?>" alt="<?php echo esc_attr(wp_strip_all_tags($ind['title'])); ?>"
                                 class="w-full h-full object-cover" loading="lazy" />
                        </div>
                        <div class="p-5">
                            <h3 class="font-bold text-primary mb-2" style="font-family: var(--font-heading);">
                                <?php echo $ind['title']; ?>
                            </h3>
                            <p class="text-sm text-muted leading-relaxed mb-4"><?php echo esc_html($ind['desc']); ?></p>
                            <a href="<?php echo esc_url(home_url($ind['url'])); ?>"
                               class="inline-flex items-center gap-1 text-sm font-semibold text-accent hover:text-primary transition-colors">
                                <?php echo esc_html($ind['btn']); ?>
                                <?php echo ulx_icon('arrow-right', 'w-4 h-4'); ?>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ⑪ Engineering Excellence & Quality Assurance -->
    <section class="py-16 lg:py-20 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-10">
                <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Engineering Excellence &amp; Quality Assurance
                </h2>
                <p class="text-muted max-w-3xl mx-auto leading-relaxed">
                    From <strong>Free DFM Analysis (R&amp;D)</strong> to final CMM inspection, our engineering team ensures your design is optimized for cost-efficiency before production even begins. We operate under strict ISO 9001:2015 standards to guarantee zero defects.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="rounded-lg overflow-hidden aspect-[4/3]">
                    <img src="http://kmwcnc.com/wp-content/uploads/2025/11/VisualDesign-Check.webp" alt="Visual Design Check" class="w-full h-full object-cover" loading="lazy" />
                </div>
                <div class="rounded-lg overflow-hidden aspect-[4/3]">
                    <img src="http://kmwcnc.com/wp-content/uploads/2025/11/CMM-Inspection.webp" alt="CMM Inspection" class="w-full h-full object-cover" loading="lazy" />
                </div>
                <div class="rounded-lg overflow-hidden aspect-[4/3]">
                    <img src="http://kmwcnc.com/wp-content/uploads/2025/11/Manual-Measurement.webp" alt="Manual Measurement" class="w-full h-full object-cover" loading="lazy" />
                </div>
            </div>
        </div>
    </section>

    <!-- ⑫ Machining Capabilities by Material -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-6">
                <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Machining Capabilities by Material
                </h2>
                <p class="text-muted max-w-2xl mx-auto">
                    We keep over 50+ materials in stock. Select a material category to learn more about grades and properties.
                </p>
            </div>

            <?php
            $materials = [
                ['title' => 'CNC Aluminum Parts',         'desc' => 'Lightweight & corrosion-resistant. Ideal for automotive and electronics.',  'img' => 'http://kmwcnc.com/wp-content/uploads/2025/11/Aluminum-Parts.webp',           'url' => '/materials/cnc-aluminum-parts/'],
                ['title' => 'CNC Stainless Steel Parts',   'desc' => 'High strength and corrosion resistance for medical and food-grade parts.', 'img' => 'http://kmwcnc.com/wp-content/uploads/2025/11/Stainless-Steel-Parts-1.webp',   'url' => '/materials/cnc-stainless-steel-parts/'],
                ['title' => 'CNC Steel &amp; Alloy Parts', 'desc' => 'Carbon and alloy steels for high-load structural components.',              'img' => 'http://kmwcnc.com/wp-content/uploads/2025/12/Carbon-Alloy-Steel-.webp',      'url' => '/materials/cnc-steel-parts/'],
                ['title' => 'Brass &amp; Copper Parts',    'desc' => 'Excellent electrical conductivity and machinability for connectors.',       'img' => 'http://kmwcnc.com/wp-content/uploads/2025/11/Brass-Copper-Parts.webp',       'url' => '/materials/brass-copper-parts/'],
                ['title' => 'CNC Titanium Parts',          'desc' => 'High strength-to-weight ratio for medical and high-performance applications.',    'img' => 'http://kmwcnc.com/wp-content/uploads/2025/12/Titanium-Alloys.webp',          'url' => '/materials/cnc-titanium-parts/'],
                ['title' => 'Machined Plastic Parts',      'desc' => 'PEEK, Nylon, and POM for lightweight applications.',                       'img' => 'http://kmwcnc.com/wp-content/uploads/2025/11/Plastic-Composites.webp',       'url' => '/materials/machined-plastic-parts/'],
            ];
            ?>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-5 mt-10">
                <?php foreach ($materials as $mat) : ?>
                    <a href="<?php echo esc_url(home_url($mat['url'])); ?>"
                       class="group rounded-lg overflow-hidden bg-card border border-border/50 hover:shadow-md transition-shadow">
                        <div class="aspect-square overflow-hidden">
                            <img src="<?php echo esc_url($mat['img']); ?>" alt="<?php echo esc_attr(wp_strip_all_tags($mat['title'])); ?>"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" loading="lazy" />
                        </div>
                        <div class="p-3 text-center">
                            <h3 class="text-sm font-bold text-primary mb-1"><?php echo $mat['title']; ?></h3>
                            <p class="text-xs text-muted leading-relaxed"><?php echo $mat['desc']; ?></p>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ⑬ FAQ -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <h2 class="text-2xl lg:text-3xl font-bold text-primary text-center mb-10" style="font-family: var(--font-heading);">
                Frequently Asked Questions about CNC Turning
            </h2>

            <?php
            $faqs = [
                ['q' => 'What types of CNC turning services do you offer?',                  'a' => 'We offer CNC turning, mill-turn (live tooling), Swiss-type turning, and multi-axis lathe operations. Both prototype and production volumes for cylindrical, shaft-type, and complex rotational parts.'],
                ['q' => 'What tolerances can you achieve for turned parts?',                  'a' => 'Standard tolerance is ±0.05mm. For precision work, we achieve ±0.005mm on critical diameters and features. Surface finish from Ra 0.4μm to Ra 3.2μm depending on requirements.'],
                ['q' => 'What is the maximum part size you can turn?',                        'a' => 'We can turn parts up to Ø500mm diameter and 1500mm length. For Swiss turning, we handle diameters from Ø0.5mm to Ø32mm.'],
                ['q' => 'What file formats do you accept for quoting?',                       'a' => 'We accept STEP, STP, IGES, STL, DWG, DXF, PDF, and most major CAD formats. STEP files are preferred for the most accurate quoting.'],
                ['q' => 'Do you have a Minimum Order Quantity (MOQ)?',                        'a' => 'No MOQ. We handle everything from single prototypes to production runs of 100,000+ parts. Pricing is optimized based on volume.'],
                ['q' => 'What is your standard lead time?',                                   'a' => 'Prototypes: 3-5 business days. Production orders: 7-15 business days depending on complexity and volume. Rush service available for 1-3 day turnaround.'],
                ['q' => 'Can you do threading and knurling on turned parts?',                 'a' => 'Yes. We offer internal/external threading (metric, imperial, custom pitch), knurling, grooving, and other secondary operations as part of our CNC turning services.'],
                ['q' => 'Do you provide quality inspection reports?',                         'a' => 'Yes. Every order includes a dimensional inspection report. Full CMM reports, material certificates, and first article inspection (FAI) reports are available on request.'],
            ];
            ?>
            <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-4">
                <?php foreach ($faqs as $faq) : ?>
                    <div class="bg-surface rounded-lg border border-border/50">
                        <button class="flex items-center justify-between w-full p-4 text-left text-sm font-medium text-text" data-action="toggle-faq" aria-expanded="false">
                            <span><?php echo esc_html($faq['q']); ?></span>
                            <?php echo ulx_icon('chevron-down', 'w-4 h-4 flex-shrink-0 ml-2 transition-transform duration-200'); ?>
                        </button>
                        <div class="hidden px-4 pb-4">
                            <p class="text-sm text-muted leading-relaxed"><?php echo esc_html($faq['a']); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ⑭ CTA -->
    <section class="pb-16 lg:pb-20 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="relative rounded-xl overflow-hidden px-6 py-14 lg:py-20 text-center">
                <img src="http://kmwcnc.com/wp-content/uploads/2025/12/cnc-mancing.webp"
                     alt="" class="absolute inset-0 w-full h-full object-cover" aria-hidden="true" />
                <div class="absolute inset-0 bg-primary/85"></div>
                <div class="relative z-10">
                    <h2 class="text-2xl lg:text-3xl font-bold text-white mb-4" style="font-family: var(--font-heading);">
                        Start Your Turning Project Today
                    </h2>
                    <p class="text-white/70 max-w-2xl mx-auto mb-8">
                        Experience the KMW CNC difference. Upload your files today for a Free DFM Review and receive a competitive quote within 12 hours.
                    </p>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent">
                        Upload Your RFQ Files Now
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
