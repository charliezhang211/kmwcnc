<?php
/**
 * Template Name: Robotics & Automation Parts
 *
 * KMW CNC — Robotics & Automation Parts (industry sub-page).
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

get_header();
?>

<main id="primary">

    <!-- ① Hero Banner -->
    <section class="relative py-14 lg:py-20 text-white overflow-hidden">
        <img src="http://kmwcnc.com/wp-content/uploads/2025/11/Robotics-applocation.webp"
             alt="" class="absolute inset-0 w-full h-full object-cover" aria-hidden="true" />
        <div class="absolute inset-0 bg-primary/80"></div>
        <div class="<?php ulx_container_class('relative z-10'); ?>">
            <?php ulx_breadcrumb(true); ?>
            <h1 class="text-4xl lg:text-5xl font-bold text-center mb-4" style="font-family: var(--font-heading);">
                Precision CNC Parts for Robotics & Automation
            </h1>
            <p class="text-center text-white/80 max-w-3xl mx-auto mb-8">
                Precision CNC machining for robotics and automation. We manufacture custom gears, robot arm casings, and end-effectors. Heat treatment and assembly available.
            </p>
            <div class="text-center">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent">
                    Get Robotics Quote
                </a>
            </div>
        </div>
    </section>

    <!-- ② Powering the Future of Smart Manufacturing -->
    <section class="py-10 lg:py-12 bg-surface">
        <div class="<?php ulx_container_class('text-center'); ?>">
            <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-3" style="font-family: var(--font-heading);">
                Powering the Future of Smart Manufacturing
            </h2>
            <p class="text-muted max-w-4xl mx-auto leading-relaxed">
                From collaborative robots to fully automated assembly lines, KMW CNC delivers the precision components that keep modern automation systems running. We machine high-accuracy gears, lightweight structural arms, and custom end-effectors that meet the tight tolerances robotics demands.
            </p>
        </div>
    </section>

    <!-- ③ Robotics Manufacturing Capabilities -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                        Robotics Manufacturing Capabilities
                    </h2>
                    <p class="text-muted leading-relaxed mb-6">
                        Our precision machining capabilities are designed for the demanding requirements of robotic systems, where micron-level accuracy directly impacts performance.
                    </p>
                </div>
                <div class="overflow-x-auto rounded-lg border border-border/50">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th class="px-5 py-3 text-left font-semibold">Feature</th>
                                <th class="px-5 py-3 text-left font-semibold">Robotics Capability</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-card">
                                <td class="px-5 py-3 font-medium text-text">Key Materials</td>
                                <td class="px-5 py-3 text-muted">Aluminum 6061/7075, Stainless Steel, Hardened Steel, PEEK</td>
                            </tr>
                            <tr class="bg-surface">
                                <td class="px-5 py-3 font-medium text-text">Typical Parts</td>
                                <td class="px-5 py-3 text-muted">Gears, Joint Housings, Arm Links, End-Effectors, Grippers</td>
                            </tr>
                            <tr class="bg-card">
                                <td class="px-5 py-3 font-medium text-text">Standards</td>
                                <td class="px-5 py-3 text-muted">ISO 9001:2015 Certified</td>
                            </tr>
                            <tr class="bg-surface">
                                <td class="px-5 py-3 font-medium text-text">Tolerance</td>
                                <td class="px-5 py-3 text-muted">&plusmn; 0.005mm for Gear & Spline Features</td>
                            </tr>
                            <tr class="bg-card">
                                <td class="px-5 py-3 font-medium text-text">Post-Processing</td>
                                <td class="px-5 py-3 text-muted">Heat Treatment, Hard Anodize, Precision Grinding</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- ④ Automation Component Gallery -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <h2 class="text-2xl lg:text-3xl font-bold text-primary text-center mb-12" style="font-family: var(--font-heading);">
                Automation Component Gallery
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <?php
                $showcase = [
                    [
                        'title' => 'Aluminum Robot Joint Housing',
                        'desc'  => 'Precision 5-axis machined from Aluminum 7075-T6. Lightweight yet rigid housing designed to protect internal bearings and encoders while maintaining exact concentricity for smooth rotational motion.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/12/Automation-Component-Gallery-01.webp',
                    ],
                    [
                        'title' => 'Precision Drive Gears',
                        'desc'  => 'CNC machined spur and helical gears from hardened steel. Tight tooth profile tolerances ensure minimal backlash and smooth power transmission in robotic joint actuators.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/12/Automation-Component-Gallery-02.webp',
                    ],
                    [
                        'title' => 'Robotic Gripper Fingers',
                        'desc'  => 'Custom end-effector components machined from aluminum and engineering plastics. Designed for pick-and-place automation with optimized grip surfaces and lightweight construction.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/12/Automation-Component-Gallery-03.webp',
                    ],
                ];
                foreach ($showcase as $item) : ?>
                    <div class="bg-surface rounded-lg overflow-hidden border border-border/50">
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

    <!-- ⑤ High-Precision Gears & Transmission Parts -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="rounded-xl overflow-hidden">
                    <img src="http://kmwcnc.com/wp-content/uploads/2025/12/Bridging-the-Gap.webp"
                         alt="High-Precision Gears" class="w-full h-auto" loading="lazy" />
                </div>
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                        High-Precision Gears & Transmission Parts
                    </h2>
                    <p class="text-muted leading-relaxed mb-6">
                        Robotic actuators and joint mechanisms require gears with exceptional accuracy. We machine <strong class="text-text">spur gears, helical gears, worm gears, and custom splines</strong> from hardened steel and aluminum, with tooth profiles held to micron-level tolerances for minimal backlash and smooth motion control.
                    </p>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-full bg-accent/10 text-accent flex items-center justify-center flex-shrink-0 mt-0.5">
                                <?php echo ulx_icon('check', 'w-3 h-3'); ?>
                            </span>
                            <span class="text-muted text-sm"><strong class="text-text">Gear Tooth Accuracy:</strong> Precise CNC machining for DIN/AGMA standard gear profiles.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-full bg-accent/10 text-accent flex items-center justify-center flex-shrink-0 mt-0.5">
                                <?php echo ulx_icon('check', 'w-3 h-3'); ?>
                            </span>
                            <span class="text-muted text-sm"><strong class="text-text">Heat Treatment Available:</strong> Case hardening and nitriding for wear-critical gear surfaces.</span>
                        </li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent">
                        Quote Gear Components
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ⑥ Lightweight Skins & Structural Arms -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                        Lightweight Skins & Structural Arms
                    </h2>
                    <p class="text-muted leading-relaxed mb-6">
                        Robot arms and exterior skins must balance <strong class="text-text">structural rigidity with minimal weight</strong> to maximize payload capacity and reduce motor strain. We machine thin-wall aluminum housings, arm links, and protective covers with optimized pocket designs that maintain stiffness while minimizing mass.
                    </p>
                    <div class="mb-6">
                        <h3 class="font-bold text-primary mb-3" style="font-family: var(--font-heading);">Design Advantages</h3>
                        <ul class="space-y-2">
                            <li class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-accent/10 text-accent flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <?php echo ulx_icon('check', 'w-3 h-3'); ?>
                                </span>
                                <span class="text-muted text-sm"><strong class="text-text">Topology-Optimized Pocketing:</strong> Weight reduction up to 40% without compromising strength.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-accent/10 text-accent flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <?php echo ulx_icon('check', 'w-3 h-3'); ?>
                                </span>
                                <span class="text-muted text-sm"><strong class="text-text">Cosmetic Finish Ready:</strong> Anodized or powder-coated surfaces for commercial cobots.</span>
                            </li>
                        </ul>
                    </div>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent">
                        Request Arm Design Review
                    </a>
                </div>
                <div class="rounded-xl overflow-hidden">
                    <img src="http://kmwcnc.com/wp-content/uploads/2025/12/Lightweight-Solutions-for-Electric-Vehicles.webp"
                         alt="Lightweight Robot Arms" class="w-full h-auto" loading="lazy" />
                </div>
            </div>
        </div>
    </section>

    <!-- ⑦ Functional Finishes for Automation -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-12">
                <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Functional Finishes for Automation
                </h2>
                <p class="text-muted max-w-3xl mx-auto">
                    Surface treatments that enhance wear resistance, reduce friction, and provide the cosmetic quality expected in modern robotics.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php
                $finishes = [
                    ['icon' => 'custom',     'title' => 'As-Machined (Standard)',           'desc' => 'Clean, burr-free parts with Ra 0.8μm finish. Suitable for internal mechanism components and parts that will receive further treatment.'],
                    ['icon' => 'palette',    'title' => 'Bead Blasting',                    'desc' => 'Uniform matte texture that removes tool marks. Ideal for pre-anodize prep and creating professional surfaces on robot arm covers and housings.'],
                    ['icon' => 'shield',     'title' => 'Anodizing Type II (Standard)',     'desc' => 'Standard anodize with color options for aluminum components. Provides corrosion protection and a clean, professional appearance for commercial cobots.'],
                    ['icon' => 'zap',        'title' => 'Anodizing Type III (Hardcoat)',    'desc' => 'Hard anodize (50+ microns) for high-wear surfaces like gear housings, guide rails, and sliding contacts. Exceptional abrasion resistance.'],
                    ['icon' => 'package',    'title' => 'Powder Coating',                   'desc' => 'Durable, impact-resistant coating in custom colors. Perfect for exterior robot skins and panels exposed to industrial environments.'],
                    ['icon' => 'trophy',     'title' => 'Electropolishing / Passivation',   'desc' => 'Ultra-smooth, corrosion-resistant finish for stainless steel components used in clean-room and food-grade automation systems.'],
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

    <!-- ⑧ Manufacturing Technologies -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <h2 class="text-2xl lg:text-3xl font-bold text-primary text-center mb-4" style="font-family: var(--font-heading);">
                Manufacturing Technologies
            </h2>
            <p class="text-center text-muted max-w-3xl mx-auto mb-12">
                Multi-axis CNC machining and EDM for producing the complex geometries and tight tolerances robotic systems demand.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <?php
                $techs = [
                    [
                        'title' => '5-Axis Simultaneous Milling',
                        'desc'  => 'For complex joint housings and arm links.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/12/5-Axis-Milling-1024x683.webp',
                        'link'  => '/capabilities/cnc-milling-parts/',
                    ],
                    [
                        'title' => 'Precision CNC Turning',
                        'desc'  => 'For shafts, bushings, and rotational parts.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/12/CNC-Turning-1024x683.webp',
                        'link'  => '/capabilities/cnc-turning-parts/',
                    ],
                    [
                        'title' => 'Wire EDM Services',
                        'desc'  => 'For hardened gear profiles and splines.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/12/Wire-EDM.webp',
                        'link'  => '/capabilities/wire-edm-services/',
                    ],
                ];
                foreach ($techs as $t) : ?>
                    <a href="<?php echo esc_url(home_url($t['link'])); ?>" class="group bg-surface rounded-lg overflow-hidden border border-border/50 hover:shadow-lg transition-shadow">
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

    <!-- ⑨ Assembly-Ready Quality Control -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-10">
                <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Assembly-Ready Quality Control
                </h2>
                <p class="text-muted max-w-3xl mx-auto">
                    Every robotics component is verified for dimensional accuracy and surface quality before shipment, ensuring seamless integration into your assembly.
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

    <!-- ⑩ Materials for Robotics -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-4">
                <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Materials for Robotics
                </h2>
                <p class="text-muted max-w-3xl mx-auto">
                    Engineering-grade metals and plastics selected for strength, weight, and wear characteristics critical to robotic systems.
                </p>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6 mt-10">
                <?php
                $materials = [
                    ['title' => 'CNC Aluminum Parts',        'desc' => 'Lightweight & versatile. Ideal for electronics and auto parts.',                   'img' => 'http://kmwcnc.com/wp-content/uploads/2025/11/Aluminum-Parts.webp',        'link' => '/materials/cnc-aluminum-parts/'],
                    ['title' => 'CNC Stainless Steel Parts', 'desc' => 'High corrosion resistance for medical & food industries.',                        'img' => 'http://kmwcnc.com/wp-content/uploads/2025/11/Stainless-Steel-Parts-1.webp','link' => '/materials/cnc-stainless-steel-parts/'],
                    ['title' => 'CNC Steel & Alloy Parts',   'desc' => 'High strength & durability. Ideal for heavy-duty industrial applications.',       'img' => 'http://kmwcnc.com/wp-content/uploads/2025/12/Carbon-Alloy-Steel-.webp',   'link' => '/materials/cnc-steel-parts/'],
                    ['title' => 'Brass & Copper Parts',      'desc' => 'Excellent machinability. Ideal for decorative and electrical components.',         'img' => 'http://kmwcnc.com/wp-content/uploads/2025/11/Brass-Copper-Parts.webp',    'link' => '/materials/brass-copper-parts/'],
                    ['title' => 'CNC Titanium Parts',        'desc' => 'Superior strength-to-weight ratio for demanding applications.',                   'img' => 'http://kmwcnc.com/wp-content/uploads/2025/12/Titanium-Alloys.webp',       'link' => '/materials/cnc-titanium-parts/'],
                    ['title' => 'Machined Plastic Parts',    'desc' => 'PEEK, Nylon, and Delrin for lightweight insulation and prototypes.',               'img' => 'http://kmwcnc.com/wp-content/uploads/2025/11/Plastic-Composites.webp',    'link' => '/materials/machined-plastic-parts/'],
                ];
                foreach ($materials as $mat) : ?>
                    <a href="<?php echo esc_url(home_url($mat['link'])); ?>" class="group bg-surface rounded-lg overflow-hidden border border-border/50 hover:shadow-lg transition-shadow">
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
                Robotics Manufacturing FAQs
            </h2>

            <?php
            $faqs = [
                ['q' => 'Can you machine custom gears and splines?',                              'a' => 'Yes. We CNC machine spur, helical, bevel, and worm gears as well as custom spline profiles from hardened steel, aluminum, and engineering plastics.'],
                ['q' => 'Do you offer heat treatment for wear parts?',                             'a' => 'Yes, we provide case hardening, nitriding, quenching, and tempering to achieve the surface hardness required for gears and high-contact mechanism parts.'],
                ['q' => 'Can you make lightweight robot skins?',                                   'a' => 'Absolutely. We machine thin-wall aluminum housings and covers with optimized pocket designs to minimize weight while maintaining structural integrity.'],
                ['q' => 'Do you offer assembly services?',                                         'a' => 'Yes, we can provide sub-assembly services including press-fitting bearings, installing inserts, and assembling multi-component robotic modules.'],
                ['q' => 'Do you have a Minimum Order Quantity (MOQ)?',                             'a' => 'No MOQ. We support single prototypes through to production volumes for robotics components.'],
                ['q' => 'What is your standard lead time?',                                        'a' => 'Standard lead time is 7-15 business days depending on complexity. Expedited options available for urgent robotics projects.'],
                ['q' => 'How do you ensure my IP (Intellectual Property) is safe?',                'a' => 'We sign NDAs for every project and maintain strict access controls. Your designs and technical data are fully protected.'],
                ['q' => 'Do you provide quality inspection reports?',                               'a' => 'Yes, every order includes a detailed inspection report with CMM data, dimensional results, and material certifications.'],
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
                        Build Your Automation Systems
                    </h2>
                    <p class="text-white/70 max-w-2xl mx-auto mb-8">
                        Upload your robotics designs for a DFM review and rapid quotation. From prototype gears to production-ready arm assemblies.
                    </p>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent">
                        Get a Robotics Quote
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
