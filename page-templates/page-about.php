<?php
/**
 * Template Name: About
 *
 * KMW CNC — company profile, capabilities, equipment, quality, certs, factory tour.
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

get_header();

$contact_url = get_permalink(get_page_by_path('contact')) ?: home_url('/contact/');
?>

<main id="primary">

    <!-- ① Hero -->
    <section class="relative py-14 lg:py-20 text-white overflow-hidden">
        <img src="http://kmwcnc.com/wp-content/uploads/2025/12/cnc-mancing.webp"
             alt="" class="absolute inset-0 w-full h-full object-cover" aria-hidden="true" />
        <div class="absolute inset-0 bg-primary/80"></div>
        <div class="<?php ulx_container_class('relative z-10'); ?>">
            <?php ulx_breadcrumb(true); ?>
            <h1 class="text-4xl lg:text-5xl font-bold text-center" style="font-family: var(--font-heading);">
                Your Strategic Manufacturing Partner in China
            </h1>
        </div>
    </section>

    <!-- Sticky Anchor Nav (desktop) -->
    <div class="hidden lg:block sticky top-[72px] z-40 bg-card border-b border-border/50 shadow-sm">
        <div class="<?php ulx_container_class('flex items-center gap-1 overflow-x-auto py-0'); ?>">
            <?php
            $anchors = [
                'company-profile'  => 'Company Profile',
                'our-capabilities' => 'Our Capabilities',
                'our-equipment'    => 'Our Equipment',
                'quality-control'  => 'Quality Control',
                'certificates'     => 'Certificates',
                'factory-tour'     => 'Factory Tour',
            ];
            foreach ($anchors as $id => $label) :
            ?>
                <a href="#<?php echo esc_attr($id); ?>"
                   class="whitespace-nowrap px-4 py-3 text-sm font-medium text-muted hover:text-primary hover:bg-surface/50 transition-colors border-b-2 border-transparent hover:border-accent">
                    <?php echo esc_html($label); ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Mobile Anchor Nav -->
    <div class="lg:hidden sticky top-16 z-40 bg-card border-b border-border/50 shadow-sm">
        <div class="overflow-x-auto">
            <div class="flex items-center gap-0 px-4 min-w-max">
                <?php foreach ($anchors as $id => $label) : ?>
                    <a href="#<?php echo esc_attr($id); ?>"
                       class="whitespace-nowrap px-3 py-3 text-xs font-medium text-muted hover:text-primary border-b-2 border-transparent hover:border-accent transition-colors">
                        <?php echo esc_html($label); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- ② Company Profile -->
    <section id="company-profile" class="py-16 lg:py-24 bg-card scroll-mt-32">
        <div class="<?php ulx_container_class(); ?>">
            <h2 class="text-3xl lg:text-4xl font-bold text-primary mb-6" style="font-family: var(--font-heading);">
                Who We Are: Your Strategic Manufacturing Partner
            </h2>
            <p class="text-muted leading-relaxed mb-8 max-w-4xl">
                Shenzhen Kaimingwei Technology Co., Limited is headquartered in Shenzhen, China — one of the world's leading hubs for advanced manufacturing and engineering. With a focus on precision CNC machining, we serve industries where quality and accuracy are non-negotiable: medical, automotive, electronics, robotics, and beyond. From a single prototype to full-scale production runs, we are your comprehensive manufacturing solution.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                <div>
                    <h3 class="text-lg font-bold text-primary mb-3" style="font-family: var(--font-heading);">Mastering Complex Processes</h3>
                    <p class="text-sm text-muted leading-relaxed">
                        Our core strength lies in advanced multi-axis machining and demanding techniques. We operate a fleet of advanced 3-axis to 5-axis CNC machines, specializing in
                        <a href="<?php echo esc_url(home_url('/capabilities/cnc-milling-parts/')); ?>" class="text-accent hover:underline">Precision CNC Milling</a>,
                        <a href="<?php echo esc_url(home_url('/capabilities/cnc-turning-parts/')); ?>" class="text-accent hover:underline">CNC Turning</a>, and
                        <a href="<?php echo esc_url(home_url('/capabilities/die-casting-services/')); ?>" class="text-accent hover:underline">Die Casting Services</a>.
                    </p>
                </div>
                <div>
                    <h3 class="text-lg font-bold text-primary mb-3" style="font-family: var(--font-heading);">Serving Critical Industries</h3>
                    <p class="text-sm text-muted leading-relaxed">
                        We meet the strict quality requirements of
                        <a href="<?php echo esc_url(home_url('/industry/cnc-medical-parts/')); ?>" class="text-accent hover:underline">Medical Devices</a>,
                        <a href="<?php echo esc_url(home_url('/industry/cnc-auto-parts/')); ?>" class="text-accent hover:underline">Automotive &amp; EV</a>,
                        <a href="<?php echo esc_url(home_url('/industry/cnc-electronic-components/')); ?>" class="text-accent hover:underline">Electronic Components</a>, and
                        <a href="<?php echo esc_url(home_url('/industry/robotics-automation-parts/')); ?>" class="text-accent hover:underline">Robotics &amp; Automation</a>.
                    </p>
                </div>
                <div>
                    <h3 class="text-lg font-bold text-primary mb-3" style="font-family: var(--font-heading);">Material Expertise</h3>
                    <p class="text-sm text-muted leading-relaxed">
                        We work with 50+ materials including
                        <a href="<?php echo esc_url(home_url('/materials/cnc-aluminum-parts/')); ?>" class="text-accent hover:underline">Aluminum Alloys (6061/7075)</a>,
                        <a href="<?php echo esc_url(home_url('/materials/cnc-stainless-steel-parts/')); ?>" class="text-accent hover:underline">Stainless Steel</a>,
                        <a href="<?php echo esc_url(home_url('/materials/cnc-titanium-parts/')); ?>" class="text-accent hover:underline">Titanium</a>, and
                        <a href="<?php echo esc_url(home_url('/materials/machined-plastic-parts/')); ?>" class="text-accent hover:underline">Engineering Plastics</a>.
                    </p>
                </div>
            </div>

            <!-- Offices -->
            <h2 class="text-2xl lg:text-3xl font-bold text-primary mb-8 text-center" style="font-family: var(--font-heading);">
                Serving Customers Worldwide
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-3xl mx-auto">
                <div class="flex items-start gap-4 p-6 bg-surface rounded-lg border border-border/50">
                    <img src="http://kmwcnc.com/wp-content/uploads/2025/12/china-flag.webp" alt="China Flag" class="w-10 h-7 object-cover rounded flex-shrink-0 mt-0.5" />
                    <div>
                        <h4 class="text-sm font-bold text-primary mb-1">Shenzhen Office</h4>
                        <p class="text-sm text-muted">Building B, Jinhao Entrepreneurship Park, Dafu Industrial Zone, Guanlan, Longhua District, Shenzhen</p>
                    </div>
                </div>
                <div class="flex items-start gap-4 p-6 bg-surface rounded-lg border border-border/50">
                    <img src="http://kmwcnc.com/wp-content/uploads/2025/12/hong-kong.webp" alt="Hong Kong Flag" class="w-10 h-7 object-cover rounded flex-shrink-0 mt-0.5" />
                    <div>
                        <h4 class="text-sm font-bold text-primary mb-1">Hong Kong Office</h4>
                        <p class="text-sm text-muted">RM 102, 1/F, THE CLOUD, 111 TUNG CHAU STREET, Tai Kok Tsui, Hong Kong</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ③ Our Capabilities -->
    <section id="our-capabilities" class="py-16 lg:py-24 bg-surface scroll-mt-32">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Our Capabilities
                </h2>
                <p class="text-muted max-w-2xl mx-auto">
                    KMW CNC operates with a strong manufacturing foundation, equipped with the most advanced CNC machining machines to handle a fleet of 3-axis, 4-axis, and 5-axis operations for complex part manufacturing.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php
                $caps = [
                    ['title' => 'CNC Milling Services',  'img' => 'http://kmwcnc.com/wp-content/uploads/2025/11/CNC-Milling-Services.webp',  'url' => '/capabilities/cnc-milling-parts/'],
                    ['title' => 'CNC Turning Services',  'img' => 'http://kmwcnc.com/wp-content/uploads/2025/11/CNC-Turning-Services.webp',  'url' => '/capabilities/cnc-turning-parts/'],
                    ['title' => 'CNC Drilling Services', 'img' => 'http://kmwcnc.com/wp-content/uploads/2025/11/CNC-Drilling-Tapping.webp',  'url' => '/capabilities/cnc-drilling-parts/'],
                    ['title' => 'Die Casting Services',  'img' => 'http://kmwcnc.com/wp-content/uploads/2025/11/Die-Casting.webp',           'url' => '/capabilities/die-casting-services/'],
                ];
                foreach ($caps as $cap) :
                ?>
                    <a href="<?php echo esc_url(home_url($cap['url'])); ?>"
                       class="group bg-card rounded-lg overflow-hidden border border-border/50 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                        <div class="aspect-[4/3] overflow-hidden">
                            <img src="<?php echo esc_url($cap['img']); ?>"
                                 alt="<?php echo esc_attr($cap['title']); ?>"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                 loading="lazy" />
                        </div>
                        <div class="p-4 text-center">
                            <h3 class="text-sm font-bold text-primary" style="font-family: var(--font-heading);">
                                <?php echo esc_html($cap['title']); ?>
                            </h3>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ④ Our CNC Machining Equipment -->
    <section id="our-equipment" class="py-16 lg:py-24 bg-card scroll-mt-32">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Our CNC Machining Equipment
                </h2>
            </div>

            <!-- Equipment Table -->
            <div class="overflow-x-auto mb-12">
                <table class="w-full text-sm border-collapse">
                    <thead>
                        <tr class="bg-primary text-white">
                            <th class="px-4 py-3 text-left font-semibold">Equipment</th>
                            <th class="px-4 py-3 text-left font-semibold">Model</th>
                            <th class="px-4 py-3 text-left font-semibold">Brand / Origin</th>
                            <th class="px-4 py-3 text-center font-semibold">QTY</th>
                            <th class="px-4 py-3 text-left font-semibold">Specs</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-border">
                        <?php
                        $equipment = [
                            ['3-Axis CNC Milling',     'VMC-850/1060',     'Fanuc / Mitsubishi', '12', 'Travel: 850×500×500mm'],
                            ['4-Axis CNC Milling',     'VMC-850',          'Fanuc',              '4',  'With rotary table'],
                            ['5-Axis CNC Machining',   'DMU 50 / UCP 600', 'DMG Mori / Mikron', '3',  'Simultaneous 5-axis'],
                            ['CNC Turning',            'CK6140/6150',      'Fanuc',              '8',  'Max Ø400mm × 600mm'],
                            ['Mill-Turn Center',       'PUMA 2600',        'Doosan',             '2',  'Live tooling, Y-axis'],
                            ['Wire EDM',               'DK7740',           'Mitsubishi / Sodick','3',  'Accuracy ±0.005mm'],
                            ['Milling (Legacy)',        'Various',          'Taiwan / Japan',     '6',  'General machining'],
                            ['Surface Grinder',         'M618 / M250',     'Okamoto',            '4',  'Flatness 0.002mm'],
                            ['CNC Drilling/Tapping',    'VTC-20',          'Brother',            '3',  'High-speed tapping'],
                        ];
                        foreach ($equipment as $i => $eq) :
                        ?>
                            <tr class="<?php echo $i % 2 === 0 ? 'bg-card' : 'bg-surface/50'; ?>">
                                <td class="px-4 py-3 font-medium text-text"><?php echo esc_html($eq[0]); ?></td>
                                <td class="px-4 py-3 text-muted"><?php echo esc_html($eq[1]); ?></td>
                                <td class="px-4 py-3 text-muted"><?php echo esc_html($eq[2]); ?></td>
                                <td class="px-4 py-3 text-center font-semibold text-primary"><?php echo esc_html($eq[3]); ?></td>
                                <td class="px-4 py-3 text-muted"><?php echo esc_html($eq[4]); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <!-- Equipment Images — 3×3 grid -->
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <?php
                $eq_images = [
                    ['img' => 'http://kmwcnc.com/wp-content/uploads/2025/12/DM_20251124095836_002.webp',           'label' => 'CNC Turning'],
                    ['img' => 'https://kmwcnc.com/wp-content/uploads/2025/12/DM_20251124095836_003.webp',           'label' => 'CNC Milling'],
                    ['img' => 'https://kmwcnc.com/wp-content/uploads/2025/12/DM_20251124095836_004.webp',           'label' => 'CNC Machining'],
                    ['img' => 'https://kmwcnc.com/wp-content/uploads/2025/12/DM_20251124095836_005.webp',           'label' => 'Injection Molding'],
                    ['img' => 'https://kmwcnc.com/wp-content/uploads/2025/12/DM_20251208101048_005-768x768.webp',   'label' => 'Laser Engraving'],
                    ['img' => 'https://kmwcnc.com/wp-content/uploads/2025/12/DM_20251208101048_006-768x768.webp',   'label' => 'Surface Grinding'],
                    ['img' => 'https://kmwcnc.com/wp-content/uploads/2025/12/DM_20251208101048_007.webp',           'label' => 'Tapping'],
                    ['img' => 'https://kmwcnc.com/wp-content/uploads/2025/12/DM_20251208101048_008-768x768.webp',   'label' => 'Bending'],
                    ['img' => 'https://kmwcnc.com/wp-content/uploads/2025/12/DM_20251208101048_009.webp',           'label' => 'EDM'],
                ];
                foreach ($eq_images as $eq) :
                ?>
                    <div class="rounded-lg overflow-hidden shadow-sm" style="background-color: #fff;">
                        <div class="aspect-[4/3] overflow-hidden flex items-center justify-center p-2">
                            <img src="<?php echo esc_url($eq['img']); ?>"
                                 alt="<?php echo esc_attr($eq['label']); ?>"
                                 class="max-w-full max-h-full object-contain"
                                 loading="lazy" />
                        </div>
                        <p class="text-xs font-bold text-center text-primary py-2.5 border-t border-border/20"><?php echo esc_html($eq['label']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ⑤ Quality Control -->
    <section id="quality-control" class="py-16 lg:py-24 bg-surface scroll-mt-32">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Quality Control
                </h2>
                <p class="text-muted max-w-3xl mx-auto">
                    Quality is built into every step of our process. We operate under a comprehensive ISO 9001:2015 quality management system. Every part undergoes rigorous inspection using state-of-the-art measurement equipment.
                </p>
            </div>

            <!-- QC Process Table -->
            <div class="overflow-x-auto mb-12">
                <table class="w-full text-sm border-collapse">
                    <thead>
                        <tr class="bg-primary text-white">
                            <th class="px-4 py-3 text-left font-semibold">Inspection Stage</th>
                            <th class="px-4 py-3 text-left font-semibold">Process / Equipment</th>
                            <th class="px-4 py-3 text-left font-semibold">Accuracy</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-border">
                        <?php
                        $qc_steps = [
                            ['Incoming Material',      'Material certification & spectral analysis',   '100% verified'],
                            ['First Article Inspection','CMM (Coordinate Measuring Machine)',          '±0.002mm'],
                            ['In-Process Check',        'Go/No-Go gauges, micrometers, calipers',     'Per drawing tolerance'],
                            ['Surface Roughness',       'Mitutoyo surface roughness tester',           'Ra 0.4–3.2μm'],
                            ['Hardness Testing',        'Rockwell / Vickers hardness tester',          'Per spec'],
                            ['Coating Thickness Gauge', 'X-ray fluorescence / eddy current',           '±1μm'],
                            ['Final Inspection',        'Full dimensional report + visual check',      '100% inspected'],
                            ['3-Axis CMM',              'Hexagon / Zeiss coordinate measuring',        '±0.001mm'],
                            ['5-Axis CMM (Romer)',      'Portable measuring arm for large parts',      '±0.025mm'],
                            ['Optical Comparator',      'Profile projector for 2D inspection',         '±0.005mm'],
                        ];
                        foreach ($qc_steps as $i => $step) :
                        ?>
                            <tr class="<?php echo $i % 2 === 0 ? 'bg-card' : 'bg-surface/50'; ?>">
                                <td class="px-4 py-3 font-medium text-text"><?php echo esc_html($step[0]); ?></td>
                                <td class="px-4 py-3 text-muted"><?php echo esc_html($step[1]); ?></td>
                                <td class="px-4 py-3 text-muted"><?php echo esc_html($step[2]); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <!-- QC Images -->
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 lg:gap-6">
                <?php
                $qc_images = [
                    ['img' => 'https://kmwcnc.com/wp-content/uploads/2025/12/qa-contorl-1.webp',  'label' => 'Torsion testing'],
                    ['img' => 'https://kmwcnc.com/wp-content/uploads/2025/12/qa-contorl-2.webp',  'label' => 'Pressure tensile testing'],
                    ['img' => 'https://kmwcnc.com/wp-content/uploads/2025/12/qa-contorl-3.webp',  'label' => 'Hardness testing'],
                    ['img' => 'https://kmwcnc.com/wp-content/uploads/2025/12/qa-contorl-4.webp',  'label' => 'Micrometer'],
                    ['img' => 'https://kmwcnc.com/wp-content/uploads/2025/12/qa-contorl-5.webp',  'label' => 'Height instrument'],
                    ['img' => 'https://kmwcnc.com/wp-content/uploads/2025/12/qa-contorl-6.webp',  'label' => 'Thread gauge'],
                    ['img' => 'https://kmwcnc.com/wp-content/uploads/2025/12/qa-contorl-7.webp',  'label' => 'Inner diameter micrometer'],
                    ['img' => 'https://kmwcnc.com/wp-content/uploads/2025/12/qa-contorl-8.webp',  'label' => 'Calipers'],
                    ['img' => 'https://kmwcnc.com/wp-content/uploads/2025/12/qa-contorl-9.webp',  'label' => '3CMM'],
                ];
                foreach ($qc_images as $qc) :
                ?>
                    <div class="rounded-lg overflow-hidden shadow-sm" style="background-color: #fff;">
                        <div class="aspect-[4/3] overflow-hidden flex items-center justify-center p-2">
                            <img src="<?php echo esc_url($qc['img']); ?>" alt="<?php echo esc_attr($qc['label']); ?>"
                                 class="max-w-full max-h-full object-contain" loading="lazy" />
                        </div>
                        <p class="text-xs font-bold text-center text-primary py-2.5 border-t border-border/20"><?php echo esc_html($qc['label']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ⑥ Certificates -->
    <section id="certificates" class="py-16 lg:py-24 bg-card scroll-mt-32">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Certified Standards for Critical Industries
                </h2>
                <p class="text-muted max-w-2xl mx-auto">
                    KMW CNC holds key certifications and patents demonstrating our commitment to quality, safety, and innovation — ensuring full traceability for Automotive, Medical, and Electronic components.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-7 gap-6 items-stretch">
                <div class="md:col-span-2 flex items-center justify-center rounded-lg border border-border/50 bg-surface/50 p-3">
                    <img src="<?php echo esc_url('http://kmwcnc.com/wp-content/uploads/2025/12/iso-cert-724x1024.webp'); ?>"
                         alt="ISO 9001:2015 Quality Management System Certificate"
                         class="w-full h-auto object-contain" loading="lazy" />
                </div>
                <div class="md:col-span-3 flex items-center justify-center rounded-lg border border-border/50 bg-surface/50 p-6">
                    <img src="<?php echo esc_url('http://kmwcnc.com/wp-content/uploads/2025/12/kmw-cert-01.webp'); ?>"
                         alt="High-Tech Enterprise Certificate"
                         class="w-full h-auto object-contain scale-110" loading="lazy" />
                </div>
                <div class="md:col-span-2 flex items-center justify-center rounded-lg border border-border/50 bg-surface/50 p-3">
                    <img src="<?php echo esc_url('http://kmwcnc.com/wp-content/uploads/2025/12/LXTBJLW%E5%87%AF%E6%98%8E%E4%BC%9F20240221-13-%E4%B8%80%E7%A7%8D%E6%9C%BA%E6%A2%B0%E5%8A%A0%E5%B7%A5%E7%94%A8%E6%BB%91%E8%BD%A8%E7%89%B5%E5%BC%95%E8%A3%85%E7%BD%AE-%E5%AE%9E%E7%94%A8%E6%96%B0%E5%9E%8B%E4%B8%93%E5%88%A9%E8%AF%81%E4%B9%A6-724x1024.webp'); ?>"
                         alt="Utility Model Patent Certificate"
                         class="w-full h-auto object-contain" loading="lazy" />
                </div>
            </div>
        </div>
    </section>

    <!-- ⑦ KMW CNC by the Numbers -->
    <section class="py-16 lg:py-20 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    KMW CNC by the Numbers
                </h2>
                <p class="text-muted">Everything we do reflects our commitment to quality, capacity, and speed.</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
                <?php
                $stats = [
                    ['value' => '50+',        'label' => 'CNC Machines',             'color' => 'text-accent'],
                    ['value' => '3,600㎡',    'label' => 'Workshop Area',            'color' => 'text-primary'],
                    ['value' => '10+ Years',  'label' => 'Manufacturing Experience', 'color' => 'text-accent'],
                    ['value' => '3 Days',     'label' => 'Fastest Lead Time',        'color' => 'text-primary'],
                    ['value' => '500+',       'label' => 'Projects Delivered',       'color' => 'text-accent'],
                ];
                foreach ($stats as $stat) :
                ?>
                    <div class="bg-card rounded-xl p-6 text-center border border-border/50">
                        <div class="text-3xl font-extrabold <?php echo esc_attr($stat['color']); ?> mb-2 whitespace-nowrap" style="font-family: var(--font-heading);">
                            <?php echo esc_html($stat['value']); ?>
                        </div>
                        <div class="text-sm text-muted"><?php echo esc_html($stat['label']); ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ⑧ Virtual Factory Tour -->
    <section id="factory-tour" class="py-16 lg:py-24 bg-card scroll-mt-32">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Virtual Factory Tour
                </h2>
                <p class="text-muted">Can't visit us in person? Take a virtual walk through our facility.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <?php
                $tour_items = [
                    ['icon' => 'shield',   'title' => 'ISO 9001 Certified',   'desc' => 'Our quality management system ensures consistent, traceable output for every project.'],
                    ['icon' => 'custom',   'title' => 'Free DFM Analysis',    'desc' => 'Get expert Design for Manufacturing feedback before production — no cost, no obligation.'],
                    ['icon' => 'truck',    'title' => 'Global Shipping',       'desc' => 'We deliver to 30+ countries with reliable logistics partners and full customs support.'],
                ];
                foreach ($tour_items as $item) :
                ?>
                    <div class="bg-surface rounded-xl p-8 text-center border border-border/50">
                        <div class="inline-flex items-center justify-center w-14 h-14 rounded-full bg-accent/10 mb-4">
                            <span class="text-accent"><?php echo ulx_icon($item['icon'], 'w-7 h-7'); ?></span>
                        </div>
                        <h3 class="text-lg font-bold text-primary mb-2" style="font-family: var(--font-heading);">
                            <?php echo esc_html($item['title']); ?>
                        </h3>
                        <p class="text-sm text-muted leading-relaxed"><?php echo esc_html($item['desc']); ?></p>
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
                    <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4" style="font-family: var(--font-heading);">
                        Ready to Visit Us?
                    </h2>
                    <p class="text-white/75 max-w-2xl mx-auto mb-8">
                        We welcome global visitors to walk our factory. Contact us to schedule a visit or start your project today.
                    </p>
                    <a href="<?php echo esc_url($contact_url); ?>" class="btn-accent btn-lg gap-2">
                        Schedule a Factory Visit
                        <?php echo ulx_icon('arrow-right', 'w-5 h-5'); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
