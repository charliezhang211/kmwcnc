<?php
/**
 * Factory Advantages Section
 *
 * 4 key B2B selling points: experience, OEM, quality, delivery.
 *
 * @package ULX
 */

$advantages = [
    [
        'icon'  => 'factory',
        'title' => __('10+ Years Factory', 'ulx'),
        'desc'  => __('Precision CNC machining since 2014. A 3,600㎡ workshop running 50+ CNC machines from 3-axis to 5-axis, backed by an in-house engineering and R&D team.', 'ulx'),
    ],
    [
        'icon'  => 'custom',
        'title' => __('Full OEM / ODM Service', 'ulx'),
        'desc'  => __('Custom parts built from your drawings or samples. We handle DFM review, prototyping, and production so your design ships to spec.', 'ulx'),
    ],
    [
        'icon'  => 'shield',
        'title' => __('Strict Quality Control', 'ulx'),
        'desc'  => __('Every part is inspected against your drawing — tolerances down to ±0.005mm — before shipment. ISO 9001 certified processes.', 'ulx'),
    ],
    [
        'icon'  => 'truck',
        'title' => __('Fast & Reliable Delivery', 'ulx'),
        'desc'  => __('Lead times from 3 days on rapid prototypes, with order updates at every stage. Experienced in global shipping to 30+ countries.', 'ulx'),
    ],
];
?>

<section class="py-16 lg:py-24" style="background-color: var(--color-surface);">
    <div class="<?php ulx_container_class(); ?>">

        <!-- Heading -->
        <div class="text-center mb-12">
            <p class="text-sm font-semibold uppercase tracking-widest mb-2" style="color: var(--color-accent);">
                <?php esc_html_e('Why Choose KMW CNC', 'ulx'); ?>
            </p>
            <h2 class="text-3xl lg:text-4xl font-bold" style="color: var(--color-primary);">
                <?php esc_html_e('Your Factory Partner, Not Just a Supplier', 'ulx'); ?>
            </h2>
        </div>

        <!-- Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
            <?php foreach ($advantages as $item) : ?>
            <div class="p-6 rounded-lg border group hover:-translate-y-1 transition-transform duration-300"
                 style="border-color: var(--color-border); background-color: var(--color-card);">
                <!-- Icon -->
                <div class="w-12 h-12 rounded-lg flex items-center justify-center mb-4"
                     style="background-color: color-mix(in srgb, var(--color-primary) 8%, transparent); color: var(--color-primary);">
                    <?php echo ulx_icon($item['icon'], 'w-6 h-6'); ?>
                </div>
                <h3 class="text-lg font-bold mb-2" style="color: var(--color-primary);">
                    <?php echo esc_html($item['title']); ?>
                </h3>
                <p class="text-sm leading-relaxed" style="color: var(--color-muted);">
                    <?php echo esc_html($item['desc']); ?>
                </p>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
