<?php
/**
 * Template Name: CNC Hardware Parts
 *
 * KMW CNC — CNC Hardware Parts (industry sub-page).
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
                Custom CNC Hardware & Industrial Components
            </h1>
            <p class="text-center text-white/80 max-w-3xl mx-auto mb-8">
                Manufacturer of custom industrial hardware. CNC machined fasteners, brackets, fittings, and knobs from Steel, Brass & Plastic. Durable & cost-effective.
            </p>
            <div class="text-center">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent">
                    Get Hardware Quote
                </a>
            </div>
        </div>
    </section>

    <!-- ② Reliable Components for Industrial Applications -->
    <section class="py-10 lg:py-12 bg-surface">
        <div class="<?php ulx_container_class('text-center'); ?>">
            <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-3" style="font-family: var(--font-heading);">
                Reliable Components for Industrial Applications
            </h2>
            <p class="text-muted max-w-4xl mx-auto leading-relaxed">
                From custom fasteners to heavy-duty brackets and fluid fittings, KMW CNC delivers industrial hardware built for demanding environments. We combine precision machining with robust materials to produce components that perform reliably across all industrial sectors.
            </p>
        </div>
    </section>

    <!-- ③ Industrial Hardware Capabilities -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                        Industrial Hardware Capabilities
                    </h2>
                    <p class="text-muted leading-relaxed mb-6">
                        Our hardware manufacturing covers a broad range of standard and custom components, backed by strict quality control and material traceability.
                    </p>
                </div>
                <div class="overflow-x-auto rounded-lg border border-border/50">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th class="px-5 py-3 text-left font-semibold">Feature</th>
                                <th class="px-5 py-3 text-left font-semibold">Hardware Capability</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-card">
                                <td class="px-5 py-3 font-medium text-text">Key Materials</td>
                                <td class="px-5 py-3 text-muted">Carbon Steel, Stainless Steel, Brass, Aluminum, Nylon</td>
                            </tr>
                            <tr class="bg-surface">
                                <td class="px-5 py-3 font-medium text-text">Typical Parts</td>
                                <td class="px-5 py-3 text-muted">Fasteners, Brackets, Knobs, Fittings, Valves, Bushings</td>
                            </tr>
                            <tr class="bg-card">
                                <td class="px-5 py-3 font-medium text-text">Standards</td>
                                <td class="px-5 py-3 text-muted">ISO 9001:2015 Certified</td>
                            </tr>
                            <tr class="bg-surface">
                                <td class="px-5 py-3 font-medium text-text">Tolerance</td>
                                <td class="px-5 py-3 text-muted">&plusmn; 0.01mm Standard</td>
                            </tr>
                            <tr class="bg-card">
                                <td class="px-5 py-3 font-medium text-text">Finishing</td>
                                <td class="px-5 py-3 text-muted">Zinc Plating, Powder Coat, Anodize, Passivation</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- ④ Hardware Component Showcase -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <h2 class="text-2xl lg:text-3xl font-bold text-primary text-center mb-12" style="font-family: var(--font-heading);">
                Hardware Component Showcase
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <?php
                $showcase = [
                    [
                        'title' => 'Specialty Screws & Bolts',
                        'desc'  => 'Custom-machined fasteners in standard and non-standard thread profiles. Available in Stainless Steel, Carbon Steel, and Brass with various head styles and drive types for critical assembly applications.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/12/Hardware-Component-01.webp',
                    ],
                    [
                        'title' => 'Knurled Knobs & Handles',
                        'desc'  => 'Precision turned knobs with diamond or straight knurl patterns. Designed for hand-operated adjustment mechanisms, control panels, and equipment interfaces requiring reliable grip and repeatability.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/12/Hardware-Component-02.webp',
                    ],
                    [
                        'title' => 'Mounting Brackets',
                        'desc'  => 'Heavy-duty CNC milled brackets for structural mounting and load-bearing applications. Multi-axis machined from Steel or Aluminum with precision hole patterns and tight flatness tolerances.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/12/Hardware-Component-03.webp',
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

    <!-- ⑤ Custom Threading & Fluid Fittings -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="rounded-xl overflow-hidden">
                    <img src="http://kmwcnc.com/wp-content/uploads/2025/12/Machining-Exotic-Alloys-Superalloys.webp"
                         alt="Custom Threading & Fluid Fittings" class="w-full h-auto" loading="lazy" />
                </div>
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                        Custom Threading & Fluid Fittings
                    </h2>
                    <p class="text-muted leading-relaxed mb-6">
                        Industrial fluid systems demand leak-proof connections and precise thread profiles. KMW CNC produces custom fittings, adapters, and connectors with <strong class="text-text">NPT, BSP, metric, and specialty thread forms</strong> machined to exact specifications for hydraulic, pneumatic, and plumbing applications.
                    </p>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-full bg-accent/10 text-accent flex items-center justify-center flex-shrink-0 mt-0.5">
                                <?php echo ulx_icon('check', 'w-3 h-3'); ?>
                            </span>
                            <span class="text-muted text-sm"><strong class="text-text">Multi-Standard Threading:</strong> NPT, BSP, UNC, UNF, and metric threads.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-full bg-accent/10 text-accent flex items-center justify-center flex-shrink-0 mt-0.5">
                                <?php echo ulx_icon('check', 'w-3 h-3'); ?>
                            </span>
                            <span class="text-muted text-sm"><strong class="text-text">Leak-Proof Sealing:</strong> Thread gauging and pressure testing for critical fluid lines.</span>
                        </li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent">
                        Quote Custom Fittings
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ⑥ Hardened Parts for Heavy Machinery -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                        Hardened Parts for Heavy Machinery
                    </h2>
                    <p class="text-muted leading-relaxed mb-6">
                        Heavy-duty industrial equipment requires components that withstand extreme loads, vibration, and wear. We machine hardened steel pins, bushings, shafts, and structural brackets with <strong class="text-text">heat treatment and surface hardening</strong> to extend service life in punishing operating conditions.
                    </p>
                    <div class="mb-6">
                        <h3 class="font-bold text-primary mb-3" style="font-family: var(--font-heading);">Hardening Capabilities</h3>
                        <ul class="space-y-2">
                            <li class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-accent/10 text-accent flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <?php echo ulx_icon('check', 'w-3 h-3'); ?>
                                </span>
                                <span class="text-muted text-sm"><strong class="text-text">Heat Treatment:</strong> Quenching, tempering, and case hardening for wear resistance.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-accent/10 text-accent flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <?php echo ulx_icon('check', 'w-3 h-3'); ?>
                                </span>
                                <span class="text-muted text-sm"><strong class="text-text">Precision Grinding:</strong> Post-heat-treatment grinding for tight tolerance recovery.</span>
                            </li>
                        </ul>
                    </div>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent">
                        Request Hardened Parts Quote
                    </a>
                </div>
                <div class="rounded-xl overflow-hidden">
                    <img src="http://kmwcnc.com/wp-content/uploads/2025/11/Manual-Measurement.webp"
                         alt="Hardened Parts Inspection" class="w-full h-auto" loading="lazy" />
                </div>
            </div>
        </div>
    </section>

    <!-- ⑦ Protective Finishes for Industry -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-12">
                <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Protective Finishes for Industry
                </h2>
                <p class="text-muted max-w-3xl mx-auto">
                    Extending component life with corrosion-resistant and wear-protective surface treatments.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php
                $finishes = [
                    ['icon' => 'custom',     'title' => 'As-Machined (Standard)',           'desc' => 'Clean, burr-free parts with a surface roughness of Ra 0.8μm, suitable for internal components or parts that will receive further treatment.'],
                    ['icon' => 'palette',    'title' => 'Bead Blasting',                    'desc' => 'Uniform matte finish that removes tool marks and prepares surfaces for coating. Ideal for decorative hardware and pre-treatment preparation.'],
                    ['icon' => 'shield',     'title' => 'Anodizing Type II (Standard)',     'desc' => 'Standard anodize for aluminum hardware providing corrosion resistance and color options. Ideal for knobs, handles, and visible components.'],
                    ['icon' => 'zap',        'title' => 'Anodizing Type III (Hardcoat)',    'desc' => 'Hard anodize coating (50+ microns) providing exceptional wear and abrasion resistance for high-contact surfaces and moving mechanism parts.'],
                    ['icon' => 'package',    'title' => 'Powder Coating',                   'desc' => 'Thick, durable coating with excellent impact resistance. Available in RAL/Pantone colors for brackets, enclosures, and exterior-facing components.'],
                    ['icon' => 'trophy',     'title' => 'Electropolishing / Passivation',   'desc' => 'Removes surface contaminants and enhances corrosion resistance on stainless steel and steel hardware. Essential for food-grade and outdoor applications.'],
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
                Advanced CNC machining and fabrication processes for producing industrial-grade hardware with consistent quality.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <?php
                $techs = [
                    [
                        'title' => '5-Axis Simultaneous Milling',
                        'desc'  => 'For complex bracket geometries.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/12/5-Axis-Milling-1024x683.webp',
                        'link'  => '/capabilities/cnc-milling-parts/',
                    ],
                    [
                        'title' => 'Precision CNC Turning',
                        'desc'  => 'For fasteners and rotational parts.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/12/CNC-Turning-1024x683.webp',
                        'link'  => '/capabilities/cnc-turning-parts/',
                    ],
                    [
                        'title' => 'Wire EDM Services',
                        'desc'  => 'For hardened tool steel profiles.',
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

    <!-- ⑨ Industrial Quality Control -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-10">
                <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Industrial Quality Control
                </h2>
                <p class="text-muted max-w-3xl mx-auto">
                    Every hardware component is inspected against specification before shipment, with full dimensional reports available.
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

    <!-- ⑩ Common Hardware Materials -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-4">
                <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Common Hardware Materials
                </h2>
                <p class="text-muted max-w-3xl mx-auto">
                    Sourcing industrial-grade metals and engineering plastics for every hardware application.
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
                Hardware Manufacturing FAQs
            </h2>

            <?php
            $faqs = [
                ['q' => 'Can you match a sample without a drawing?',                              'a' => 'Yes. Send us a physical sample or clear photos with dimensions, and our engineers will reverse-engineer the part and produce a manufacturing drawing for your approval.'],
                ['q' => 'Do you offer heat treatment?',                                           'a' => 'Yes, we provide quenching, tempering, case hardening, and nitriding services. Heat treatment is applied after rough machining and before final finishing.'],
                ['q' => 'What is the best material for corrosion resistance?',                     'a' => 'Stainless Steel 316L offers excellent corrosion resistance for most environments. For marine or chemical exposure, we also recommend passivation or powder coating.'],
                ['q' => 'Do you offer kitting or assembly services for hardware sets?',             'a' => 'Yes. We can supply hardware kits with multiple components packed together, including labeling and custom packaging to your specifications.'],
                ['q' => 'Do you have a Minimum Order Quantity (MOQ)?',                             'a' => 'No MOQ. We support everything from single prototypes to high-volume production runs for industrial hardware.'],
                ['q' => 'What is your standard lead time?',                                        'a' => 'Standard lead time is 7-15 business days depending on complexity and quantity. Expedited options are available for urgent hardware orders.'],
                ['q' => 'How do you ensure my IP (Intellectual Property) is safe?',                'a' => 'We sign NDAs for every project and maintain strict access controls. Your designs and technical data are fully protected.'],
                ['q' => 'Do you provide quality inspection reports?',                               'a' => 'Yes, every order includes a detailed inspection report with dimensional results, material certifications, and surface finish measurements.'],
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
                        Get Custom Hardware Built to Last
                    </h2>
                    <p class="text-white/70 max-w-2xl mx-auto mb-8">
                        Upload your drawings or send a sample — our engineers will recommend the best material, finish, and process for your hardware.
                    </p>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent">
                        Request a Hardware Quote
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
