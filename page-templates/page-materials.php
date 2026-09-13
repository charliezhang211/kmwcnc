<?php
/**
 * Template Name: Materials
 *
 * KMW CNC — Materials overview page.
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

get_header();
?>

<main id="primary">

    <!-- ① Hero Banner -->
    <section class="relative py-14 lg:py-20 text-white overflow-hidden">
        <img src="http://kmwcnc.com/wp-content/uploads/2025/12/2Material-Navigation-Grid.webp"
             alt="" class="absolute inset-0 w-full h-full object-cover" aria-hidden="true" />
        <div class="absolute inset-0 bg-primary/80"></div>
        <div class="<?php ulx_container_class('relative z-10'); ?>">
            <?php ulx_breadcrumb(true); ?>
            <h1 class="text-4xl lg:text-5xl font-bold text-center mb-4" style="font-family: var(--font-heading);">
                CNC Machining Materials Guide
            </h1>
            <p class="text-center text-white/80 max-w-3xl mx-auto mb-8">
                Over 50+ engineering-grade metals and plastics in stock. From standard Aluminum 6061 to exotic Superalloys. We provide full material certification (MTR) with every order.
            </p>
            <div class="text-center">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent">
                    Request a General Quote
                </a>
            </div>
        </div>
    </section>

    <!-- ② Explore Our CNC Material Options -->
    <section class="py-16 lg:py-24 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-primary mb-4" style="font-family: var(--font-heading);">
                    Explore Our CNC Material Options
                </h2>
                <p class="text-muted max-w-3xl mx-auto">
                    A comprehensive selection of over 50+ metals and plastics to meet your specific mechanical and aesthetic requirements.
                </p>
            </div>

            <?php
            $materials = [
                [
                    'title' => 'CNC Aluminum Parts',
                    'desc'  => 'Lightweight & versatile. Ideal for electronics and auto parts.',
                    'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/11/Aluminum-Parts.webp',
                    'link'  => '/materials/cnc-aluminum-parts/',
                ],
                [
                    'title' => 'CNC Stainless Steel Parts',
                    'desc'  => 'High corrosion resistance for medical & food industries.',
                    'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/11/Stainless-Steel-Parts-1.webp',
                    'link'  => '/materials/cnc-stainless-steel-parts/',
                ],
                [
                    'title' => 'CNC Steel & Alloy Parts',
                    'desc'  => 'High strength & durability. Ideal for heavy-duty industrial applications.',
                    'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/12/Carbon-Alloy-Steel-.webp',
                    'link'  => '/materials/cnc-steel-parts/',
                ],
                [
                    'title' => 'Brass & Copper Parts',
                    'desc'  => 'Excellent conductivity for electrical components.',
                    'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/11/Brass-Copper-Parts.webp',
                    'link'  => '/materials/brass-copper-parts/',
                ],
                [
                    'title' => 'CNC Titanium Parts',
                    'desc'  => 'PEEK, Nylon, and Delrin for insulators and prototypes.',
                    'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/12/Titanium-Alloys.webp',
                    'link'  => '/materials/cnc-titanium-parts/',
                ],
                [
                    'title' => 'Machined Plastic Parts',
                    'desc'  => 'PEEK, Nylon, and Delrin for insulators and prototypes.',
                    'img'   => 'http://kmwcnc.com/wp-content/uploads/2025/11/Plastic-Composites.webp',
                    'link'  => '/materials/machined-plastic-parts/',
                ],
            ];
            ?>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php foreach ($materials as $mat) : ?>
                    <a href="<?php echo esc_url(home_url($mat['link'])); ?>" class="group bg-surface rounded-lg overflow-hidden border border-border/50 hover:shadow-lg transition-shadow">
                        <div class="aspect-[4/3] overflow-hidden">
                            <img src="<?php echo esc_url($mat['img']); ?>" alt="<?php echo esc_attr($mat['title']); ?>"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" />
                        </div>
                        <div class="p-5 text-center">
                            <h3 class="font-bold text-primary mb-2" style="font-family: var(--font-heading);">
                                <?php echo esc_html($mat['title']); ?>
                            </h3>
                            <p class="text-sm text-muted leading-relaxed"><?php echo esc_html($mat['desc']); ?></p>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ③ Why KMW Materials? -->
    <section class="py-16 lg:py-24 bg-surface">
        <div class="<?php ulx_container_class(); ?>">
            <h2 class="text-3xl lg:text-4xl font-bold text-primary text-center mb-12" style="font-family: var(--font-heading);">
                Why KMW Materials?
            </h2>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                <?php
                $reasons = [
                    ['icon' => 'file-text',  'title' => 'Material Certs (MTR)',    'desc' => 'Standard with every shipment'],
                    ['icon' => 'check',      'title' => 'OES Analysis',            'desc' => 'Spectrometer verification'],
                    ['icon' => 'shield',     'title' => 'RoHS/REACH Compliant',    'desc' => 'Eco-friendly materials'],
                    ['icon' => 'package',    'title' => 'Wide Stock',              'desc' => 'No waiting for raw material'],
                ];
                foreach ($reasons as $r) : ?>
                    <div class="text-center">
                        <div class="w-16 h-16 rounded-2xl bg-primary text-white flex items-center justify-center mx-auto mb-5">
                            <?php echo ulx_icon($r['icon'], 'w-7 h-7'); ?>
                        </div>
                        <h3 class="font-bold text-primary mb-1" style="font-family: var(--font-heading);">
                            <?php echo esc_html($r['title']); ?>
                        </h3>
                        <p class="text-sm text-muted"><?php echo esc_html($r['desc']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ④ CTA -->
    <section class="py-16 lg:py-20 bg-card">
        <div class="<?php ulx_container_class(); ?>">
            <div class="relative rounded-xl overflow-hidden">
                <img src="https://kmwcnc.com/wp-content/uploads/2025/12/cnc-mancing.webp"
                     alt="" class="absolute inset-0 w-full h-full object-cover" aria-hidden="true" />
                <div class="absolute inset-0 bg-primary/85"></div>
                <div class="relative z-10 px-8 py-14 lg:px-16 lg:py-20 text-center">
                    <h2 class="text-2xl lg:text-3xl font-bold text-white mb-4" style="font-family: var(--font-heading);">
                        Can't Find Your Material?
                    </h2>
                    <p class="text-white/70 max-w-2xl mx-auto mb-8">
                        Contact Material Expert
                    </p>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-accent">
                        Get a Recommendation & Quote
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
