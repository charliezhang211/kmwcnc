<?php
/**
 * Header Navigation — KMW CNC B2B
 *
 * Dark blue header with logo, mega-menu navigation, and CTA.
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

$contact_url = get_permalink(get_page_by_path('contact')) ?: home_url('/contact/');
?>

<!-- Main Header -->
<header id="masthead" class="sticky top-0 z-50 w-full bg-primary border-b border-white/10">

    <div class="<?php ulx_container_class('flex items-center justify-between h-16 lg:h-[72px]'); ?>">

        <!-- Logo -->
        <div class="flex-shrink-0">
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-2">
                    <span class="text-2xl font-extrabold italic text-white tracking-tight" style="font-family: var(--font-heading);">KMW CNC</span>
                </a>
            <?php endif; ?>
        </div>

        <!-- Primary Navigation -->
        <nav class="hidden lg:flex items-center gap-1" aria-label="<?php esc_attr_e('Primary Navigation', 'ulx'); ?>">

            <!-- Home -->
            <a href="<?php echo esc_url(home_url('/')); ?>"
               class="px-4 py-2 text-sm font-medium text-white/80 hover:text-white transition-colors <?php echo is_front_page() ? '!text-white' : ''; ?>">
                <?php esc_html_e('Home', 'ulx'); ?>
            </a>

            <!-- Capabilities (Dropdown) -->
            <div class="relative group" data-dropdown>
                <a href="<?php echo esc_url(home_url('/capabilities/')); ?>"
                   class="flex items-center gap-1 px-4 py-2 text-sm font-medium text-white/80 hover:text-white transition-colors">
                    <?php esc_html_e('Capabilities', 'ulx'); ?>
                    <?php echo ulx_icon('chevron-down', 'w-3 h-3'); ?>
                </a>
                <div class="absolute top-full left-0 pt-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                    <div class="bg-card rounded shadow-xl border border-border/50 py-2 min-w-[240px]">
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
                            <a href="<?php echo esc_url(home_url('/' . $slug . '/')); ?>"
                               class="block px-4 py-2 text-sm text-text hover:bg-surface hover:text-primary transition-colors">
                                <?php echo esc_html($label); ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- Industry (Dropdown) -->
            <div class="relative group" data-dropdown>
                <a href="<?php echo esc_url(home_url('/industry/')); ?>"
                   class="flex items-center gap-1 px-4 py-2 text-sm font-medium text-white/80 hover:text-white transition-colors">
                    <?php esc_html_e('Industry', 'ulx'); ?>
                    <?php echo ulx_icon('chevron-down', 'w-3 h-3'); ?>
                </a>
                <div class="absolute top-full left-0 pt-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                    <div class="bg-card rounded shadow-xl border border-border/50 py-2 min-w-[260px]">
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
                            <a href="<?php echo esc_url(home_url('/' . $slug . '/')); ?>"
                               class="block px-4 py-2 text-sm text-text hover:bg-surface hover:text-primary transition-colors">
                                <?php echo esc_html($label); ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- Materials (Dropdown) -->
            <div class="relative group" data-dropdown>
                <a href="<?php echo esc_url(home_url('/materials/')); ?>"
                   class="flex items-center gap-1 px-4 py-2 text-sm font-medium text-white/80 hover:text-white transition-colors">
                    <?php esc_html_e('Materials', 'ulx'); ?>
                    <?php echo ulx_icon('chevron-down', 'w-3 h-3'); ?>
                </a>
                <div class="absolute top-full left-0 pt-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                    <div class="bg-card rounded shadow-xl border border-border/50 py-2 min-w-[240px]">
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
                            <a href="<?php echo esc_url(home_url('/' . $slug . '/')); ?>"
                               class="block px-4 py-2 text-sm text-text hover:bg-surface hover:text-primary transition-colors">
                                <?php echo esc_html($label); ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- About KWM (Dropdown) -->
            <div class="relative group" data-dropdown>
                <a href="<?php echo esc_url(home_url('/about/')); ?>"
                   class="flex items-center gap-1 px-4 py-2 text-sm font-medium text-white/80 hover:text-white transition-colors">
                    <?php esc_html_e('About KWM', 'ulx'); ?>
                    <?php echo ulx_icon('chevron-down', 'w-3 h-3'); ?>
                </a>
                <div class="absolute top-full left-0 pt-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                    <div class="bg-card rounded shadow-xl border border-border/50 py-2 min-w-[220px]">
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
                            <a href="<?php echo esc_url(home_url('/about/#' . $anchor)); ?>"
                               class="block px-4 py-2 text-sm text-text hover:bg-surface hover:text-primary transition-colors">
                                <?php echo esc_html($label); ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- Contact -->
            <a href="<?php echo esc_url($contact_url); ?>"
               class="px-4 py-2 text-sm font-medium text-white/80 hover:text-white transition-colors">
                <?php esc_html_e('Contact', 'ulx'); ?>
            </a>

            <!-- Blog -->
            <a href="<?php echo esc_url(home_url('/blog/')); ?>"
               class="px-4 py-2 text-sm font-medium text-white/80 hover:text-white transition-colors">
                <?php esc_html_e('Blog', 'ulx'); ?>
            </a>

        </nav>

        <!-- Header Actions -->
        <div class="flex items-center gap-3">

            <!-- Get Quote CTA Button -->
            <a href="<?php echo esc_url($contact_url); ?>"
               class="hidden lg:inline-flex btn-accent btn-sm gap-2">
                <?php esc_html_e('Instant Quote', 'ulx'); ?>
                <?php echo ulx_icon('arrow-right', 'w-4 h-4'); ?>
            </a>

            <!-- Mobile Menu Toggle -->
            <button class="lg:hidden p-2 text-white" aria-label="<?php esc_attr_e('Menu', 'ulx'); ?>" data-action="toggle-mobile-menu">
                <?php echo ulx_icon('menu', 'w-6 h-6'); ?>
            </button>
        </div>

    </div>

</header>
