<?php
/**
 * Template Name: Wire EDM Services
 *
 * KMW CNC — Wire EDM Services (capabilities sub-page).
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

get_header();
?>

<main id="primary">

    <!-- ① Hero Banner -->
    <section class="relative py-14 lg:py-20 text-white overflow-hidden">
        <img src="http://kmwcnc.com/wp-content/uploads/2025/12/001Wire-EDM.webp"
             alt="" class="absolute inset-0 w-full h-full object-cover" aria-hidden="true" />
        <div class="absolute inset-0 bg-primary/80"></div>
        <div class="<?php ulx_container_class('relative z-10'); ?>">
            <?php ulx_breadcrumb(true); ?>
            <h1 class="text-4xl lg:text-5xl font-bold text-center mb-4" style="font-family: var(--font-heading);">
                Precision Wire EDM Services China
            </h1>
            <p class="text-center text-white/80 max-w-3xl mx-auto mb-8">
                Machining the un-machinable. From hardened tool steel to conductive ceramics, we deliver intricate contours with tolerances down to &plusmn;0.003mm.
            </p>
            <div class="text-center">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent">
                    Get a Instant Quote
                </a>
            </div>
        </div>
    </section>

    <!-- ② What is Wire EDM Machining? -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class('text-center'); ?>">
            <h2 class="text-3xl lg:text-4xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                What is Wire EDM Machining?
            </h2>
            <p class="text-muted max-w-4xl mx-auto leading-relaxed">
                Wire Electrical Discharge Machining (Wire EDM) is a non-contact machining process that uses a thin, electrically charged wire to slice through metal. Unlike conventional CNC milling, there is <strong>no cutting force</strong>, preventing part distortion. At KMW CNC, we utilize advanced Sodick and Makino EDM machines to produce parts that require <strong>extreme precision</strong>, <strong>sharp internal corners</strong>, or <strong>complex contoured shapes</strong> that cutting tools simply cannot create.
            </p>
        </div>
    </section>

    <!-- ③ Why Choose KMW for Wire EDM? -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-6" style="font-family: var(--font-heading);">
                        Why Choose KMW for Wire EDM?
                    </h2>
                    <ul class="space-y-4 text-sm text-text">
                        <li class="flex items-start gap-3">
                            <?php echo ulx_icon('check', 'w-5 h-5 text-accent flex-shrink-0 mt-0.5'); ?>
                            <div><strong>Zero Cutting Force &amp; Stress Free:</strong> No physical force applied. Machine thin walls and fragile structures without warping.</div>
                        </li>
                        <li class="flex items-start gap-3">
                            <?php echo ulx_icon('check', 'w-5 h-5 text-accent flex-shrink-0 mt-0.5'); ?>
                            <div><strong>Sharp Internal Radii:</strong> Wire as thin as &Oslash;0.1mm enables sharp corners — as sharp as R0.05mm for mold frames and tool parts.</div>
                        </li>
                        <li class="flex items-start gap-3">
                            <?php echo ulx_icon('check', 'w-5 h-5 text-accent flex-shrink-0 mt-0.5'); ?>
                            <div><strong>Machine Any Conductive Material:</strong> We cut steel as hard as 65HRC+ (hardened &amp; heat treated), Tungsten Carbide, and Titanium as easily as aluminum.</div>
                        </li>
                        <li class="flex items-start gap-3">
                            <?php echo ulx_icon('check', 'w-5 h-5 text-accent flex-shrink-0 mt-0.5'); ?>
                            <div><strong>Exceptional Accuracy:</strong> Tolerances of &plusmn;0.003mm. Surface finish down to Ra 0.2&mu;m with multi-pass skim cuts.</div>
                        </li>
                    </ul>
                </div>
                <div class="rounded-xl overflow-hidden">
                    <img src="https://kmwcnc.com/wp-content/uploads/2025/12/Wire-EDM002.webp"
                         alt="Wire EDM Machine" class="w-full h-auto" loading="lazy" />
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
                        Wire EDM Technical Specifications
                    </h2>
                    <p class="text-muted leading-relaxed">
                        Our Wire EDM department operates multiple high-precision machines capable of handling complex geometries in hardened metals, exotic alloys, and conductive materials with unmatched accuracy.
                    </p>
                </div>

                <div class="overflow-x-auto rounded-lg border border-border/50">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th class="text-left px-5 py-3 font-semibold">Parameter</th>
                                <th class="text-left px-5 py-3 font-semibold">Wire EDM Capability</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-border/50">
                            <tr class="bg-card">
                                <td class="px-5 py-3 font-medium text-text">Tolerance Accuracy</td>
                                <td class="px-5 py-3 text-muted">Up to &plusmn;0.003mm (&plusmn;0.0001")</td>
                            </tr>
                            <tr class="bg-surface">
                                <td class="px-5 py-3 font-medium text-text">Surface Finish (Ra)</td>
                                <td class="px-5 py-3 text-muted">Down to Ra 0.2 &mu;m (Mirror Finish)</td>
                            </tr>
                            <tr class="bg-card">
                                <td class="px-5 py-3 font-medium text-text">Min. Wire Diameter</td>
                                <td class="px-5 py-3 text-muted">&Oslash;0.05mm (for micro parts)</td>
                            </tr>
                            <tr class="bg-surface">
                                <td class="px-5 py-3 font-medium text-text">Max. Cutting Height</td>
                                <td class="px-5 py-3 text-muted">500mm</td>
                            </tr>
                            <tr class="bg-card">
                                <td class="px-5 py-3 font-medium text-text">Max. Taper Angle</td>
                                <td class="px-5 py-3 text-muted">30&deg;</td>
                            </tr>
                            <tr class="bg-surface">
                                <td class="px-5 py-3 font-medium text-text">Materials</td>
                                <td class="px-5 py-3 text-muted">Any conductive metal (Hardened Steel, Copper, Graphite, Titanium)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- ⑤ Comprehensive Wire EDM Machining Solutions -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-4">
                <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Comprehensive Wire EDM Machining Solutions
                </h2>
                <p class="text-muted max-w-3xl mx-auto">
                    From initial concept validation to high-volume manufacturing, we provide end-to-end Wire EDM services tailored to your project's specific stage and requirements.
                </p>
            </div>

            <?php
            $solutions = [
                [
                    'title' => 'Rapid Prototyping & Development',
                    'desc'  => 'Accelerate your innovation cycle. We deliver functional, high-precision prototypes quickly, allowing you to validate designs and test fit-and-function before committing to costly production tooling.',
                    'img'   => 'https://kmwcnc.com/wp-content/uploads/2025/12/Wire-EDM-010-768x571.png',
                ],
                [
                    'title' => 'Scalable Production Runs',
                    'desc'  => 'Whether you need a pilot run of 50 parts or mass production of 50,000+, our automated EDM cells ensure consistent quality, sub-micron repeatability, and on-time delivery for orders of any size.',
                    'img'   => 'https://kmwcnc.com/wp-content/uploads/2025/12/Wire-EDM011-768x571.png',
                ],
                [
                    'title' => 'Complex Geometry & Hardened Alloys',
                    'desc'  => 'We specialize in the "impossible." Our Wire EDM process easily handles hardened tool steels (HRC 65+), titanium, and carbide to create intricate contours, thin walls, and sharp internal corners that standard milling cannot achieve.',
                    'img'   => 'https://kmwcnc.com/wp-content/uploads/2025/12/Wire-EDM012-768x571.png',
                ],
                [
                    'title' => 'Precision Mold & Die Components',
                    'desc'  => 'The ultimate solution for toolmakers. We manufacture ultra-precise mold inserts, cores, cavities, and punch dies with exceptional accuracy and superior surface finishes essential for high-quality molding and stamping.',
                    'img'   => 'https://kmwcnc.com/wp-content/uploads/2025/12/Wire-EDM013-768x571.png',
                ],
            ];
            ?>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-10">
                <?php foreach ($solutions as $sol) : ?>
                    <div class="bg-surface rounded-lg overflow-hidden border border-border/50 flex flex-col">
                        <div class="aspect-[4/3] overflow-hidden">
                            <img src="<?php echo esc_url($sol['img']); ?>" alt="<?php echo esc_attr($sol['title']); ?>"
                                 class="w-full h-full object-cover" loading="lazy" />
                        </div>
                        <div class="p-5 text-center flex-1">
                            <h3 class="font-bold text-primary mb-3 text-sm" style="font-family: var(--font-heading);">
                                <?php echo esc_html($sol['title']); ?>
                            </h3>
                            <p class="text-sm text-muted leading-relaxed">
                                <?php echo esc_html($sol['desc']); ?>
                            </p>
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
                    'desc'  => 'Versatile solutions for general industrial applications. We produce custom fasteners, hinges, brackets, and more from Plastic with cost-effective volume pricing.',
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
                ['q' => 'What materials can be cut using Wire EDM?',                           'a' => 'Any electrically conductive material — hardened tool steel (up to 65HRC+), stainless steel, titanium, tungsten carbide, copper, brass, aluminum, Inconel, and more.'],
                ['q' => 'What is the maximum thickness you can cut?',                          'a' => 'Our Wire EDM machines can cut workpieces up to 500mm thick with consistent accuracy throughout the full cutting height.'],
                ['q' => 'What tolerances can KMW CNC achieve with Wire EDM?',                 'a' => 'We routinely achieve ±0.003mm on critical dimensions. For standard work, tolerances of ±0.01mm are typical. Surface finish down to Ra 0.2μm with skim cuts.'],
                ['q' => 'How does the surface finish compare to CNC milling?',                 'a' => 'Wire EDM produces an exceptionally smooth, burr-free surface. With multi-pass skim cuts, we achieve Ra 0.2μm — comparable to polishing, and often smoother than milling.'],
                ['q' => 'Can Wire EDM produce perfectly sharp internal corners?',               'a' => 'Yes — this is one of the key advantages of Wire EDM. We can produce internal corner radii as small as R0.05mm, which is impossible with conventional milling.'],
                ['q' => 'Why is Wire EDM more expensive than CNC milling?',                    'a' => 'Wire EDM is slower per unit than high-speed milling, but it eliminates the need for expensive tooling, can cut hardened materials without pre-machining, and achieves tighter tolerances — often making it more cost-effective overall.'],
                ['q' => 'Does the Wire EDM process affect the material hardness?',             'a' => 'The heat-affected zone (HAZ) in Wire EDM is extremely thin (typically 5-20μm). For most applications, material properties remain unchanged. We offer stress-relief options for critical parts.'],
                ['q' => 'Do I need to provide specific files for Wire EDM quoting?',           'a' => 'We accept STEP, STP, IGES, DWG, DXF, and PDF files. For Wire EDM, 2D DXF profiles are particularly useful. STEP files are preferred for 3D parts.'],
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
                        Have a Complex Part that Traditional Milling Can't Handle?
                    </h2>
                    <p class="text-white/70 max-w-2xl mx-auto mb-8">
                        Don't compromise on your design. Upload your drawings today and let our Wire EDM experts deliver the precision and sharp corners your project demands.
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
