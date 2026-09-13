<?php
/**
 * Template Name: 5-Axis CNC Machining Services
 *
 * KMW CNC — 5-Axis CNC Machining Services (capabilities sub-page).
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

get_header();
?>

<main id="primary">

    <!-- ① Hero Banner -->
    <section class="relative py-14 lg:py-20 text-white overflow-hidden">
        <img src="http://kmwcnc.com/wp-content/uploads/2025/12/5-Axis-CNC-Machining-Services.webp"
             alt="" class="absolute inset-0 w-full h-full object-cover" aria-hidden="true" />
        <div class="absolute inset-0 bg-primary/80"></div>
        <div class="<?php ulx_container_class('relative z-10'); ?>">
            <?php ulx_breadcrumb(true); ?>
            <h1 class="text-4xl lg:text-5xl font-bold text-center mb-4" style="font-family: var(--font-heading);">
                Premium 5-Axis CNC Machining Services
            </h1>
            <p class="text-center text-white/80 max-w-3xl mx-auto mb-8">
                Mastering complexity in a single setup. From medical to automotive to luxury, we deliver parts with intricate geometries and tight tolerances (&plusmn;0.005mm) faster and more accurately.
            </p>
            <div class="text-center">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent">
                    Get a Instant Quote
                </a>
            </div>
        </div>
    </section>

    <!-- ② Unlock Geometric Freedom with 5-Axis Milling -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class('text-center'); ?>">
            <h2 class="text-3xl lg:text-4xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                Unlock Geometric Freedom with 5-Axis Milling
            </h2>
            <p class="text-muted max-w-4xl mx-auto leading-relaxed mb-4">
                While traditional 3-axis machines move in X, Y, and Z, our advanced 5-axis machining centers add two rotary axes (A and B). This allows the cutting tool to approach the workpiece from <strong>virtually any direction</strong>.
            </p>
            <p class="text-muted max-w-4xl mx-auto leading-relaxed">
                At KMW CNC, we utilize both <strong>Simultaneous 5-Axis</strong> (for contouring) and <strong>3+2 Positional 5-Axis Machining</strong> (for accessing multiple faces). This technology eliminates the need for multiple fixtures, significantly reducing human error and ensuring superior positional accuracy.
            </p>
        </div>
    </section>

    <!-- ③ Why Upgrade to 5-Axis Machining? -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-6" style="font-family: var(--font-heading);">
                        Why Upgrade to 5-Axis Machining?
                    </h2>
                    <ul class="space-y-4 text-sm text-text">
                        <li class="flex items-start gap-3">
                            <?php echo ulx_icon('check', 'w-5 h-5 text-accent flex-shrink-0 mt-0.5'); ?>
                            <div><strong>Setup Reduction:</strong> Complete parts in a single fixture — reducing re-clamping. Previously 5 setups become 1, dramatically reducing error and lead time.</div>
                        </li>
                        <li class="flex items-start gap-3">
                            <?php echo ulx_icon('check', 'w-5 h-5 text-accent flex-shrink-0 mt-0.5'); ?>
                            <div><strong>Complex Surface Finish:</strong> Access deep cavities, undercuts, and compound curves with short, rigid tooling. This results in better surface quality, finer finishes and closer to net shape machining.</div>
                        </li>
                        <li class="flex items-start gap-3">
                            <?php echo ulx_icon('check', 'w-5 h-5 text-accent flex-shrink-0 mt-0.5'); ?>
                            <div><strong>Superior Surface Finish:</strong> Shorter tool lengths reduce vibration and deflection, producing superior surface quality. Ra 0.4&mu;m achievable on complex surfaces.</div>
                        </li>
                        <li class="flex items-start gap-3">
                            <?php echo ulx_icon('check', 'w-5 h-5 text-accent flex-shrink-0 mt-0.5'); ?>
                            <div><strong>Precision &amp; Consistency:</strong> Fewer setups mean fewer opportunities for error. Parts maintain positional accuracy between all features since they never leave the machine.</div>
                        </li>
                    </ul>
                </div>
                <div class="rounded-xl overflow-hidden">
                    <img src="https://kmwcnc.com/wp-content/uploads/2025/12/Key-Advantages.webp"
                         alt="5-Axis CNC Machining" class="w-full h-auto" loading="lazy" />
                </div>
            </div>
        </div>
    </section>

    <!-- ④ Technical Specifications -->
    <section class="py-16 lg:py-20 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                        5-Axis Machine Specifications
                    </h2>
                    <p class="text-muted leading-relaxed">
                        Our 5-axis department operates multiple high-performance machining centers capable of handling complex geometries with unmatched precision and repeatability.
                    </p>
                </div>

                <div class="overflow-x-auto rounded-lg border border-border/50">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th class="text-left px-5 py-3 font-semibold">Parameter</th>
                                <th class="text-left px-5 py-3 font-semibold">5-Axis Capability</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-border/50">
                            <tr class="bg-card">
                                <td class="px-5 py-3 font-medium text-text">Processes</td>
                                <td class="px-5 py-3 text-muted">Simultaneous 5-Axis, 3+2 Positional</td>
                            </tr>
                            <tr class="bg-surface">
                                <td class="px-5 py-3 font-medium text-text">Tolerance Accuracy</td>
                                <td class="px-5 py-3 text-muted">&plusmn;0.005mm (&plusmn;0.0002")</td>
                            </tr>
                            <tr class="bg-card">
                                <td class="px-5 py-3 font-medium text-text">Max. Part Dimensions</td>
                                <td class="px-5 py-3 text-muted">Up to 1000mm x 600mm x 500mm (L x W x H)</td>
                            </tr>
                            <tr class="bg-surface">
                                <td class="px-5 py-3 font-medium text-text">Surface Finish</td>
                                <td class="px-5 py-3 text-muted">Ra 0.4 &mu;m - 3.2 &mu;m (as-machined)</td>
                            </tr>
                            <tr class="bg-card">
                                <td class="px-5 py-3 font-medium text-text">Materials</td>
                                <td class="px-5 py-3 text-muted">Aluminum, Steel, Titanium, Inconel, Plastics</td>
                            </tr>
                            <tr class="bg-surface">
                                <td class="px-5 py-3 font-medium text-text">Max. Taper Angle</td>
                                <td class="px-5 py-3 text-muted">&plusmn;90&deg; (full hemisphere)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- ⑤ Our Diverse 5-Axis Machine Configurations -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-4">
                <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Our Diverse 5-Axis Machine Configurations
                </h2>
                <p class="text-muted max-w-3xl mx-auto">
                    Not all 5-axis machines are created equal. To ensure the optimal machining strategy for your specific part geometry and size, KMW utilizes various machine structures. Here is a breakdown of the specific 5-axis technologies we employ.
                </p>
            </div>

            <?php
            $configs = [
                [
                    'title' => 'Trunnion Table',
                    'desc'  => 'The workpiece is mounted on a "cradle" table that rotates (A-axis) and tilts (B-axis). Known for stability. Up to 20, 30, etc.',
                    'features' => ['Excellent for small-medium complex parts', 'Provides superior rigidity for heavy cuts', 'Excellent stability for hard-to-machine materials and heavy stock removal.'],
                    'img'   => 'https://kmwcnc.com/wp-content/uploads/2025/12/5-Axis001-768x571.webp',
                ],
                [
                    'title' => 'Swivel Head (Fixed Head)',
                    'desc'  => 'The heavy workpiece remains stationary on the table. The spindle head tilts and rotates to approach the part from any angle.',
                    'features' => ['Primary workpiece remains stationary, improving accuracy', 'Excellent for heavy workpiece machining of large industrial components', 'Up to 2000mm x 1000mm workpiece capacity.'],
                    'img'   => 'https://kmwcnc.com/wp-content/uploads/2025/12/5-Axis002-768x571.webp',
                ],
                [
                    'title' => 'Hybrid Head-Table',
                    'desc'  => 'A versatile combination where the spindle head tilts (B-axis) while the table rotates (C-axis), along with standard X, Y, Z axes.',
                    'features' => ['Best for most versatile machining — adjustable configurations', 'Optimal for medium to large-size parts with 360° access', 'Efficient toolpath planning on medium-size parts.'],
                    'img'   => 'https://kmwcnc.com/wp-content/uploads/2025/12/5-Axis003-768x571.webp',
                ],
                [
                    'title' => 'Rotating Head (Universal Head)',
                    'desc'  => 'A highly versatile machine where the spindle head can rotate continuously in multiple planes on a 45-degree angle plane to access virtually any surface.',
                    'features' => ['Provides 360-degree spindle rotation, tight access', 'Handles extremely complex deep pockets and undercuts', 'High precision on complex contoured surfaces.'],
                    'img'   => 'https://kmwcnc.com/wp-content/uploads/2025/12/5-Axis004-768x571.webp',
                ],
                [
                    'title' => 'Orthogonal Gimbal',
                    'desc'  => 'A unique dual-swivel where the tool rotates in orthogonal planes — ideal for very complex sculptured surfaces and pump/compressor impellers.',
                    'features' => ['Handles extremely complex geometry with superior precision', 'Higher spindle speed up to 24,000 RPM achievable', 'Widely used for impellers, molds, and medical implants.'],
                    'img'   => 'https://kmwcnc.com/wp-content/uploads/2025/12/5-Axis005-768x571.webp',
                ],
                [
                    'title' => 'Multitasking Mill-Turn Centers',
                    'desc'  => 'Combines 5-axis milling and CNC turning in a single machine. Eliminates multiple setups and achieves unmatched accuracy on complex cylindrical parts.',
                    'features' => ['For most versatile machining, combines mill and turn in one setup', 'Achieves perfect concentricity for complex cylindrical parts', 'Eliminates tolerance stack-up from transferring between machines.'],
                    'img'   => 'https://kmwcnc.com/wp-content/uploads/2025/12/5-Axis006-768x571.webp',
                ],
            ];
            ?>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-10">
                <?php foreach ($configs as $cfg) : ?>
                    <div class="bg-surface rounded-lg overflow-hidden border border-border/50">
                        <div class="aspect-[4/3] overflow-hidden">
                            <img src="<?php echo esc_url($cfg['img']); ?>" alt="<?php echo esc_attr($cfg['title']); ?>"
                                 class="w-full h-full object-cover" loading="lazy" />
                        </div>
                        <div class="p-5">
                            <h3 class="font-bold text-primary mb-2" style="font-family: var(--font-heading);">
                                <?php echo esc_html($cfg['title']); ?>
                            </h3>
                            <p class="text-sm text-muted leading-relaxed mb-3">
                                <?php echo esc_html($cfg['desc']); ?>
                            </p>
                            <ul class="space-y-1">
                                <?php foreach ($cfg['features'] as $f) : ?>
                                    <li class="flex items-start gap-2 text-xs text-text">
                                        <?php echo ulx_icon('check', 'w-3.5 h-3.5 text-accent flex-shrink-0 mt-0.5'); ?>
                                        <?php echo esc_html($f); ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
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

    <!-- ⑥ CNC Machining Solutions for Critical Industries -->
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
                    'desc'  => 'We provide ISO 13485-compliant machining for surgical instruments and implants. Our process ensures biocompatibility and sterility, utilizing medical-grade Titanium and Stainless Steel CDA.',
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
                    'desc'  => 'Powering sensitive electronics with precision. We produce custom heat sinks, enclosures, and RF connectors from Aluminum and Copper with excellent thermal conductivity and perfect fit.',
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

    <!-- ⑦ Engineering Excellence & Quality Assurance -->
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

    <!-- ⑧ Machining Capabilities by Material -->
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

    <!-- ⑨ FAQ -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <h2 class="text-2xl lg:text-3xl font-bold text-primary text-center mb-10" style="font-family: var(--font-heading);">
                Frequently Asked Questions
            </h2>

            <?php
            $faqs = [
                ['q' => 'What is the main difference between 3-axis and 5-axis machining?',     'a' => '3-axis machines move the tool in X, Y, and Z only. 5-axis adds two rotary axes (A and B), allowing the tool to approach from virtually any direction — enabling complex geometries in a single setup.'],
                ['q' => 'Is 5-axis machining more expensive than 3-axis machining?',             'a' => 'Per-hour rates are higher, but 5-axis often reduces total cost by eliminating multiple setups, reducing fixturing costs, and improving first-pass yield. For complex parts, it is frequently more cost-effective overall.'],
                ['q' => 'When should I choose 5-axis machining for my project?',                 'a' => 'Choose 5-axis when your part has undercuts, complex curved surfaces, deep cavities, or features on multiple faces that would require many setups on a 3-axis machine.'],
                ['q' => 'What materials are best suited for 5-axis milling?',                    'a' => 'All machinable materials work with 5-axis — aluminum, stainless steel, titanium, Inconel, brass, copper, and engineering plastics like PEEK and POM.'],
                ['q' => 'What is the difference between Simultaneous 5-Axis and 3+2 Axis?',     'a' => 'Simultaneous 5-axis moves all 5 axes at once for complex contours. 3+2 positional locks the rotary axes at an angle, then machines with 3 axes — simpler programming, excellent for multi-face access.'],
                ['q' => 'Does 5-axis machining produce a better surface finish?',                'a' => 'Yes. Shorter tools with less overhang reduce vibration, producing superior surface quality. We achieve Ra 0.4μm on complex curved surfaces.'],
                ['q' => 'What tolerances can KMW achieve with 5-axis CNC machining?',            'a' => 'We routinely achieve ±0.005mm on critical dimensions. Positional accuracy between features machined in a single setup is even tighter.'],
                ['q' => 'How do I get a quote for 5-axis machining services?',                   'a' => 'Upload your 3D CAD file (STEP preferred) through our contact page. Our engineers will review your design, provide DFM feedback, and deliver a competitive quote within 12 hours.'],
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

    <!-- ⑩ CTA -->
    <section class="pb-16 lg:pb-20 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="relative rounded-xl overflow-hidden px-6 py-14 lg:py-20 text-center">
                <img src="http://kmwcnc.com/wp-content/uploads/2025/12/cnc-mancing.webp"
                     alt="" class="absolute inset-0 w-full h-full object-cover" aria-hidden="true" />
                <div class="absolute inset-0 bg-primary/85"></div>
                <div class="relative z-10">
                    <h2 class="text-2xl lg:text-3xl font-bold text-white mb-4" style="font-family: var(--font-heading);">
                        Ready for Extreme Precision?
                    </h2>
                    <p class="text-white/70 max-w-2xl mx-auto mb-8">
                        Don't let complex geometries limit your design. Upload your 3D CAD files today for a free 5-axis manufacturability review.
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
