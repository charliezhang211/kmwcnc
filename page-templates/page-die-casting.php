<?php
/**
 * Template Name: Die Casting Services
 *
 * KMW CNC — Die Casting Services (capabilities sub-page).
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

get_header();
?>

<main id="primary">

    <!-- ① Hero Banner -->
    <section class="relative py-14 lg:py-20 text-white overflow-hidden">
        <img src="http://kmwcnc.com/wp-content/uploads/2025/12/Die-casting-background.webp"
             alt="" class="absolute inset-0 w-full h-full object-cover" aria-hidden="true" />
        <div class="absolute inset-0 bg-primary/80"></div>
        <div class="<?php ulx_container_class('relative z-10'); ?>">
            <?php ulx_breadcrumb(true); ?>
            <h1 class="text-4xl lg:text-5xl font-bold text-center mb-4" style="font-family: var(--font-heading);">
                Custom Aluminum &amp; Zinc Die Casting Services
            </h1>
            <p class="text-center text-white/80 max-w-3xl mx-auto mb-8">
                High-pressure die casting solutions for complex, high-volume metal parts. From mold design to post-machining. Casting force up to 2000 Tons.
            </p>
            <div class="text-center">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent">
                    Start a Die Casting Project
                </a>
            </div>
        </div>
    </section>

    <!-- ② Intro -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class('text-center'); ?>">
            <h2 class="text-3xl lg:text-4xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                High-Volume Production with Precision Molds
            </h2>
            <p class="text-muted max-w-4xl mx-auto leading-relaxed">
                KMW CNC specializes in <strong>High-Pressure Die Casting (HPDC)</strong>. We offer a complete "Start to Part" solution, ideal for producing complex, thin-walled metal parts with excellent surface finish and dimensional consistency at scale.
            </p>
        </div>
    </section>

    <!-- ③ Technical Specifications -->
    <section class="py-16 lg:py-20 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                        CNC Drilling Technical Specifications
                    </h2>
                    <p class="text-muted leading-relaxed">
                        Explore our machining capacity, standard tolerances, and equipment details.
                    </p>
                </div>

                <div class="overflow-x-auto rounded-lg border border-border/50">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th class="text-left px-5 py-3 font-semibold">Parameter</th>
                                <th class="text-left px-5 py-3 font-semibold">Die Casting Capability</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-border/50">
                            <tr class="bg-card">
                                <td class="px-5 py-3 font-medium text-text">Processes</td>
                                <td class="px-5 py-3 text-muted">HPDC (Hot &amp; Cold Chamber)</td>
                            </tr>
                            <tr class="bg-surface">
                                <td class="px-5 py-3 font-medium text-text">Clamping Force</td>
                                <td class="px-5 py-3 text-muted">160T to 2000T</td>
                            </tr>
                            <tr class="bg-card">
                                <td class="px-5 py-3 font-medium text-text">Max Part Weight</td>
                                <td class="px-5 py-3 text-muted">Up to 15kg (Aluminum)</td>
                            </tr>
                            <tr class="bg-surface">
                                <td class="px-5 py-3 font-medium text-text">Max. Size</td>
                                <td class="px-5 py-3 text-muted">800mm x 600mm x 300mm</td>
                            </tr>
                            <tr class="bg-card">
                                <td class="px-5 py-3 font-medium text-text">Tolerance</td>
                                <td class="px-5 py-3 text-muted">&plusmn;0.05mm (as-cast), &plusmn;0.01mm (post-machined)</td>
                            </tr>
                            <tr class="bg-surface">
                                <td class="px-5 py-3 font-medium text-text">Materials</td>
                                <td class="px-5 py-3 text-muted">Aluminum (A380, ADC12), Zinc (Zamak 3/5), Magnesium</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- ④ Our Die Casting Expertise — Carousel -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <h2 class="text-2xl lg:text-3xl font-bold text-primary text-center mb-10" style="font-family: var(--font-heading);">
                Our Die Casting Expertise
            </h2>

            <?php
            $expertise = [
                ['img' => 'https://kmwcnc.com/wp-content/uploads/2025/12/Aluminum-Die-Casting001.webp',       'title' => 'Aluminum Die Casting',        'desc' => 'Lightweight A380 & ADC12 alloys. Ideal for automotive parts and heat sinks due to excellent thermal conductivity.'],
                ['img' => 'https://kmwcnc.com/wp-content/uploads/2025/12/Zinc-Die-Casting-768x768.webp',      'title' => 'Zinc Die Casting',            'desc' => 'High ductility Zamak 3 & 5 alloys. Perfect for intricate shapes, thin walls, and parts requiring chrome plating.'],
                ['img' => 'https://kmwcnc.com/wp-content/uploads/2025/12/Powder-Coating-Painting-768x768.webp', 'title' => 'Powder Coating & Painting',   'desc' => 'Durable cosmetic finishes. We offer Powder Coating and Wet Painting in various colors to protect against corrosion.'],
                ['img' => 'https://kmwcnc.com/wp-content/uploads/2025/12/Complex-Housings-Covers-768x768.webp', 'title' => 'Complex Housings & Covers',   'desc' => 'Robust enclosures with complex internal geometries. Precision features are refined via CNC post-machining.'],
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
                <button data-carousel="prev" class="absolute left-2 top-1/3 -translate-y-1/2 w-10 h-10 rounded bg-primary/70 text-white flex items-center justify-center hover:bg-primary transition-colors z-10" aria-label="Previous">
                    <?php echo ulx_icon('chevron-down', 'w-5 h-5 rotate-90'); ?>
                </button>
                <button data-carousel="next" class="absolute right-2 top-1/3 -translate-y-1/2 w-10 h-10 rounded bg-primary/70 text-white flex items-center justify-center hover:bg-primary transition-colors z-10" aria-label="Next">
                    <?php echo ulx_icon('chevron-down', 'w-5 h-5 -rotate-90'); ?>
                </button>
                <div class="ulx-carousel-dots flex items-center justify-center gap-2 mt-6"></div>
            </div>
        </div>
    </section>

    <!-- ⑤ In-House Mold Design & Flow Analysis -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="rounded-xl overflow-hidden">
                    <img src="https://kmwcnc.com/wp-content/uploads/2025/12/In-House-Mold-Design-Flow-Analysis-1024x683.webp"
                         alt="Mold Design & Flow Analysis" class="w-full h-auto" loading="lazy" />
                </div>
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                        In-House Mold Design &amp; Flow Analysis
                    </h2>
                    <p class="text-muted leading-relaxed mb-6">
                        Great castings start with great molds. Our engineering team utilizes advanced <strong>Mold Flow Analysis</strong> simulation to predict fill patterns, identify potential porosity, and optimize gate placement — ensuring your first round of samples meets specification. Over 300 custom die cast molds delivered to 15+ countries worldwide.
                    </p>
                    <ul class="space-y-2 text-sm text-text">
                        <li class="flex items-start gap-2"><?php echo ulx_icon('check', 'w-4 h-4 text-accent flex-shrink-0 mt-0.5'); ?> <strong>Mold Flow Simulation:</strong> Simulating filling pattern to prevent air porosity.</li>
                        <li class="flex items-start gap-2"><?php echo ulx_icon('check', 'w-4 h-4 text-accent flex-shrink-0 mt-0.5'); ?> <strong>Mold Life:</strong> H13 tool steel molds with lifetime guarantees for 100,000+ shots.</li>
                        <li class="flex items-start gap-2"><?php echo ulx_icon('check', 'w-4 h-4 text-accent flex-shrink-0 mt-0.5'); ?> <strong>Fast Turnaround:</strong> Mold design and fabrication within 15-25 business days.</li>
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

    <!-- ⑥ Precision CNC Post-Machining -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="order-2 lg:order-1">
                    <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                        Precision CNC Post-Machining
                    </h2>
                    <p class="text-muted leading-relaxed mb-6">
                        Casting fills the shape, CNC machining perfects it. KMW CNC provides a complete "Casting + CNC" workflow, delivering precision-machined die cast parts as tight as &plusmn;0.01mm on critical surfaces.
                    </p>
                    <ul class="space-y-2 text-sm text-text">
                        <li class="flex items-start gap-2"><?php echo ulx_icon('check', 'w-4 h-4 text-accent flex-shrink-0 mt-0.5'); ?> CNC milling and drilling on die cast parts for tight tolerance features (H7 &amp; H6 bores)</li>
                        <li class="flex items-start gap-2"><?php echo ulx_icon('check', 'w-4 h-4 text-accent flex-shrink-0 mt-0.5'); ?> <strong>Hybrid Manufacturing:</strong> Combining the speed of casting with the precision of CNC.</li>
                        <li class="flex items-start gap-2"><?php echo ulx_icon('check', 'w-4 h-4 text-accent flex-shrink-0 mt-0.5'); ?> Deburring, tapping, and surface finishing included in our turnkey service.</li>
                    </ul>
                    <div class="mt-6">
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent btn-sm">
                            <?php esc_html_e('Get a Quote', 'ulx'); ?>
                        </a>
                    </div>
                </div>
                <div class="order-1 lg:order-2 rounded-xl overflow-hidden">
                    <img src="https://kmwcnc.com/wp-content/uploads/2025/12/Precision-CNC-Post-Machining-1024x683.webp"
                         alt="CNC Post-Machining" class="w-full h-auto" loading="lazy" />
                </div>
            </div>
        </div>
    </section>

    <!-- ⑦ High-Performance Aluminum & Zinc Alloys -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="rounded-xl overflow-hidden">
                    <img src="https://kmwcnc.com/wp-content/uploads/2025/12/High-Performance-Aluminum-Zinc-Alloys-1024x683.webp"
                         alt="Die Casting Alloys" class="w-full h-auto" loading="lazy" />
                </div>
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                        High-Performance Aluminum &amp; Zinc Alloys
                    </h2>
                    <p class="text-muted leading-relaxed mb-6">
                        We specialize in the two most popular die casting metals: <strong>Aluminum alloys (A380, ADC12)</strong> for lightweight structural parts with excellent thermal conductivity, and <strong>Zinc alloys (Zamak 3 &amp; 5)</strong> for intricate, thin-walled components with superior surface quality.
                    </p>
                    <div class="space-y-2 text-sm text-text">
                        <ul class="space-y-2">
                            <li class="flex items-start gap-2"><?php echo ulx_icon('check', 'w-4 h-4 text-accent flex-shrink-0 mt-0.5'); ?> <strong>Aluminum A380/ADC12:</strong> High-pressure casting, easy-to-plate Electroless/ENIG, long mold life.</li>
                            <li class="flex items-start gap-2"><?php echo ulx_icon('check', 'w-4 h-4 text-accent flex-shrink-0 mt-0.5'); ?> <strong>Zinc Zamak 3/5:</strong> High precision casting, easy to plate Chrome/Nickel/Gold, long mold life.</li>
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

    <!-- ⑧ Unmatched Scalability & Cost Efficiency -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="order-2 lg:order-1">
                    <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                        Unmatched Scalability &amp; Cost Efficiency
                    </h2>
                    <p class="text-muted leading-relaxed mb-6">
                        From 500 to over 500,000 parts per run, <strong>die casting drops significantly</strong> as volume increases. Our automated die casting cells with robotic trim presses and conveyor systems deliver consistent quality at industrial speed, making it the most economical choice for medium-to-high-volume production.
                    </p>
                    <div class="space-y-2 text-sm text-text">
                        <ul class="space-y-2">
                            <li class="flex items-start gap-2"><?php echo ulx_icon('check', 'w-4 h-4 text-accent flex-shrink-0 mt-0.5'); ?> <strong>Low Unit Cost:</strong> Up to 60-70% cheaper than CNC machining for high volumes.</li>
                            <li class="flex items-start gap-2"><?php echo ulx_icon('check', 'w-4 h-4 text-accent flex-shrink-0 mt-0.5'); ?> <strong>Fast Cycle Times:</strong> 30-90 seconds per shot for rapid mass production.</li>
                            <li class="flex items-start gap-2"><?php echo ulx_icon('check', 'w-4 h-4 text-accent flex-shrink-0 mt-0.5'); ?> <strong>Near-Net Shape:</strong> Minimal post-machining, reducing material waste and cost.</li>
                        </ul>
                    </div>
                    <div class="mt-6">
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent btn-sm">
                            <?php esc_html_e('Get a Quote', 'ulx'); ?>
                        </a>
                    </div>
                </div>
                <div class="order-1 lg:order-2 rounded-xl overflow-hidden">
                    <img src="https://kmwcnc.com/wp-content/uploads/2025/12/Unmatched-Scalability-Cost-Efficiency-1024x683.webp"
                         alt="Scalability & Cost Efficiency" class="w-full h-auto" loading="lazy" />
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
                    From enhancing rust-proofing to adding wear resistance, choose the perfect finish for your application.
                </p>
            </div>

            <?php
            $treatments = [
                ['title' => 'Shot Blasting / Sandblasting',       'desc' => 'Removes casting flash and creates a uniform matte texture. Essential pre-treatment before painting or powder coating.'],
                ['title' => 'Powder Coating',                     'desc' => 'Durable, thick coating in many colors. Electrostatically applied and heat-cured for long-lasting protection against corrosion and UV.'],
                ['title' => 'Painting (Electrocoating)',          'desc' => 'Wet spray or E-coat for thin, even paint coverage. Ideal for cosmetic parts requiring specific color matching and branding.'],
                ['title' => 'Chrome / Nickel Plating',            'desc' => 'Premium mirror-like or satin chrome finishes. Excellent for zinc die cast parts requiring a decorative, high-end appearance.'],
                ['title' => 'Wet Painting',                       'desc' => 'Full range of RAL / Pantone colors. Applied in our in-house spray booth. Suitable for both single-color and multi-color cosmetic parts.'],
                ['title' => 'Anodizing (Aluminum)',                'desc' => 'Type II and Type III anodizing for aluminum die cast parts. Enhances corrosion resistance and allows decorative color dyeing.'],
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
                ['title' => 'Aluminum Alloys',             'desc' => 'A380, ADC12. Lightweight, excellent thermal conductivity, and cost-effective mass production.',     'img' => 'https://kmwcnc.com/wp-content/uploads/2025/11/Aluminum-Parts-768x768.webp',            'url' => '/materials/cnc-aluminum-parts/'],
                ['title' => 'Zinc Alloys',                 'desc' => 'Zamak 3 & 5. Superior casting detail, thin walls, and excellent chrome plating compatibility.',     'img' => 'https://kmwcnc.com/wp-content/uploads/2025/12/Zinc-Die-Casting-1-768x768.webp',         'url' => '/materials/cnc-stainless-steel-parts/'],
                ['title' => 'Magnesium Alloys',            'desc' => 'Ultra-lightweight. Excellent for applications where strength-to-weight ratio is critical.',          'img' => 'https://kmwcnc.com/wp-content/uploads/2025/12/Magnesium-Die-Casting-768x768.webp',      'url' => '/materials/cnc-titanium-parts/'],
                ['title' => 'Brass &amp; Copper Die Cast', 'desc' => 'Ideal for plumbing fittings, electrical connectors, and decorative hardware applications.',         'img' => 'https://kmwcnc.com/wp-content/uploads/2025/12/Brass-Copper-Die-Cast-768x768.webp',      'url' => '/materials/brass-copper-parts/'],
            ];
            ?>
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-5 mt-10">
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
                Frequently Asked Questions about Die Casting
            </h2>

            <?php
            $faqs = [
                ['q' => 'What is the difference between CNC Machining and Die Casting?',       'a' => 'CNC machining removes material from a solid block (subtractive), while die casting injects molten metal into a mold (formative). Die casting is more cost-effective for high volumes (1000+ pcs), while CNC is better for low volumes and tighter tolerances.'],
                ['q' => 'Do you provide a Minimum Order Quantity (MOQ)?',                       'a' => 'For die casting, we recommend a minimum of 500-1000 pieces to justify the tooling investment. However, we can accommodate smaller pilot runs for validation purposes.'],
                ['q' => 'What is the typical mold cost and lifespan?',                          'a' => 'Mold cost depends on part complexity, typically $3,000-$30,000. Our H13 tool steel molds are guaranteed for 100,000+ shots, with many exceeding 500,000 shots.'],
                ['q' => 'What is your standard lead time?',                                     'a' => 'Mold fabrication: 15-25 business days. Sample approval: 3-5 days. Production: 7-15 days depending on volume. Total lead time from order to delivery is typically 4-6 weeks.'],
                ['q' => 'Can you combine die cast and machined parts?',                         'a' => 'Yes. Our "Casting + CNC" turnkey service combines die casting with precision CNC post-machining for tight-tolerance features, tapped holes, and critical surfaces.'],
                ['q' => 'How do you ensure quality for die cast parts?',                        'a' => 'We perform X-ray inspection for internal porosity, CMM dimensional checks, pressure testing for leak-proof parts, and surface quality audits. Full inspection reports provided.'],
                ['q' => 'How do you control and prevent porosity?',                             'a' => 'Through mold flow analysis simulation, optimized gating and venting design, vacuum-assisted die casting for critical parts, and real-time process monitoring of injection pressure and temperature.'],
                ['q' => 'Do you provide quality inspection reports?',                           'a' => 'Yes. Every order includes dimensional inspection reports. Full CMM reports, X-ray reports, material certificates, and PPAP documentation are available on request.'],
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
                        Start Your Die Casting Project Today
                    </h2>
                    <p class="text-white/70 max-w-2xl mx-auto mb-8">
                        Experience the KMW CNC difference. Upload your files today for a Free DFM Review and receive a competitive quote within 12 hours.
                    </p>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent">
                        Upload Your STEP Files Now
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
