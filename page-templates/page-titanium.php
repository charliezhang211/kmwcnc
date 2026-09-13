<?php
/**
 * Template Name: CNC Titanium Parts
 *
 * KMW CNC — CNC Titanium Parts (material sub-page).
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

get_header();
?>

<main id="primary">

    <!-- ① Hero Banner -->
    <section class="relative py-14 lg:py-20 text-white overflow-hidden">
        <img src="http://kmwcnc.com/wp-content/uploads/2025/12/CNC-Titanium-Parts.webp"
             alt="" class="absolute inset-0 w-full h-full object-cover" aria-hidden="true" />
        <div class="absolute inset-0 bg-primary/85"></div>
        <div class="<?php ulx_container_class('relative z-10'); ?>">
            <?php ulx_breadcrumb(true); ?>
            <h1 class="text-4xl lg:text-5xl font-bold mb-4" style="font-family: var(--font-heading);">
                Precision CNC Titanium Machining Services
            </h1>
            <p class="text-white/80 max-w-3xl mb-8">
                Machining Grade 2, Grade 5 (Ti-6Al-4V), and Medical ELI titanium for medical, marine, and high-performance applications. Full material traceability and certification.
            </p>
        </div>
    </section>

    <!-- ② The Ultimate Metal -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <h2 class="text-2xl lg:text-3xl font-bold text-primary text-center mb-6" style="font-family: var(--font-heading);">
                The Ultimate Metal for Critical Performance
            </h2>
            <p class="text-muted max-w-4xl mx-auto text-center leading-relaxed">
                Titanium delivers the highest <strong class="text-text">strength-to-weight ratio</strong> of any structural metal. It is 45% lighter than steel yet equally strong, with exceptional corrosion resistance — even in seawater and body fluids. These properties make it irreplaceable in medical implants, marine hardware, and chemical processing. At KMW CNC, our engineers specialize in the unique challenges of titanium machining to deliver precision parts without compromising material integrity.
            </p>
        </div>
    </section>

    <!-- ③ Titanium Grades We Machine -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <h2 class="text-2xl lg:text-3xl font-bold text-primary text-center mb-12" style="font-family: var(--font-heading);">
                Titanium Grades We Machine
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <?php
                $grades = [
                    [
                        'title' => 'Grade 5 (Ti-6Al-4V) – The Workhorse',
                        'icon'  => 'zap',
                        'tag'   => 'Most Popular',
                        'desc'  => 'The most widely used titanium alloy, accounting for over 50% of all titanium usage. Excellent combination of strength, corrosion resistance, and weldability.',
                        'best'  => 'Medical implants, high-performance fasteners, motorsport components, and chemical processing parts.',
                    ],
                    [
                        'title' => 'Grade 2 (CP) – Corrosion Resistant',
                        'icon'  => 'shield',
                        'tag'   => 'Best Corrosion Resistance',
                        'desc'  => 'Commercially pure titanium with the best balance of strength and formability among CP grades. Superior corrosion resistance in most environments including seawater.',
                        'best'  => 'Chemical processing equipment, marine hardware, heat exchangers, and desalination plants.',
                    ],
                    [
                        'title' => 'Grade 23 (Medical ELI)',
                        'icon'  => 'clipboard',
                        'tag'   => 'Medical Grade',
                        'desc'  => 'Extra Low Interstitial version of Grade 5 with reduced oxygen and iron content for superior biocompatibility and fatigue strength in biological environments.',
                        'best'  => 'Orthopedic implants, dental implants, spinal fixation devices, and surgical instruments.',
                    ],
                    [
                        'title' => 'Grade 9 (Ti-3Al-2.5V)',
                        'icon'  => 'package',
                        'tag'   => 'Lightweight',
                        'desc'  => 'A "half-strength" alloy between CP grades and Grade 5. Offers good weldability and formability with moderate strength — easier to machine than Grade 5.',
                        'best'  => 'Hydraulic tubing, bicycle frames, and sporting equipment.',
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

    <!-- ④ Titanium Alloys Comparison -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                        Titanium Alloys Comparison
                    </h2>
                    <p class="text-muted leading-relaxed">
                        Compare strength, biocompatibility, and cost to select the right titanium grade for your mission-critical application.
                    </p>
                </div>
                <div class="overflow-x-auto rounded-lg border border-border/50">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th class="px-5 py-3 text-left font-semibold">Grade</th>
                                <th class="px-5 py-3 text-left font-semibold">Yield Strength</th>
                                <th class="px-5 py-3 text-left font-semibold">Density</th>
                                <th class="px-5 py-3 text-left font-semibold">Corrosion Resistance</th>
                                <th class="px-5 py-3 text-left font-semibold">Machinability</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-card">
                                <td class="px-5 py-3 font-medium text-text">Grade 5</td>
                                <td class="px-5 py-3 text-muted">880 MPa</td>
                                <td class="px-5 py-3 text-muted">4.43 g/cm³</td>
                                <td class="px-5 py-3 text-muted">Excellent</td>
                                <td class="px-5 py-3 text-muted">Difficult</td>
                            </tr>
                            <tr class="bg-surface">
                                <td class="px-5 py-3 font-medium text-text">Grade 2</td>
                                <td class="px-5 py-3 text-muted">275 MPa</td>
                                <td class="px-5 py-3 text-muted">4.51 g/cm³</td>
                                <td class="px-5 py-3 font-medium text-accent">Best</td>
                                <td class="px-5 py-3 text-muted">Moderate</td>
                            </tr>
                            <tr class="bg-card">
                                <td class="px-5 py-3 font-medium text-text">Grade 23 ELI</td>
                                <td class="px-5 py-3 text-muted">795 MPa</td>
                                <td class="px-5 py-3 text-muted">4.43 g/cm³</td>
                                <td class="px-5 py-3 text-muted">Excellent</td>
                                <td class="px-5 py-3 text-muted">Difficult</td>
                            </tr>
                            <tr class="bg-surface">
                                <td class="px-5 py-3 font-medium text-text">Grade 9</td>
                                <td class="px-5 py-3 text-muted">483 MPa</td>
                                <td class="px-5 py-3 text-muted">4.48 g/cm³</td>
                                <td class="px-5 py-3 text-muted">Excellent</td>
                                <td class="px-5 py-3 text-muted">Moderate</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- ⑤ Expertise in Machining Titanium -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-12">
                <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Expertise in Machining Titanium Alloys
                </h2>
                <p class="text-muted max-w-3xl mx-auto">
                    Titanium is one of the most challenging metals to machine. Our engineers have developed proven strategies to deliver precision parts consistently.
                </p>
            </div>

            <div class="bg-card rounded-xl overflow-hidden border border-border/50 grid grid-cols-1 lg:grid-cols-12 mb-6">
                <div class="lg:col-span-4 overflow-hidden h-60 lg:h-auto lg:max-h-72">
                    <img src="http://kmwcnc.com/wp-content/uploads/2025/12/Titanium-Alloys-01.webp"
                         alt="Combating Heat Concentration" class="w-full h-full object-cover object-top" loading="lazy" />
                </div>
                <div class="lg:col-span-8 p-6 lg:p-8 flex flex-col justify-center">
                    <h3 class="text-xl font-bold text-primary mb-3" style="font-family: var(--font-heading);">
                        Combating Heat Concentration
                    </h3>
                    <p class="text-muted leading-relaxed">
                        Titanium's extremely low thermal conductivity means nearly all cutting heat stays at the tool tip instead of dissipating into the chip. KMW CNC uses <strong class="text-text">high-pressure through-spindle coolant (70+ bar)</strong> directed precisely at the cutting zone, combined with reduced cutting speeds and optimized feed rates. This prevents thermal damage to both the tool and the workpiece surface.
                    </p>
                </div>
            </div>

            <div class="bg-card rounded-xl overflow-hidden border border-border/50 grid grid-cols-1 lg:grid-cols-12">
                <div class="lg:col-span-4 overflow-hidden h-60 lg:h-auto lg:max-h-72">
                    <img src="http://kmwcnc.com/wp-content/uploads/2025/12/Titanium-Alloys-02.webp"
                         alt="Preventing Galling" class="w-full h-full object-cover object-top" loading="lazy" />
                </div>
                <div class="lg:col-span-8 p-6 lg:p-8 flex flex-col justify-center">
                    <h3 class="text-xl font-bold text-primary mb-3" style="font-family: var(--font-heading);">
                        Preventing Galling & Vibration
                    </h3>
                    <p class="text-muted leading-relaxed">
                        Titanium has a strong tendency to gall (weld to the cutting tool) and its low modulus of elasticity causes deflection and chatter. We combat this with <strong class="text-text">rigid setups, short tool overhangs, and sharp uncoated carbide tools</strong>. Climb milling strategies and consistent chip thickness keep cutting forces predictable, eliminating vibration marks on finished surfaces.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ⑥ Finishes for Titanium -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-12">
                <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Finishes for Titanium
                </h2>
                <p class="text-muted max-w-3xl mx-auto">
                    Enhancing aesthetics and performance of titanium components with specialized surface treatments.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <?php
                $finishes = [
                    [
                        'icon'  => 'palette',
                        'title' => 'Bead Blasting',
                        'desc'  => '<strong>Uniform matte texture</strong> that removes tool marks and creates a professional, non-reflective surface. The most common finish for medical and industrial titanium components.',
                    ],
                    [
                        'icon'  => 'shield',
                        'title' => 'Anodizing (Type II)',
                        'desc'  => 'Titanium anodizing produces <strong>vibrant interference colors</strong> (blue, purple, gold) without dyes by controlling oxide layer thickness. Provides mild wear protection and a distinctive aesthetic.',
                    ],
                    [
                        'icon'  => 'custom',
                        'title' => 'Polishing',
                        'desc'  => '<strong>Mirror or brushed finishes</strong> achieved through progressive abrasive steps. Essential for medical implants requiring biocompatible, ultra-smooth surfaces (Ra &lt; 0.2μm).',
                    ],
                    [
                        'icon'  => 'zap',
                        'title' => 'PVD Coating',
                        'desc'  => '<strong>Physical Vapor Deposition</strong> applies ultra-hard, thin coatings (TiN, TiAlN, DLC) for extreme wear resistance. Ideal for titanium cutting tools, bearing surfaces, and high-friction components.',
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

    <!-- ⑦ Titanium Parts Gallery -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <h2 class="text-2xl lg:text-3xl font-bold text-primary text-center mb-12" style="font-family: var(--font-heading);">
                Titanium Parts Gallery
            </h2>
            <div class="flex gap-4">
                <div class="flex-1 rounded-lg overflow-hidden bg-card border border-border/50">
                    <img src="https://kmwcnc.com/wp-content/uploads/2025/12/Titanium-Alloys-03-768x768.webp" alt="Titanium Alloys" class="w-full h-full object-cover" loading="lazy" />
                </div>
                <div class="flex-1 rounded-lg overflow-hidden bg-card border border-border/50">
                    <img src="https://kmwcnc.com/wp-content/uploads/2025/12/Automation-Component-Gallery-02-768x768.webp" alt="Titanium Components" class="w-full h-full object-cover" loading="lazy" />
                </div>
                <div class="flex-1 rounded-lg overflow-hidden bg-card border border-border/50">
                    <img src="https://kmwcnc.com/wp-content/uploads/2025/12/Titanium-Bone-Plates-768x768.webp" alt="Titanium Bone Plates" class="w-full h-full object-cover" loading="lazy" />
                </div>
                <div class="flex-1 rounded-lg overflow-hidden bg-card border border-border/50">
                    <img src="https://kmwcnc.com/wp-content/uploads/2025/12/Titanium-Hydraulic-Fitting01-768x768.webp" alt="Titanium Hydraulic Fitting" class="w-full h-full object-cover" loading="lazy" />
                </div>
            </div>
        </div>
    </section>

    <!-- ⑧ FAQ -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <h2 class="text-2xl lg:text-3xl font-bold text-primary text-center mb-10" style="font-family: var(--font-heading);">
                Titanium Machining FAQs
            </h2>
            <?php
            $faqs = [
                ['q' => 'Why is titanium machining so expensive?',                                 'a' => 'Titanium raw material costs 5-10x more than steel. It also requires slower cutting speeds, specialized tooling, and high-pressure coolant systems. Tool life is significantly shorter than when machining steel or aluminum, adding to per-part costs.'],
                ['q' => 'Is titanium magnetic?',                                                   'a' => 'No, titanium is non-magnetic (paramagnetic). This makes it ideal for MRI-compatible medical devices, electronic housings, and applications where magnetic interference must be avoided.'],
                ['q' => 'What is the difference between Grade 2 and Grade 5?',                     'a' => 'Grade 2 is commercially pure titanium — softer, more formable, and with the best corrosion resistance. Grade 5 (Ti-6Al-4V) is an alloy with roughly 3x the strength, used where structural performance is critical.'],
                ['q' => 'Is titanium flammable during machining?',                                 'a' => 'Titanium chips can ignite if they are fine enough and exposed to sparks. We maintain proper chip management, use flood coolant, and follow strict fire safety protocols. Bulk titanium is not flammable under normal conditions.'],
                ['q' => 'Do you have a Minimum Order Quantity (MOQ)?',                             'a' => 'No MOQ. We support everything from single prototypes to production volumes for titanium components.'],
                ['q' => 'What is your standard lead time?',                                        'a' => 'Standard lead time is 10-20 business days for titanium parts, depending on complexity and material availability. Expedited options available.'],
                ['q' => 'How do you ensure my IP (Intellectual Property) is safe?',                'a' => 'We sign NDAs for every project and maintain strict access controls. Your designs and technical data are fully protected.'],
                ['q' => 'Do you provide quality inspection reports?',                               'a' => 'Yes, every order includes a detailed inspection report with CMM data, dimensional results, and full material certifications including MTR with heat lot traceability.'],
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
                        Get High-Performance Titanium Parts
                    </h2>
                    <p class="text-white/70 max-w-2xl mx-auto mb-8">
                        Upload your designs for expert DFM review and competitive titanium machining quotation.
                    </p>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent">
                        Upload Files for Titanium Quote
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
