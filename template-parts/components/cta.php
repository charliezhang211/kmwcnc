<?php
/**
 * CTA (Call to Action) Section
 *
 * @package ULX
 */
?>

<section class="bg-primary text-surface">
    <div class="<?php ulx_container_class('py-12 lg:py-16 text-center'); ?>">
        <h2 class="text-2xl lg:text-3xl font-[var(--font-weight-heading)] mb-4">
            <?php esc_html_e('Join Our Community', 'ulx'); ?>
        </h2>
        <p class="text-surface/70 max-w-xl mx-auto mb-8">
            <?php esc_html_e('Subscribe to get special offers, free giveaways, and once-in-a-lifetime deals.', 'ulx'); ?>
        </p>
        <div class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto">
            <input
                type="email"
                placeholder="<?php esc_attr_e('Enter your email', 'ulx'); ?>"
                class="flex-1 h-12 px-4 bg-card/10 border border-white/20 rounded-[var(--btn-radius)] text-sm text-white placeholder:text-white/50 focus:outline-none focus:border-white/50"
            />
            <button class="h-12 px-6 bg-surface text-primary text-sm font-[var(--btn-weight)] uppercase tracking-wider rounded-[var(--btn-radius)] hover:bg-surface/90 transition-colors">
                <?php esc_html_e('Subscribe', 'ulx'); ?>
            </button>
        </div>
    </div>
</section>
