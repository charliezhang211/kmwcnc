<?php
/**
 * 404 Template
 *
 * @package ULX
 */

get_header();
?>

<main id="primary" class="py-16 lg:py-24">
    <div class="<?php ulx_container_class('text-center'); ?>">

        <p class="text-8xl font-bold text-border mb-4">404</p>
        <h1 class="text-2xl font-[var(--font-weight-heading)] mb-4">
            <?php esc_html_e('Page not found', 'ulx'); ?>
        </h1>
        <p class="text-muted mb-8 max-w-md mx-auto">
            <?php esc_html_e("The page you're looking for doesn't exist or has been moved.", 'ulx'); ?>
        </p>

        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-primary inline-block">
            <?php esc_html_e('Back to Home', 'ulx'); ?>
        </a>

        <?php if (class_exists('WooCommerce')) : ?>
            <div class="mt-16">
                <h2 class="text-lg font-semibold mb-6"><?php esc_html_e('Popular Products', 'ulx'); ?></h2>
                <?php
                echo do_shortcode('[products limit="4" columns="4" orderby="popularity"]');
                ?>
            </div>
        <?php endif; ?>

    </div>
</main>

<?php
get_footer();
