<?php
/**
 * Footer — KMW CNC B2B
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

$contact_url = get_permalink(get_page_by_path('contact')) ?: home_url('/contact/');
?>

<footer class="text-neutral-300 mt-auto" style="background-color: var(--color-primary);">

    <!-- Footer Main -->
    <div class="<?php ulx_container_class('py-12 lg:py-16'); ?>">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">

            <!-- Brand Column -->
            <div class="lg:col-span-1">
                <?php if (has_custom_logo()) : ?>
                    <div class="mb-4"><?php the_custom_logo(); ?></div>
                <?php else : ?>
                    <div class="text-2xl font-extrabold italic text-white tracking-tight mb-4" style="font-family: var(--font-heading);">
                        KMW CNC
                    </div>
                <?php endif; ?>
                <p class="text-sm text-neutral-400 leading-relaxed mb-6">
                    Bridging global engineering standards with intelligent Chinese manufacturing. ISO 9001:2015 Certified.
                </p>
                <!-- Social Icons -->
                <div class="flex items-center gap-4">
                    <a href="#" class="text-neutral-400 hover:text-white transition-colors" aria-label="Facebook">
                        <?php echo ulx_icon('facebook', 'w-5 h-5'); ?>
                    </a>
                    <a href="#" class="text-neutral-400 hover:text-white transition-colors" aria-label="Instagram">
                        <?php echo ulx_icon('instagram', 'w-5 h-5'); ?>
                    </a>
                    <a href="#" class="text-neutral-400 hover:text-white transition-colors" aria-label="TikTok">
                        <?php echo ulx_icon('tiktok', 'w-5 h-5'); ?>
                    </a>
                    <a href="#" class="text-neutral-400 hover:text-white transition-colors" aria-label="YouTube">
                        <?php echo ulx_icon('youtube', 'w-5 h-5'); ?>
                    </a>
                </div>
            </div>

            <!-- Manufacturing Services -->
            <div>
                <h4 class="text-sm font-semibold uppercase tracking-wider text-white mb-4" style="font-family: var(--font-heading);">
                    Manufacturing Services
                </h4>
                <ul class="space-y-2.5 text-sm text-neutral-400">
                    <li><a href="<?php echo esc_url(home_url('/capabilities/cnc-milling-parts/')); ?>" class="hover:text-white transition-colors">CNC Milling Parts</a></li>
                    <li><a href="<?php echo esc_url(home_url('/capabilities/cnc-turning-parts/')); ?>" class="hover:text-white transition-colors">CNC Turning Parts</a></li>
                    <li><a href="<?php echo esc_url(home_url('/capabilities/cnc-drilling-parts/')); ?>" class="hover:text-white transition-colors">CNC Drilling Parts</a></li>
                    <li><a href="<?php echo esc_url(home_url('/capabilities/die-casting-services/')); ?>" class="hover:text-white transition-colors">Die Casting Service</a></li>
                    <li><a href="<?php echo esc_url(home_url('/capabilities/rapid-prototyping-services/')); ?>" class="hover:text-white transition-colors">Rapid Prototyping</a></li>
                    <li><a href="<?php echo esc_url(home_url('/capabilities/custom-mold-services/')); ?>" class="hover:text-white transition-colors">Surface Finishing</a></li>
                </ul>
            </div>

            <!-- Industry Solutions -->
            <div>
                <h4 class="text-sm font-semibold uppercase tracking-wider text-white mb-4" style="font-family: var(--font-heading);">
                    Industry Solutions
                </h4>
                <ul class="space-y-2.5 text-sm text-neutral-400">
                    <li><a href="<?php echo esc_url(home_url('/industry/cnc-medical-parts/')); ?>" class="hover:text-white transition-colors">Medical Devices</a></li>
                    <li><a href="<?php echo esc_url(home_url('/industry/cnc-auto-parts/')); ?>" class="hover:text-white transition-colors">Automotive &amp; EV</a></li>
                    <li><a href="<?php echo esc_url(home_url('/industry/cnc-electronic-components/')); ?>" class="hover:text-white transition-colors">Electronic Components</a></li>
                    <li><a href="<?php echo esc_url(home_url('/industry/robotics-automation-parts/')); ?>" class="hover:text-white transition-colors">Robotics &amp; Automation</a></li>
                    <li><a href="<?php echo esc_url(home_url('/industry/cnc-hardware-parts/')); ?>" class="hover:text-white transition-colors">Industrial Hardware</a></li>
                </ul>
            </div>

            <!-- Resources & Company -->
            <div>
                <h4 class="text-sm font-semibold uppercase tracking-wider text-white mb-4" style="font-family: var(--font-heading);">
                    Resources &amp; Company
                </h4>
                <ul class="space-y-2.5 text-sm text-neutral-400">
                    <li><a href="<?php echo esc_url(home_url('/about/')); ?>" class="hover:text-white transition-colors">About KMW CNC</a></li>
                    <li><a href="<?php echo esc_url(home_url('/materials/')); ?>" class="hover:text-white transition-colors">Material Selection Guide</a></li>
                    <li><a href="<?php echo esc_url(home_url('/about/#quality-control')); ?>" class="hover:text-white transition-colors">Quality Control</a></li>
                    <li><a href="<?php echo esc_url(home_url('/blog/')); ?>" class="hover:text-white transition-colors">Blog / Insights</a></li>
                    <li><a href="<?php echo esc_url($contact_url); ?>" class="hover:text-white transition-colors">Contact Us</a></li>
                    <?php $privacy_page = get_page_by_path('privacy'); ?>
                    <?php if ($privacy_page) : ?>
                        <li><a href="<?php echo esc_url(get_permalink($privacy_page)); ?>" class="hover:text-white transition-colors">Privacy Policy</a></li>
                    <?php else : ?>
                        <li><a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>" class="hover:text-white transition-colors">Privacy Policy</a></li>
                    <?php endif; ?>
                </ul>
            </div>

        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="border-t border-white/10">
        <div class="<?php ulx_container_class('py-5 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-neutral-500'); ?>">
            <p>
                &copy; <?php echo esc_html(gmdate('Y')); ?>
                Shenzhen Kaimingwei Technology Co., Limited. All Rights Reserved.
            </p>
        </div>
    </div>

</footer>
