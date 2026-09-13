<?php
/**
 * One-time SEO data seeder
 *
 * Run via: WP Admin → Tools → SEO Seed (or visit ?ulx_seo_seed=1 as admin)
 * Sets SEO title & description for all KMW CNC pages.
 * Safe to run multiple times — only fills empty fields.
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

/**
 * Register admin menu item
 */
function ulx_seo_seed_menu() {
    add_management_page(
        'SEO Seed',
        'SEO Seed',
        'manage_options',
        'ulx-seo-seed',
        'ulx_seo_seed_page'
    );
}
add_action('admin_menu', 'ulx_seo_seed_menu');

/**
 * Admin page output
 */
function ulx_seo_seed_page() {
    if (!current_user_can('manage_options')) {
        return;
    }

    $results = [];
    $ran     = false;

    if (isset($_POST['ulx_run_seed']) && wp_verify_nonce($_POST['_wpnonce'], 'ulx_seo_seed')) {
        $overwrite = !empty($_POST['ulx_overwrite']);
        $results   = ulx_seo_seed_run($overwrite);
        $ran       = true;
    }

    ?>
    <div class="wrap">
        <h1>SEO Data Seeder — KMW CNC</h1>
        <p>Populate SEO title &amp; meta description for all pages based on KMW CNC content.</p>

        <form method="post">
            <?php wp_nonce_field('ulx_seo_seed'); ?>
            <p>
                <label>
                    <input type="checkbox" name="ulx_overwrite" value="1" />
                    Overwrite existing SEO data (leave unchecked to only fill empty fields)
                </label>
            </p>
            <p>
                <button type="submit" name="ulx_run_seed" value="1" class="button button-primary">
                    Run SEO Seed
                </button>
            </p>
        </form>

        <?php if ($ran) : ?>
            <h2>Results</h2>
            <table class="widefat striped" style="max-width:1000px">
                <thead>
                    <tr>
                        <th>Page</th>
                        <th>Slug</th>
                        <th>SEO Title</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($results as $r) : ?>
                        <tr>
                            <td><?php echo esc_html($r['title']); ?></td>
                            <td><code><?php echo esc_html($r['slug']); ?></code></td>
                            <td><?php echo esc_html($r['seo_title']); ?></td>
                            <td><?php echo esc_html($r['status']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <p><strong>Done!</strong> Updated <?php echo count(array_filter($results, fn($r) => $r['status'] === 'Updated')); ?> pages.</p>
        <?php endif; ?>
    </div>
    <?php
}

/**
 * Run the seed — returns array of results
 */
function ulx_seo_seed_run($overwrite = false) {
    $seo_data = ulx_seo_seed_data();
    $results  = [];

    foreach ($seo_data as $slug => $data) {
        $page = get_page_by_path($slug);

        if (!$page) {
            $results[] = [
                'title'     => $data['seo_title'],
                'slug'      => $slug,
                'seo_title' => $data['seo_title'],
                'status'    => 'Page not found',
            ];
            continue;
        }

        $existing_title = get_post_meta($page->ID, '_ulx_seo_title', true);
        $existing_desc  = get_post_meta($page->ID, '_ulx_seo_description', true);

        if (!$overwrite && $existing_title && $existing_desc) {
            $results[] = [
                'title'     => $page->post_title,
                'slug'      => $slug,
                'seo_title' => $existing_title,
                'status'    => 'Skipped (has data)',
            ];
            continue;
        }

        if ($overwrite || !$existing_title) {
            update_post_meta($page->ID, '_ulx_seo_title', sanitize_text_field($data['seo_title']));
        }
        if ($overwrite || !$existing_desc) {
            update_post_meta($page->ID, '_ulx_seo_description', sanitize_textarea_field($data['seo_description']));
        }

        $results[] = [
            'title'     => $page->post_title,
            'slug'      => $slug,
            'seo_title' => $data['seo_title'],
            'status'    => 'Updated',
        ];
    }

    return $results;
}

/**
 * SEO data for all KMW CNC pages
 *
 * Guidelines:
 * - Title: 50-60 chars, primary keyword + brand
 * - Description: 120-160 chars, value prop + CTA trigger
 */
function ulx_seo_seed_data() {
    return [

        /* ── Core Pages ────────────────────────────────────── */

        'home' => [
            'seo_title'       => 'Precision CNC Machining Services China | KMW CNC',
            'seo_description' => 'KMW CNC delivers precision CNC machining with ±0.005mm tolerances. ISO 9001 certified manufacturer for rapid prototyping and low-volume production. Get a free quote.',
        ],

        'about' => [
            'seo_title'       => 'About KMW CNC — Your Manufacturing Partner in China',
            'seo_description' => 'Learn about Kaimingwei (KMW CNC) — ISO 9001 certified CNC machining manufacturer in Shenzhen. 50+ CNC machines, serving 30+ countries with precision parts.',
        ],

        'contact' => [
            'seo_title'       => 'Contact Us & Request a Quote | KMW CNC',
            'seo_description' => 'Contact KMW CNC for precision CNC machining quotes. Upload your CAD files for a free quote within 24 hours. Shenzhen & Hong Kong offices.',
        ],

        'blog' => [
            'seo_title'       => 'CNC Machining Blog — Manufacturing Insights | KMW CNC',
            'seo_description' => 'Expert insights on CNC machining, materials, surface finishes, and manufacturing best practices from KMW CNC engineers.',
        ],

        'privacy-policy' => [
            'seo_title'       => 'Privacy Policy | KMW CNC',
            'seo_description' => 'KMW CNC privacy policy. Learn how we collect, use, and protect your personal information when using our website and services.',
        ],

        'terms-of-service' => [
            'seo_title'       => 'Terms of Service | KMW CNC',
            'seo_description' => 'Terms of service for KMW CNC website and CNC machining services. Read our terms and conditions before placing an order.',
        ],

        'thank-you' => [
            'seo_title'       => 'Thank You — Inquiry Received | KMW CNC',
            'seo_description' => 'Thank you for contacting KMW CNC. Your inquiry has been received and our team will respond within 24 hours.',
        ],

        /* ── Capabilities Pages ────────────────────────────── */

        'capabilities' => [
            'seo_title'       => 'CNC Machining Capabilities & Services | KMW CNC',
            'seo_description' => 'Explore KMW CNC\'s full manufacturing capabilities: CNC milling, turning, 5-axis machining, wire EDM, die casting, and rapid prototyping. One-stop solution.',
        ],

        'capabilities/cnc-machining' => [
            'seo_title'       => 'Custom CNC Machining Parts Manufacturer | KMW CNC',
            'seo_description' => 'ISO 9001 certified CNC machining services. Precision milling, turning, and EDM with ±0.005mm tolerances. Prototype to production. Request a free quote.',
        ],

        'capabilities/cnc-milling-parts' => [
            'seo_title'       => 'CNC Milling Services — Precision Milled Parts | KMW CNC',
            'seo_description' => 'Custom CNC milling services with 3, 4, and 5-axis capabilities. Complex geometries, ±0.005mm tolerances. Aluminum, steel, titanium, and plastics.',
        ],

        'capabilities/cnc-turning-parts' => [
            'seo_title'       => 'CNC Turning Services — Precision Turned Parts | KMW CNC',
            'seo_description' => 'Precision CNC turning services for shafts, bushings, and cylindrical components. Multi-axis lathes with live tooling and Swiss-type turning centers.',
        ],

        'capabilities/cnc-drilling-parts' => [
            'seo_title'       => 'CNC Drilling & Tapping Services China | KMW CNC',
            'seo_description' => 'Professional CNC drilling and tapping services. Deep hole drilling, reaming, and multi-spindle operations with ±0.01mm tolerances. Fast turnaround.',
        ],

        'capabilities/5-axis-cnc-machining-services' => [
            'seo_title'       => '5-Axis CNC Machining Services China | KMW CNC',
            'seo_description' => 'Premium 5-axis CNC machining for complex geometries in a single setup. Simultaneous 5-axis and 3+2 positional machining with ±0.005mm precision.',
        ],

        'capabilities/wire-edm-services' => [
            'seo_title'       => 'Wire EDM Services — Precision EDM Machining | KMW CNC',
            'seo_description' => 'Precision wire EDM services for hardened tool steel and conductive materials. Sodick & Makino machines, ±0.003mm tolerances. Request a quote today.',
        ],

        'capabilities/rapid-prototyping-services' => [
            'seo_title'       => 'Rapid Prototyping Services China | KMW CNC',
            'seo_description' => 'Fast CNC rapid prototyping with 1-3 day turnaround. Production-grade materials, CNC machining, 3D printing, and vacuum casting. CAD to part.',
        ],

        'capabilities/die-casting-services' => [
            'seo_title'       => 'Aluminum & Zinc Die Casting Services | KMW CNC',
            'seo_description' => 'Custom die casting services for aluminum and zinc alloys. High-pressure casting up to 2000 tons. Mold design to post-machining, all in-house.',
        ],

        'capabilities/custom-mold-services' => [
            'seo_title'       => 'Custom Mold Making Services China | KMW CNC',
            'seo_description' => 'Precision custom mold services: injection molds, die casting molds, and tooling. From mold prototyping to full-scale production tooling.',
        ],

        /* ── Materials Pages ───────────────────────────────── */

        'materials' => [
            'seo_title'       => 'CNC Machining Materials Guide — 50+ Options | KMW CNC',
            'seo_description' => 'Explore 50+ engineering-grade metals and plastics for CNC machining. Full material certification (MTR) included. Aluminum, steel, titanium, and more.',
        ],

        'materials/cnc-aluminum-parts' => [
            'seo_title'       => 'CNC Aluminum Parts — 6061, 7075 & More | KMW CNC',
            'seo_description' => 'Custom CNC aluminum parts from 6061 to 7075. Lightweight, corrosion-resistant, anodized finishes available. Fast turnaround and competitive pricing.',
        ],

        'materials/cnc-stainless-steel-parts' => [
            'seo_title'       => 'CNC Stainless Steel Parts — 303, 304 & 316L | KMW CNC',
            'seo_description' => 'Precision CNC stainless steel machining: 303, 304, 316L grades. Passivation and electropolishing for corrosion-critical applications. ISO certified.',
        ],

        'materials/cnc-steel-parts' => [
            'seo_title'       => 'CNC Steel & Alloy Parts Manufacturer | KMW CNC',
            'seo_description' => 'Custom CNC steel parts from 1018 low-carbon to D2 tool steel. Heat treatment and protective finishing available. Full material traceability.',
        ],

        'materials/brass-copper-parts' => [
            'seo_title'       => 'CNC Brass & Copper Machining Services | KMW CNC',
            'seo_description' => 'Precision CNC machining for brass C360, copper C11000, and bronze alloys. Excellent conductivity and antimicrobial properties. Get a free quote.',
        ],

        'materials/cnc-titanium-parts' => [
            'seo_title'       => 'CNC Titanium Machining — Grade 2 & Ti-6Al-4V | KMW CNC',
            'seo_description' => 'Precision CNC titanium parts for medical and high-performance applications. Grade 2, Grade 5 (Ti-6Al-4V), and ELI. Full material traceability certified.',
        ],

        'materials/machined-plastic-parts' => [
            'seo_title'       => 'CNC Plastic Machining — PEEK, Delrin & Nylon | KMW CNC',
            'seo_description' => 'Precision CNC machining for engineering plastics: PEEK, Delrin, nylon, polycarbonate. Tight tolerances, no tooling needed, FDA compliance options.',
        ],

        /* ── Industry Pages ────────────────────────────────── */

        'industry' => [
            'seo_title'       => 'Industries Served — Precision CNC Solutions | KMW CNC',
            'seo_description' => 'KMW CNC serves medical, automotive, electronics, robotics, and hardware industries. ISO 9001 certified precision manufacturing.',
        ],

        'industry/cnc-medical-parts' => [
            'seo_title'       => 'CNC Medical Device Parts — ISO 13485 | KMW CNC',
            'seo_description' => 'Precision CNC machining for medical devices. ISO 13485 certified. Surgical instruments, implants, and diagnostic equipment in biocompatible materials.',
        ],

        'industry/cnc-auto-parts' => [
            'seo_title'       => 'CNC Automotive Parts Manufacturer China | KMW CNC',
            'seo_description' => 'Precision CNC automotive parts for EV and ICE vehicles. IATF 16949 compliant. Rapid prototyping to high-volume production for OEM manufacturers.',
        ],

        'industry/cnc-hardware-parts' => [
            'seo_title'       => 'Custom CNC Hardware & Industrial Components | KMW CNC',
            'seo_description' => 'Custom CNC hardware parts: fasteners, brackets, fittings, and knobs. Steel, brass, and plastic options. Durable, precise, and cost-effective.',
        ],

        'industry/cnc-electronic-components' => [
            'seo_title'       => 'CNC Machined Electronic Components | KMW CNC',
            'seo_description' => 'Precision CNC parts for electronics: heat sinks, enclosures, and connectors. Aluminum and copper with thermal conductivity and EMI shielding.',
        ],

        'industry/robotics-automation-parts' => [
            'seo_title'       => 'CNC Parts for Robotics & Automation | KMW CNC',
            'seo_description' => 'Custom CNC parts for robotics and automation: gears, robot arm casings, end-effectors. Heat treatment and assembly services available.',
        ],
    ];
}
