<?php
/**
 * Template Name: Rapid Prototyping Services
 *
 * KMW CNC — Rapid Prototyping & Low-Volume Production (capabilities sub-page).
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

get_header();
?>

<main id="primary">

    <!-- ① Hero Banner -->
    <section class="relative py-14 lg:py-20 text-white overflow-hidden">
        <img src="http://kmwcnc.com/wp-content/uploads/2025/12/fastc-prototypes-.webp"
             alt="" class="absolute inset-0 w-full h-full object-cover" aria-hidden="true" />
        <div class="absolute inset-0 bg-primary/80"></div>
        <div class="<?php ulx_container_class('relative z-10'); ?>">
            <?php ulx_breadcrumb(true); ?>
            <h1 class="text-4xl lg:text-5xl font-bold text-center mb-4" style="font-family: var(--font-heading);">
                Custom Rapid Prototyping &amp; Low-Volume Production
            </h1>
            <p class="text-center text-white/80 max-w-3xl mx-auto mb-8">
                From CAD design to physical part in as fast as 1-3 days. Verify your design with production-grade materials and functional prototypes before committing to mass production.
            </p>
            <div class="text-center">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent">
                    Request a Prototype Quote
                </a>
            </div>
        </div>
    </section>

    <!-- ② What is Rapid Prototyping? -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class('text-center'); ?>">
            <h2 class="text-3xl lg:text-4xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                What is Rapid Prototyping?
            </h2>
            <p class="text-muted max-w-4xl mx-auto leading-relaxed">
                Rapid Prototyping involves using advanced manufacturing technologies such as CNC Machining, 3D Printing, and Vacuum Casting to quickly fabricate physical parts. Unlike traditional manufacturing which requires expensive tooling and long lead times, rapid prototyping allows you to put a physical part in your hand in a matter of days. This process is critical for <strong>validating fit, and functionality</strong>, and identifying design flaws in a fast turnaround, eliminating mistakes in costly production.
            </p>
        </div>
    </section>

    <!-- ③ Why Choose KMW for Rapid Prototyping? -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-6" style="font-family: var(--font-heading);">
                        Why Choose KMW for Rapid Prototyping?
                    </h2>
                    <ul class="space-y-4 text-sm text-text">
                        <li class="flex items-start gap-3">
                            <?php echo ulx_icon('check', 'w-5 h-5 text-accent flex-shrink-0 mt-0.5'); ?>
                            <div><strong>1. Speed Without Compromise:</strong> We deliver functional prototypes in as fast as <strong>1-3 days</strong> for CNC machining prototypes. 3-5 days for 3D printed and vacuum cast parts.</div>
                        </li>
                        <li class="flex items-start gap-3">
                            <?php echo ulx_icon('check', 'w-5 h-5 text-accent flex-shrink-0 mt-0.5'); ?>
                            <div><strong>2. Production-Grade Materials:</strong> Unlike most prototype shops, we machine prototypes in the <strong>same materials</strong> as your final production parts — ensuring accurate real-world testing.</div>
                        </li>
                        <li class="flex items-start gap-3">
                            <?php echo ulx_icon('check', 'w-5 h-5 text-accent flex-shrink-0 mt-0.5'); ?>
                            <div><strong>3. Free DFM Analysis:</strong> Our engineers provide free Design for Manufacturability (DFM) analysis with every quote, helping you identify design improvements and cost savings.</div>
                        </li>
                        <li class="flex items-start gap-3">
                            <?php echo ulx_icon('check', 'w-5 h-5 text-accent flex-shrink-0 mt-0.5'); ?>
                            <div><strong>4. No Minimum Order Quantity (MOQ):</strong> Need just 1 part? No problem. We handle single prototypes to bridge production runs (1-500 pcs). Our flexible manufacturing process means fair per-unit pricing at every scale.</div>
                        </li>
                    </ul>
                </div>
                <div class="rounded-xl overflow-hidden">
                    <img src="http://kmwcnc.com/wp-content/uploads/2025/12/fastc-prototypes-.webp"
                         alt="Rapid Prototyping" class="w-full h-auto" loading="lazy" />
                </div>
            </div>
        </div>
    </section>

    <!-- ④ Comprehensive Prototyping Solutions -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-4">
                <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Comprehensive Prototyping Solutions
                </h2>
                <p class="text-muted max-w-3xl mx-auto">
                    We leverage a broad range of manufacturing technologies to deliver the perfect fit, finish, and functionality your project demands.
                </p>
            </div>

            <div class="text-center mb-10">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent">
                    Get a Instant Quote
                </a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Core Service — highlighted card -->
                <div class="bg-card rounded-lg p-6 border-2 border-accent flex flex-col relative">
                    <span class="absolute -top-3 left-4 inline-block text-xs font-bold uppercase tracking-wider px-3 py-1 rounded bg-accent text-white">Core Service</span>
                    <h3 class="font-bold text-primary mb-3" style="font-family: var(--font-heading);">
                        Rapid CNC Machining
                    </h3>
                    <p class="text-sm text-muted leading-relaxed">
                        The <strong>gold standard</strong> for functional prototypes. We machine real materials (metals &amp; plastics) with tight tolerances (<strong>&plusmn;0.05mm</strong>). Ideal for structural testing and fit-checks.
                    </p>
                </div>

                <div class="bg-card rounded-lg p-6 border border-border/50 flex flex-col">
                    <h3 class="font-bold text-primary mb-3" style="font-family: var(--font-heading);">
                        Industrial 3D Printing
                    </h3>
                    <p class="text-sm text-muted leading-relaxed">
                        Best for <strong>complex organic shapes</strong> and quick visual models. We offer SLA (smooth finish) for aesthetics and SLS (nylon) for durable, functional snap-fits.
                    </p>
                </div>

                <div class="bg-card rounded-lg p-6 border border-border/50 flex flex-col">
                    <h3 class="font-bold text-primary mb-3" style="font-family: var(--font-heading);">
                        Vacuum Casting
                    </h3>
                    <p class="text-sm text-muted leading-relaxed">
                        A cost-effective bridge to production for <strong>10-50 parts</strong>. We use silicone molds to create high-quality plastic parts that mimic injection molding textures and colors.
                    </p>
                </div>

                <div class="bg-card rounded-lg p-6 border border-border/50 flex flex-col">
                    <h3 class="font-bold text-primary mb-3" style="font-family: var(--font-heading);">
                        Sheet Metal Prototyping
                    </h3>
                    <p class="text-sm text-muted leading-relaxed">
                        <strong>Laser cutting and bending</strong> services to create brackets, enclosures, and chassis prototypes in days, without expensive hard tooling.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <!-- ⑤ From Concept To Prototype To Production -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-10">
                <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    From Concept To Prototype To Production
                </h2>
                <p class="text-muted max-w-3xl mx-auto">
                    Stop juggling multiple vendors. We guide you through every stage of the product development lifecycle. From validating your CAD designs to fine-tuning your production parts at scale, we are your dedicated manufacturing partner.
                </p>
            </div>

            <?php
            $stages = [
                [
                    'title' => 'Design & Engineering Support',
                    'desc'  => 'Our engineering team reviews your CAD files, provides comprehensive Design for Manufacturability (DFM) analysis, and suggests design improvements to reduce costs.',
                    'img'   => 'https://kmwcnc.com/wp-content/uploads/2025/12/step01-768x512.webp',
                ],
                [
                    'title' => 'Rapid Prototyping',
                    'desc'  => 'Single or small-batch prototype runs in production-grade materials. Validate form, fit and function before committing to production tooling.',
                    'img'   => 'https://kmwcnc.com/wp-content/uploads/2025/12/step02-768x512.webp',
                ],
                [
                    'title' => 'Low Volume & Mass Production',
                    'desc'  => 'Seamless transition from prototype to production. No minimum order quantity — we seamlessly transition to full volume production with guaranteed quality.',
                    'img'   => 'https://kmwcnc.com/wp-content/uploads/2025/12/step03-768x512.webp',
                ],
            ];
            ?>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <?php foreach ($stages as $s) : ?>
                    <div class="rounded-lg overflow-hidden bg-surface border border-border/50">
                        <div class="aspect-[4/3] overflow-hidden">
                            <img src="<?php echo esc_url($s['img']); ?>" alt="<?php echo esc_attr($s['title']); ?>"
                                 class="w-full h-full object-cover" loading="lazy" />
                        </div>
                        <div class="p-5">
                            <h3 class="font-bold text-primary mb-2" style="font-family: var(--font-heading);">
                                <?php echo esc_html($s['title']); ?>
                            </h3>
                            <p class="text-sm text-muted leading-relaxed"><?php echo esc_html($s['desc']); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ⑥ Rapid Prototype Manufacturing Capabilities -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-10">
                <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Rapid Prototype Manufacturing Capabilities
                </h2>
                <p class="text-muted max-w-3xl mx-auto">
                    If you're developing a new product or improving an existing one, here are the key manufacturing methods we offer for Rapid Prototyping, with surfacing principles. It accelerates your design concepts and gets your products to market faster.
                </p>
            </div>

            <?php
            $capabilities = [
                [
                    'title' => 'Rapid CNC Prototyping',
                    'desc'  => 'The gold standard for functional prototypes. Our machine aluminum, stainless steel, brass, Titanium, and plastic prototypes with tight tolerances from CAD files.',
                    'img'   => 'https://kmwcnc.com/wp-content/uploads/2025/12/Rapid-Prototype-Capabilities-001-768x512.webp',
                ],
                [
                    'title' => 'Industrial 3D Printing',
                    'desc'  => 'For complex geometries that are difficult to machine. SLA for smooth surfaces (Ra 1.6μm), SLS for strong nylon parts in full 3D shapes without any cutting.',
                    'img'   => 'https://kmwcnc.com/wp-content/uploads/2025/12/Rapid-Prototype-Capabilities-002-768x512.webp',
                ],
                [
                    'title' => 'Vacuum Casting',
                    'desc'  => 'Create production-quality parts from silicone molds. Ideal for small batches (10-50 pcs) with production-like surface finish for Aluminum and PU resin.',
                    'img'   => 'https://kmwcnc.com/wp-content/uploads/2025/12/Rapid-Prototype-Capabilities-003-768x512.webp',
                ],
                [
                    'title' => 'Sheet Metal Fabrication',
                    'desc'  => 'Our facilities also include laser cutting, bending, and welding for rapid sheet metal prototype production for enclosures, brackets and custom assemblies.',
                    'img'   => 'https://kmwcnc.com/wp-content/uploads/2025/12/Rapid-Prototype-Capabilities-004-768x512.webp',
                ],
                [
                    'title' => 'Rapid Injection Molding',
                    'desc'  => 'For production-intent plastic prototypes. Soft tooling in aluminum molds (half the lead time vs. steel) to validate the molding process for final production.',
                    'img'   => 'https://kmwcnc.com/wp-content/uploads/2025/12/Rapid-Prototype-Capabilities-005-768x512.webp',
                ],
                [
                    'title' => 'Rapid Die Casting',
                    'desc'  => 'Prototype die cast parts that simulate the casting process for Aluminum and Zinc alloys, reducing the waiting period from months to weeks.',
                    'img'   => 'https://kmwcnc.com/wp-content/uploads/2025/12/Rapid-Prototype-Capabilities-006-768x512.webp',
                ],
            ];
            ?>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php foreach ($capabilities as $cap) : ?>
                    <div class="rounded-lg overflow-hidden bg-card border border-border/50">
                        <div class="aspect-[4/3] overflow-hidden">
                            <img src="<?php echo esc_url($cap['img']); ?>" alt="<?php echo esc_attr($cap['title']); ?>"
                                 class="w-full h-full object-cover" loading="lazy" />
                        </div>
                        <div class="p-5">
                            <h3 class="font-bold text-primary mb-2" style="font-family: var(--font-heading);">
                                <?php echo esc_html($cap['title']); ?>
                            </h3>
                            <p class="text-sm text-muted leading-relaxed"><?php echo esc_html($cap['desc']); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ⑦ How To Choose The Right Rapid Prototyping Technique -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-10">
                <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    How To Choose The Right Rapid Prototyping Technique
                </h2>
                <p class="text-muted max-w-3xl mx-auto">
                    The "right" prototyping method is simply the one that best matches your <strong>budget, timeline</strong>, and <strong>project goals</strong>. Generally, higher-fidelity prototypes (those that perfectly match the final production part) cost more and take longer. Here's a quick guide:
                </p>
            </div>

            <?php
            $techniques = [
                [
                    'icon'  => 'check',
                    'title' => 'CNC Machining',
                    'when'  => 'You need functional testing in production-grade materials (metals, engineering plastics) with tight tolerances.',
                    'best'  => 'Best for: 1-50 pcs, functional validation, engineering testing.',
                ],
                [
                    'icon'  => 'check',
                    'title' => '3D Printing (SLA/SLS/MJF)',
                    'when'  => 'You need fast concept models or complex geometries not possible with CNC. Lower cost for visual and fit-check prototypes.',
                    'best'  => 'Best for: 1-20 pcs, concept validation, complex organic shapes.',
                ],
                [
                    'icon'  => 'check',
                    'title' => 'Vacuum Casting',
                    'when'  => 'You need production-like plastic or rubber parts without mold investment. Excellent surface finish and color matching.',
                    'best'  => 'Best for: 10-50 pcs, pre-production samples, marketing samples.',
                ],
                [
                    'icon'  => 'check',
                    'title' => 'Rapid Injection Molding',
                    'when'  => 'You need to validate the injection molding process itself. Soft aluminum tooling cuts lead time in half.',
                    'best'  => 'Best for: 50-5000 pcs, production-intent validation, bridge production.',
                ],
                [
                    'icon'  => 'check',
                    'title' => 'Sheet Metal Prototyping',
                    'when'  => 'You need metal enclosures, brackets, or panels. Laser cut + bend for fast turnaround.',
                    'best'  => 'Best for: 1-100 pcs, enclosures, brackets, structural parts.',
                ],
                [
                    'icon'  => 'check',
                    'title' => 'Rapid Die Casting',
                    'when'  => 'You need to simulate die cast production parts in aluminum or zinc before committing to steel tooling.',
                    'best'  => 'Best for: Pre-production testing, material validation for cast alloys.',
                ],
            ];
            ?>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php foreach ($techniques as $t) : ?>
                    <div class="bg-surface rounded-lg p-6 border border-border/50">
                        <div class="w-10 h-10 rounded-lg flex items-center justify-center mb-4 bg-accent/10 text-accent">
                            <?php echo ulx_icon($t['icon'], 'w-5 h-5'); ?>
                        </div>
                        <h3 class="font-bold text-primary mb-2 text-sm" style="font-family: var(--font-heading);">
                            <?php echo esc_html($t['title']); ?>
                        </h3>
                        <p class="text-sm text-muted leading-relaxed mb-2">
                            <?php echo esc_html($t['when']); ?>
                        </p>
                        <p class="text-xs font-semibold text-accent">
                            <?php echo esc_html($t['best']); ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ⑧ Rapid Prototype Solutions for Critical Industries -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-12">
                <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Rapid Prototype Solutions for Critical Industries
                </h2>
                <p class="text-muted max-w-3xl mx-auto">
                    From medical devices to automotive and robotics, our parts perform in the most demanding environments.
                </p>
            </div>

            <?php
            $industries = [
                [
                    'title' => 'CNC Medical Parts',
                    'desc'  => 'We provide ISO 13485-compliant machining for surgical instruments and implants. Our process ensures biocompatibility and sterility, utilizing medical-grade Titanium and Stainless Steel.',
                    'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/11/Medical-application.webp',
                    'url'   => '/industry/cnc-medical-parts/',
                    'btn'   => 'Get Medical Quote',
                ],
                [
                    'title' => 'CNC Auto Parts',
                    'desc'  => 'Accelerating the future of mobility. From lightweight aluminum EV battery housings to complex transmission parts, we support both rapid prototyping and mass production for Tier 1 suppliers.',
                    'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/11/Automotive-application.webp',
                    'url'   => '/industry/cnc-auto-parts/',
                    'btn'   => 'Get Auto Quote',
                ],
                [
                    'title' => 'CNC Electronic Components',
                    'desc'  => 'Powering sensitive electronics with precision. We produce custom heat sinks, enclosures, and RF connectors from Aluminum and Copper with excellent thermal conductivity.',
                    'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/11/CNC-Electronic-Components-application.webp',
                    'url'   => '/industry/cnc-electronic-components/',
                    'btn'   => 'Get Electronics Quote',
                ],
                [
                    'title' => 'CNC Hardware Parts',
                    'desc'  => 'Versatile solutions for general industrial applications. We produce custom fasteners, hinges, brackets, and more with cost-effective volume pricing.',
                    'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/11/CNC-Hardware-Parts-application.webp',
                    'url'   => '/industry/cnc-hardware-parts/',
                    'btn'   => 'Get Hardware Quote',
                ],
                [
                    'title' => 'Robotics &amp; Automation',
                    'desc'  => 'Powering smart manufacturing. We produce high-precision gears, couplet flanges, and robot arm components with exceptional accuracy and longevity.',
                    'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/11/Robotics-applocation.webp',
                    'url'   => '/industry/robotics-automation-parts/',
                    'btn'   => 'Get Robotics Quote',
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

    <!-- ⑨ Engineering Excellence & Quality Assurance -->
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

    <!-- ⑩ Machining Capabilities by Material -->
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

    <!-- ⑪ FAQ -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <h2 class="text-2xl lg:text-3xl font-bold text-primary text-center mb-10" style="font-family: var(--font-heading);">
                Frequently Asked Questions
            </h2>

            <?php
            $faqs = [
                ['q' => 'What is your standard lead time for prototypes?',                     'a' => 'CNC machined prototypes: 1-3 business days. 3D printed parts: 3-5 days. Vacuum casting: 5-7 days. Rush service available for same-day or next-day delivery on select processes.'],
                ['q' => 'Do you accept files for quoting?',                                    'a' => 'Yes. We accept STEP, STP, IGES, STL, DWG, DXF, PDF, and most major CAD formats. STEP files are preferred for the most accurate quoting.'],
                ['q' => 'Can you machine prototypes from the same material as my final part?', 'a' => 'Absolutely. Unlike 3D printing shops, we CNC machine prototypes in production-grade metals (aluminum, stainless steel, titanium, brass) and engineering plastics (PEEK, POM, Nylon).'],
                ['q' => 'How does the surface finish compare to production?',                  'a' => 'Our CNC prototypes achieve production-quality surface finishes (Ra 0.4-3.2μm). We also offer anodizing, bead blasting, powder coating, and other finishes on prototype parts.'],
                ['q' => 'Do you have a Minimum Order Quantity (MOQ)?',                         'a' => 'No MOQ. We handle single prototypes to bridge production runs. Our flexible manufacturing process ensures fair per-unit pricing at every scale.'],
                ['q' => 'Is CNC machining more expensive than 3D printing for prototypes?',    'a' => 'CNC is typically more expensive per part, but delivers production-grade materials, tighter tolerances, and better surface finish. For functional testing, CNC prototypes provide more reliable results.'],
                ['q' => 'How do you protect my intellectual property (IP)?',                   'a' => 'We sign NDAs before receiving any technical documents. All files are stored on encrypted servers with restricted access. We never share your designs with third parties.'],
                ['q' => 'What is the design-to-manufacturing turnaround?',                     'a' => 'From receiving your CAD file to shipping the finished prototype: as fast as 3-5 business days for CNC parts. Our DFM analysis is typically completed within 12 hours.'],
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

    <!-- ⑫ CTA -->
    <section class="pb-16 lg:pb-20 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="relative rounded-xl overflow-hidden px-6 py-14 lg:py-20 text-center">
                <img src="http://kmwcnc.com/wp-content/uploads/2025/12/cnc-mancing.webp"
                     alt="" class="absolute inset-0 w-full h-full object-cover" aria-hidden="true" />
                <div class="absolute inset-0 bg-primary/85"></div>
                <div class="relative z-10">
                    <h2 class="text-2xl lg:text-3xl font-bold text-white mb-4" style="font-family: var(--font-heading);">
                        Turn Your Ideas Into Reality Today
                    </h2>
                    <p class="text-white/70 max-w-2xl mx-auto mb-8">
                        Don't wait weeks for parts. Upload your CAD files now and get a quote within 12 hours. Speed up your innovation with KMW.
                    </p>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent">
                        Request Your Rapid Quote Now
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
