<?php
/**
 * Template Name: CNC Electronic Components
 *
 * KMW CNC — CNC Electronic Components (industry sub-page).
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

get_header();
?>

<main id="primary">

    <!-- ① Hero Banner -->
    <section class="relative py-14 lg:py-20 text-white overflow-hidden">
        <img src="http://kmwcnc.com/wp-content/uploads/2025/12/cnc-components-banner.webp"
             alt="" class="absolute inset-0 w-full h-full object-cover" aria-hidden="true" />
        <div class="absolute inset-0 bg-primary/80"></div>
        <div class="<?php ulx_container_class('relative z-10'); ?>">
            <?php ulx_breadcrumb(true); ?>
            <h1 class="text-4xl lg:text-5xl font-bold text-center mb-4" style="font-family: var(--font-heading);">
                Precision CNC Machining for Electronic Components
            </h1>
            <p class="text-center text-white/80 max-w-3xl mx-auto mb-8">
                High-performance manufacturing for heat sinks, enclosures, and connectors. We specialize in Aluminum and Copper machining with superior thermal conductivity and EMI shielding.
            </p>
            <div class="text-center">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent">
                    Get Electronic Quote
                </a>
            </div>
        </div>
    </section>

    <!-- ② Powering the Electronics Industry -->
    <section class="py-10 lg:py-12 bg-surface">
        <div class="<?php ulx_container_class('text-center'); ?>">
            <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-3" style="font-family: var(--font-heading);">
                Powering the Electronics Industry
            </h2>
            <p class="text-muted max-w-4xl mx-auto leading-relaxed">
                Electronics demand more than just precision; they require efficient thermal management and protection. KMW CNC provides robust manufacturing solutions for the consumer electronics, telecommunications, and semiconductor sectors. From prototype aluminum housings to mass-produced copper contacts, we ensure your devices perform reliably under pressure.
            </p>
        </div>
    </section>

    <!-- ③ Electronics Manufacturing Capabilities -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                        Electronics Manufacturing Capabilities
                    </h2>
                    <p class="text-muted leading-relaxed mb-6">
                        Technical specifications tailored for thermal management and device protection.
                    </p>
                </div>
                <div class="overflow-x-auto rounded-lg border border-border/50">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th class="px-5 py-3 text-left font-semibold">Feature</th>
                                <th class="px-5 py-3 text-left font-semibold">Electronics Capability</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-card">
                                <td class="px-5 py-3 font-medium text-text">Key Materials</td>
                                <td class="px-5 py-3 text-muted">Aluminum (6061, 6063), Copper (C11000), Brass, PEEK</td>
                            </tr>
                            <tr class="bg-surface">
                                <td class="px-5 py-3 font-medium text-text">Specialty</td>
                                <td class="px-5 py-3 text-muted">Thin-Wall Machining (0.3mm), Deep Pocketing</td>
                            </tr>
                            <tr class="bg-card">
                                <td class="px-5 py-3 font-medium text-text">Finishes</td>
                                <td class="px-5 py-3 text-muted">Chromate Conversion (RoHS), Anodizing, Altera conductance</td>
                            </tr>
                            <tr class="bg-surface">
                                <td class="px-5 py-3 font-medium text-text">Tolerance</td>
                                <td class="px-5 py-3 text-muted">&plusmn; 0.01mm for PCB mounting points</td>
                            </tr>
                            <tr class="bg-card">
                                <td class="px-5 py-3 font-medium text-text">Modes</td>
                                <td class="px-5 py-3 text-muted">Prototype to 100k+ Die Casting</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- ④ Electronic Component Showcase -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <h2 class="text-2xl lg:text-3xl font-bold text-primary text-center mb-12" style="font-family: var(--font-heading);">
                Electronic Component Showcase
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <?php
                $showcase = [
                    [
                        'title' => 'Custom Aluminum Heat Sinks',
                        'desc'  => 'Precision milled fins for maximum surface area and heat dissipation.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/12/Custom-Aluminum-Heat-Sinks.webp',
                    ],
                    [
                        'title' => 'Rugged Device Enclosures',
                        'desc'  => 'CNC machined aluminum housings with IP-rated sealing grooves.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/12/Electronic-Enclosure.webp',
                    ],
                    [
                        'title' => 'Copper & Brass Contacts',
                        'desc'  => 'High-conductivity electrical contacts from C11000 Copper or Brass.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/12/Copper-Brass-Contacts.webp',
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

    <!-- ⑤ Optimized Thermal Management Solutions -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="rounded-xl overflow-hidden">
                    <img src="http://kmwcnc.com/wp-content/uploads/2025/12/Optimized-Thermal-Management-Solutions.webp"
                         alt="Thermal Management Solutions" class="w-full h-auto" loading="lazy" />
                </div>
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                        Optimized Thermal Management Solutions
                    </h2>
                    <p class="text-muted leading-relaxed mb-6">
                        Overheating is the enemy of electronics. We specialize in machining complex <strong class="text-text">Heat Sinks</strong> and liquid cold plates from Aluminum 6063 and Copper. Our high-speed milling capabilities allow us to create thin fins and intricate flow channels that maximize surface area for heat dissipation, keeping your processors and power units cool.
                    </p>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-full bg-accent/10 text-accent flex items-center justify-center flex-shrink-0 mt-0.5">
                                <?php echo ulx_icon('check', 'w-3 h-3'); ?>
                            </span>
                            <span class="text-muted text-sm"><strong class="text-text">Thin-Fin Milling:</strong> Aspect ratios optimized for airflow.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-full bg-accent/10 text-accent flex items-center justify-center flex-shrink-0 mt-0.5">
                                <?php echo ulx_icon('check', 'w-3 h-3'); ?>
                            </span>
                            <span class="text-muted text-sm"><strong class="text-text">Copper Machining:</strong> For superior thermal transfer efficiency.</span>
                        </li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent">
                        Quote Heat Sink Parts
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ⑥ Precision Enclosures & RFI/EMI Shielding -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                        Precision Enclosures & RFI/EMI Shielding
                    </h2>
                    <p class="text-muted leading-relaxed mb-6">
                        We manufacture robust enclosures that protect sensitive electronics from the elements and electromagnetic interference. Our milling capabilities produce tight-fitting IP65 and conductive mating surfaces for <strong class="text-text">EMI/RFI Shielding</strong>. We offer conductive finishes like Chromate Conversion (Alodine) for aluminum.
                    </p>
                    <div class="mb-6">
                        <h3 class="font-bold text-primary mb-3" style="font-family: var(--font-heading);">Key Capabilities</h3>
                        <ul class="space-y-2">
                            <li class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-accent/10 text-accent flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <?php echo ulx_icon('check', 'w-3 h-3'); ?>
                                </span>
                                <span class="text-muted text-sm"><strong class="text-text">IP Rated Sealing:</strong> Precision grooves for gaskets and O-rings.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-accent/10 text-accent flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <?php echo ulx_icon('check', 'w-3 h-3'); ?>
                                </span>
                                <span class="text-muted text-sm"><strong class="text-text">Conductive Finishes:</strong> Alodine coating for grounding continuity.</span>
                            </li>
                        </ul>
                    </div>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent">
                        Quote Enclosure Parts
                    </a>
                </div>
                <div class="rounded-xl overflow-hidden">
                    <img src="http://kmwcnc.com/wp-content/uploads/2025/12/Precision-Enclosures.webp"
                         alt="Precision Enclosures" class="w-full h-auto" loading="lazy" />
                </div>
            </div>
        </div>
    </section>

    <!-- ⑦ Functional Finishes for Electronics -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-12">
                <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Functional Finishes for Electronics
                </h2>
                <p class="text-muted max-w-3xl mx-auto">
                    Balancing conductivity, corrosion resistance, and aesthetics.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php
                $finishes = [
                    ['icon' => 'custom',     'title' => 'As-Machined (Standard)',         'desc' => 'The most cost-effective option. Parts are ready to use after CNC with a standard Ra 1.6μm reflective surface. Great for visual components.'],
                    ['icon' => 'palette',    'title' => 'Bead Blasting',                  'desc' => 'A uniform matte surface for a clean finished look and feel. It removes tool marks and creates a more uniform, professionally-looking surface for cosmetic electronics.'],
                    ['icon' => 'shield',     'title' => 'Anodizing Type II (Standard)',   'desc' => 'An electrolytic passivation process that increases corrosion resistance and allows for coloring. Thin, dense, ideal for visual cosmetic components.'],
                    ['icon' => 'zap',        'title' => 'Anodizing Type III (Hardcoat)',  'desc' => 'A thicker, denser coating for extreme wear resistance. Ultra-durable for frequently handled enclosures and parts requiring maximum durability.'],
                    ['icon' => 'package',    'title' => 'Powder Coating',                 'desc' => 'A dry powder sprayed and thermally cured for a hard, scratch-resistant finish with high-impact resistance. Available in RAL/Pantone colors.'],
                    ['icon' => 'trophy',     'title' => 'Electropolishing / Passivation', 'desc' => 'An electrochemical process for the finest surface finish. Creates a microscopically smooth, sterile finish. Essential for medical and food-grade stainless steel parts.'],
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

    <!-- ⑧ Key Technologies for Electronics -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <h2 class="text-2xl lg:text-3xl font-bold text-primary text-center mb-4" style="font-family: var(--font-heading);">
                Key Technologies for Electronics
            </h2>
            <p class="text-center text-muted max-w-3xl mx-auto mb-12">
                From prototyping complex geometries to high-volume production.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <?php
                $techs = [
                    [
                        'title' => 'CNC Milling',
                        'desc'  => 'For heat sinks and casings.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/12/5-Axis-Milling-1024x683.webp',
                        'link'  => '/capabilities/cnc-milling-parts/',
                    ],
                    [
                        'title' => 'CNC Turning',
                        'desc'  => 'For connectors and standoffs.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/12/CNC-Turning-1024x683.webp',
                        'link'  => '/capabilities/cnc-turning-parts/',
                    ],
                    [
                        'title' => 'Die Casting',
                        'desc'  => 'For mass production of housings.',
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

    <!-- ⑨ Quality Assurance for Electronics -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-10">
                <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Quality Assurance for Electronics
                </h2>
                <p class="text-muted max-w-3xl mx-auto">
                    Ensuring perfect fits for PCBs and strict cosmetic standards.
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

    <!-- ⑩ Electronic-Grade Materials -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-4">
                <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Electronic-Grade Materials
                </h2>
                <p class="text-muted max-w-3xl mx-auto">
                    Selecting the right material for conductivity and thermal performance.
                </p>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6 mt-10">
                <?php
                $materials = [
                    ['title' => 'CNC Aluminum Parts',        'desc' => 'Lightweight & versatile. Ideal for electronics and auto parts.',             'img' => 'http://kmwcnc.com/wp-content/uploads/2025/11/Aluminum-Parts.webp',        'link' => '/materials/cnc-aluminum-parts/'],
                    ['title' => 'CNC Stainless Steel Parts', 'desc' => 'High corrosion resistance for medical & food industries.',                  'img' => 'http://kmwcnc.com/wp-content/uploads/2025/11/Stainless-Steel-Parts-1.webp','link' => '/materials/cnc-stainless-steel-parts/'],
                    ['title' => 'CNC Steel & Alloy Parts',   'desc' => 'High strength & durability. Ideal for heavy-duty industrial applications.', 'img' => 'http://kmwcnc.com/wp-content/uploads/2025/12/Carbon-Alloy-Steel-.webp',   'link' => '/materials/cnc-steel-parts/'],
                    ['title' => 'Brass & Copper Parts',      'desc' => 'Excellent machinability for electrical components.',                         'img' => 'http://kmwcnc.com/wp-content/uploads/2025/11/Brass-Copper-Parts.webp',    'link' => '/materials/brass-copper-parts/'],
                    ['title' => 'CNC Titanium Parts',        'desc' => 'PEEK, Nylon, and Delrin for lightweight insulation and prototypes.',         'img' => 'http://kmwcnc.com/wp-content/uploads/2025/12/Titanium-Alloys.webp',       'link' => '/materials/cnc-titanium-parts/'],
                    ['title' => 'Machined Plastic Parts',    'desc' => 'PEEK, Nylon, and Delrin for lightweight insulation and prototypes.',         'img' => 'http://kmwcnc.com/wp-content/uploads/2025/11/Plastic-Composites.webp',    'link' => '/materials/machined-plastic-parts/'],
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
                Electronics Manufacturing FAQs
            </h2>

            <?php
            $faqs = [
                ['q' => 'Can you machine copper for heat sinks?',                                     'a' => 'Yes. We machine C11000 and C10100 oxygen-free copper for high-performance heat sinks requiring superior thermal conductivity.'],
                ['q' => 'Do you have a Minimum Order Quantity (MOQ)?',                                 'a' => 'No MOQ. We support everything from single prototypes to high-volume production runs of 100,000+ parts.'],
                ['q' => 'What finish should I use for electrical grounding?',                           'a' => 'Chromate conversion (Alodine) maintains electrical conductivity while providing corrosion protection. Ideal for EMI shielding enclosures.'],
                ['q' => 'What is your standard lead time?',                                             'a' => 'Prototypes: 3-5 business days. Production: 7-15 business days depending on complexity and volume. Rush service available.'],
                ['q' => 'Can you hold tight tolerances for PCB mounting?',                              'a' => 'Yes. We routinely hold ±0.01mm on PCB mounting holes, standoff positions, and connector cutouts to ensure perfect board alignment.'],
                ['q' => 'How do you ensure my IP (Intellectual Property) is safe?',                     'a' => 'We sign NDAs for every project and maintain strict access controls. Your designs and technical data are fully protected.'],
                ['q' => 'Do you install threaded inserts or PEM fasteners for housings?',               'a' => 'Yes, we install PEM fasteners, helicoil inserts, and threaded brass inserts as secondary operations for electronic enclosures.'],
                ['q' => 'Do you provide quality inspection reports?',                                    'a' => 'Yes, every order includes a detailed inspection report with CMM data, dimensional results, and material certifications.'],
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
                        Power Up Your Electronic Projects
                    </h2>
                    <p class="text-white/70 max-w-2xl mx-auto mb-8">
                        Upload your enclosure or heat sink designs for a fast, no-obligation quote.
                    </p>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent">
                        Upload Electronics Designs
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
