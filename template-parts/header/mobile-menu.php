<?php
/**
 * Mobile Menu Overlay — KMW CNC
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

$contact_url = get_permalink(get_page_by_path('contact')) ?: home_url('/contact/');
?>

<div id="mobile-menu" class="fixed inset-0 z-[100] hidden" aria-hidden="true">
    <!-- Backdrop -->
    <div class="absolute inset-0 bg-black/50" data-action="close-mobile-menu"></div>

    <!-- Menu Panel -->
    <div class="absolute top-0 right-0 w-80 max-w-[85vw] h-full bg-card overflow-y-auto shadow-xl transform translate-x-full transition-transform duration-300" id="mobile-menu-panel">

        <!-- Close -->
        <div class="flex items-center justify-between p-4 border-b border-border">
            <span class="text-lg font-extrabold italic text-primary" style="font-family: var(--font-heading);">KMW CNC</span>
            <button class="p-2 text-muted hover:text-text" data-action="close-mobile-menu" aria-label="<?php esc_attr_e('Close menu', 'ulx'); ?>">
                <?php echo ulx_icon('close', 'w-5 h-5'); ?>
            </button>
        </div>

        <!-- Navigation -->
        <nav class="p-4">
            <ul class="space-y-0">
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="block py-3 text-base font-medium border-b border-border/50 text-text">
                        <?php esc_html_e('Home', 'ulx'); ?>
                    </a>
                </li>

                <!-- Capabilities -->
                <li class="border-b border-border/50">
                    <button class="flex items-center justify-between w-full py-3 text-base font-medium text-text" data-action="toggle-submenu">
                        <?php esc_html_e('Capabilities', 'ulx'); ?>
                        <?php echo ulx_icon('chevron-down', 'w-4 h-4 transition-transform duration-200'); ?>
                    </button>
                    <ul class="hidden pb-2 pl-4 space-y-0">
                        <?php
                        $capabilities = [
                            'capabilities/cnc-machining'                 => 'CNC Machining',
                            'capabilities/cnc-milling-parts'             => 'CNC Milling Parts',
                            'capabilities/cnc-turning-parts'             => 'CNC Turning Parts',
                            'capabilities/cnc-drilling-parts'            => 'CNC Drilling Parts',
                            'capabilities/wire-edm-services'             => 'Wire EDM Services',
                            'capabilities/5-axis-cnc-machining-services' => '5-Axis CNC Machining',
                            'capabilities/rapid-prototyping-services'    => 'Rapid Prototyping',
                            'capabilities/die-casting-services'          => 'Die Casting Services',
                            'capabilities/custom-mold-services'          => 'Custom Mold Services',
                        ];
                        foreach ($capabilities as $slug => $label) :
                        ?>
                            <li>
                                <a href="<?php echo esc_url(home_url('/' . $slug . '/')); ?>"
                                   class="block py-2 text-sm text-muted hover:text-primary transition-colors">
                                    <?php echo esc_html($label); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>

                <!-- Industry -->
                <li class="border-b border-border/50">
                    <button class="flex items-center justify-between w-full py-3 text-base font-medium text-text" data-action="toggle-submenu">
                        <?php esc_html_e('Industry', 'ulx'); ?>
                        <?php echo ulx_icon('chevron-down', 'w-4 h-4 transition-transform duration-200'); ?>
                    </button>
                    <ul class="hidden pb-2 pl-4 space-y-0">
                        <?php
                        $industries = [
                            'industry/cnc-medical-parts'              => 'Medical Devices',
                            'industry/cnc-auto-parts'                 => 'Automotive & EV',
                            'industry/cnc-hardware-parts'             => 'Industrial Hardware',
                            'industry/cnc-electronic-components'      => 'Electronic Components',
                            'industry/robotics-automation-parts'      => 'Robotics & Automation',
                        ];
                        foreach ($industries as $slug => $label) :
                        ?>
                            <li>
                                <a href="<?php echo esc_url(home_url('/' . $slug . '/')); ?>"
                                   class="block py-2 text-sm text-muted hover:text-primary transition-colors">
                                    <?php echo esc_html($label); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>

                <!-- Materials -->
                <li class="border-b border-border/50">
                    <button class="flex items-center justify-between w-full py-3 text-base font-medium text-text" data-action="toggle-submenu">
                        <?php esc_html_e('Materials', 'ulx'); ?>
                        <?php echo ulx_icon('chevron-down', 'w-4 h-4 transition-transform duration-200'); ?>
                    </button>
                    <ul class="hidden pb-2 pl-4 space-y-0">
                        <?php
                        $materials = [
                            'materials/cnc-aluminum-parts'       => 'CNC Aluminum Parts',
                            'materials/cnc-stainless-steel-parts'=> 'CNC Stainless Steel Parts',
                            'materials/cnc-steel-parts'          => 'CNC Steel Parts',
                            'materials/brass-copper-parts'       => 'Brass & Copper Parts',
                            'materials/cnc-titanium-parts'       => 'CNC Titanium Parts',
                            'materials/machined-plastic-parts'   => 'Machined Plastic Parts',
                        ];
                        foreach ($materials as $slug => $label) :
                        ?>
                            <li>
                                <a href="<?php echo esc_url(home_url('/' . $slug . '/')); ?>"
                                   class="block py-2 text-sm text-muted hover:text-primary transition-colors">
                                    <?php echo esc_html($label); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>

                <!-- About KWM -->
                <li class="border-b border-border/50">
                    <button class="flex items-center justify-between w-full py-3 text-base font-medium text-text" data-action="toggle-submenu">
                        <?php esc_html_e('About KWM', 'ulx'); ?>
                        <?php echo ulx_icon('chevron-down', 'w-4 h-4 transition-transform duration-200'); ?>
                    </button>
                    <ul class="hidden pb-2 pl-4 space-y-0">
                        <?php
                        $about_sections = [
                            'company-profile' => 'Company Profile',
                            'capabilities'    => 'Our Capabilities',
                            'equipment'       => 'Our Equipment',
                            'quality-control' => 'Quality Control',
                            'certificates'    => 'Certificates',
                            'factory-tour'    => 'Factory Tour',
                        ];
                        foreach ($about_sections as $anchor => $label) :
                        ?>
                            <li>
                                <a href="<?php echo esc_url(home_url('/about/#' . $anchor)); ?>"
                                   class="block py-2 text-sm text-muted hover:text-primary transition-colors">
                                    <?php echo esc_html($label); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>

                <li>
                    <a href="<?php echo esc_url($contact_url); ?>" class="block py-3 text-base font-medium border-b border-border/50 text-text">
                        <?php esc_html_e('Contact', 'ulx'); ?>
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="block py-3 text-base font-medium border-b border-border/50 text-text">
                        <?php esc_html_e('Blog', 'ulx'); ?>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Mobile CTA -->
        <div class="p-4 border-t border-border">
            <a href="<?php echo esc_url($contact_url); ?>"
               class="flex items-center justify-center w-full btn-accent gap-2">
                <?php esc_html_e('Instant Quote', 'ulx'); ?>
                <?php echo ulx_icon('arrow-right', 'w-4 h-4'); ?>
            </a>
        </div>
    </div>
</div>
