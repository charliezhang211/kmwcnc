<?php
/**
 * Template Name: Home
 *
 * KMW CNC B2B home page.
 * Sections: Hero → Trust Bar → Capabilities → Industries → Materials →
 *           Why Trust → Quality → Testimonials → FAQ → Blog → CTA
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

get_header();

$contact_url = get_permalink(get_page_by_path('contact')) ?: home_url('/contact/');
?>

<main id="primary">

    <!-- ① Hero -->
    <section class="relative min-h-[520px] lg:min-h-[600px] flex items-center overflow-hidden">
        <!-- Background image -->
        <img src="http://kmwcnc.com/wp-content/uploads/2025/12/cnc-mancing.webp"
             alt="CNC machining factory"
             class="absolute inset-0 w-full h-full object-cover" />
        <!-- Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-primary/90 via-primary/75 to-primary/50"></div>

        <div class="<?php ulx_container_class('relative z-10 py-20 lg:py-28'); ?>">
            <div class="max-w-2xl">
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white leading-tight mb-6" style="font-family: var(--font-heading);">
                    Your Premier Partner for Rapid Prototyping &amp; Low-Volume Manufacturing.
                </h1>
                <p class="text-base lg:text-lg text-white/75 leading-relaxed mb-8 max-w-xl">
                    KMW Technology delivers precision CNC machined parts with tolerances down to &plusmn;0.005mm. From prototype to production, we serve engineers and buyers in 30+ countries.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="<?php echo esc_url($contact_url); ?>" class="btn-accent btn-lg gap-2">
                        Get a Free Quote
                        <?php echo ulx_icon('arrow-right', 'w-5 h-5'); ?>
                    </a>
                    <a href="<?php echo esc_url(home_url('/capabilities/cnc-machining/')); ?>" class="btn-lg inline-flex items-center justify-center h-14 px-8 text-base font-semibold uppercase tracking-wider border border-white/30 text-white hover:bg-white/10 transition-all duration-200" style="border-radius: var(--btn-radius);">
                        Explore Our Capabilities
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ② Trust Bar -->
    <section class="py-10 lg:py-12 bg-card border-b border-border/50">
        <div class="<?php ulx_container_class(); ?>">
            <p class="text-center text-xs font-semibold uppercase tracking-[0.2em] text-muted mb-8">
                Trusted by Innovative Engineers From:
            </p>
            <div class="flex flex-wrap items-center justify-center gap-8 lg:gap-14 opacity-60 grayscale">
                <?php
                $logos = [
                    ['src' => '/wp-content/uploads/2025/11/logo-client-1.webp', 'alt' => 'AMETEK'],
                    ['src' => '/wp-content/uploads/2025/11/logo-client-2.webp', 'alt' => 'Client Partner'],
                    ['src' => '/wp-content/uploads/2025/11/logo-client-3.webp', 'alt' => 'Client Partner'],
                    ['src' => '/wp-content/uploads/2025/11/logo-client-4.webp', 'alt' => 'ABB'],
                    ['src' => '/wp-content/uploads/2025/11/logo-client-5.webp', 'alt' => 'DECA'],
                    ['src' => '/wp-content/uploads/2025/11/logo-client-6.webp', 'alt' => 'Client Partner'],
                    ['src' => '/wp-content/uploads/2025/11/logo-client-7.webp', 'alt' => 'KIKKOMAN'],
                    ['src' => '/wp-content/uploads/2025/11/logo-client-8.webp', 'alt' => 'Client Partner'],
                ];
                foreach ($logos as $logo) :
                ?>
                    <img src="<?php echo esc_url('http://kmwcnc.com' . $logo['src']); ?>"
                         alt="<?php echo esc_attr($logo['alt']); ?>"
                         class="h-8 lg:h-10 w-auto object-contain"
                         loading="lazy" />
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ③ Comprehensive Manufacturing Solutions -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">

            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Comprehensive Manufacturing Solutions
                </h2>
                <p class="text-muted max-w-2xl mx-auto">
                    One-stop solution for complex metal and plastic parts. We combine advanced CNC Milling, Turning, Die Casting, and Wire EDM processes to deliver prototypes and production parts.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php
                $capabilities = [
                    [
                        'title' => 'CNC Machining',
                        'desc'  => 'Full-service CNC machining for complex parts with precision up to ±0.005mm, from prototyping to high-volume production.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/12/cnc-mancing.webp',
                        'url'   => '/capabilities/cnc-machining/',
                    ],
                    [
                        'title' => 'CNC Milling Services',
                        'desc'  => '3-axis and 5-axis CNC milling for intricate geometries, tight tolerances to ±0.01mm on all materials.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/11/CNC-Milling-Services.webp',
                        'url'   => '/capabilities/cnc-milling-parts/',
                    ],
                    [
                        'title' => 'CNC Turning Services',
                        'desc'  => 'Precision CNC turning for cylindrical parts, shafts, and bushings with live tooling capabilities.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/11/CNC-Turning-Services.webp',
                        'url'   => '/capabilities/cnc-turning-parts/',
                    ],
                    [
                        'title' => 'CNC Drilling Services',
                        'desc'  => 'High-precision drilling and tapping services for complex hole patterns and thread specifications.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/11/CNC-Drilling-Tapping.webp',
                        'url'   => '/capabilities/cnc-drilling-parts/',
                    ],
                    [
                        'title' => 'Wire EDM Services',
                        'desc'  => 'Ultra-precise wire EDM cutting for hardened materials, intricate shapes, and tight-tolerance parts.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/12/001Wire-EDM.webp',
                        'url'   => '/capabilities/wire-edm-services/',
                    ],
                    [
                        'title' => '5-Axis CNC Machining Services',
                        'desc'  => 'Complex multi-surface machining in a single setup, reducing lead time and improving accuracy.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/12/5-Axis-CNC-Machining-Services.webp',
                        'url'   => '/capabilities/5-axis-cnc-machining-services/',
                    ],
                    [
                        'title' => 'Rapid Prototyping Services',
                        'desc'  => 'Fast prototype parts delivered in as few as 3 days. High-fidelity prototypes in production-grade materials.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/12/fastc-prototypes-.webp',
                        'url'   => '/capabilities/rapid-prototyping-services/',
                    ],
                    [
                        'title' => 'Die Casting Services',
                        'desc'  => 'High-volume die casting for aluminum and zinc alloy parts with excellent surface finish and repeatability.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/11/Die-Casting.webp',
                        'url'   => '/capabilities/die-casting-services/',
                    ],
                    [
                        'title' => 'Custom Mold Services',
                        'desc'  => 'Custom mold design and manufacturing for injection molding, die casting, and stamping applications.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2026/01/custom-mold-services.webp',
                        'url'   => '/capabilities/custom-mold-services/',
                    ],
                ];
                foreach ($capabilities as $cap) :
                ?>
                    <a href="<?php echo esc_url(home_url($cap['url'])); ?>"
                       class="group bg-card rounded-lg overflow-hidden border border-border/50 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                        <div class="aspect-[16/10] overflow-hidden">
                            <img src="<?php echo esc_url($cap['img']); ?>"
                                 alt="<?php echo esc_attr($cap['title']); ?>"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                 loading="lazy" />
                        </div>
                        <div class="p-5">
                            <h3 class="text-lg font-bold text-primary mb-2" style="font-family: var(--font-heading);">
                                <?php echo esc_html($cap['title']); ?>
                            </h3>
                            <p class="text-sm text-muted leading-relaxed">
                                <?php echo esc_html($cap['desc']); ?>
                            </p>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>

            <div class="text-center mt-10">
                <a href="<?php echo esc_url(home_url('/capabilities/cnc-machining/')); ?>" class="btn-accent gap-2">
                    Explore All Capabilities
                    <?php echo ulx_icon('arrow-right', 'w-4 h-4'); ?>
                </a>
            </div>

        </div>
    </section>

    <!-- ④ Industries We Serve -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">

            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Industries We Serve
                </h2>
                <p class="text-muted max-w-2xl mx-auto">
                    Delivering precision manufacturing solutions to the unique demands of your sector.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php
                $industries = [
                    [
                        'title' => 'Medical Devices',
                        'desc'  => 'ISO 13485 compliant precision parts for surgical instruments, implants, and diagnostic equipment.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/11/Medical-application.webp',
                        'url'   => '/industry/cnc-medical-parts/',
                    ],
                    [
                        'title' => 'Automotive & EV',
                        'desc'  => 'High-precision powertrain, chassis, and EV battery components with IATF 16949 quality standards.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/11/Automotive-application.webp',
                        'url'   => '/industry/cnc-auto-parts/',
                    ],
                    [
                        'title' => 'Electronic Components',
                        'desc'  => 'Precision machined enclosures, heat sinks, connectors, and PCB fixtures for electronics manufacturing.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/11/CNC-Electronic-Components-application.webp',
                        'url'   => '/industry/cnc-electronic-components/',
                    ],
                    [
                        'title' => 'Industrial Hardware',
                        'desc'  => 'Custom hardware, fixtures, jigs, and tooling for industrial equipment and production lines.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/11/CNC-Hardware-Parts-application.webp',
                        'url'   => '/industry/cnc-hardware-parts/',
                    ],
                    [
                        'title' => 'Robotics & Automation',
                        'desc'  => 'High-precision actuator housings, gear assemblies, and end-effector components for next-gen robotics.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/11/Robotics-applocation.webp',
                        'url'   => '/industry/robotics-automation-parts/',
                    ],
                ];
                foreach ($industries as $ind) :
                ?>
                    <a href="<?php echo esc_url(home_url($ind['url'])); ?>"
                       class="group relative aspect-[4/3] rounded-lg overflow-hidden">
                        <img src="<?php echo esc_url($ind['img']); ?>"
                             alt="<?php echo esc_attr($ind['title']); ?>"
                             class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                             loading="lazy" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-5">
                            <h3 class="text-lg font-bold text-white mb-1" style="font-family: var(--font-heading);">
                                <?php echo esc_html($ind['title']); ?>
                            </h3>
                            <p class="text-sm text-white/70 leading-relaxed">
                                <?php echo esc_html($ind['desc']); ?>
                            </p>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>

            <div class="text-center mt-10">
                <a href="<?php echo esc_url(home_url('/industry/')); ?>" class="btn-accent gap-2">
                    View All Industries
                    <?php echo ulx_icon('arrow-right', 'w-4 h-4'); ?>
                </a>
            </div>

        </div>
    </section>

    <!-- ⑤ Precision Manufacturing for Every Material -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">

            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Precision Manufacturing for Every Material
                </h2>
                <p class="text-muted max-w-2xl mx-auto">
                    From soft plastics to exotic titanium alloys, KMW CNC supports over 50 materials to give you exactly the right properties for your application.
                </p>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-5">
                <?php
                $materials = [
                    [
                        'title' => 'CNC Aluminum Parts',
                        'desc'  => '6061, 7075 and more alloys.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/11/Aluminum-Parts.webp',
                        'url'   => '/materials/cnc-aluminum-parts/',
                    ],
                    [
                        'title' => 'CNC Stainless Steel Parts',
                        'desc'  => '304, 316L, 17-4PH grades.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/11/Stainless-Steel-Parts-1.webp',
                        'url'   => '/materials/cnc-stainless-steel-parts/',
                    ],
                    [
                        'title' => 'CNC Steel & Alloy Parts',
                        'desc'  => '4140, 4340, and tool steels.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/12/Carbon-Alloy-Steel-.webp',
                        'url'   => '/materials/cnc-steel-parts/',
                    ],
                    [
                        'title' => 'Brass & Copper Parts',
                        'desc'  => 'C360, C110 and alloys.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/11/Brass-Copper-Parts.webp',
                        'url'   => '/materials/brass-copper-parts/',
                    ],
                    [
                        'title' => 'CNC Titanium Parts',
                        'desc'  => 'Ti6Al4V, grade 2 and 5.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/12/Titanium-Alloys.webp',
                        'url'   => '/materials/cnc-titanium-parts/',
                    ],
                    [
                        'title' => 'Machined Plastic Parts',
                        'desc'  => 'PEEK, Nylon, and Delrin.',
                        'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/11/Plastic-Composites.webp',
                        'url'   => '/materials/machined-plastic-parts/',
                    ],
                ];
                foreach ($materials as $idx => $mat) :
                ?>
                    <a href="<?php echo esc_url(home_url($mat['url'])); ?>"
                       class="group text-center <?php echo $idx >= 4 ? 'col-span-1 sm:col-start-auto lg:col-start-auto' : ''; ?>">
                        <div class="aspect-square rounded-lg overflow-hidden mb-3 bg-surface">
                            <img src="<?php echo esc_url($mat['img']); ?>"
                                 alt="<?php echo esc_attr($mat['title']); ?>"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                 loading="lazy" />
                        </div>
                        <h3 class="text-sm font-bold text-primary mb-1" style="font-family: var(--font-heading);">
                            <?php echo esc_html($mat['title']); ?>
                        </h3>
                        <p class="text-xs text-muted"><?php echo esc_html($mat['desc']); ?></p>
                    </a>
                <?php endforeach; ?>
            </div>

            <div class="text-center mt-10">
                <a href="<?php echo esc_url(home_url('/materials/')); ?>" class="btn-accent gap-2">
                    View Material Guide
                    <?php echo ulx_icon('arrow-right', 'w-4 h-4'); ?>
                </a>
            </div>

        </div>
    </section>

    <!-- ⑥ Why Global Engineers Trust KMW CNC -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">

            <h2 class="text-3xl lg:text-4xl font-bold text-primary text-center mb-14" style="font-family: var(--font-heading);">
                Why Global Engineers Trust KMW CNC
            </h2>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center mb-14">
                <!-- Left: Text -->
                <div>
                    <h3 class="text-2xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                        Bridging International Standards with Manufacturing Efficiency
                    </h3>
                    <p class="text-muted leading-relaxed mb-6">
                        At KMW CNC, our manufacturing standards are rooted in decades of precision engineering experience. From medical devices to automotive applications, we understand that every micron matters. With a team of 80+ skilled engineers, state-of-the-art equipment, and a commitment to continuous improvement, we are your strategic partner for precision manufacturing.
                    </p>
                    <a href="<?php echo esc_url(home_url('/about/')); ?>" class="btn-primary gap-2">
                        Learn More About Us
                        <?php echo ulx_icon('arrow-right', 'w-4 h-4'); ?>
                    </a>
                </div>
                <!-- Right: Image -->
                <div class="rounded-lg overflow-hidden">
                    <img src="http://kmwcnc.com/wp-content/uploads/2025/12/cnc-mancing.webp"
                         alt="KMW CNC precision manufacturing"
                         class="w-full h-auto object-cover"
                         loading="lazy" />
                </div>
            </div>

            <!-- 4 Feature Boxes -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6">
                <?php
                $features = [
                    ['icon' => 'zap',      'title' => 'Fast Turnaround',  'desc' => 'Parts delivered in as few as 3 business days.'],
                    ['icon' => 'truck',    'title' => 'Global Shipping',  'desc' => 'Reliable delivery to 30+ countries worldwide.'],
                    ['icon' => 'custom',   'title' => '50+ Materials',    'desc' => 'Metals, plastics, and exotic alloys in stock.'],
                    ['icon' => 'shield',   'title' => '1-on-1 Support',   'desc' => 'Dedicated project engineer for every order.'],
                ];
                foreach ($features as $feat) :
                ?>
                    <div class="bg-card rounded-lg p-6 text-center border border-border/50">
                        <div class="inline-flex items-center justify-center w-12 h-12 rounded-full mb-4" style="background-color: color-mix(in srgb, var(--color-accent) 12%, transparent);">
                            <span class="text-accent"><?php echo ulx_icon($feat['icon'], 'w-6 h-6'); ?></span>
                        </div>
                        <h3 class="text-sm font-bold text-primary mb-2" style="font-family: var(--font-heading);">
                            <?php echo esc_html($feat['title']); ?>
                        </h3>
                        <p class="text-xs text-muted"><?php echo esc_html($feat['desc']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>

    <!-- ⑦ Certified Quality You Can Count On -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">

            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Certified Quality You Can Count On
                </h2>
                <p class="text-muted max-w-2xl mx-auto">
                    We operate under strict quality management systems to ensure compliance with global standards.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-7 gap-6 items-stretch">
                <!-- ISO cert (narrower, portrait) -->
                <div class="md:col-span-2 flex items-center justify-center rounded-lg border border-border/50 bg-surface/50 p-3">
                    <img src="<?php echo esc_url('http://kmwcnc.com/wp-content/uploads/2025/12/iso-cert-724x1024.webp'); ?>"
                         alt="ISO 9001:2015 Quality Management System Certificate"
                         class="w-full h-auto object-contain"
                         loading="lazy" />
                </div>
                <!-- High-Tech Enterprise cert (wider, landscape) -->
                <div class="md:col-span-3 flex items-center justify-center rounded-lg border border-border/50 bg-surface/50 p-6">
                    <img src="<?php echo esc_url('http://kmwcnc.com/wp-content/uploads/2025/12/kmw-cert-01.webp'); ?>"
                         alt="High-Tech Enterprise Certificate"
                         class="w-full h-auto object-contain scale-110"
                         loading="lazy" />
                </div>
                <!-- Patent cert (narrower, portrait) -->
                <div class="md:col-span-2 flex items-center justify-center rounded-lg border border-border/50 bg-surface/50 p-3">
                    <img src="<?php echo esc_url('http://kmwcnc.com/wp-content/uploads/2025/12/LXTBJLW%E5%87%AF%E6%98%8E%E4%BC%9F20240221-13-%E4%B8%80%E7%A7%8D%E6%9C%BA%E6%A2%B0%E5%8A%A0%E5%B7%A5%E7%94%A8%E6%BB%91%E8%BD%A8%E7%89%B5%E5%BC%95%E8%A3%85%E7%BD%AE-%E5%AE%9E%E7%94%A8%E6%96%B0%E5%9E%8B%E4%B8%93%E5%88%A9%E8%AF%81%E4%B9%A6-724x1024.webp'); ?>"
                         alt="Utility Model Patent Certificate"
                         class="w-full h-auto object-contain"
                         loading="lazy" />
                </div>
            </div>

        </div>
    </section>

    <!-- ⑧ What Our Clients Say -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">

            <h2 class="text-3xl lg:text-4xl font-bold text-primary text-center mb-12" style="font-family: var(--font-heading);">
                What Our Clients Say
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <?php
                $testimonials = [
                    [
                        'quote'   => 'KMW\'s team was incredible. They helped us optimize our design for manufacturing, reducing cost by 30% while maintaining all critical tolerances.',
                        'name'    => 'James Wilson',
                        'role'    => 'VP of Engineering, Industrial Equipment Firm',
                    ],
                    [
                        'quote'   => 'The consistent quality combined with fast turnaround has made KMW our go-to machine shop for prototyping. Outstanding communication throughout.',
                        'name'    => 'Sarah Chen',
                        'role'    => 'Product Manager, Medical Device Co.',
                    ],
                    [
                        'quote'   => 'I\'ve been in the business for 20 years and rarely find a supplier who can match this level of precision with competitive pricing. Highly recommended.',
                        'name'    => 'Robert Meyer',
                        'role'    => 'Procurement Director, EV Startup',
                    ],
                ];
                foreach ($testimonials as $test) :
                ?>
                    <div class="bg-card rounded-lg p-6 lg:p-8 border border-border/50">
                        <!-- Stars -->
                        <div class="flex gap-1 text-accent mb-4">
                            <?php for ($i = 0; $i < 5; $i++) : ?>
                                <?php echo ulx_icon('star', 'w-4 h-4'); ?>
                            <?php endfor; ?>
                        </div>
                        <p class="text-sm text-text leading-relaxed mb-6">
                            &ldquo;<?php echo esc_html($test['quote']); ?>&rdquo;
                        </p>
                        <div>
                            <div class="text-sm font-bold text-primary"><?php echo esc_html($test['name']); ?></div>
                            <div class="text-xs text-muted"><?php echo esc_html($test['role']); ?></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>

    <!-- ⑨ FAQ -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class('max-w-4xl'); ?>">

            <h2 class="text-3xl lg:text-4xl font-bold text-primary text-center mb-12" style="font-family: var(--font-heading);">
                More Questions You May Have
            </h2>

            <div class="space-y-3" id="faq-list">
                <?php
                $faqs = [
                    ['q' => 'What materials can you process?',                         'a' => 'We machine 50+ materials including aluminum alloys (6061, 7075), stainless steel (304, 316L), titanium (Ti6Al4V), brass, copper, carbon steel, tool steel, and engineering plastics like PEEK, Delrin, and Nylon.'],
                    ['q' => 'How can I get a quote and how long does it take?',          'a' => 'Simply upload your CAD files through our quote form or email them to sales@kmwcnc.com. We typically provide a detailed quote within 24 hours for standard projects.'],
                    ['q' => 'What surface treatments can you handle?',                  'a' => 'We offer anodizing (Type II & III), powder coating, plating (nickel, chrome, zinc), passivation, bead blasting, brushing, polishing, black oxide, and more.'],
                    ['q' => 'Do you ship internationally?',                             'a' => 'Yes! We ship to 30+ countries worldwide via DHL, FedEx, UPS, and sea freight. We handle all export documentation and customs paperwork.'],
                    ['q' => 'Can you help with product design (DFM)?',                  'a' => 'Absolutely. Our engineers provide free Design for Manufacturing (DFM) analysis with every quote to optimize your design for cost, lead time, and quality.'],
                    ['q' => 'How do you ensure quality? What\'s your defect rate?',     'a' => 'We are ISO 9001:2015 certified with a defect rate below 0.1%. Every part undergoes CMM inspection, and we provide full inspection reports upon request.'],
                ];
                foreach ($faqs as $idx => $faq) :
                ?>
                    <div class="border border-border/50 rounded-lg overflow-hidden">
                        <button class="w-full flex items-center justify-between p-5 text-left text-sm font-semibold text-primary hover:bg-surface/50 transition-colors" data-action="toggle-faq" aria-expanded="false">
                            <span><?php echo esc_html($faq['q']); ?></span>
                            <?php echo ulx_icon('chevron-down', 'w-5 h-5 flex-shrink-0 transition-transform duration-200'); ?>
                        </button>
                        <div class="hidden px-5 pb-5">
                            <p class="text-sm text-muted leading-relaxed">
                                <?php echo esc_html($faq['a']); ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>

    <!-- ⑩ Latest Manufacturing Insights -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">

            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Latest Manufacturing Insights
                </h2>
                <p class="text-muted max-w-xl mx-auto">
                    Explore our latest CNC tips, processes, expert guides on materials, quality, and industry trends.
                </p>
            </div>

            <?php
            $blog_query = new WP_Query([
                'post_type'      => 'post',
                'posts_per_page' => 3,
                'post_status'    => 'publish',
                'orderby'        => 'date',
                'order'          => 'DESC',
            ]);

            if ($blog_query->have_posts()) :
            ?>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                        <a href="<?php the_permalink(); ?>" class="group bg-card rounded-lg overflow-hidden border border-border/50 hover:shadow-lg transition-all duration-300">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="aspect-[16/10] overflow-hidden">
                                    <?php the_post_thumbnail('ulx-blog-card', [
                                        'class'   => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-500',
                                        'loading' => 'lazy',
                                    ]); ?>
                                </div>
                            <?php endif; ?>
                            <div class="p-5">
                                <time class="text-xs text-muted" datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                                    <?php echo esc_html(get_the_date()); ?>
                                </time>
                                <h3 class="text-base font-bold text-primary mt-2 mb-2 line-clamp-2 group-hover:text-accent transition-colors" style="font-family: var(--font-heading);">
                                    <?php the_title(); ?>
                                </h3>
                                <p class="text-sm text-muted line-clamp-2">
                                    <?php echo esc_html(wp_trim_words(get_the_excerpt(), 18)); ?>
                                </p>
                            </div>
                        </a>
                    <?php endwhile; ?>
                </div>
                <?php wp_reset_postdata(); ?>

                <div class="text-center mt-10">
                    <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="btn-outline gap-2">
                        View All Posts
                        <?php echo ulx_icon('arrow-right', 'w-4 h-4'); ?>
                    </a>
                </div>
            <?php else : ?>
                <p class="text-center text-muted">No posts yet. Check back soon for manufacturing insights.</p>
            <?php endif; ?>

        </div>
    </section>

    <!-- ⑪ Final CTA -->
    <section class="py-16 lg:py-20 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <div class="relative rounded-xl overflow-hidden">
                <!-- Background image -->
                <img src="http://kmwcnc.com/wp-content/uploads/2025/12/cnc-mancing.webp"
                     alt="" class="absolute inset-0 w-full h-full object-cover" aria-hidden="true" />
                <div class="absolute inset-0 bg-primary/85"></div>

                <!-- Content -->
                <div class="relative z-10 px-8 py-14 lg:px-16 lg:py-20 text-center">
                    <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4" style="font-family: var(--font-heading);">
                        Ready to Turn Your CAD Files into Reality?
                    </h2>
                    <p class="text-white/75 max-w-2xl mx-auto mb-8">
                        Upload your files and get a free, no-obligation quote in as little as 24 hours. KMW CNC: your strategic partner for precision manufacturing.
                    </p>
                    <a href="<?php echo esc_url($contact_url); ?>" class="btn-accent btn-lg gap-2">
                        Get a Free Quote
                        <?php echo ulx_icon('arrow-right', 'w-5 h-5'); ?>
                    </a>
                    <p class="text-sm text-white/50 mt-5">
                        No NDA? No problem. We sign a free Non-Disclosure Agreement (NDA) for every project.
                    </p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
