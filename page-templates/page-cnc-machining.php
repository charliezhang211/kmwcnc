<?php
/**
 * Template Name: CNC Machining
 *
 * KMW CNC — CNC Machining overview (capabilities sub-page).
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

get_header();
?>

<main id="primary">

    <!-- ① Hero Banner -->
    <section class="relative py-14 lg:py-20 text-white overflow-hidden">
        <img src="http://kmwcnc.com/wp-content/uploads/2025/11/capabilities-banner.webp"
             alt="" class="absolute inset-0 w-full h-full object-cover" aria-hidden="true" />
        <div class="absolute inset-0 bg-primary/80"></div>
        <div class="<?php ulx_container_class('relative z-10'); ?>">
            <?php ulx_breadcrumb(true); ?>
            <h1 class="text-4xl lg:text-5xl font-bold text-center mb-4" style="font-family: var(--font-heading);">
                Custom CNC Machining Parts Manufacturer
            </h1>
            <p class="text-center text-white/80 max-w-3xl mx-auto mb-8">
                ISO 9001 certified. CNC Milling, Turning, Wire EDM, 5-Axis CNC machining with tolerances as tight as &plusmn;0.005mm. From prototype to mass production.
            </p>
            <div class="text-center">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent">
                    Request a Machining Quote
                </a>
            </div>
        </div>
    </section>

    <!-- ② Intro -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class('text-center'); ?>">
            <h2 class="text-3xl lg:text-4xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                Your Trusted Manufacturer for High-Precision CNC Machining Parts
            </h2>
            <p class="text-muted max-w-3xl mx-auto leading-relaxed">
                As a professional manufacturer with ISO 9001 certification, KMW CNC is fully equipped with an advanced fleet of 3, 4, and 5-axis CNC machines. We combine long-range engineering knowledge with modern manufacturing technology to ensure every part meets your exact specifications.
            </p>
        </div>
    </section>

    <!-- ③ Our CNC Machining Expertise — Photo Grid -->
    <section class="pb-16 lg:pb-24 bg-card">
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

    <!-- ④ Mastering Geometric Complexity -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="rounded-xl overflow-hidden">
                    <img src="http://kmwcnc.com/wp-content/uploads/2025/11/Complex-Parts-Section-1024x683.webp"
                         alt="Complex CNC Parts" class="w-full h-auto" loading="lazy" />
                </div>
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                        Mastering Geometric Complexity
                    </h2>
                    <p class="text-muted leading-relaxed mb-6">
                        Whether it requires multi-angle machining, thin walls, or deep pockets — KMW CNC can handle it. Equipped with advanced 5-axis machining centers and live tooling lathes, we handle the most demanding geometries with tight tolerances and short lead times. Over 8,000 different parts produced.
                    </p>
                    <ul class="space-y-2 text-sm text-text">
                        <li class="flex items-start gap-2"><?php echo ulx_icon('check', 'w-4 h-4 text-accent flex-shrink-0 mt-0.5'); ?> Multi-angle simultaneous 5-axis machining</li>
                        <li class="flex items-start gap-2"><?php echo ulx_icon('check', 'w-4 h-4 text-accent flex-shrink-0 mt-0.5'); ?> Thin-wall processing down to 0.3mm</li>
                        <li class="flex items-start gap-2"><?php echo ulx_icon('check', 'w-4 h-4 text-accent flex-shrink-0 mt-0.5'); ?> 3-Axis/4-Axis/5-Axis: for complex surface and freeform machining</li>
                        <li class="flex items-start gap-2"><?php echo ulx_icon('check', 'w-4 h-4 text-accent flex-shrink-0 mt-0.5'); ?> Wire EDM for ultra-fine features and hard materials</li>
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

    <!-- ⑤ Integrated Manufacturing Processes -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="order-2 lg:order-1">
                    <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                        Integrated Manufacturing Processes
                    </h2>
                    <p class="text-muted leading-relaxed mb-6">
                        KMW CNC integrates CNC Milling, Turning, and Wire EDM to offer a complete manufacturing solution. Whether your part needs multiple operations, tight dimensional control, or specialized surface finishes — we handle it all under one roof.
                    </p>
                    <div class="space-y-2 text-sm text-text">
                        <p><strong>Key Capabilities:</strong></p>
                        <ul class="space-y-2">
                            <li class="flex items-start gap-2"><?php echo ulx_icon('check', 'w-4 h-4 text-accent flex-shrink-0 mt-0.5'); ?> CNC Milling: Complex features and 3D contours.</li>
                            <li class="flex items-start gap-2"><?php echo ulx_icon('check', 'w-4 h-4 text-accent flex-shrink-0 mt-0.5'); ?> CNC Turning: For shafts, pins, and circular geometries.</li>
                            <li class="flex items-start gap-2"><?php echo ulx_icon('check', 'w-4 h-4 text-accent flex-shrink-0 mt-0.5'); ?> Wire EDM: Ultra-fine details on hardened materials.</li>
                        </ul>
                    </div>
                    <div class="mt-6">
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent btn-sm">
                            <?php esc_html_e('Get a Quote', 'ulx'); ?>
                        </a>
                    </div>
                </div>
                <div class="order-1 lg:order-2 rounded-xl overflow-hidden">
                    <img src="http://kmwcnc.com/wp-content/uploads/2025/11/Integrated-Processes-Section.webp"
                         alt="Integrated Manufacturing" class="w-full h-auto" loading="lazy" />
                </div>
            </div>
        </div>
    </section>

    <!-- ⑥ Materials Sourced for Performance -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="rounded-xl overflow-hidden">
                    <img src="http://kmwcnc.com/wp-content/uploads/2025/11/Material-Diversity-Section.webp"
                         alt="CNC Materials" class="w-full h-auto" loading="lazy" />
                </div>
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                        Materials Sourced for Performance
                    </h2>
                    <p class="text-muted leading-relaxed mb-6">
                        We work with certified metal and plastic suppliers worldwide, offering Aluminum, Stainless Steel, Titanium, and commercial applications. From prototype to batch — KMW CNC has your material solution covered. We hold Intertek-verified BAFCO certification.
                    </p>
                    <div class="space-y-2 text-sm text-text">
                        <p><strong>Key Materials:</strong></p>
                        <ul class="space-y-2">
                            <li class="flex items-start gap-2"><?php echo ulx_icon('check', 'w-4 h-4 text-accent flex-shrink-0 mt-0.5'); ?> Aluminum: 6061, 7075, 2024, 5052</li>
                            <li class="flex items-start gap-2"><?php echo ulx_icon('check', 'w-4 h-4 text-accent flex-shrink-0 mt-0.5'); ?> Stainless Steel: 303, 304, 316, 17-4PH</li>
                            <li class="flex items-start gap-2"><?php echo ulx_icon('check', 'w-4 h-4 text-accent flex-shrink-0 mt-0.5'); ?> Titanium: Grade 2, Grade 5 (Ti-6Al-4V)</li>
                            <li class="flex items-start gap-2"><?php echo ulx_icon('check', 'w-4 h-4 text-accent flex-shrink-0 mt-0.5'); ?> Plastics: POM, PEEK, Nylon, PTFE, ABS</li>
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

    <!-- ⑦ The KMW CNC Advantage -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="order-2 lg:order-1">
                    <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                        The KMW CNC Advantage
                    </h2>
                    <p class="text-muted leading-relaxed mb-6">
                        What sets us apart from countless contract manufacturers: At KMW CNC, we combine engineering-driven manufacturing with global-grade quality. This means clamping setups and tool paths are optimized by our own engineers. The extensive clamping know and process library accelerates production time and quality by assembly.
                    </p>
                    <div class="space-y-2 text-sm text-text">
                        <p><strong>Key Benefits:</strong></p>
                        <ul class="space-y-2">
                            <li class="flex items-start gap-2"><?php echo ulx_icon('check', 'w-4 h-4 text-accent flex-shrink-0 mt-0.5'); ?> <strong>Precision:</strong> Tolerances as tight as &plusmn;0.005mm</li>
                            <li class="flex items-start gap-2"><?php echo ulx_icon('check', 'w-4 h-4 text-accent flex-shrink-0 mt-0.5'); ?> <strong>Scalability:</strong> No MOQ, seamless transition to volume.</li>
                            <li class="flex items-start gap-2"><?php echo ulx_icon('check', 'w-4 h-4 text-accent flex-shrink-0 mt-0.5'); ?> <strong>Transparency:</strong> Real-time project updates and DFM feedback.</li>
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

    <!-- ⑧ Surface Treatments -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-12">
                <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Surface Treatments for Function &amp; Aesthetics
                </h2>
                <p class="text-muted max-w-2xl mx-auto">
                    From enhancing rust-proofing to adding wear resistance, choose the perfect finish for your application.
                </p>
            </div>

            <?php
            $treatments = [
                ['title' => 'As-Machined (Standard)',           'desc' => 'The most cost-effective option. CNC parts retain their natural, clean machined finish. Tolerances and surface roughness as specified (Ra 0.8-3.2μm typical).'],
                ['title' => 'Bead Blasting',                    'desc' => 'A uniform matte or satin finish produced by blasting glass beads or other media — removes tool marks and provides an elegant, professional look.'],
                ['title' => 'Anodizing Type II (Standard)',     'desc' => 'Protective oxide layer on aluminum parts. Available in multiple colors (black, blue, red, gold). Provides corrosion resistance and a decorative finish.'],
                ['title' => 'Anodizing Type III (Hardcoat)',    'desc' => 'Thicker, harder oxide layer for demanding applications. Excellent wear and corrosion resistance — ideal for automotive, robotics, and industrial equipment parts. Black/dark finishes.'],
                ['title' => 'Powder Coating',                   'desc' => 'Durable, thick coating available in many colors. Applied electrostatically and cured under heat. Excellent for enclosures, brackets, and housing parts.'],
                ['title' => 'Electropolishing / Passivation',   'desc' => 'Electrochemical surface treatment for stainless steel parts. Smooths micro-irregularities, improves corrosion resistance, and creates a bright, sanitary finish.'],
            ];
            ?>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php foreach ($treatments as $t) : ?>
                    <div class="bg-card rounded-lg p-6 border border-border/50">
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

    <!-- ⑨ CNC Machining Solutions for Critical Industries -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-12">
                <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    CNC Machining Solutions for Critical Industries
                </h2>
                <p class="text-muted max-w-3xl mx-auto">
                    From medical and automotive to electronics and robotics, our parts perform in the most demanding environments.
                </p>
            </div>

            <?php
            $industries = [
                [
                    'title' => 'CNC Medical Parts',
                    'desc'  => 'Surgical instruments, implant components, and diagnostic housings. Bio-compatible materials and finishes. ISO 13485-compliant processes.',
                    'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/11/Medical-application.webp',
                    'url'   => '/industry/cnc-medical-parts/',
                    'btn'   => 'Request Medical Quote',
                ],
                [
                    'title' => 'CNC Auto Parts',
                    'desc'  => 'Engine components, transmission parts, custom connectors, and EV battery housings for complex automotive applications.',
                    'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/11/Automotive-application.webp',
                    'url'   => '/industry/cnc-auto-parts/',
                    'btn'   => 'Request Auto Quote',
                ],
                [
                    'title' => 'CNC Electronic Components',
                    'desc'  => 'Pioneering creative electronics with precision housings and connectors for consumer electronics, telecom, and IoT devices.',
                    'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/11/CNC-Electronic-Components-application.webp',
                    'url'   => '/industry/cnc-electronic-components/',
                    'btn'   => 'Request Electronics Quote',
                ],
                [
                    'title' => 'CNC Hardware Parts',
                    'desc'  => 'Durable brackets for general industrial applications — hinges, fasteners, housings, and custom hardware solutions.',
                    'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/11/CNC-Hardware-Parts-application.webp',
                    'url'   => '/industry/cnc-hardware-parts/',
                    'btn'   => 'Request Hardware Quote',
                ],
                [
                    'title' => 'Robotics &amp; Automation',
                    'desc'  => 'Powering smart manufacturing. We produce high-precision components for robotics, automation systems, and articulated arm assemblies.',
                    'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/11/Robotics-applocation.webp',
                    'url'   => '/industry/robotics-automation-parts/',
                    'btn'   => 'Request Robotics Quote',
                ],
            ];
            ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                <?php foreach ($industries as $ind) : ?>
                    <div class="rounded-lg overflow-hidden bg-surface border border-border/50">
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

    <!-- ⑩ Engineering Excellence & Quality Assurance -->
    <section class="py-16 lg:py-20 bg-surface">
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

    <!-- ⑪ Machining Capabilities by Material -->
    <section class="py-16 lg:py-24 bg-card">
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
                ['title' => 'CNC Titanium Parts',          'desc' => 'PEEK, nylon, and POM for lightweight applications.',                       'img' => 'http://kmwcnc.com/wp-content/uploads/2025/12/Titanium-Alloys.webp',          'url' => '/materials/cnc-titanium-parts/'],
                ['title' => 'Machined Plastic Parts',      'desc' => 'PEEK, Nylon, and POM for lightweight applications.',                       'img' => 'http://kmwcnc.com/wp-content/uploads/2025/11/Plastic-Composites.webp',       'url' => '/materials/machined-plastic-parts/'],
            ];
            ?>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-5 mt-10">
                <?php foreach ($materials as $mat) : ?>
                    <a href="<?php echo esc_url(home_url($mat['url'])); ?>"
                       class="group rounded-lg overflow-hidden bg-surface border border-border/50 hover:shadow-md transition-shadow">
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

    <!-- ⑫ FAQ -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <h2 class="text-2xl lg:text-3xl font-bold text-primary text-center mb-10" style="font-family: var(--font-heading);">
                Frequently Asked Questions about CNC Machining
            </h2>

            <?php
            $faqs = [
                ['q' => 'What machining processes do you offer?',                        'a' => 'We offer CNC Milling (3/4/5-axis), CNC Turning (with live tooling), Wire EDM, Die Casting, and Rapid Prototyping. All processes are available under one roof for integrated manufacturing.'],
                ['q' => 'What tolerances can you achieve?',                               'a' => 'Standard tolerance is ±0.05mm. For precision work, we achieve ±0.005mm on critical dimensions. Surface finish from Ra 0.4μm to Ra 3.2μm depending on requirements.'],
                ['q' => 'What surface finishes are available?',                           'a' => 'As-machined, bead blasting, anodizing (Type II & III), powder coating, electropolishing, passivation, nickel plating, chrome plating, and more.'],
                ['q' => 'What file formats do you accept for quoting?',                   'a' => 'We accept STEP, STP, IGES, STL, DWG, DXF, PDF, and most major CAD formats. STEP files are preferred for the most accurate quoting.'],
                ['q' => 'Do you have a Minimum Order Quantity (MOQ)?',                    'a' => 'No MOQ. We handle everything from single prototypes to production runs of 100,000+ parts. Pricing is optimized based on volume.'],
                ['q' => 'What is your standard lead time?',                               'a' => 'Prototypes: 3-5 business days. Production orders: 7-15 business days depending on complexity and volume. Rush service available for 1-3 day turnaround.'],
                ['q' => 'How do you ensure my IP (Intellectual Property) is safe?',       'a' => 'We sign NDAs before receiving any technical documents. All files are stored on encrypted servers with restricted access. We never share your designs with third parties.'],
                ['q' => 'Do you provide quality inspection reports?',                     'a' => 'Yes. Every order includes a dimensional inspection report. Full CMM reports, material certificates, and first article inspection (FAI) reports are available on request.'],
            ];
            ?>
            <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-4">
                <?php foreach ($faqs as $faq) : ?>
                    <div class="bg-card rounded-lg border border-border/50">
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

    <!-- ⑬ CTA -->
    <section class="pb-16 lg:pb-20 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <div class="relative rounded-xl overflow-hidden px-6 py-14 lg:py-20 text-center">
                <img src="http://kmwcnc.com/wp-content/uploads/2025/12/cnc-mancing.webp"
                     alt="" class="absolute inset-0 w-full h-full object-cover" aria-hidden="true" />
                <div class="absolute inset-0 bg-primary/85"></div>
                <div class="relative z-10">
                    <h2 class="text-2xl lg:text-3xl font-bold text-white mb-4" style="font-family: var(--font-heading);">
                        Turn Your CAD Designs into Precision Parts
                    </h2>
                    <p class="text-white/70 max-w-2xl mx-auto mb-8">
                        Experience KMW CNC. Upload your files today for a Free DFM Review and receive a competitive quote within 12 hours.
                    </p>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent">
                            Upload Your RFQ Files Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
