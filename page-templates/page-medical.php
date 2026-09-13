<?php
/**
 * Template Name: CNC Medical Parts
 *
 * KMW CNC — CNC Medical Parts (industry sub-page).
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

get_header();
?>

<main id="primary">

    <!-- ① Hero Banner -->
    <section class="relative py-14 lg:py-20 text-white overflow-hidden">
        <img src="http://kmwcnc.com/wp-content/uploads/2025/12/medical-bannere.webp"
             alt="" class="absolute inset-0 w-full h-full object-cover" aria-hidden="true" />
        <div class="absolute inset-0 bg-primary/80"></div>
        <div class="<?php ulx_container_class('relative z-10'); ?>">
            <?php ulx_breadcrumb(true); ?>
            <h1 class="text-4xl lg:text-5xl font-bold text-center mb-4" style="font-family: var(--font-heading);">
                Precision CNC Machining for Medical Devices
            </h1>
            <p class="text-center text-white/80 max-w-3xl mx-auto mb-8">
                ISO 13485 certified machining for surgical instruments, implants, and diagnostic equipment. We deliver biocompatible parts with micro-precision and full traceability.
            </p>
            <div class="text-center">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent">
                    Get Medical Quote
                </a>
            </div>
        </div>
    </section>

    <!-- ② Trusted Partner for MedTech Innovation -->
    <section class="py-10 lg:py-12 bg-surface">
        <div class="<?php ulx_container_class('text-center'); ?>">
            <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-3" style="font-family: var(--font-heading);">
                Trusted Partner for MedTech Innovation
            </h2>
            <p class="text-muted max-w-4xl mx-auto leading-relaxed">
                In the medical industry, there is no room for error. KMW CNC combines advanced Swiss Machining and 5-Axis Milling to produce complex medical components from Titanium, Stainless Steel, and medical-grade plastics. Our rigorous quality management system ensures traceability and cleanliness for every part we ship.
            </p>
        </div>
    </section>

    <!-- ③ Medical Manufacturing Capabilities & Standards -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                        Medical Manufacturing Capabilities & Standards
                    </h2>
                    <p class="text-muted leading-relaxed mb-6">
                        Strict adherence to quality protocols for implants, instruments, and bio-devices.
                    </p>
                </div>
                <div class="overflow-x-auto rounded-lg border border-border/50">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th class="px-5 py-3 text-left font-semibold">Feature</th>
                                <th class="px-5 py-3 text-left font-semibold">Medical Capability</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-card">
                                <td class="px-5 py-3 font-medium text-text">Certifications</td>
                                <td class="px-5 py-3 text-muted">ISO 13485:2016, ISO 9001:2015</td>
                            </tr>
                            <tr class="bg-surface">
                                <td class="px-5 py-3 font-medium text-text">Key Materials</td>
                                <td class="px-5 py-3 text-muted">Ti-6Al-4V, 316L SS, PEEK, UHMWPE, Cobalt-Chrome</td>
                            </tr>
                            <tr class="bg-card">
                                <td class="px-5 py-3 font-medium text-text">Micro-Precision</td>
                                <td class="px-5 py-3 text-muted">Diameters down to 0.5mm, Tolerances &plusmn; 0.005mm</td>
                            </tr>
                            <tr class="bg-surface">
                                <td class="px-5 py-3 font-medium text-text">Surface Finish</td>
                                <td class="px-5 py-3 text-muted">Ra 0.1μm Electropolished/Mirror</td>
                            </tr>
                            <tr class="bg-card">
                                <td class="px-5 py-3 font-medium text-text">Applications</td>
                                <td class="px-5 py-3 text-muted">Implants, Surgical Robots, Endoscopes, Dental</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- ④ Medical Component Showcase -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <h2 class="text-2xl lg:text-3xl font-bold text-primary text-center mb-12" style="font-family: var(--font-heading);">
                Medical Component Showcase
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <?php
                $showcase = [
                    [
                        'title' => 'Titanium Bone Plates',
                        'desc'  => 'Anatomically contoured surfaces machined from Titanium (Ti-6Al-4V). Burr-free and passivated for biocompatibility.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/12/Titanium-Bone-Plates.webp',
                    ],
                    [
                        'title' => 'Robotic Surgical Arms',
                        'desc'  => 'Complex stainless steel components for robotic surgery, requiring high strength and tight-tolerance linkage.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/12/Surgical-Instruments.webp',
                    ],
                    [
                        'title' => 'Micro-Machined Pins',
                        'desc'  => 'Produced in Swiss lathes. Tiny pins and screws under 0.8mm for dental and micro-surgical applications.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/12/Micro-Machined-Pins.webp',
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

    <!-- ⑤ Swiss Machining for Micro-Precision -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="rounded-xl overflow-hidden">
                    <img src="http://kmwcnc.com/wp-content/uploads/2025/12/Swiss-Machining-for-Micro-Precision.webp"
                         alt="Swiss Machining for Micro-Precision" class="w-full h-auto" loading="lazy" />
                </div>
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                        Swiss Machining for Micro-Precision
                    </h2>
                    <p class="text-muted leading-relaxed mb-6">
                        Medical devices are getting smaller. KMW CNC utilizes high-precision <strong class="text-text">Swiss Screw Machines</strong> to manufacture intricate micro-parts for bone screws, dental prosthetics, and electrical contacts. Our capability to machine parts as small as <strong class="text-text">0.5mm</strong> with complex geometries in a single setup ensures high-volume consistency and cost-efficiency.
                    </p>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-full bg-accent/10 text-accent flex items-center justify-center flex-shrink-0 mt-0.5">
                                <?php echo ulx_icon('check', 'w-3 h-3'); ?>
                            </span>
                            <span class="text-muted text-sm"><strong class="text-text">Micro Turning:</strong> Diameters from 0.5mm to 32mm.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-full bg-accent/10 text-accent flex items-center justify-center flex-shrink-0 mt-0.5">
                                <?php echo ulx_icon('check', 'w-3 h-3'); ?>
                            </span>
                            <span class="text-muted text-sm"><strong class="text-text">High Volume:</strong> 24/7 lights-out manufacturing for consumables.</span>
                        </li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent">
                        Quote Micro Parts
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ⑥ Superior Surface Finishes & Cleanliness -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                        Superior Surface Finishes & Cleanliness
                    </h2>
                    <p class="text-muted leading-relaxed mb-6">
                        Surface quality is critical for sterilization and tissue integration. We achieve surface roughness as low as <strong class="text-text">Ra 0.1μm</strong> through precision grinding, lapping, and electropolishing. Every part is ultrasonically cleaned and packaged in clean-room conditions.
                    </p>
                    <div class="mb-6">
                        <h3 class="font-bold text-primary mb-3" style="font-family: var(--font-heading);">Key Capabilities</h3>
                        <ul class="space-y-2">
                            <li class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-accent/10 text-accent flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <?php echo ulx_icon('check', 'w-3 h-3'); ?>
                                </span>
                                <span class="text-muted text-sm"><strong class="text-text">Smooth Finishes:</strong> Ra 0.1 - 0.2μm mirror-polished surfaces.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-accent/10 text-accent flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <?php echo ulx_icon('check', 'w-3 h-3'); ?>
                                </span>
                                <span class="text-muted text-sm"><strong class="text-text">Cleanroom Packaging:</strong> Passivation to ASTM A967 specs.</span>
                            </li>
                        </ul>
                    </div>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent">
                        Learn About Our Finishes
                    </a>
                </div>
                <div class="rounded-xl overflow-hidden">
                    <img src="http://kmwcnc.com/wp-content/uploads/2025/12/Superior-Surface-Finishes.webp"
                         alt="Superior Surface Finishes" class="w-full h-auto" loading="lazy" />
                </div>
            </div>
        </div>
    </section>

    <!-- ⑦ Biocompatible Surface Treatments -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-12">
                <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Biocompatible Surface Treatments
                </h2>
                <p class="text-muted max-w-3xl mx-auto">
                    Enhancing durability and sterility with medical-grade finishing options like Passivation and Electropolishing.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php
                $finishes = [
                    ['icon' => 'custom',     'title' => 'As-Machined (Standard)',           'desc' => 'The most cost-effective option. Parts are ready to use after CNC with a standard Ra 1.6μm reflective surface. Great for non-contact medical parts.'],
                    ['icon' => 'palette',    'title' => 'Bead Blasting',                    'desc' => 'A uniform matte surface for a clean finished look and feel. It removes tool marks and creates a more uniform, professional-looking surface. Available in multiple finishes.'],
                    ['icon' => 'shield',     'title' => 'Anodizing Type II (Standard)',     'desc' => 'An electrolytic passivation process that increases the corrosion resistance and allows for coloring. Thin, dense, and FDA-approved for medical housings.'],
                    ['icon' => 'zap',        'title' => 'Anodizing Type III (Hardcoat)',    'desc' => 'A thicker, denser coating for extreme wear resistance. It is a surface solution that provides ultra-durable wear, suited for repeatedly sterilized instruments and re-usable casettes.'],
                    ['icon' => 'package',    'title' => 'Powder Coating',                   'desc' => 'A dry powder sprayed and thermally cured for a hard, scratch-resistant finish. Available in RAL/Pantone colors.'],
                    ['icon' => 'trophy',     'title' => 'Electropolishing / Passivation',   'desc' => 'An electrochemical process for the finest surface finish of all. It removes a thin surface layer creating a microscopically smooth, sterile finish. Essential for implantable and fluid-grade stainless steel parts.'],
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

    <!-- ⑧ Key Technologies for Medical Manufacturing -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <h2 class="text-2xl lg:text-3xl font-bold text-primary text-center mb-4" style="font-family: var(--font-heading);">
                Key Technologies for Medical Manufacturing
            </h2>
            <p class="text-center text-muted max-w-3xl mx-auto mb-12">
                Leveraging advanced multi-axis machining and EDM to meet the complex geometric demands of medical components.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <?php
                $techs = [
                    [
                        'title' => '5-Axis Simultaneous Milling',
                        'desc'  => 'For complex implant geometries.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/12/5-Axis-Milling-1024x683.webp',
                        'link'  => '/capabilities/cnc-milling-parts/',
                    ],
                    [
                        'title' => 'Precision CNC Turning',
                        'desc'  => 'For full round/long parts.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/12/CNC-Turning-1024x683.webp',
                        'link'  => '/capabilities/cnc-turning-parts/',
                    ],
                    [
                        'title' => 'Wire EDM Services',
                        'desc'  => 'For intricate internal cuts.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/12/Wire-EDM.webp',
                        'link'  => '/capabilities/wire-edm-services/',
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
                    Rigorous validation processes ensuring for traceability and dimensional accuracy.
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

    <!-- ⑩ Medical-Grade Material Expertise -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-4">
                <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Medical-Grade Material Expertise
                </h2>
                <p class="text-muted max-w-3xl mx-auto">
                    Machining Titanium, Stainless Steel 316L, and implantable plastics with certified purity.
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
                Frequently Asked Questions about Medical Manufacturing
            </h2>

            <?php
            $faqs = [
                ['q' => 'Are you ISO 13485 certified?',                                   'a' => 'Yes. We operate under ISO 13485:2016 certified quality management systems specifically designed for medical device manufacturing.'],
                ['q' => 'Do you have a Minimum Order Quantity (MOQ)?',                     'a' => 'No MOQ. We support everything from single prototypes to high-volume production runs for medical components.'],
                ['q' => 'What medical-grade plastics can you machine?',                    'a' => 'We machine PEEK, UHMWPE, Delrin (POM), Nylon, PTFE, and other FDA-compliant medical plastics for implants and instruments.'],
                ['q' => 'What is your standard lead time?',                                'a' => 'Standard lead time is 7-15 business days. Expedited 3-5 day turnaround available for urgent medical projects.'],
                ['q' => 'Do you offer laser marking for UDI?',                             'a' => 'Yes, we provide laser marking for Unique Device Identification (UDI) compliance per FDA and EU MDR requirements.'],
                ['q' => 'How do you ensure my IP (Intellectual Property) is safe?',        'a' => 'We sign NDAs for every project and maintain strict access controls. Your designs and technical data are fully protected.'],
                ['q' => 'How do you ensure material purity?',                              'a' => 'All materials come with full MTR (Material Test Reports) and certificates of conformance. We source from certified medical-grade suppliers only.'],
                ['q' => 'Do you provide quality inspection reports?',                       'a' => 'Yes, every order includes a detailed inspection report with CMM data, dimensional results, and material certifications.'],
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
                        Accelerate Your Medical Innovations
                    </h2>
                    <p class="text-white/70 max-w-2xl mx-auto mb-8">
                        Upload your designs for a confidential DFM review and rapid quotation today.
                    </p>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent">
                        Upload Medical Designs
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
