<?php
/**
 * Template Name: Custom Mold Services
 *
 * KMW CNC — Custom Mold Services (capabilities sub-page).
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

get_header();
?>

<main id="primary">

    <!-- ① Hero Banner -->
    <section class="relative py-14 lg:py-20 text-white overflow-hidden">
        <img src="http://kmwcnc.com/wp-content/uploads/2026/01/custom-mold-services.webp"
             alt="" class="absolute inset-0 w-full h-full object-cover" aria-hidden="true" />
        <div class="absolute inset-0 bg-primary/80"></div>
        <div class="<?php ulx_container_class('relative z-10'); ?>">
            <?php ulx_breadcrumb(true); ?>
            <h1 class="text-4xl lg:text-5xl font-bold text-center mb-4" style="font-family: var(--font-heading);">
                Precision Custom Mold Services
            </h1>
            <p class="text-center text-white/80 max-w-3xl mx-auto mb-8">
                High-precision tooling and mold manufacturing. Injection molds, die casting molds, and custom tooling for mass production.
            </p>
            <div class="text-center">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent">
                    Start a Mold Project
                </a>
            </div>
        </div>
    </section>

    <!-- ② Intro -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class('text-center'); ?>">
            <h2 class="text-3xl lg:text-4xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                From Concept to Production: High-Precision Tooling Solutions.
            </h2>
            <p class="text-muted max-w-4xl mx-auto leading-relaxed">
                At KMW CNC, we combine advanced precision machining capabilities with expert engineering to deliver high-quality custom molds. Whether you need mold prototyping or full-scale production tooling, from plastic injection to die casting to rubber molds, we craft every mold to the tightest standards for maximum performance.
            </p>
        </div>
    </section>

    <!-- ③ Comprehensive Custom Mold Solutions -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-4">
                <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Comprehensive Custom Mold Solutions
                </h2>
                <p class="text-muted max-w-3xl mx-auto">
                    From initial concept validation to high-volume manufacturing, we provide end-to-end mold services tailored to your project's specific stage and requirements.
                </p>
            </div>

            <?php
            $molds = [
                [
                    'title' => 'Custom Injection Molds',
                    'desc'  => 'Precision injection mold tooling. Single cavity to multi-cavity molds for mass production of plastic parts with tight tolerances (±0.02mm). Hot runner and cold runner systems available.',
                    'img'   => 'https://kmwcnc.com/wp-content/uploads/2026/01/Custom-Injection-Molds.webp',
                ],
                [
                    'title' => 'Custom Blow Molds',
                    'desc'  => 'Extrusion and injection blow molds for hollow plastic containers, bottles, and custom shapes. Precision-machined from aluminum or steel.',
                    'img'   => 'https://kmwcnc.com/wp-content/uploads/2026/01/Custom-Blow-Molds-768x512.webp',
                ],
                [
                    'title' => 'Custom Compression Molds',
                    'desc'  => 'High-strength compression molds for thermoset plastics, rubber, and composite materials. Ideal for automotive, electrical, and industrial components.',
                    'img'   => 'https://kmwcnc.com/wp-content/uploads/2026/01/Custom-Compression-Molds-768x512.webp',
                ],
                [
                    'title' => 'Custom Transfer Molds',
                    'desc'  => 'Exact tooling for transfer molding processes. Designed for rubber parts, O-rings, and precision sealing components. Multi-cavity options for high-volume production.',
                    'img'   => 'https://kmwcnc.com/wp-content/uploads/2026/01/Custom-Transfer-Molds-768x512.webp',
                ],
                [
                    'title' => 'Custom Die Casting Molds',
                    'desc'  => 'High-Pressure Die Casting (HPDC) molds in H13 steel. Designed for aluminum, zinc, and magnesium alloy mass production. Mold life 100,000+ shots.',
                    'img'   => 'https://kmwcnc.com/wp-content/uploads/2026/01/Custom-Die-Casting-Molds-768x512.webp',
                ],
                [
                    'title' => 'Custom Thermoforming Molds',
                    'desc'  => 'Vacuum forming and thermoforming tools for packaging, enclosures, and large-format plastic parts. Machined from aluminum for fast thermal cycling.',
                    'img'   => 'https://kmwcnc.com/wp-content/uploads/2026/01/Custom-Thermoforming-Molds-768x512.webp',
                ],
            ];
            ?>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-10">
                <?php foreach ($molds as $m) : ?>
                    <div class="bg-surface rounded-lg overflow-hidden border border-border/50">
                        <div class="aspect-[4/3] overflow-hidden">
                            <img src="<?php echo esc_url($m['img']); ?>" alt="<?php echo esc_attr($m['title']); ?>"
                                 class="w-full h-full object-cover" loading="lazy" />
                        </div>
                        <div class="p-5">
                            <h3 class="font-bold text-primary mb-2" style="font-family: var(--font-heading);">
                                <?php echo esc_html($m['title']); ?>
                            </h3>
                            <p class="text-sm text-muted leading-relaxed"><?php echo esc_html($m['desc']); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="text-center mt-10">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent">
                    Get a Instant Quote
                </a>
            </div>
        </div>
    </section>

    <!-- ④ Premium Mold Materials Selection -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-10">
                <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Premium Mold Materials Selection
                </h2>
                <p class="text-muted max-w-3xl mx-auto">
                    From rapid prototyping to high-volume production, we use certified materials tailored to your specific durability, cycle time, and surface finish requirements.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <?php
                $materials = [
                    ['img' => 'https://kmwcnc.com/wp-content/uploads/2025/11/Aluminum-Parts-768x768.webp',          'title' => 'Aluminum',        'desc' => 'Lightweight & versatile. Ideal for electronics and auto parts.'],
                    ['img' => 'https://kmwcnc.com/wp-content/uploads/2025/11/Stainless-Steel-Parts-1-768x768.webp', 'title' => 'Stainless Steel', 'desc' => 'High corrosion resistance for medical & food industries.'],
                    ['img' => 'https://kmwcnc.com/wp-content/uploads/2025/12/Carbon-Alloy-Steel--768x768.webp',     'title' => 'Steel & Alloy',   'desc' => 'High strength & durability. Ideal for heavy-duty industrial applications.'],
                ];
                foreach ($materials as $item) : ?>
                    <div class="rounded-lg overflow-hidden bg-card border border-border/50">
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
    </section>

    <!-- ⑤ Our Custom Mold Capabilities — Specs Table -->
    <section class="py-16 lg:py-20 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-8">
                <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Our Custom Mold Capabilities
                </h2>
                <p class="text-muted max-w-3xl mx-auto">
                    From rapid prototype molds to high-volume production tooling, our capabilities span a wide range of mold types, sizes, and materials.
                </p>
            </div>

            <div class="overflow-x-auto rounded-lg border border-border/50">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="bg-primary text-white">
                            <th class="text-left px-5 py-3 font-semibold">Parameter</th>
                            <th class="text-left px-5 py-3 font-semibold">Injection Molds</th>
                            <th class="text-left px-5 py-3 font-semibold">Die Casting Molds</th>
                            <th class="text-left px-5 py-3 font-semibold">Stamping / Forming</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-border/50">
                        <tr class="bg-card">
                            <td class="px-5 py-3 font-medium text-text">Mold Material</td>
                            <td class="px-5 py-3 text-muted">P20, H13, S136, NAK80</td>
                            <td class="px-5 py-3 text-muted">H13, SKD61</td>
                            <td class="px-5 py-3 text-muted">D2, A2, SKD11</td>
                        </tr>
                        <tr class="bg-surface">
                            <td class="px-5 py-3 font-medium text-text">Cavity</td>
                            <td class="px-5 py-3 text-muted">Single to 128 cavities</td>
                            <td class="px-5 py-3 text-muted">Single to 8 cavities</td>
                            <td class="px-5 py-3 text-muted">Progressive / Transfer</td>
                        </tr>
                        <tr class="bg-card">
                            <td class="px-5 py-3 font-medium text-text">Max. Size</td>
                            <td class="px-5 py-3 text-muted">1200mm x 800mm</td>
                            <td class="px-5 py-3 text-muted">800mm x 600mm</td>
                            <td class="px-5 py-3 text-muted">1500mm x 1000mm</td>
                        </tr>
                        <tr class="bg-surface">
                            <td class="px-5 py-3 font-medium text-text">Tolerance</td>
                            <td class="px-5 py-3 text-muted">&plusmn;0.02mm</td>
                            <td class="px-5 py-3 text-muted">&plusmn;0.05mm</td>
                            <td class="px-5 py-3 text-muted">&plusmn;0.03mm</td>
                        </tr>
                        <tr class="bg-card">
                            <td class="px-5 py-3 font-medium text-text">Processing Equipment</td>
                            <td class="px-5 py-3 text-muted">CNC Milling, Wire EDM, Grinding</td>
                            <td class="px-5 py-3 text-muted">CNC Milling, EDM, Heat Treatment</td>
                            <td class="px-5 py-3 text-muted">CNC Milling, Wire EDM, Surface Grinding</td>
                        </tr>
                        <tr class="bg-surface">
                            <td class="px-5 py-3 font-medium text-text">Mold Life</td>
                            <td class="px-5 py-3 text-muted">100K - 1M+ shots</td>
                            <td class="px-5 py-3 text-muted">100K - 500K+ shots</td>
                            <td class="px-5 py-3 text-muted">500K - 2M+ strokes</td>
                        </tr>
                        <tr class="bg-card">
                            <td class="px-5 py-3 font-medium text-text">Tooling Leadtime</td>
                            <td class="px-5 py-3 text-muted">15-30 business days</td>
                            <td class="px-5 py-3 text-muted">20-35 business days</td>
                            <td class="px-5 py-3 text-muted">15-25 business days</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- ⑥ Expert Engineering & Design Support -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="rounded-xl overflow-hidden">
                    <img src="https://kmwcnc.com/wp-content/uploads/2026/01/Design-Support-Services-1024x683.webp"
                         alt="Expert Engineering Support" class="w-full h-auto" loading="lazy" />
                </div>
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                        Expert Engineering &amp; Design Support
                    </h2>
                    <p class="text-muted leading-relaxed mb-6">
                        Great molds are born from great engineering. Our mold design team uses advanced CAD/CAM software to optimize every aspect of your mold — from gate placement and cooling channel layout to ejection systems and draft angles. We deliver production-ready tooling that minimizes cycle time and maximizes part quality.
                    </p>
                    <ul class="space-y-2 text-sm text-text">
                        <li class="flex items-start gap-2"><?php echo ulx_icon('check', 'w-4 h-4 text-accent flex-shrink-0 mt-0.5'); ?> <strong>Free DFM Analysis:</strong> Design for Manufacturability review before tooling begins.</li>
                        <li class="flex items-start gap-2"><?php echo ulx_icon('check', 'w-4 h-4 text-accent flex-shrink-0 mt-0.5'); ?> <strong>Mold Flow Simulation:</strong> Predict fill patterns and optimize gate/runner design.</li>
                        <li class="flex items-start gap-2"><?php echo ulx_icon('check', 'w-4 h-4 text-accent flex-shrink-0 mt-0.5'); ?> <strong>Cooling Optimization:</strong> Conformal and conventional cooling channel design.</li>
                        <li class="flex items-start gap-2"><?php echo ulx_icon('check', 'w-4 h-4 text-accent flex-shrink-0 mt-0.5'); ?> <strong>Full 3D Mold Design:</strong> Complete mold assembly delivered for your approval before cutting steel.</li>
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

    <!-- ⑦ Advanced Mold Surface Finishing Solutions -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-12">
                <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Advanced Mold Surface Finishing Solutions
                </h2>
                <p class="text-muted max-w-3xl mx-auto">
                    Surface finish is critical to both the aesthetic appeal and the functional performance of your parts. KMW offers a comprehensive range of in-house finishing services, such as:
                </p>
            </div>

            <?php
            $finishes = [
                ['icon' => 'check', 'title' => 'Mirror Polishing',               'desc' => 'Optical-grade SPI A1 polish with Ra 0.012μm. For clear lenses, reflective parts, and premium cosmetic applications.'],
                ['icon' => 'check', 'title' => 'Powder Coating',                  'desc' => 'Durable, thick electrostatic coating. Excellent for external mold components, jigs, and fixtures requiring corrosion protection.'],
                ['icon' => 'check', 'title' => 'Texturing (VDI/SPI Standards)',   'desc' => 'Chemical etching and EDM texturing. SPI B1-D3 and VDI 3400 standards for grip, aesthetics, and part release.'],
                ['icon' => 'check', 'title' => 'Chrome / Nickel Plating',         'desc' => 'Hard chrome plating for wear-critical mold surfaces. Extends mold life significantly in high-volume production.'],
                ['icon' => 'check', 'title' => 'Sandblasting',                    'desc' => 'Uniform matte surface for improved paint adhesion and anti-glare cosmetic finish on molded parts.'],
                ['icon' => 'check', 'title' => 'Nitriding & Heat Treatment',      'desc' => 'Surface hardening to HRC 60+ for extreme wear resistance on mold cores and cavity inserts.'],
                ['icon' => 'check', 'title' => 'DLC (Diamond-Like Carbon)',        'desc' => 'Ultra-hard, low-friction coating for precision mold components. Ideal for medical and optical lens molds.'],
                ['icon' => 'check', 'title' => 'Laser Engraving',                 'desc' => 'Permanent part marking, logos, and serial numbers directly onto the mold for automatic part identification.'],
            ];
            ?>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php foreach ($finishes as $f) : ?>
                    <div class="bg-surface rounded-lg p-5 border border-border/50">
                        <div class="w-8 h-8 rounded-lg flex items-center justify-center mb-3 bg-accent/10 text-accent">
                            <?php echo ulx_icon($f['icon'], 'w-4 h-4'); ?>
                        </div>
                        <h3 class="font-bold text-primary mb-2 text-sm" style="font-family: var(--font-heading);">
                            <?php echo esc_html($f['title']); ?>
                        </h3>
                        <p class="text-xs text-muted leading-relaxed">
                            <?php echo esc_html($f['desc']); ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ⑧ Our Rigorous 12-Step Manufacturing Process -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-10">
                <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Our Rigorous 12-Step Manufacturing Process
                </h2>
                <p class="text-muted max-w-3xl mx-auto">
                    Quality is engineered, not just inspected. Our 12-step manufacturing process ensures every mold meets your exact specifications — from initial concept review through final validation. This systematic approach ensures on-time delivery and tooling that meets your exact specifications.
                </p>
            </div>

            <?php
            $steps = [
                ['title' => 'Inquiry & Quote',   'desc' => 'Requirement analysis and detailed cost estimation.'],
                ['title' => 'Order Confirm',      'desc' => 'Project kickoff, timeline lock, and contract signing.'],
                ['title' => 'DFM Analysis',       'desc' => 'Engineering review to optimize part manufacturability.'],
                ['title' => 'Mold Design',        'desc' => '2D/3D structure design and customer approval.'],
                ['title' => 'Material Order',     'desc' => 'Purchasing certified steel bases and mold cores.'],
                ['title' => 'Rough CNC',          'desc' => 'Rough machining to remove bulk material efficiently.'],
                ['title' => 'Heat Treatment',     'desc' => 'Hardening the steel to ensure durability and lifespan.'],
                ['title' => 'Precision CNC',      'desc' => 'High-speed CNC finishing and EDM spark machining.'],
                ['title' => 'Assembly',           'desc' => 'Expert fitting of cores, cavities, and mold bases.'],
                ['title' => 'Polishing',          'desc' => 'Surface finishing or texturing (SPI/VDI standards).'],
                ['title' => 'T1 Trial',           'desc' => 'First sample production run and dimensional inspection.'],
                ['title' => 'Delivery',           'desc' => 'Final validation, packaging, and global shipping.'],
            ];
            ?>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                <?php foreach ($steps as $i => $step) : ?>
                    <div class="bg-card rounded-lg p-6 border border-border/50">
                        <div class="w-10 h-10 rounded-lg bg-primary text-white flex items-center justify-center mb-4 text-sm font-bold">
                            <?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?>
                        </div>
                        <h3 class="font-bold text-primary mb-2" style="font-family: var(--font-heading);">
                            <?php echo esc_html($step['title']); ?>
                        </h3>
                        <p class="text-sm text-muted leading-relaxed"><?php echo esc_html($step['desc']); ?></p>
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
                    From medical devices to automotive and robotics, our parts perform in the most demanding environments.
                </p>
            </div>

            <?php
            $industries = [
                [
                    'title' => 'CNC Medical Parts',
                    'desc'  => 'We provide ISO 13485-compliant machining for surgical instruments and implants. Utilizing medical-grade Titanium and Stainless Steel.',
                    'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/11/Medical-application.webp',
                    'url'   => '/industry/cnc-medical-parts/',
                    'btn'   => 'Get Medical Quote',
                ],
                [
                    'title' => 'CNC Auto Parts',
                    'desc'  => 'From lightweight aluminum EV battery housings to complex transmission parts, we support rapid prototyping and mass production for Tier 1 suppliers.',
                    'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/11/Automotive-application.webp',
                    'url'   => '/industry/cnc-auto-parts/',
                    'btn'   => 'Get Auto Quote',
                ],
                [
                    'title' => 'CNC Electronic Components',
                    'desc'  => 'Custom heat sinks, enclosures, and RF connectors from Aluminum and Copper with excellent thermal conductivity and perfect fit.',
                    'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/11/CNC-Electronic-Components-application.webp',
                    'url'   => '/industry/cnc-electronic-components/',
                    'btn'   => 'Get Electronics Quote',
                ],
                [
                    'title' => 'CNC Hardware Parts',
                    'desc'  => 'Versatile solutions for general industrial applications. Custom fasteners, hinges, brackets, and more with cost-effective volume pricing.',
                    'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/11/CNC-Hardware-Parts-application.webp',
                    'url'   => '/industry/cnc-hardware-parts/',
                    'btn'   => 'Get Hardware Quote',
                ],
                [
                    'title' => 'Robotics &amp; Automation',
                    'desc'  => 'High-precision gears, couplet flanges, and robot arm components with exceptional accuracy and longevity.',
                    'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/11/Robotics-applocation.webp',
                    'url'   => '/industry/robotics-automation-parts/',
                    'btn'   => 'Get Robotics Quote',
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

    <!-- ⑪ FAQ -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <h2 class="text-2xl lg:text-3xl font-bold text-primary text-center mb-10" style="font-family: var(--font-heading);">
                Frequently Asked Questions
            </h2>

            <?php
            $faqs = [
                ['q' => 'What files do I need to provide for a mold quote?',                    'a' => 'We need 3D CAD files (STEP preferred), part material specification, annual volume estimate, and any surface finish or tolerance requirements. 2D drawings with GD&T are helpful for critical features.'],
                ['q' => 'What is the typical cost of a custom mold?',                           'a' => 'Mold cost depends on complexity, size, material, and cavitation. Simple single-cavity molds start from $2,000-$5,000. Multi-cavity production molds range from $5,000-$50,000+.'],
                ['q' => 'What is the guaranteed mold lifespan?',                                'a' => 'Mold life depends on material and maintenance. P20 steel molds: 300K-500K shots. H13 hardened steel: 500K-1M+ shots. We provide mold life guarantees with every order.'],
                ['q' => 'How long does it take to build a custom mold?',                        'a' => 'Prototype/soft tooling: 10-15 business days. Production molds: 20-35 business days depending on complexity. Rush service available for critical timelines.'],
                ['q' => 'Do you provide DFM review for free?',                                  'a' => 'Yes. Every mold quote includes a free Design for Manufacturability (DFM) analysis. Our engineers review your design and suggest optimizations before tooling begins.'],
                ['q' => 'Can you produce both the mold and the molded parts?',                  'a' => 'Yes. We offer a complete turnkey service — mold design, mold manufacturing, trial runs, and mass production of molded parts. One vendor, one quality standard.'],
                ['q' => 'Do you provide quality inspection reports?',                           'a' => 'Yes. Every mold includes trial run samples with dimensional inspection reports. Full CMM reports, material certificates, and mold flow analysis reports are available.'],
                ['q' => 'What is the design-to-mold turnaround?',                              'a' => 'From receiving your CAD file to shipping T1 samples: typically 3-5 weeks for production molds. Our DFM analysis and mold design review are completed within 48 hours.'],
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
                        Ready to Kickstart Your Custom Mold Project?
                    </h2>
                    <p class="text-white/70 max-w-2xl mx-auto mb-8">
                        Upload your CAD files today for a free DFM analysis and a detailed quote within 24 hours. Let's bring your design to reality.
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
