<?php
/**
 * Template Name: CNC Steel Parts
 *
 * KMW CNC — CNC Steel & Alloy Parts (material sub-page).
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

get_header();
?>

<main id="primary">

    <!-- ① Hero Banner -->
    <section class="relative py-14 lg:py-20 text-white overflow-hidden">
        <img src="http://kmwcnc.com/wp-content/uploads/2025/12/CNC-Steel-Alloy-Parts.webp"
             alt="" class="absolute inset-0 w-full h-full object-cover" aria-hidden="true" />
        <div class="absolute inset-0 bg-primary/85"></div>
        <div class="<?php ulx_container_class('relative z-10'); ?>">
            <?php ulx_breadcrumb(true); ?>
            <h1 class="text-4xl lg:text-5xl font-bold mb-4" style="font-family: var(--font-heading);">
                Custom CNC Steel & Alloy Parts Manufacturer
            </h1>
            <p class="text-white/80 max-w-3xl mb-8">
                From low-carbon 1018 to hardened tool steel D2. We machine carbon steel, alloy steel, and tool steel with heat treatment and protective finishing for maximum durability.
            </p>
        </div>
    </section>

    <!-- ② Why Choose Steel -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <h2 class="text-2xl lg:text-3xl font-bold text-primary text-center mb-6" style="font-family: var(--font-heading);">
                Why Choose Steel for Your Industrial Projects?
            </h2>
            <p class="text-muted max-w-4xl mx-auto text-center leading-relaxed">
                Steel remains the backbone of industrial manufacturing. It delivers unmatched <strong class="text-text">strength, hardness, and wear resistance</strong> at an economical price point. From soft, weldable low-carbon steel to ultra-hard tool steels capable of cutting other metals, there is a steel grade for virtually every mechanical application. At KMW CNC, we offer full heat treatment services to unlock the maximum performance of each grade.
            </p>
        </div>
    </section>

    <!-- ③ Popular Steel Grades -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <h2 class="text-2xl lg:text-3xl font-bold text-primary text-center mb-12" style="font-family: var(--font-heading);">
                Popular Steel Grades We Machine
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <?php
                $grades = [
                    [
                        'title' => 'Low Carbon Steel 1018',
                        'icon'  => 'package',
                        'tag'   => 'Most Economical',
                        'desc'  => 'Soft, ductile, and easily machinable. Excellent for welding and case hardening. The go-to grade for general-purpose parts where extreme strength is not required.',
                        'best'  => 'Pins, shafts, spacers, mounting plates, and weldable structural components.',
                    ],
                    [
                        'title' => 'Medium Carbon Steel 1045',
                        'icon'  => 'shield',
                        'tag'   => 'Best Balance',
                        'desc'  => 'Higher carbon content provides significantly better strength and hardness than 1018 while retaining reasonable machinability. Can be heat treated for improved wear resistance.',
                        'best'  => 'Gears, axles, bolts, crankshafts, and hydraulic components.',
                    ],
                    [
                        'title' => 'Alloy Steel 4140',
                        'icon'  => 'zap',
                        'tag'   => 'High Performance',
                        'desc'  => 'Chromium-molybdenum alloy steel with excellent strength, toughness, and fatigue resistance. Responds very well to heat treatment across a wide range of hardness levels.',
                        'best'  => 'Tooling, heavy-duty shafts, collets, spindles, and oil & gas components.',
                    ],
                    [
                        'title' => 'Tool Steel (D2 / A2)',
                        'icon'  => 'custom',
                        'tag'   => 'Hardest',
                        'desc'  => 'Extremely hard and wear-resistant steels designed for cutting and forming tools. D2 offers exceptional edge retention, while A2 provides a good balance of toughness and hardness.',
                        'best'  => 'Punches, dies, cutting blades, wear plates, and injection mold components.',
                    ],
                ];
                foreach ($grades as $g) : ?>
                    <div class="bg-card rounded-lg p-6 border border-border/50 hover:shadow-md transition-shadow relative">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 rounded-lg bg-primary text-white flex items-center justify-center flex-shrink-0">
                                <?php echo ulx_icon($g['icon'], 'w-5 h-5'); ?>
                            </div>
                            <span class="text-xs font-semibold text-accent bg-accent/10 px-2 py-1 rounded"><?php echo esc_html($g['tag']); ?></span>
                        </div>
                        <h3 class="font-bold text-primary mb-2" style="font-family: var(--font-heading);">
                            <?php echo esc_html($g['title']); ?>
                        </h3>
                        <p class="text-sm text-muted leading-relaxed mb-3"><?php echo esc_html($g['desc']); ?></p>
                        <p class="text-sm text-muted leading-relaxed border-t border-border/50 pt-3">
                            <strong class="text-text">Best For:</strong> <?php echo esc_html($g['best']); ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ④ Steel Alloys Comparison -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                        Steel Alloys Comparison
                    </h2>
                    <p class="text-muted leading-relaxed">
                        Compare hardness, machinability, and weldability to select the right steel grade for your performance and cost requirements.
                    </p>
                </div>
                <div class="overflow-x-auto rounded-lg border border-border/50">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th class="px-5 py-3 text-left font-semibold">Grade</th>
                                <th class="px-5 py-3 text-left font-semibold">Yield Strength</th>
                                <th class="px-5 py-3 text-left font-semibold">Hardness</th>
                                <th class="px-5 py-3 text-left font-semibold">Weldability</th>
                                <th class="px-5 py-3 text-left font-semibold">Machinability</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-card">
                                <td class="px-5 py-3 font-medium text-text">1018</td>
                                <td class="px-5 py-3 text-muted">220 MPa</td>
                                <td class="px-5 py-3 text-muted">126 HB</td>
                                <td class="px-5 py-3 font-medium text-accent">Excellent</td>
                                <td class="px-5 py-3 text-muted">Good</td>
                            </tr>
                            <tr class="bg-surface">
                                <td class="px-5 py-3 font-medium text-text">1045</td>
                                <td class="px-5 py-3 text-muted">450 MPa</td>
                                <td class="px-5 py-3 text-muted">163 HB</td>
                                <td class="px-5 py-3 text-muted">Fair</td>
                                <td class="px-5 py-3 text-muted">Good</td>
                            </tr>
                            <tr class="bg-card">
                                <td class="px-5 py-3 font-medium text-text">4140</td>
                                <td class="px-5 py-3 text-muted">655 MPa</td>
                                <td class="px-5 py-3 text-muted">197 HB</td>
                                <td class="px-5 py-3 text-muted">Fair</td>
                                <td class="px-5 py-3 text-muted">Fair</td>
                            </tr>
                            <tr class="bg-surface">
                                <td class="px-5 py-3 font-medium text-text">D2 Tool Steel</td>
                                <td class="px-5 py-3 text-muted">—</td>
                                <td class="px-5 py-3 text-muted">58-62 HRC</td>
                                <td class="px-5 py-3 text-muted">Poor</td>
                                <td class="px-5 py-3 text-muted">Difficult</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- ⑤ Expertise in Machining Steel -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-12">
                <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Expertise in Machining Carbon & Alloy Steel
                </h2>
                <p class="text-muted max-w-3xl mx-auto">
                    Tackling the toughest steel machining challenges with the right tooling and process strategies.
                </p>
            </div>

            <div class="bg-card rounded-xl overflow-hidden border border-border/50 grid grid-cols-1 lg:grid-cols-12 mb-6">
                <div class="lg:col-span-4 overflow-hidden h-60 lg:h-auto lg:max-h-72">
                    <img src="http://kmwcnc.com/wp-content/uploads/2025/12/Carbon-Steel-01.webp"
                         alt="Managing Tool Wear" class="w-full h-full object-cover object-top" loading="lazy" />
                </div>
                <div class="lg:col-span-8 p-6 lg:p-8 flex flex-col justify-center">
                    <h3 class="text-xl font-bold text-primary mb-3" style="font-family: var(--font-heading);">
                        Managing Tool Wear & Heat
                    </h3>
                    <p class="text-muted leading-relaxed">
                        Carbon and alloy steels generate significant heat and abrasive wear during machining. KMW CNC uses <strong class="text-text">coated carbide inserts (TiAlN/AlCrN)</strong> with optimized cutting speeds and high-pressure coolant to manage temperature at the cutting edge. This extends tool life and maintains tight tolerances even in long production runs.
                    </p>
                </div>
            </div>

            <div class="bg-card rounded-xl overflow-hidden border border-border/50 grid grid-cols-1 lg:grid-cols-12">
                <div class="lg:col-span-4 overflow-hidden h-60 lg:h-auto lg:max-h-72">
                    <img src="http://kmwcnc.com/wp-content/uploads/2025/12/Carbon-Steel-02.webp"
                         alt="Machining Hardened Steel" class="w-full h-full object-cover object-top" loading="lazy" />
                </div>
                <div class="lg:col-span-8 p-6 lg:p-8 flex flex-col justify-center">
                    <h3 class="text-xl font-bold text-primary mb-3" style="font-family: var(--font-heading);">
                        Machining Hardened Steel
                    </h3>
                    <p class="text-muted leading-relaxed">
                        Parts requiring post-heat-treatment machining (HRC 45-62) demand specialized approaches. We employ <strong class="text-text">CBN (Cubic Boron Nitride) inserts and rigid setups</strong> with reduced depths of cut and high surface speeds to achieve excellent finishes on hardened 4140, D2, and A2 tool steels without grinding.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ⑥ Protective Finishes for Steel -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-12">
                <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Protective Finishes for Steel
                </h2>
                <p class="text-muted max-w-3xl mx-auto">
                    Steel requires surface protection to prevent rust. We offer multiple finishing options to match your environment and aesthetic.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <?php
                $finishes = [
                    [
                        'icon'  => 'shield',
                        'title' => 'Zinc Plating',
                        'desc'  => '<strong>Sacrificial coating</strong> that protects steel from corrosion. Available in clear, yellow, and black chromate finishes. The most cost-effective anti-rust treatment for indoor components.',
                    ],
                    [
                        'icon'  => 'palette',
                        'title' => 'Black Oxide',
                        'desc'  => 'Chemical conversion coating producing a <strong>uniform black finish</strong> with mild corrosion resistance. Adds minimal thickness (~1μm), preserving dimensional accuracy on precision parts.',
                    ],
                    [
                        'icon'  => 'zap',
                        'title' => 'Nickel Plating',
                        'desc'  => '<strong>Electroless nickel plating</strong> provides uniform coverage even on complex geometries. Excellent corrosion and wear resistance with a bright, professional appearance.',
                    ],
                    [
                        'icon'  => 'custom',
                        'title' => 'Heat Treatment',
                        'desc'  => '<strong>Quenching, tempering, case hardening, and nitriding</strong> to achieve target hardness levels. We coordinate heat treatment between rough and finish machining for optimal results.',
                    ],
                ];
                foreach ($finishes as $f) : ?>
                    <div class="bg-surface rounded-lg p-6 border border-border/50 hover:shadow-md transition-shadow">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 rounded-lg bg-primary text-white flex items-center justify-center flex-shrink-0">
                                <?php echo ulx_icon($f['icon'], 'w-5 h-5'); ?>
                            </div>
                            <h3 class="font-bold text-primary" style="font-family: var(--font-heading);">
                                <?php echo esc_html($f['title']); ?>
                            </h3>
                        </div>
                        <p class="text-sm text-muted leading-relaxed"><?php echo $f['desc']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ⑦ Steel Parts Gallery -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <h2 class="text-2xl lg:text-3xl font-bold text-primary text-center mb-12" style="font-family: var(--font-heading);">
                Steel Parts Gallery
            </h2>
            <div class="flex gap-4">
                <div class="flex-1 rounded-lg overflow-hidden bg-card border border-border/50">
                    <img src="https://kmwcnc.com/wp-content/uploads/2025/12/Steel-Quote-768x768.webp" alt="Steel Parts" class="w-full h-full object-cover" loading="lazy" />
                </div>
                <div class="flex-1 rounded-lg overflow-hidden bg-card border border-border/50">
                    <img src="https://kmwcnc.com/wp-content/uploads/2025/12/Hardware-Component-03-768x768.webp" alt="Hardware Components" class="w-full h-full object-cover" loading="lazy" />
                </div>
                <div class="flex-1 rounded-lg overflow-hidden bg-card border border-border/50">
                    <img src="https://kmwcnc.com/wp-content/uploads/2025/12/Complex-Housings-Covers-768x768.webp" alt="Complex Housings" class="w-full h-full object-cover" loading="lazy" />
                </div>
                <div class="flex-1 rounded-lg overflow-hidden bg-card border border-border/50">
                    <img src="https://kmwcnc.com/wp-content/uploads/2025/12/Carbon-Alloy-Steel--768x768.webp" alt="Carbon Alloy Steel" class="w-full h-full object-cover" loading="lazy" />
                </div>
            </div>
        </div>
    </section>

    <!-- ⑧ FAQ -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <h2 class="text-2xl lg:text-3xl font-bold text-primary text-center mb-10" style="font-family: var(--font-heading);">
                Steel Machining FAQs
            </h2>
            <?php
            $faqs = [
                ['q' => 'Why does my carbon steel part need plating or finishing?',                'a' => 'Unlike stainless steel, carbon and alloy steels have no inherent corrosion resistance. Without a protective coating (zinc plating, black oxide, or painting), they will rust when exposed to moisture. We always recommend a finish for steel parts.'],
                ['q' => 'Can you machine steel that is already hardened?',                          'a' => 'Yes, we machine hardened steel up to 62 HRC using CBN inserts, ceramic tooling, and rigid setups. For best results, we recommend rough machining before heat treatment and finish machining after.'],
                ['q' => 'What is the main difference between 1045 and 4140 steel?',                'a' => '4140 contains chromium and molybdenum alloy additions that give it superior strength, toughness, and fatigue resistance compared to 1045. 4140 also responds better to heat treatment and can achieve higher hardness levels.'],
                ['q' => 'Do you offer welding services for machined steel parts?',                 'a' => 'Yes, we offer MIG and TIG welding for steel assemblies. Low-carbon steels (1018) weld easily, while medium and high-carbon steels may require pre/post-heat treatment to prevent cracking.'],
                ['q' => 'Do you have a Minimum Order Quantity (MOQ)?',                             'a' => 'No MOQ. We support everything from single prototypes to high-volume production runs for steel components.'],
                ['q' => 'What is your standard lead time?',                                        'a' => 'Standard lead time is 7-15 business days depending on complexity. Expedited options available for urgent steel projects.'],
                ['q' => 'How do you ensure my IP (Intellectual Property) is safe?',                'a' => 'We sign NDAs for every project and maintain strict access controls. Your designs and technical data are fully protected.'],
                ['q' => 'Do you provide quality inspection reports?',                               'a' => 'Yes, every order includes a detailed inspection report with CMM data, dimensional results, and material certifications including MTR.'],
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

    <!-- ⑨ CTA -->
    <section class="py-16 lg:py-20 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <div class="relative rounded-xl overflow-hidden">
                <img src="http://kmwcnc.com/wp-content/uploads/2025/12/cnc-mancing.webp"
                     alt="" class="absolute inset-0 w-full h-full object-cover" aria-hidden="true" />
                <div class="absolute inset-0 bg-primary/85"></div>
                <div class="relative z-10 px-8 py-14 lg:px-16 lg:py-20 text-center">
                    <h2 class="text-2xl lg:text-3xl font-bold text-white mb-4" style="font-family: var(--font-heading);">
                        Build Durable Industrial Parts
                    </h2>
                    <p class="text-white/70 max-w-2xl mx-auto mb-8">
                        Upload your designs for a DFM review and competitive quotation on steel machining.
                    </p>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent">
                        Upload Files for Steel Quote
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
