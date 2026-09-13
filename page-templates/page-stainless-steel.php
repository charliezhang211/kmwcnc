<?php
/**
 * Template Name: CNC Stainless Steel Parts
 *
 * KMW CNC — CNC Stainless Steel Parts (material sub-page).
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

get_header();
?>

<main id="primary">

    <!-- ① Hero Banner -->
    <section class="relative py-14 lg:py-20 text-white overflow-hidden">
        <img src="http://kmwcnc.com/wp-content/uploads/2025/12/CNC-Stainless-Steel-Parts.webp"
             alt="" class="absolute inset-0 w-full h-full object-cover" aria-hidden="true" />
        <div class="absolute inset-0 bg-primary/85"></div>
        <div class="<?php ulx_container_class('relative z-10'); ?>">
            <?php ulx_breadcrumb(true); ?>
            <h1 class="text-4xl lg:text-5xl font-bold mb-4" style="font-family: var(--font-heading);">
                Custom CNC Stainless Steel Parts: 303, 304 & 316L
            </h1>
            <p class="text-white/80 max-w-3xl mb-8">
                Precision machining of austenitic, martensitic, and precipitation-hardened stainless steels. Passivation and electropolishing available for corrosion-critical applications.
            </p>
        </div>
    </section>

    <!-- ② Why Choose Stainless Steel -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <h2 class="text-2xl lg:text-3xl font-bold text-primary text-center mb-6" style="font-family: var(--font-heading);">
                Why Choose Stainless Steel for Your CNC Projects?
            </h2>
            <p class="text-muted max-w-4xl mx-auto text-center leading-relaxed">
                Stainless steel offers an unmatched combination of <strong class="text-text">corrosion resistance, strength, and hygiene</strong>. Its chromium-rich oxide layer self-heals when scratched, making it ideal for medical, food-processing, marine, and chemical environments. At KMW CNC, we stock multiple grades and apply passivation or electropolishing to maximize the protective layer for your specific application.
            </p>
        </div>
    </section>

    <!-- ③ Popular Stainless Steel Grades -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <h2 class="text-2xl lg:text-3xl font-bold text-primary text-center mb-12" style="font-family: var(--font-heading);">
                Popular Stainless Steel Grades We Machine
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <?php
                $grades = [
                    [
                        'title' => 'Stainless Steel 304 (The All-Rounder)',
                        'icon'  => 'shield',
                        'tag'   => 'Most Popular',
                        'desc'  => 'The most widely used stainless steel grade. Excellent corrosion resistance and formability with good weldability. Non-magnetic in annealed condition.',
                        'best'  => 'Food equipment, kitchen fixtures, architectural trim, and chemical containers.',
                    ],
                    [
                        'title' => 'Stainless Steel 316L (Marine/Medical)',
                        'icon'  => 'zap',
                        'tag'   => 'Best Corrosion Resistance',
                        'desc'  => 'Contains molybdenum for superior resistance to chlorides and acids. The "L" denotes low carbon for better weldability and reduced sensitization.',
                        'best'  => 'Marine hardware, surgical implants, pharmaceutical equipment, and chemical processing.',
                    ],
                    [
                        'title' => 'Stainless Steel 303 (Free-Machining)',
                        'icon'  => 'custom',
                        'tag'   => 'Fastest to Machine',
                        'desc'  => 'Sulfur-added for dramatically improved machinability. Produces excellent surface finishes with minimal tool wear, but slightly lower corrosion resistance than 304.',
                        'best'  => 'High-volume turned parts, fittings, shafts, and screws where speed matters.',
                    ],
                    [
                        'title' => '17-4 PH (High Strength)',
                        'icon'  => 'package',
                        'tag'   => 'Strongest',
                        'desc'  => 'Precipitation-hardened stainless that can be heat treated to very high strength levels while maintaining good corrosion resistance.',
                        'best'  => 'High-strength fasteners, valve components, and high-stress structural parts.',
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

    <!-- ④ Stainless Steel Alloys Comparison -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                        Stainless Steel Alloys Comparison
                    </h2>
                    <p class="text-muted leading-relaxed">
                        Compare key properties to select the right stainless steel grade for your application's corrosion, strength, and machinability requirements.
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
                                <th class="px-5 py-3 text-left font-semibold">Machinability</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-card">
                                <td class="px-5 py-3 font-medium text-text">304</td>
                                <td class="px-5 py-3 text-muted">215 MPa</td>
                                <td class="px-5 py-3 text-muted">123 HB</td>
                                <td class="px-5 py-3 text-muted">Excellent</td>
                                <td class="px-5 py-3 text-muted">Fair</td>
                            </tr>
                            <tr class="bg-surface">
                                <td class="px-5 py-3 font-medium text-text">316L</td>
                                <td class="px-5 py-3 text-muted">170 MPa</td>
                                <td class="px-5 py-3 text-muted">117 HB</td>
                                <td class="px-5 py-3 font-medium text-accent">Best (Marine)</td>
                                <td class="px-5 py-3 text-muted">Fair</td>
                            </tr>
                            <tr class="bg-card">
                                <td class="px-5 py-3 font-medium text-text">303</td>
                                <td class="px-5 py-3 text-muted">240 MPa</td>
                                <td class="px-5 py-3 text-muted">160 HB</td>
                                <td class="px-5 py-3 text-muted">Good</td>
                                <td class="px-5 py-3 font-medium text-accent">Best</td>
                            </tr>
                            <tr class="bg-surface">
                                <td class="px-5 py-3 font-medium text-text">17-4 PH</td>
                                <td class="px-5 py-3 text-muted">1070 MPa</td>
                                <td class="px-5 py-3 text-muted">35 HRC</td>
                                <td class="px-5 py-3 text-muted">Good</td>
                                <td class="px-5 py-3 text-muted">Fair</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- ⑤ Expertise in Machining Stainless Steel -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-12">
                <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Expertise in Machining Stainless Steel
                </h2>
                <p class="text-muted max-w-3xl mx-auto">
                    Overcoming the unique challenges of stainless steel to deliver precision parts with superior surface quality.
                </p>
            </div>

            <div class="bg-card rounded-xl overflow-hidden border border-border/50 grid grid-cols-1 lg:grid-cols-12 mb-6">
                <div class="lg:col-span-4 overflow-hidden h-60 lg:h-auto lg:max-h-72">
                    <img src="http://kmwcnc.com/wp-content/uploads/2025/12/details-01-stainless-steel.webp"
                         alt="Controlling Work Hardening" class="w-full h-full object-cover object-top" loading="lazy" />
                </div>
                <div class="lg:col-span-8 p-6 lg:p-8 flex flex-col justify-center">
                    <h3 class="text-xl font-bold text-primary mb-3" style="font-family: var(--font-heading);">
                        Controlling Work Hardening
                    </h3>
                    <p class="text-muted leading-relaxed">
                        Austenitic stainless steels (304, 316L) rapidly work-harden when machined with dull tools or incorrect feeds. KMW CNC uses <strong class="text-text">sharp carbide inserts with positive rake angles</strong> and maintains consistent chip loads to stay ahead of the hardening zone. This prevents glazing and extends tool life significantly.
                    </p>
                </div>
            </div>

            <div class="bg-card rounded-xl overflow-hidden border border-border/50 grid grid-cols-1 lg:grid-cols-12">
                <div class="lg:col-span-4 overflow-hidden h-60 lg:h-auto lg:max-h-72">
                    <img src="http://kmwcnc.com/wp-content/uploads/2025/12/details-02-stainless-steel.webp"
                         alt="Heat Dissipation" class="w-full h-full object-cover object-top" loading="lazy" />
                </div>
                <div class="lg:col-span-8 p-6 lg:p-8 flex flex-col justify-center">
                    <h3 class="text-xl font-bold text-primary mb-3" style="font-family: var(--font-heading);">
                        Heat Dissipation
                    </h3>
                    <p class="text-muted leading-relaxed">
                        Stainless steel has low thermal conductivity, causing heat to concentrate at the cutting edge rather than dissipating into the chip. We employ <strong class="text-text">high-pressure through-spindle coolant</strong> and optimized cutting speeds to manage temperatures, preventing thermal damage and maintaining dimensional accuracy throughout long production runs.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ⑥ Premium Finishes for Stainless Steel Parts -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-12">
                <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Premium Finishes for Stainless Steel Parts
                </h2>
                <p class="text-muted max-w-3xl mx-auto">
                    Maximizing corrosion resistance and achieving the surface quality your application demands.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <?php
                $finishes = [
                    [
                        'icon'  => 'shield',
                        'title' => 'Passivation (ASTM A967)',
                        'desc'  => '<strong>Citric or nitric acid bath</strong> that removes free iron from the surface and enhances the chromium oxide layer. Essential for medical, food, and chemical applications.',
                    ],
                    [
                        'icon'  => 'zap',
                        'title' => 'Electropolishing',
                        'desc'  => 'Electrochemical process that <strong>removes a micro-layer of surface material</strong>, producing an ultra-smooth, bright finish. Reduces surface roughness and eliminates micro-crevices where bacteria can harbor.',
                    ],
                    [
                        'icon'  => 'palette',
                        'title' => 'Polishing (Mirror/Brushed)',
                        'desc'  => 'Mechanical polishing to achieve <strong>mirror (#8) or brushed (#4) finishes</strong>. Ideal for architectural, decorative, and consumer-facing stainless steel components.',
                    ],
                    [
                        'icon'  => 'custom',
                        'title' => 'Black Oxide',
                        'desc'  => '<strong>Chemical conversion coating</strong> that provides a uniform black appearance with mild corrosion resistance. Often used for aesthetic purposes on stainless steel hardware.',
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

    <!-- ⑦ Stainless Steel Parts Gallery -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <h2 class="text-2xl lg:text-3xl font-bold text-primary text-center mb-12" style="font-family: var(--font-heading);">
                Stainless Steel Parts Gallery
            </h2>

            <div class="flex gap-4">
                <div class="flex-1 rounded-lg overflow-hidden bg-card border border-border/50">
                    <img src="https://kmwcnc.com/wp-content/uploads/2025/12/Hardware-Component-01-768x768.webp"
                         alt="Stainless Steel Parts" class="w-full h-full object-cover" loading="lazy" />
                </div>
                <div class="flex-1 rounded-lg overflow-hidden bg-card border border-border/50">
                    <img src="https://kmwcnc.com/wp-content/uploads/2025/12/Zinc-Die-Casting-768x768.webp"
                         alt="Zinc Die Casting Parts" class="w-full h-full object-cover" loading="lazy" />
                </div>
                <div class="flex-1 rounded-lg overflow-hidden bg-card border border-border/50">
                    <img src="https://kmwcnc.com/wp-content/uploads/2025/11/Stainless-Steel-Parts-768x768.webp"
                         alt="Stainless Steel Components" class="w-full h-full object-cover" loading="lazy" />
                </div>
                <div class="flex-1 rounded-lg overflow-hidden bg-card border border-border/50">
                    <img src="https://kmwcnc.com/wp-content/uploads/2025/11/Stainless-Steel-Parts-1-768x768.webp"
                         alt="Precision Stainless Parts" class="w-full h-full object-cover" loading="lazy" />
                </div>
            </div>
        </div>
    </section>

    <!-- ⑧ FAQ -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <h2 class="text-2xl lg:text-3xl font-bold text-primary text-center mb-10" style="font-family: var(--font-heading);">
                Stainless Steel Machining FAQs
            </h2>

            <?php
            $faqs = [
                ['q' => 'What is the difference between 304 and 316 stainless steel?',            'a' => '316 contains molybdenum which gives it superior resistance to chlorides, acids, and marine environments. 304 is more affordable and suitable for general-purpose corrosion resistance. Choose 316L for saltwater, chemical, or medical applications.'],
                ['q' => 'Is stainless steel magnetic?',                                            'a' => 'Austenitic grades (304, 316L, 303) are generally non-magnetic in annealed condition but may become slightly magnetic after cold working. Martensitic and precipitation-hardened grades (17-4 PH) are magnetic.'],
                ['q' => 'Why is 303 cheaper to machine than 304?',                                 'a' => '303 contains added sulfur which acts as a chip-breaker, dramatically improving machinability. This results in faster cycle times, less tool wear, and lower per-part costs — ideal for high-volume turned components.'],
                ['q' => 'Can you achieve a sanitary finish for food equipment?',                    'a' => 'Yes, we produce Ra 0.4μm or better finishes with electropolishing for food-grade and pharmaceutical applications. All surfaces can be passivated per ASTM A967 for maximum corrosion resistance.'],
                ['q' => 'Do you have a Minimum Order Quantity (MOQ)?',                             'a' => 'No MOQ. We support everything from single prototypes to high-volume production runs for stainless steel components.'],
                ['q' => 'What is your standard lead time?',                                        'a' => 'Standard lead time is 7-15 business days depending on complexity. Expedited options available for urgent stainless steel projects.'],
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
                        Need Corrosion-Resistant Parts?
                    </h2>
                    <p class="text-white/70 max-w-2xl mx-auto mb-8">
                        Upload your designs and let our engineers recommend the optimal stainless steel grade for your application.
                    </p>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent">
                        Upload Files for Stainless Steel Quote
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
