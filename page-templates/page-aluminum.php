<?php
/**
 * Template Name: CNC Aluminum Parts
 *
 * KMW CNC — CNC Aluminum Parts (material sub-page).
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

get_header();
?>

<main id="primary">

    <!-- ① Hero Banner -->
    <section class="relative py-14 lg:py-20 text-white overflow-hidden">
        <img src="http://kmwcnc.com/wp-content/uploads/2025/12/CNC-Aluminum-Parts.webp"
             alt="" class="absolute inset-0 w-full h-full object-cover" aria-hidden="true" />
        <div class="absolute inset-0 bg-primary/85"></div>
        <div class="<?php ulx_container_class('relative z-10'); ?>">
            <?php ulx_breadcrumb(true); ?>
            <h1 class="text-4xl lg:text-5xl font-bold mb-4" style="font-family: var(--font-heading);">
                Custom CNC Aluminum Parts Manufacturer
            </h1>
            <p class="text-white/80 max-w-3xl mb-8">
                From 6061 prototypes to 7075 high-strength components. We deliver precision aluminum machining services with fast turnaround and superior anodized finishes.
            </p>
        </div>
    </section>

    <!-- ② Why Choose Aluminum -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <h2 class="text-2xl lg:text-3xl font-bold text-primary text-center mb-6" style="font-family: var(--font-heading);">
                Why Choose Aluminum for Your CNC Projects?
            </h2>
            <p class="text-muted max-w-4xl mx-auto text-center leading-relaxed">
                Aluminum is the most versatile material in modern manufacturing. It offers an exceptional <strong class="text-text">strength-to-weight ratio</strong>, making it ideal for automotive, robotics, and electronic parts. It is highly machinable, which reduces cycle times and costs compared to steel. Additionally, aluminum naturally forms a protective oxide layer, which can be further enhanced through <strong class="text-text">Anodizing</strong> for durability and aesthetics. At KMW CNC, we stock premium grades to ensure your parts meet strict mechanical and cosmetic standards.
            </p>
        </div>
    </section>

    <!-- ③ Common Aluminum Grades We Machine -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <h2 class="text-2xl lg:text-3xl font-bold text-primary text-center mb-12" style="font-family: var(--font-heading);">
                Common Aluminum Grades We Machine
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <?php
                $grades = [
                    [
                        'title' => 'Aluminum 6061-T6 (The Standard)',
                        'icon'  => 'shield',
                        'tag'   => 'Most Popular',
                        'desc'  => 'The "jack of all trades." It has good mechanical properties, excellent weldability, and is the best candidate for anodizing.',
                        'best'  => 'Electronic enclosures, structural brackets, automotive parts, and general prototypes.',
                    ],
                    [
                        'title' => 'Aluminum 7075-T6 (High Strength)',
                        'icon'  => 'zap',
                        'tag'   => 'Strongest',
                        'desc'  => 'A zinc-alloyed aluminum with strength comparable to many steels. It has high fatigue resistance but is more expensive and harder to weld than 6061.',
                        'best'  => 'Robot arm structures, rock climbing gear, bicycle frames, and high-stress molds.',
                    ],
                    [
                        'title' => 'Aluminum 5052 (Sheet Metal)',
                        'icon'  => 'package',
                        'tag'   => 'Best Formability',
                        'desc'  => 'Known for its excellent workability and corrosion resistance, especially against saltwater. It is not heat treatable but bends without cracking.',
                        'best'  => 'Marine components, fuel tanks, and sheet metal enclosures requiring bending.',
                    ],
                    [
                        'title' => 'Aluminum 6063 (Architectural)',
                        'icon'  => 'palette',
                        'tag'   => 'Best Finish',
                        'desc'  => 'Often used for extrusions. It has a smoother surface finish than 6061 and anodizes beautifully.',
                        'best'  => 'Heat sinks, window frames, and visible architectural trim.',
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

    <!-- ④ Aluminum Grades Comparison -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                        Aluminum Grades Comparison
                    </h2>
                    <p class="text-muted leading-relaxed">
                        Analyze key technical data including yield strength, hardness, and weldability to select the optimal alloy for your specific performance and budget requirements.
                    </p>
                </div>
                <div class="overflow-x-auto rounded-lg border border-border/50">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th class="px-5 py-3 text-left font-semibold">Grade</th>
                                <th class="px-5 py-3 text-left font-semibold">Yield Strength</th>
                                <th class="px-5 py-3 text-left font-semibold">Hardness</th>
                                <th class="px-5 py-3 text-left font-semibold">Corrosion Resistance</th>
                                <th class="px-5 py-3 text-left font-semibold">Weldability</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-card">
                                <td class="px-5 py-3 font-medium text-text">6061-T6</td>
                                <td class="px-5 py-3 text-muted">276 MPa</td>
                                <td class="px-5 py-3 text-muted">95 HB</td>
                                <td class="px-5 py-3 text-muted">Excellent</td>
                                <td class="px-5 py-3 text-muted">Good</td>
                            </tr>
                            <tr class="bg-surface">
                                <td class="px-5 py-3 font-medium text-text">7075-T6</td>
                                <td class="px-5 py-3 text-muted">503 MPa</td>
                                <td class="px-5 py-3 text-muted">150 HB</td>
                                <td class="px-5 py-3 text-muted">Average</td>
                                <td class="px-5 py-3 text-muted">Poor</td>
                            </tr>
                            <tr class="bg-card">
                                <td class="px-5 py-3 font-medium text-text">5052-H32</td>
                                <td class="px-5 py-3 text-muted">193 MPa</td>
                                <td class="px-5 py-3 text-muted">60 HB</td>
                                <td class="px-5 py-3 font-medium text-accent">Best (Marine)</td>
                                <td class="px-5 py-3 text-muted">Excellent</td>
                            </tr>
                            <tr class="bg-surface">
                                <td class="px-5 py-3 font-medium text-text">2024-T4</td>
                                <td class="px-5 py-3 text-muted">324 MPa</td>
                                <td class="px-5 py-3 text-muted">120 HB</td>
                                <td class="px-5 py-3 text-muted">Poor</td>
                                <td class="px-5 py-3 text-muted">Poor</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- ⑤ Overcoming Aluminum Machining Challenges -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-12">
                <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Overcoming Aluminum Machining Challenges
                </h2>
                <p class="text-muted max-w-3xl mx-auto">
                    Utilizing automated machining processes to ensure cost-efficiency and speed.
                </p>
            </div>

            <!-- Challenge 1 -->
            <div class="bg-card rounded-xl overflow-hidden border border-border/50 grid grid-cols-1 lg:grid-cols-12 mb-6">
                <div class="lg:col-span-4 overflow-hidden h-60 lg:h-auto lg:max-h-72">
                    <img src="http://kmwcnc.com/wp-content/uploads/2025/12/Preventing-Part-Distortion.webp"
                         alt="Preventing Part Distortion" class="w-full h-full object-cover object-top" loading="lazy" />
                </div>
                <div class="lg:col-span-8 p-6 lg:p-8 flex flex-col justify-center">
                    <h3 class="text-xl font-bold text-primary mb-3" style="font-family: var(--font-heading);">
                        Lightweight Solutions Preventing Part Distortion for Electric Vehicles
                    </h3>
                    <p class="text-muted leading-relaxed">
                        Aluminum, especially thin-walled 6061 and 7075 parts, often releases internal stress during machining, leading to warping. KMW CNC combats this by using <strong class="text-text">stress-relieved material stock</strong> and employing a strategic "roughing-flipping-finishing" process. We remove material evenly from both sides to maintain perfect flatness and parallelism.
                    </p>
                </div>
            </div>

            <!-- Challenge 2 -->
            <div class="bg-card rounded-xl overflow-hidden border border-border/50 grid grid-cols-1 lg:grid-cols-12">
                <div class="lg:col-span-4 overflow-hidden h-60 lg:h-auto lg:max-h-72">
                    <img src="http://kmwcnc.com/wp-content/uploads/2025/12/Achieving-Mirror-Like-Finishes.webp"
                         alt="Achieving Mirror-Like Finishes" class="w-full h-full object-cover object-top" loading="lazy" />
                </div>
                <div class="lg:col-span-8 p-6 lg:p-8 flex flex-col justify-center">
                    <h3 class="text-xl font-bold text-primary mb-3" style="font-family: var(--font-heading);">
                        Achieving Mirror-Like Finishes
                    </h3>
                    <p class="text-muted leading-relaxed">
                        Aluminum is "sticky" and prone to Built-Up Edge (BUE) on cutting tools, which can ruin surface finish. We utilize <strong class="text-text">polished carbide tooling</strong> with high helix angles and high-pressure coolant systems to evacuate chips instantly. This results in a pristine, mirror-like surface (Ra 0.4) directly off the machine, minimizing manual polishing time.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ⑥ Premium Finishes for Aluminum Parts -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-12">
                <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Premium Finishes for Aluminum Parts
                </h2>
                <p class="text-muted max-w-3xl mx-auto">
                    Enhancing corrosion resistance and aesthetics for exterior and interior components.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <?php
                $finishes = [
                    [
                        'icon'  => 'shield',
                        'title' => 'Clear Anodizing (Type II)',
                        'desc'  => '<strong>Standard protection</strong> with a natural silver look. Enhances corrosion resistance while maintaining the aluminum appearance.',
                    ],
                    [
                        'icon'  => 'palette',
                        'title' => 'Color Anodizing',
                        'desc'  => 'Available in <strong>Black, Red, Blue</strong> and more for cosmetic applications. Durable color that won\'t chip or peel.',
                    ],
                    [
                        'icon'  => 'zap',
                        'title' => 'Hard Anodizing (Type III)',
                        'desc'  => 'Bead/Bronze finish with <strong>extreme wear resistance</strong>. Ideal for high-friction and industrial applications.',
                    ],
                    [
                        'icon'  => 'custom',
                        'title' => 'Chem Film (Alodine)',
                        'desc'  => '<strong>Conductive coating</strong> for electrical grounding. Also serves as an excellent primer for paint adhesion.',
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

    <!-- ⑦ Aluminum Parts Gallery -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <h2 class="text-2xl lg:text-3xl font-bold text-primary text-center mb-12" style="font-family: var(--font-heading);">
                Aluminum Parts Gallery
            </h2>

            <div class="flex gap-4">
                <div class="flex-1 rounded-lg overflow-hidden bg-card border border-border/50">
                    <img src="https://kmwcnc.com/wp-content/uploads/2025/11/Aluminum-Parts.webp"
                         alt="Aluminum Parts" class="w-full h-full object-cover" loading="lazy" />
                </div>
                <div class="flex-1 rounded-lg overflow-hidden bg-card border border-border/50">
                    <img src="https://kmwcnc.com/wp-content/uploads/2025/11/Anodized-Finished-Parts-768x768.webp"
                         alt="Anodized Finished Parts" class="w-full h-full object-cover" loading="lazy" />
                </div>
                <div class="flex-1 rounded-lg overflow-hidden bg-card border border-border/50">
                    <img src="https://kmwcnc.com/wp-content/uploads/2025/11/5-Axis-Complex-Parts-768x768.webp"
                         alt="5-Axis Complex Parts" class="w-full h-full object-cover" loading="lazy" />
                </div>
                <div class="flex-1 rounded-lg overflow-hidden bg-card border border-border/50">
                    <img src="https://kmwcnc.com/wp-content/uploads/2025/12/Aluminum-Die-Casting001-768x768.webp"
                         alt="Aluminum Die Casting" class="w-full h-full object-cover" loading="lazy" />
                </div>
            </div>
        </div>
    </section>

    <!-- ⑧ FAQ -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <h2 class="text-2xl lg:text-3xl font-bold text-primary text-center mb-10" style="font-family: var(--font-heading);">
                Aluminum Machining FAQs
            </h2>

            <?php
            $faqs = [
                ['q' => 'What is the difference between 6061 and 7075 aluminum?',                 'a' => '6061 is the most versatile and affordable grade with good strength and excellent anodizing properties. 7075 is significantly stronger (comparable to steel) but more expensive and harder to weld. Choose 6061 for general parts and 7075 for high-stress structural applications.'],
                ['q' => 'Do you have a Minimum Order Quantity (MOQ)?',                             'a' => 'No MOQ. We support everything from single prototypes to high-volume production runs for aluminum components.'],
                ['q' => 'Does anodizing affect the dimensions of my part?',                        'a' => 'Yes, Type II anodizing adds approximately 0.01-0.025mm per surface, while Type III (hard anodize) can add up to 0.05mm. We account for this growth in our machining tolerances when anodizing is specified.'],
                ['q' => 'What is your standard lead time?',                                        'a' => 'Standard lead time is 7-15 business days depending on complexity. Expedited options available for urgent aluminum projects.'],
                ['q' => 'Can you weld machined aluminum parts?',                                   'a' => 'Yes, we offer TIG welding services for aluminum assemblies. 6061 and 5052 grades are excellent for welding. 7075 and 2024 are not recommended for welding due to cracking risk.'],
                ['q' => 'How do you ensure my IP (Intellectual Property) is safe?',                'a' => 'We sign NDAs for every project and maintain strict access controls. Your designs and technical data are fully protected.'],
                ['q' => 'How do you handle thin-walled aluminum parts without warping?',           'a' => 'We use stress-relieved stock, strategic roughing-flipping-finishing sequences, and custom soft jaws or vacuum fixtures to evenly distribute cutting forces and prevent distortion.'],
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
                        Need Precision Aluminum Parts?
                    </h2>
                    <p class="text-white/70 max-w-2xl mx-auto mb-8">
                        We have the stock and speed you need.
                    </p>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent">
                        Upload Files for Aluminum Quote
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
