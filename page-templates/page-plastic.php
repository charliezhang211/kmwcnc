<?php
/**
 * Template Name: Machined Plastic Parts
 *
 * KMW CNC — Machined Plastic Parts (material sub-page).
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

get_header();
?>

<main id="primary">

    <!-- ① Hero Banner -->
    <section class="relative py-14 lg:py-20 text-white overflow-hidden">
        <img src="http://kmwcnc.com/wp-content/uploads/2025/12/Machined-Plastic-Parts.webp"
             alt="" class="absolute inset-0 w-full h-full object-cover" aria-hidden="true" />
        <div class="absolute inset-0 bg-primary/85"></div>
        <div class="<?php ulx_container_class('relative z-10'); ?>">
            <?php ulx_breadcrumb(true); ?>
            <h1 class="text-4xl lg:text-5xl font-bold mb-4" style="font-family: var(--font-heading);">
                Precision CNC Machining for Engineering Plastics
            </h1>
            <p class="text-white/80 max-w-3xl mb-8">
                PEEK, Delrin, Nylon, and Polycarbonate machined to tight tolerances. Ideal for prototypes, low-volume production, and applications requiring lightweight insulation.
            </p>
        </div>
    </section>

    <!-- ② Why Choose Plastics -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <h2 class="text-2xl lg:text-3xl font-bold text-primary text-center mb-6" style="font-family: var(--font-heading);">
                Why Choose CNC Machining for Plastics?
            </h2>
            <p class="text-muted max-w-4xl mx-auto text-center leading-relaxed">
                CNC machined plastics offer <strong class="text-text">metal-like precision without the weight, conductivity, or corrosion issues</strong>. Unlike injection molding, CNC machining requires no tooling investment — making it ideal for prototypes and low-to-medium volumes. Engineering plastics like PEEK can replace metals in many applications, offering chemical resistance, electrical insulation, and FDA compliance that metals cannot match.
            </p>
        </div>
    </section>

    <!-- ③ Common Plastic Materials -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <h2 class="text-2xl lg:text-3xl font-bold text-primary text-center mb-12" style="font-family: var(--font-heading);">
                Common Plastic Materials We Machine
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <?php
                $grades = [
                    [
                        'title' => 'Delrin® (POM)',
                        'icon'  => 'custom',
                        'tag'   => 'Best Machinability',
                        'desc'  => 'Acetal resin with excellent dimensional stability, low friction, and high stiffness. Machines like a dream with tight tolerances and superb surface finish.',
                        'best'  => 'Gears, bushings, rollers, conveyor components, and precision mechanical parts.',
                    ],
                    [
                        'title' => 'PEEK (Medical/Industrial)',
                        'icon'  => 'zap',
                        'tag'   => 'Highest Performance',
                        'desc'  => 'Semi-crystalline thermoplastic with exceptional chemical resistance, operating temperatures up to 260°C, and excellent strength. Biocompatible and FDA compliant.',
                        'best'  => 'Medical implants, high-temperature seals, semiconductor fixtures, and chemical valve seats.',
                    ],
                    [
                        'title' => 'Polycarbonate (PC)',
                        'icon'  => 'shield',
                        'tag'   => 'Optical Clarity',
                        'desc'  => 'Transparent engineering plastic with outstanding impact resistance — virtually unbreakable. Can be machined to optical clarity with proper tooling and vapor polishing.',
                        'best'  => 'Protective covers, sight glasses, LED lenses, and transparent enclosures.',
                    ],
                    [
                        'title' => 'Nylon (PA6 / PA66)',
                        'icon'  => 'package',
                        'tag'   => 'Most Versatile',
                        'desc'  => 'Tough, wear-resistant, and self-lubricating. Available in natural, glass-filled, and MoS2-filled grades for enhanced strength and reduced friction.',
                        'best'  => 'Wear pads, cable ties, structural brackets, and electrical insulators.',
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

    <!-- ④ Plastic Materials Comparison -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                        Plastic Materials Comparison
                    </h2>
                    <p class="text-muted leading-relaxed">
                        Compare mechanical properties, temperature resistance, and cost to select the right engineering plastic for your application.
                    </p>
                </div>
                <div class="overflow-x-auto rounded-lg border border-border/50">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th class="px-5 py-3 text-left font-semibold">Material</th>
                                <th class="px-5 py-3 text-left font-semibold">Tensile Strength</th>
                                <th class="px-5 py-3 text-left font-semibold">Max Temp</th>
                                <th class="px-5 py-3 text-left font-semibold">Chemical Resistance</th>
                                <th class="px-5 py-3 text-left font-semibold">Cost</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-card">
                                <td class="px-5 py-3 font-medium text-text">Delrin (POM)</td>
                                <td class="px-5 py-3 text-muted">70 MPa</td>
                                <td class="px-5 py-3 text-muted">100°C</td>
                                <td class="px-5 py-3 text-muted">Good</td>
                                <td class="px-5 py-3 text-muted">Low</td>
                            </tr>
                            <tr class="bg-surface">
                                <td class="px-5 py-3 font-medium text-text">PEEK</td>
                                <td class="px-5 py-3 text-muted">100 MPa</td>
                                <td class="px-5 py-3 font-medium text-accent">260°C</td>
                                <td class="px-5 py-3 font-medium text-accent">Excellent</td>
                                <td class="px-5 py-3 text-muted">Very High</td>
                            </tr>
                            <tr class="bg-card">
                                <td class="px-5 py-3 font-medium text-text">Polycarbonate</td>
                                <td class="px-5 py-3 text-muted">62 MPa</td>
                                <td class="px-5 py-3 text-muted">130°C</td>
                                <td class="px-5 py-3 text-muted">Fair</td>
                                <td class="px-5 py-3 text-muted">Low</td>
                            </tr>
                            <tr class="bg-surface">
                                <td class="px-5 py-3 font-medium text-text">Nylon PA66</td>
                                <td class="px-5 py-3 text-muted">85 MPa</td>
                                <td class="px-5 py-3 text-muted">150°C</td>
                                <td class="px-5 py-3 text-muted">Good</td>
                                <td class="px-5 py-3 text-muted">Low</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- ⑤ Expertise in Machining Plastics -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-12">
                <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Expertise in Machining Plastics
                </h2>
                <p class="text-muted max-w-3xl mx-auto">
                    Engineering plastics require different strategies than metals. Our processes are tuned to prevent the common defects unique to plastic machining.
                </p>
            </div>

            <div class="bg-card rounded-xl overflow-hidden border border-border/50 grid grid-cols-1 lg:grid-cols-12 mb-6">
                <div class="lg:col-span-4 overflow-hidden h-60 lg:h-auto lg:max-h-72">
                    <img src="http://kmwcnc.com/wp-content/uploads/2025/12/plastics-parts-01.webp"
                         alt="Preventing Warping" class="w-full h-full object-cover object-top" loading="lazy" />
                </div>
                <div class="lg:col-span-8 p-6 lg:p-8 flex flex-col justify-center">
                    <h3 class="text-xl font-bold text-primary mb-3" style="font-family: var(--font-heading);">
                        Preventing Warping & Stress
                    </h3>
                    <p class="text-muted leading-relaxed">
                        Plastics have high thermal expansion and low stiffness, making them prone to warping from machining heat and clamping forces. KMW CNC uses <strong class="text-text">light cuts, sharp single-flute tools, and stress-relief annealing cycles</strong> between roughing and finishing operations. Vacuum fixtures distribute holding force evenly to prevent part distortion.
                    </p>
                </div>
            </div>

            <div class="bg-card rounded-xl overflow-hidden border border-border/50 grid grid-cols-1 lg:grid-cols-12">
                <div class="lg:col-span-4 overflow-hidden h-60 lg:h-auto lg:max-h-72">
                    <img src="http://kmwcnc.com/wp-content/uploads/2025/12/plastics-parts-02.webp"
                         alt="Machining Clear Parts" class="w-full h-full object-cover object-top" loading="lazy" />
                </div>
                <div class="lg:col-span-8 p-6 lg:p-8 flex flex-col justify-center">
                    <h3 class="text-xl font-bold text-primary mb-3" style="font-family: var(--font-heading);">
                        Machining Clear Parts (PC/Acrylic)
                    </h3>
                    <p class="text-muted leading-relaxed">
                        Achieving optical clarity on machined polycarbonate and acrylic requires extremely fine surface finishes. We use <strong class="text-text">diamond-tipped or highly polished single-flute end mills</strong> with very high spindle speeds and light finishing passes. Post-machining vapor polishing can restore full transparency for lens and window applications.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ⑥ Finishing Options for Plastics -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-12">
                <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Finishing Options for Plastics
                </h2>
                <p class="text-muted max-w-3xl mx-auto">
                    Specialized finishing techniques tailored for engineering plastic components.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <?php
                $finishes = [
                    [
                        'icon'  => 'custom',
                        'title' => 'As-Machined',
                        'desc'  => '<strong>Clean, burr-free finish</strong> with visible tool marks. Suitable for functional prototypes and non-cosmetic components. Delrin and PEEK produce excellent as-machined surfaces.',
                    ],
                    [
                        'icon'  => 'palette',
                        'title' => 'Bead Blasting',
                        'desc'  => '<strong>Uniform matte texture</strong> that hides tool marks and creates a professional appearance. Compatible with most engineering plastics except brittle materials.',
                    ],
                    [
                        'icon'  => 'zap',
                        'title' => 'Vapor Polishing',
                        'desc'  => 'Chemical vapor treatment that <strong>restores optical clarity</strong> on polycarbonate and acrylic parts. Produces transparent, glass-like surfaces without mechanical polishing.',
                    ],
                    [
                        'icon'  => 'shield',
                        'title' => 'Painting / Silk Screening',
                        'desc'  => '<strong>Custom color coating and logo printing</strong> for branded components. Primer and topcoat systems ensure adhesion and durability on plastic substrates.',
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

    <!-- ⑦ Plastic Parts Gallery -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <h2 class="text-2xl lg:text-3xl font-bold text-primary text-center mb-12" style="font-family: var(--font-heading);">
                Plastic Parts Gallery
            </h2>
            <div class="flex gap-4">
                <div class="flex-1 rounded-lg overflow-hidden bg-card border border-border/50">
                    <img src="https://kmwcnc.com/wp-content/uploads/2025/12/plastics-parts-03-768x768.webp" alt="Plastic Parts" class="w-full h-full object-cover" loading="lazy" />
                </div>
                <div class="flex-1 rounded-lg overflow-hidden bg-card border border-border/50">
                    <img src="https://kmwcnc.com/wp-content/uploads/2025/12/Automotive-Component-Gallery-03-768x768.webp" alt="Automotive Components" class="w-full h-full object-cover" loading="lazy" />
                </div>
                <div class="flex-1 rounded-lg overflow-hidden bg-card border border-border/50">
                    <img src="https://kmwcnc.com/wp-content/uploads/2025/12/Magnesium-Die-Casting-768x768.webp" alt="Die Casting Parts" class="w-full h-full object-cover" loading="lazy" />
                </div>
                <div class="flex-1 rounded-lg overflow-hidden bg-card border border-border/50">
                    <img src="https://kmwcnc.com/wp-content/uploads/2025/12/Powder-Coating-Painting-768x768.webp" alt="Powder Coating Parts" class="w-full h-full object-cover" loading="lazy" />
                </div>
            </div>
        </div>
    </section>

    <!-- ⑧ FAQ -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <h2 class="text-2xl lg:text-3xl font-bold text-primary text-center mb-10" style="font-family: var(--font-heading);">
                Plastic Machining FAQs
            </h2>
            <?php
            $faqs = [
                ['q' => 'CNC Machining vs. Injection Molding: Which is better?',                   'a' => 'CNC machining is better for prototypes and volumes under 500-1000 pieces — no tooling cost, faster lead time, and design changes are instant. Injection molding is more cost-effective for high volumes (1000+) but requires expensive mold tooling and longer setup time.'],
                ['q' => 'Can you hold metal-like tolerances on plastic?',                           'a' => 'We routinely hold ±0.05mm on most engineering plastics. For materials like Delrin and PEEK, ±0.025mm is achievable. Note that plastics expand more with temperature than metals, so tolerances should account for operating conditions.'],
                ['q' => 'Does machining plastic create burrs?',                                     'a' => 'Some plastics (especially Nylon and HDPE) can produce fuzzy burrs. We use sharp single-flute tools, optimized feeds, and manual deburring to ensure clean, burr-free edges on all parts.'],
                ['q' => 'Can you install threaded inserts in plastic parts?',                        'a' => 'Yes, we install heat-set brass inserts, self-tapping inserts, and helical thread inserts in plastic parts. This provides durable metal threads for repeated assembly without wearing out the plastic.'],
                ['q' => 'Do you have a Minimum Order Quantity (MOQ)?',                             'a' => 'No MOQ. We support everything from single prototypes to production volumes for plastic components.'],
                ['q' => 'What is your standard lead time?',                                        'a' => 'Standard lead time is 5-12 business days for plastic parts. Faster than metals due to easier machinability. Expedited options available.'],
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

    <!-- ⑨ CTA -->
    <section class="py-16 lg:py-20 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <div class="relative rounded-xl overflow-hidden">
                <img src="http://kmwcnc.com/wp-content/uploads/2025/12/cnc-mancing.webp"
                     alt="" class="absolute inset-0 w-full h-full object-cover" aria-hidden="true" />
                <div class="absolute inset-0 bg-primary/85"></div>
                <div class="relative z-10 px-8 py-14 lg:px-16 lg:py-20 text-center">
                    <h2 class="text-2xl lg:text-3xl font-bold text-white mb-4" style="font-family: var(--font-heading);">
                        Get Custom Plastic Parts Fast
                    </h2>
                    <p class="text-white/70 max-w-2xl mx-auto mb-8">
                        Upload your designs for rapid quotation. No tooling required — go straight from CAD to finished parts.
                    </p>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent">
                        Upload Files for Plastic Quote
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
