<?php
/**
 * Template Name: CNC Auto Parts
 *
 * KMW CNC — CNC Auto Parts (industry sub-page).
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

get_header();
?>

<main id="primary">

    <!-- ① Hero Banner -->
    <section class="relative py-14 lg:py-20 text-white overflow-hidden">
        <img src="http://kmwcnc.com/wp-content/uploads/2025/12/auto-parts-banner.webp"
             alt="" class="absolute inset-0 w-full h-full object-cover" aria-hidden="true" />
        <div class="absolute inset-0 bg-primary/80"></div>
        <div class="<?php ulx_container_class('relative z-10'); ?>">
            <?php ulx_breadcrumb(true); ?>
            <h1 class="text-4xl lg:text-5xl font-bold text-center mb-4" style="font-family: var(--font-heading);">
                Precision CNC Automotive Parts Manufacturing
            </h1>
            <p class="text-center text-white/80 max-w-3xl mx-auto mb-8">
                IATF 16949 compliant machining solutions for EV, ICE, and hybrid vehicles. From rapid prototyping of EV components to high-volume transmission parts.
            </p>
            <div class="text-center">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent">
                    Get a Quote
                </a>
            </div>
        </div>
    </section>

    <!-- ② Accelerating Mobility with Precision Parts -->
    <section class="py-10 lg:py-12 bg-surface">
        <div class="<?php ulx_container_class('text-center'); ?>">
            <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-3" style="font-family: var(--font-heading);">
                Accelerating Mobility with Precision Parts
            </h2>
            <p class="text-muted max-w-4xl mx-auto leading-relaxed">
                The automotive industry demands speed and consistency. KMW CNC delivers scalable manufacturing solutions, helping automotive engineers bridge the gap from concept cars to mass production. We specialize in machining lightweight aluminum for Electric Vehicles (EVs) and durable steel for powertrain components.
            </p>
        </div>
    </section>

    <!-- ③ Automotive Manufacturing Standards -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                        Automotive Manufacturing Standards
                    </h2>
                    <p class="text-muted leading-relaxed mb-6">
                        Technical capabilities tailored for the rigorous demands of the automotive sector.
                    </p>
                </div>
                <div class="overflow-x-auto rounded-lg border border-border/50">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th class="px-5 py-3 text-left font-semibold">Feature</th>
                                <th class="px-5 py-3 text-left font-semibold">Automotive Capability</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-card">
                                <td class="px-5 py-3 font-medium text-text">Standards</td>
                                <td class="px-5 py-3 text-muted">IATF 16949 Compliant, ISO 9001</td>
                            </tr>
                            <tr class="bg-surface">
                                <td class="px-5 py-3 font-medium text-text">Key Materials</td>
                                <td class="px-5 py-3 text-muted">Aluminum 6061/7075, 4140 Steel, Die Cast Alloys</td>
                            </tr>
                            <tr class="bg-card">
                                <td class="px-5 py-3 font-medium text-text">Processes</td>
                                <td class="px-5 py-3 text-muted">High-Speed Milling, Turning, Die Casting</td>
                            </tr>
                            <tr class="bg-surface">
                                <td class="px-5 py-3 font-medium text-text">Documentation</td>
                                <td class="px-5 py-3 text-muted">PPAP Level 3, ISL, Material Certs</td>
                            </tr>
                            <tr class="bg-card">
                                <td class="px-5 py-3 font-medium text-text">Volume</td>
                                <td class="px-5 py-3 text-muted">1 Prototype to 500,000+ Production Parts</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- ④ Automotive Component Gallery -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <h2 class="text-2xl lg:text-3xl font-bold text-primary text-center mb-12" style="font-family: var(--font-heading);">
                Automotive Component Gallery
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <?php
                $showcase = [
                    [
                        'title' => 'Aluminum Battery Housing',
                        'desc'  => 'Lightweight, milled aluminum enclosures for EV battery modules.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/12/Automotive-Component-Gallery-02.webp',
                    ],
                    [
                        'title' => 'Precision Transmission Gears',
                        'desc'  => 'Hardened steel gears turned and milled for powertrains.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/12/Automotive-Component-Gallery-01.webp',
                    ],
                    [
                        'title' => 'Suspension Brackets',
                        'desc'  => '5-axis machined structural brackets for chassis systems.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/12/Automotive-Component-Gallery-03.webp',
                    ],
                ];
                foreach ($showcase as $item) : ?>
                    <div class="bg-card rounded-lg overflow-hidden border border-border/50">
                        <div class="aspect-square overflow-hidden">
                            <img src="<?php echo esc_url($item['img']); ?>" alt="<?php echo esc_attr($item['title']); ?>"
                                 class="w-full h-full object-cover" loading="lazy" />
                        </div>
                        <div class="p-5 text-center">
                            <h3 class="font-bold text-primary mb-2" style="font-family: var(--font-heading);">
                                <?php echo esc_html($item['title']); ?>
                            </h3>
                            <p class="text-sm text-muted leading-relaxed"><?php echo esc_html($item['desc']); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ⑤ Bridging the Gap: Prototype to Mass Production -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="rounded-xl overflow-hidden">
                    <img src="http://kmwcnc.com/wp-content/uploads/2025/12/Bridging-the-Gap.webp"
                         alt="Prototype to Mass Production" class="w-full h-auto" loading="lazy" />
                </div>
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                        Bridging the Gap: Prototype to Mass Production
                    </h2>
                    <p class="text-muted leading-relaxed mb-6">
                        Automotive development cycles are shortening. We offer <strong class="text-text">Rapid Prototyping</strong> services in 3-5 days to validate your designs quickly. Once approved, our flexible production lines scale up seamlessly to produce thousands of parts, maintaining the same precision and quality at the production level.
                    </p>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-full bg-accent/10 text-accent flex items-center justify-center flex-shrink-0 mt-0.5">
                                <?php echo ulx_icon('check', 'w-3 h-3'); ?>
                            </span>
                            <span class="text-muted text-sm"><strong class="text-text">Rapid Iteration:</strong> Functional parts in days, not weeks.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-full bg-accent/10 text-accent flex items-center justify-center flex-shrink-0 mt-0.5">
                                <?php echo ulx_icon('check', 'w-3 h-3'); ?>
                            </span>
                            <span class="text-muted text-sm"><strong class="text-text">Scalability:</strong> Automated machining cells for volume orders.</span>
                        </li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent">
                        Start Your Prototype
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ⑥ Lightweight Solutions for Electric Vehicles -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                        Lightweight Solutions for Electric Vehicles
                    </h2>
                    <p class="text-muted leading-relaxed mb-6">
                        Range is king in the EV era. We specialize in machining lightweight <strong class="text-text">Aluminum and Magnesium</strong> alloys to precise tolerances. Our lightweight solutions use creative material selection to reduce part weight without compromising structural strength, contributing to better vehicle efficiency.
                    </p>
                    <div class="mb-6">
                        <h3 class="font-bold text-primary mb-3" style="font-family: var(--font-heading);">Key Capabilities</h3>
                        <ul class="space-y-2">
                            <li class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-accent/10 text-accent flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <?php echo ulx_icon('check', 'w-3 h-3'); ?>
                                </span>
                                <span class="text-muted text-sm"><strong class="text-text">Material Expertise:</strong> Aluminum (6061/7075) & Magnesium.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-accent/10 text-accent flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <?php echo ulx_icon('check', 'w-3 h-3'); ?>
                                </span>
                                <span class="text-muted text-sm"><strong class="text-text">Weight Reduction:</strong> Thin-wall machining capabilities.</span>
                            </li>
                        </ul>
                    </div>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent">
                        Quote EV Parts
                    </a>
                </div>
                <div class="rounded-xl overflow-hidden">
                    <img src="http://kmwcnc.com/wp-content/uploads/2025/12/Lightweight-Solutions-for-Electric-Vehicles.webp"
                         alt="Lightweight Solutions for EV" class="w-full h-auto" loading="lazy" />
                </div>
            </div>
        </div>
    </section>

    <!-- ⑦ Durable Finishes for Auto Parts -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-12">
                <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Durable Finishes for Auto Parts
                </h2>
                <p class="text-muted max-w-3xl mx-auto">
                    Enhancing corrosion resistance and aesthetics for exterior and interior components.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php
                $finishes = [
                    ['icon' => 'custom',     'title' => 'As-Machined (Standard)',           'desc' => 'The most cost-effective option. Parts are ready to use after CNC with a standard Ra 1.6μm reflective surface. Great for internal non-cosmetic parts.'],
                    ['icon' => 'palette',    'title' => 'Bead Blasting',                    'desc' => 'A uniform matte surface for a clean finished look. It removes tool marks and creates a more uniform, professionally-looking surface for visual components.'],
                    ['icon' => 'shield',     'title' => 'Anodizing Type II (Standard)',     'desc' => 'An electrolytic passivation process that increases corrosion resistance and allows for coloring. Thin, dense, ideal for visual cosmetic components.'],
                    ['icon' => 'zap',        'title' => 'Anodizing Type III (Hardcoat)',    'desc' => 'A thicker, denser coating for extreme wear resistance. Ultra-durable for engine components, brackets, and parts requiring maximum durability.'],
                    ['icon' => 'package',    'title' => 'Powder Coating',                   'desc' => 'A dry powder sprayed and thermally cured for a hard, scratch-resistant finish with high-impact resistance. Available in RAL/Pantone colors.'],
                    ['icon' => 'trophy',     'title' => 'Electropolishing / Passivation',   'desc' => 'An electrochemical process for the finest surface finish of all. Creates a microscopically smooth, sterile finish. Essential for fluid and fuel-grade stainless steel parts.'],
                ];
                foreach ($finishes as $f) : ?>
                    <div class="bg-surface rounded-lg p-6 border border-border/50 hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 rounded-xl bg-primary text-white flex items-center justify-center mb-4">
                            <?php echo ulx_icon($f['icon'], 'w-5 h-5'); ?>
                        </div>
                        <h3 class="font-bold text-primary mb-2" style="font-family: var(--font-heading);">
                            <?php echo esc_html($f['title']); ?>
                        </h3>
                        <p class="text-sm text-muted leading-relaxed"><?php echo esc_html($f['desc']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ⑧ Key Technologies for Automotive -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <h2 class="text-2xl lg:text-3xl font-bold text-primary text-center mb-4" style="font-family: var(--font-heading);">
                Key Technologies for Automotive
            </h2>
            <p class="text-center text-muted max-w-3xl mx-auto mb-12">
                Utilizing automated machining strategies to ensure cost-efficiency and speed.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <?php
                $techs = [
                    [
                        'title' => '5-Axis Milling',
                        'desc'  => 'For complex engine manifolds.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/12/5-Axis-Milling-1024x683.webp',
                        'link'  => '/capabilities/cnc-milling-parts/',
                    ],
                    [
                        'title' => 'Precision CNC Turning',
                        'desc'  => 'For shafts and axles.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/12/CNC-Turning-1024x683.webp',
                        'link'  => '/capabilities/cnc-turning-parts/',
                    ],
                    [
                        'title' => 'Die Casting',
                        'desc'  => 'For high-volume housings.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/12/Die-casting-background.webp',
                        'link'  => '/capabilities/die-casting-services/',
                    ],
                ];
                foreach ($techs as $t) : ?>
                    <a href="<?php echo esc_url(home_url($t['link'])); ?>" class="group bg-card rounded-lg overflow-hidden border border-border/50 hover:shadow-lg transition-shadow">
                        <div class="aspect-[16/10] overflow-hidden">
                            <img src="<?php echo esc_url($t['img']); ?>" alt="<?php echo esc_attr($t['title']); ?>"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" />
                        </div>
                        <div class="p-5 text-center">
                            <h3 class="font-bold text-primary mb-1" style="font-family: var(--font-heading);">
                                <?php echo esc_html($t['title']); ?>
                            </h3>
                            <p class="text-sm text-muted"><?php echo esc_html($t['desc']); ?></p>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ⑨ Zero-Defect Quality Assurance -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-10">
                <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Zero-Defect Quality Assurance
                </h2>
                <p class="text-muted max-w-3xl mx-auto">
                    Rigorous inspection protocols including PPAP and SPC monitoring.
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

    <!-- ⑩ Common Automotive Materials -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-4">
                <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Common Automotive Materials
                </h2>
                <p class="text-muted max-w-3xl mx-auto">
                    Selecting the right alloy for performance, weight reduction, and durability.
                </p>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6 mt-10">
                <?php
                $materials = [
                    ['title' => 'CNC Aluminum Parts',        'desc' => 'Lightweight & versatile. Ideal for electronics and auto parts.',                   'img' => 'http://kmwcnc.com/wp-content/uploads/2025/11/Aluminum-Parts.webp',        'link' => '/materials/cnc-aluminum-parts/'],
                    ['title' => 'CNC Stainless Steel Parts', 'desc' => 'High corrosion resistance for medical & food industries.',                        'img' => 'http://kmwcnc.com/wp-content/uploads/2025/11/Stainless-Steel-Parts-1.webp','link' => '/materials/cnc-stainless-steel-parts/'],
                    ['title' => 'CNC Steel & Alloy Parts',   'desc' => 'High strength & durability. Ideal for heavy-duty industrial applications.',       'img' => 'http://kmwcnc.com/wp-content/uploads/2025/12/Carbon-Alloy-Steel-.webp',   'link' => '/materials/cnc-steel-parts/'],
                    ['title' => 'Brass & Copper Parts',      'desc' => 'Excellent machinability for electrical components.',                               'img' => 'http://kmwcnc.com/wp-content/uploads/2025/11/Brass-Copper-Parts.webp',    'link' => '/materials/brass-copper-parts/'],
                    ['title' => 'CNC Titanium Parts',        'desc' => 'PEEK, Nylon, and Delrin for lightweight insulation and prototypes.',               'img' => 'http://kmwcnc.com/wp-content/uploads/2025/12/Titanium-Alloys.webp',       'link' => '/materials/cnc-titanium-parts/'],
                    ['title' => 'Machined Plastic Parts',    'desc' => 'PEEK, Nylon, and Delrin for lightweight insulation and prototypes.',               'img' => 'http://kmwcnc.com/wp-content/uploads/2025/11/Plastic-Composites.webp',    'link' => '/materials/machined-plastic-parts/'],
                ];
                foreach ($materials as $mat) : ?>
                    <a href="<?php echo esc_url(home_url($mat['link'])); ?>" class="group bg-card rounded-lg overflow-hidden border border-border/50 hover:shadow-lg transition-shadow">
                        <div class="aspect-square overflow-hidden">
                            <img src="<?php echo esc_url($mat['img']); ?>" alt="<?php echo esc_attr($mat['title']); ?>"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" />
                        </div>
                        <div class="p-4 text-center">
                            <h3 class="font-bold text-primary text-sm mb-1" style="font-family: var(--font-heading);">
                                <?php echo esc_html($mat['title']); ?>
                            </h3>
                            <p class="text-xs text-muted leading-relaxed"><?php echo esc_html($mat['desc']); ?></p>
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
                Automotive Manufacturing FAQs
            </h2>

            <?php
            $faqs = [
                ['q' => 'Do you comply with IATF 16949 standards?',                                          'a' => 'Yes. We operate under IATF 16949 compliant processes with full PPAP documentation capability for automotive Tier 1 and Tier 2 suppliers.'],
                ['q' => 'Do you have a Minimum Order Quantity (MOQ)?',                                        'a' => 'No MOQ. We support everything from single prototypes to high-volume production runs of 500,000+ parts.'],
                ['q' => 'Can you provide PPAP (Production Part Approval Process) documentation?',              'a' => 'Yes, we provide PPAP Level 3 documentation including dimensional results, material certifications, control plans, and process flow diagrams.'],
                ['q' => 'What is your standard lead time?',                                                    'a' => 'Prototypes: 3-5 business days. Production: 7-15 business days depending on complexity and volume. Rush service available.'],
                ['q' => 'How do you ensure quality for high-volume automotive runs?',                          'a' => 'We use SPC (Statistical Process Control) monitoring, in-process CMM checks, and automated inspection to maintain consistency across large production batches.'],
                ['q' => 'How do you ensure my IP (Intellectual Property) is safe?',                            'a' => 'We sign NDAs for every project and maintain strict access controls. Your designs and technical data are fully protected.'],
                ['q' => 'Do you offer traceability for automotive safety parts?',                               'a' => 'Yes. Full lot traceability with MTR (Material Test Reports), heat lot tracking, and serialized part marking for safety-critical components.'],
                ['q' => 'Do you provide quality inspection reports?',                                           'a' => 'Yes, every order includes a detailed inspection report with CMM data, dimensional results, and material certifications.'],
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

    <!-- ⑫ CTA -->
    <section class="py-16 lg:py-20 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <div class="relative rounded-xl overflow-hidden">
                <img src="http://kmwcnc.com/wp-content/uploads/2025/12/cnc-mancing.webp"
                     alt="" class="absolute inset-0 w-full h-full object-cover" aria-hidden="true" />
                <div class="absolute inset-0 bg-primary/85"></div>
                <div class="relative z-10 px-8 py-14 lg:px-16 lg:py-20 text-center">
                    <h2 class="text-2xl lg:text-3xl font-bold text-white mb-4" style="font-family: var(--font-heading);">
                        Start Your Automotive Project
                    </h2>
                    <p class="text-white/70 max-w-2xl mx-auto mb-8">
                        Upload your CAD files today. Our engineers are ready to support your development cycle.
                    </p>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent">
                        Upload Auto Designs
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
