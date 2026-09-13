<?php
/**
 * Template Name: Brass & Copper Parts
 *
 * KMW CNC — Brass & Copper Parts (material sub-page).
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

get_header();
?>

<main id="primary">

    <!-- ① Hero Banner -->
    <section class="relative py-14 lg:py-20 text-white overflow-hidden">
        <img src="http://kmwcnc.com/wp-content/uploads/2025/12/Brass-Copper-Parts.webp"
             alt="" class="absolute inset-0 w-full h-full object-cover" aria-hidden="true" />
        <div class="absolute inset-0 bg-primary/85"></div>
        <div class="<?php ulx_container_class('relative z-10'); ?>">
            <?php ulx_breadcrumb(true); ?>
            <h1 class="text-4xl lg:text-5xl font-bold mb-4" style="font-family: var(--font-heading);">
                Custom CNC Brass & Copper Machining Services
            </h1>
            <p class="text-white/80 max-w-3xl mb-8">
                High-conductivity red metals for electrical, plumbing, and decorative applications. Precision machining of Brass C360, Copper C11000, and Bronze alloys with anti-tarnish finishes.
            </p>
        </div>
    </section>

    <!-- ② Why Choose Red Metals -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <h2 class="text-2xl lg:text-3xl font-bold text-primary text-center mb-6" style="font-family: var(--font-heading);">
                Why Choose Red Metals for Your Components?
            </h2>
            <p class="text-muted max-w-4xl mx-auto text-center leading-relaxed">
                Brass and copper alloys offer a unique combination of <strong class="text-text">electrical/thermal conductivity, corrosion resistance, and antimicrobial properties</strong>. Brass is one of the easiest metals to machine, making it extremely cost-effective for high-volume production. Copper provides the highest conductivity of any engineering metal, essential for electrical contacts and heat exchangers. At KMW CNC, we stock a range of red metal alloys to meet your conductivity, strength, and aesthetic requirements.
            </p>
        </div>
    </section>

    <!-- ③ Popular Brass & Copper Grades -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <h2 class="text-2xl lg:text-3xl font-bold text-primary text-center mb-12" style="font-family: var(--font-heading);">
                Popular Brass & Copper Grades We Machine
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <?php
                $grades = [
                    [
                        'title' => 'Brass C360 (Free-Machining)',
                        'icon'  => 'custom',
                        'tag'   => 'Easiest to Machine',
                        'desc'  => 'The most machinable common metal available. Contains lead for excellent chip-breaking, producing beautiful finishes at high speeds with minimal tool wear.',
                        'best'  => 'Fittings, valves, connectors, decorative hardware, and high-volume turned parts.',
                    ],
                    [
                        'title' => 'Copper C11000 (ETP)',
                        'icon'  => 'zap',
                        'tag'   => 'Best Conductivity',
                        'desc'  => 'Electrolytic Tough Pitch copper with 101% IACS conductivity. The standard for electrical applications requiring maximum current-carrying capacity.',
                        'best'  => 'Bus bars, electrical contacts, heat sinks, and ground straps.',
                    ],
                    [
                        'title' => 'Oxygen-Free Copper C10100',
                        'icon'  => 'shield',
                        'tag'   => 'Ultra-Pure',
                        'desc'  => '99.99% pure copper with no oxygen content. Superior conductivity and resistance to hydrogen embrittlement. Essential for vacuum and high-frequency applications.',
                        'best'  => 'Waveguides, vacuum seals, audiophile connectors, and semiconductor equipment.',
                    ],
                    [
                        'title' => 'Phosphor & Bearing Bronze',
                        'icon'  => 'package',
                        'tag'   => 'Best Wear Resistance',
                        'desc'  => 'Tin-bronze alloys with excellent fatigue strength and low-friction properties. Self-lubricating characteristics make them ideal for bearing and bushing applications.',
                        'best'  => 'Bushings, bearings, thrust washers, springs, and marine hardware.',
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

    <!-- ④ Red Metals Comparison -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                        Red Metals Comparison
                    </h2>
                    <p class="text-muted leading-relaxed">
                        Compare conductivity, machinability, and cost to choose the optimal alloy for your electrical, thermal, or mechanical application.
                    </p>
                </div>
                <div class="overflow-x-auto rounded-lg border border-border/50">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th class="px-5 py-3 text-left font-semibold">Alloy</th>
                                <th class="px-5 py-3 text-left font-semibold">Conductivity</th>
                                <th class="px-5 py-3 text-left font-semibold">Hardness</th>
                                <th class="px-5 py-3 text-left font-semibold">Machinability</th>
                                <th class="px-5 py-3 text-left font-semibold">Cost</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-card">
                                <td class="px-5 py-3 font-medium text-text">Brass C360</td>
                                <td class="px-5 py-3 text-muted">26% IACS</td>
                                <td class="px-5 py-3 text-muted">60 HB</td>
                                <td class="px-5 py-3 font-medium text-accent">Best (100%)</td>
                                <td class="px-5 py-3 text-muted">Low</td>
                            </tr>
                            <tr class="bg-surface">
                                <td class="px-5 py-3 font-medium text-text">Copper C11000</td>
                                <td class="px-5 py-3 font-medium text-accent">101% IACS</td>
                                <td class="px-5 py-3 text-muted">45 HB</td>
                                <td class="px-5 py-3 text-muted">Fair (20%)</td>
                                <td class="px-5 py-3 text-muted">Medium</td>
                            </tr>
                            <tr class="bg-card">
                                <td class="px-5 py-3 font-medium text-text">Copper C10100</td>
                                <td class="px-5 py-3 font-medium text-accent">102% IACS</td>
                                <td class="px-5 py-3 text-muted">40 HB</td>
                                <td class="px-5 py-3 text-muted">Fair (20%)</td>
                                <td class="px-5 py-3 text-muted">High</td>
                            </tr>
                            <tr class="bg-surface">
                                <td class="px-5 py-3 font-medium text-text">Phosphor Bronze</td>
                                <td class="px-5 py-3 text-muted">15% IACS</td>
                                <td class="px-5 py-3 text-muted">80 HB</td>
                                <td class="px-5 py-3 text-muted">Good (50%)</td>
                                <td class="px-5 py-3 text-muted">Medium</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- ⑤ Expertise in Machining Copper & Brass -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-12">
                <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Expertise in Machining Copper & Brass
                </h2>
                <p class="text-muted max-w-3xl mx-auto">
                    Addressing the unique challenges of soft, gummy, and highly conductive red metals.
                </p>
            </div>

            <div class="bg-card rounded-xl overflow-hidden border border-border/50 grid grid-cols-1 lg:grid-cols-12 mb-6">
                <div class="lg:col-span-4 overflow-hidden h-60 lg:h-auto lg:max-h-72">
                    <img src="http://kmwcnc.com/wp-content/uploads/2025/12/Machining-Copper-Brass-01.webp"
                         alt="Machining Gummy Copper" class="w-full h-full object-cover object-top" loading="lazy" />
                </div>
                <div class="lg:col-span-8 p-6 lg:p-8 flex flex-col justify-center">
                    <h3 class="text-xl font-bold text-primary mb-3" style="font-family: var(--font-heading);">
                        Machining "Gummy" Copper
                    </h3>
                    <p class="text-muted leading-relaxed">
                        Pure copper is extremely soft and tends to smear rather than cut cleanly, clogging tools and producing poor finishes. KMW CNC uses <strong class="text-text">sharp, uncoated carbide tools with high positive rake angles</strong> and aggressive chip-breaking strategies. Combined with high-pressure coolant, we achieve clean cuts and excellent surface quality even on C11000 and C10100.
                    </p>
                </div>
            </div>

            <div class="bg-card rounded-xl overflow-hidden border border-border/50 grid grid-cols-1 lg:grid-cols-12">
                <div class="lg:col-span-4 overflow-hidden h-60 lg:h-auto lg:max-h-72">
                    <img src="http://kmwcnc.com/wp-content/uploads/2025/12/Machining-Copper-Brass-02.webp"
                         alt="Preventing Oxidation" class="w-full h-full object-cover object-top" loading="lazy" />
                </div>
                <div class="lg:col-span-8 p-6 lg:p-8 flex flex-col justify-center">
                    <h3 class="text-xl font-bold text-primary mb-3" style="font-family: var(--font-heading);">
                        Preventing Oxidation (Tarnish)
                    </h3>
                    <p class="text-muted leading-relaxed">
                        Copper and brass rapidly tarnish when exposed to air, especially after machining exposes fresh metal. We apply <strong class="text-text">anti-tarnish treatments, nickel plating, or tin plating</strong> immediately after machining to preserve the bright finish. For long-term storage, parts are individually wrapped with VCI (Vapor Corrosion Inhibitor) paper.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ⑥ Finishes for Brass & Copper -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-12">
                <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Finishes for Brass & Copper
                </h2>
                <p class="text-muted max-w-3xl mx-auto">
                    Protecting conductivity and appearance with industry-standard plating and cleaning processes.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <?php
                $finishes = [
                    [
                        'icon'  => 'custom',
                        'title' => 'As-Machined',
                        'desc'  => '<strong>Bright, clean finish</strong> directly off the machine. Brass C360 produces an excellent natural luster. Best for internal components or parts receiving further plating.',
                    ],
                    [
                        'icon'  => 'shield',
                        'title' => 'Nickel Plating',
                        'desc'  => '<strong>Electroless or electrolytic nickel</strong> provides a bright, corrosion-resistant barrier that prevents tarnishing. Ideal for electrical contacts and connectors requiring long-term conductivity.',
                    ],
                    [
                        'icon'  => 'zap',
                        'title' => 'Tin Plating',
                        'desc'  => '<strong>Soft, solderable coating</strong> that protects copper from oxidation while maintaining excellent electrical conductivity. Standard for PCB connectors and wire terminals.',
                    ],
                    [
                        'icon'  => 'palette',
                        'title' => 'Passivation / Citric Cleaning',
                        'desc'  => '<strong>Acid-based cleaning process</strong> that removes surface contaminants and oxides. Restores the natural bright finish and improves corrosion resistance without adding any coating thickness.',
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

    <!-- ⑦ Brass & Copper Parts Gallery -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <h2 class="text-2xl lg:text-3xl font-bold text-primary text-center mb-12" style="font-family: var(--font-heading);">
                Brass & Copper Parts Gallery
            </h2>
            <div class="flex gap-4">
                <div class="flex-1 rounded-lg overflow-hidden bg-card border border-border/50">
                    <img src="https://kmwcnc.com/wp-content/uploads/2025/12/Machining-Copper-Brass-03-768x768.webp" alt="Copper Brass Parts" class="w-full h-full object-cover" loading="lazy" />
                </div>
                <div class="flex-1 rounded-lg overflow-hidden bg-card border border-border/50">
                    <img src="https://kmwcnc.com/wp-content/uploads/2025/12/Copper-Brass-Contacts-768x768.webp" alt="Copper Brass Contacts" class="w-full h-full object-cover" loading="lazy" />
                </div>
                <div class="flex-1 rounded-lg overflow-hidden bg-card border border-border/50">
                    <img src="https://kmwcnc.com/wp-content/uploads/2025/12/Brass-Copper-Die-Cast-768x768.webp" alt="Brass Copper Die Cast" class="w-full h-full object-cover" loading="lazy" />
                </div>
                <div class="flex-1 rounded-lg overflow-hidden bg-card border border-border/50">
                    <img src="https://kmwcnc.com/wp-content/uploads/2025/11/Brass-Copper-Parts-768x768.webp" alt="Brass Copper Parts" class="w-full h-full object-cover" loading="lazy" />
                </div>
            </div>
        </div>
    </section>

    <!-- ⑧ FAQ -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <h2 class="text-2xl lg:text-3xl font-bold text-primary text-center mb-10" style="font-family: var(--font-heading);">
                Brass & Copper FAQs
            </h2>
            <?php
            $faqs = [
                ['q' => 'What is the difference between Brass and Copper?',                        'a' => 'Copper is a pure element with the highest electrical/thermal conductivity. Brass is a copper-zinc alloy that trades some conductivity for much better machinability, strength, and corrosion resistance. Brass is typically gold-colored while copper is reddish.'],
                ['q' => 'Why is copper more expensive to machine than brass?',                      'a' => 'Pure copper is very soft and "gummy," causing it to stick to cutting tools rather than forming clean chips. This requires slower speeds, special tooling, and more frequent tool changes — all increasing cost compared to free-machining brass C360.'],
                ['q' => 'Can you produce lead-free brass parts?',                                   'a' => 'Yes, we machine lead-free brass alloys (C360 alternatives like C69300 and silicon brass) for applications requiring RoHS/REACH compliance or potable water contact.'],
                ['q' => 'How do you stop copper parts from turning green?',                         'a' => 'We apply anti-tarnish treatments, nickel plating, or clear lacquer immediately after machining. For storage, VCI paper wrapping prevents oxidation. The green patina (verdigris) only forms from prolonged moisture exposure on unprotected copper.'],
                ['q' => 'Do you have a Minimum Order Quantity (MOQ)?',                             'a' => 'No MOQ. We support everything from single prototypes to high-volume production runs for brass and copper components.'],
                ['q' => 'What is your standard lead time?',                                        'a' => 'Standard lead time is 7-15 business days depending on complexity. Expedited options available for urgent brass and copper projects.'],
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
                        Get High-Conductivity Parts Fast
                    </h2>
                    <p class="text-white/70 max-w-2xl mx-auto mb-8">
                        Upload your designs for a rapid quotation on brass and copper machining.
                    </p>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent">
                        Upload Files for Brass & Copper Quote
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
