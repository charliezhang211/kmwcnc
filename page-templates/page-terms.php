<?php
/**
 * Template Name: Terms of Service
 *
 * KMW CNC — Terms of Service
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

get_header();
?>

<main id="primary">

    <!-- Page Hero -->
    <section class="relative py-14 lg:py-20 text-white overflow-hidden">
        <img src="http://kmwcnc.com/wp-content/uploads/2025/11/capabilities-banner.webp"
             alt="" class="absolute inset-0 w-full h-full object-cover" aria-hidden="true" />
        <div class="absolute inset-0 bg-primary/80"></div>
        <div class="<?php ulx_container_class('relative z-10'); ?>">
            <?php ulx_breadcrumb(true); ?>
            <p class="text-sm font-semibold uppercase tracking-widest mb-3" style="color: var(--color-accent);">
                <?php esc_html_e('Legal', 'ulx'); ?>
            </p>
            <h1 class="text-4xl lg:text-5xl font-bold leading-tight" style="font-family: var(--font-heading);">
                <?php esc_html_e('Terms of Service', 'ulx'); ?>
            </h1>
            <p class="mt-3 text-sm" style="color: rgba(255,255,255,0.6);">
                <?php printf( esc_html__( 'Last updated: %s', 'ulx' ), esc_html( '2026-03-28' ) ); ?>
            </p>
        </div>
    </section>

    <!-- Content -->
    <section class="py-14 lg:py-20">
        <div class="<?php ulx_container_class(); ?>">
            <div class="max-w-3xl mx-auto">

                <div class="prose prose-neutral max-w-none">

                    <h2 style="color: var(--color-primary);"><?php esc_html_e('1. Acceptance of Terms', 'ulx'); ?></h2>
                    <p style="color: var(--color-muted);">
                        <?php esc_html_e('By accessing and using the website of Kaimingwei Precision Technology (Shenzhen) Co., Ltd. ("KMW CNC", "we", "us", or "our"), you agree to be bound by these Terms of Service. If you do not agree to these terms, please do not use this website.', 'ulx'); ?>
                    </p>

                    <h2 style="color: var(--color-primary);"><?php esc_html_e('2. Nature of This Website', 'ulx'); ?></h2>
                    <p style="color: var(--color-muted);">
                        <?php esc_html_e('This website is a B2B service showcase and inquiry platform for precision CNC machining services. It is not an e-commerce store. No purchase transactions, payment processing, or binding contracts are concluded on this website. All prices shown (if any) are indicative only. Actual pricing, lead times, and delivery terms are subject to individual negotiation based on your part specifications, material, quantity, and finish requirements.', 'ulx'); ?>
                    </p>

                    <h2 style="color: var(--color-primary);"><?php esc_html_e('3. Intended Users', 'ulx'); ?></h2>
                    <p style="color: var(--color-muted);">
                        <?php esc_html_e('This website is intended for business users including engineers, procurement managers, OEM manufacturers, product designers, and industrial buyers. By submitting an inquiry, you confirm that you are acting in a professional business capacity.', 'ulx'); ?>
                    </p>

                    <h2 style="color: var(--color-primary);"><?php esc_html_e('4. Service Information', 'ulx'); ?></h2>
                    <p style="color: var(--color-muted);">
                        <?php esc_html_e('All service descriptions, capabilities, tolerances, material specifications, and technical data on this website are provided for reference purposes only. KMW CNC reserves the right to modify, update, or discontinue any service offering without prior notice. Actual machining specifications may vary depending on part geometry, material selection, and requirements agreed between parties.', 'ulx'); ?>
                    </p>

                    <h2 style="color: var(--color-primary);"><?php esc_html_e('5. Inquiry & Quotation Process', 'ulx'); ?></h2>
                    <p style="color: var(--color-muted);">
                        <?php esc_html_e('Submitting an inquiry form or uploading CAD files on this website does not constitute a purchase order or binding contract. Quotations provided by KMW CNC are valid for the period stated in the quotation and are subject to written acceptance. All trade terms shall be governed by the final signed purchase order or sales contract.', 'ulx'); ?>
                    </p>

                    <h2 style="color: var(--color-primary);"><?php esc_html_e('6. Confidentiality & NDA', 'ulx'); ?></h2>
                    <p style="color: var(--color-muted);">
                        <?php esc_html_e('KMW CNC respects the confidentiality of all customer designs. Any CAD drawings, 3D models, engineering specifications, or proprietary information shared with us will be treated as strictly confidential and used solely for the purpose of quoting and manufacturing your parts. We will not share, reproduce, or supply customised parts to third parties without your written consent. Mutual NDAs are available upon request.', 'ulx'); ?>
                    </p>

                    <h2 style="color: var(--color-primary);"><?php esc_html_e('7. Intellectual Property', 'ulx'); ?></h2>
                    <p style="color: var(--color-muted);">
                        <?php esc_html_e('All content on this website — including text, images, logos, product photography, technical diagrams, and design elements — is the property of Kaimingwei Precision Technology (Shenzhen) Co., Ltd. or its licensors, and is protected by applicable copyright and intellectual property laws. You may not reproduce, distribute, or use any content for commercial purposes without our prior written permission.', 'ulx'); ?>
                    </p>

                    <h2 style="color: var(--color-primary);"><?php esc_html_e('8. Quality & Certification', 'ulx'); ?></h2>
                    <p style="color: var(--color-muted);">
                        <?php esc_html_e('KMW CNC operates under an ISO 9001:2015 certified quality management system. References to certifications, inspection standards, and quality processes on this website reflect our current capabilities and standard procedures. Specific quality requirements for your project should be discussed and agreed upon during the quotation process.', 'ulx'); ?>
                    </p>

                    <h2 style="color: var(--color-primary);"><?php esc_html_e('9. Limitation of Liability', 'ulx'); ?></h2>
                    <p style="color: var(--color-muted);">
                        <?php esc_html_e('KMW CNC makes no warranties, expressed or implied, regarding the accuracy, completeness, or fitness for purpose of the information on this website. To the maximum extent permitted by law, we shall not be liable for any direct, indirect, incidental, or consequential loss arising from the use of, or inability to use, this website or its content.', 'ulx'); ?>
                    </p>

                    <h2 style="color: var(--color-primary);"><?php esc_html_e('10. Third-Party Links', 'ulx'); ?></h2>
                    <p style="color: var(--color-muted);">
                        <?php esc_html_e('This website may contain links to third-party websites for your convenience. KMW CNC does not endorse or take responsibility for the content, privacy practices, or availability of any linked websites.', 'ulx'); ?>
                    </p>

                    <h2 style="color: var(--color-primary);"><?php esc_html_e('11. Changes to These Terms', 'ulx'); ?></h2>
                    <p style="color: var(--color-muted);">
                        <?php esc_html_e('We reserve the right to update these Terms of Service at any time. Changes will be effective upon posting to this page. Your continued use of the website after any changes constitutes your acceptance of the revised terms.', 'ulx'); ?>
                    </p>

                    <h2 style="color: var(--color-primary);"><?php esc_html_e('12. Governing Law', 'ulx'); ?></h2>
                    <p style="color: var(--color-muted);">
                        <?php esc_html_e('These Terms of Service shall be governed by and construed in accordance with the laws of the People\'s Republic of China. Any disputes arising from or relating to these terms shall be submitted to the competent court in Shenzhen, China.', 'ulx'); ?>
                    </p>

                    <h2 style="color: var(--color-primary);"><?php esc_html_e('13. Contact', 'ulx'); ?></h2>
                    <p style="color: var(--color-muted);">
                        <?php esc_html_e('For any questions regarding these Terms of Service, please contact us:', 'ulx'); ?>
                    </p>
                    <ul style="color: var(--color-muted);">
                        <li><?php esc_html_e('Company: Kaimingwei Precision Technology (Shenzhen) Co., Ltd.', 'ulx'); ?></li>
                        <li><?php esc_html_e('Address: Building B, Jinhao Entrepreneurship Park, Dafu Industrial Zone, Guanlan, Longhua District, Shenzhen', 'ulx'); ?></li>
                        <li><?php esc_html_e('Email:', 'ulx'); ?> <a href="mailto:sales@kmwcnc.com" style="color: var(--color-accent);">sales@kmwcnc.com</a></li>
                        <li>
                            <?php esc_html_e('Phone:', 'ulx'); ?>
                            <a href="tel:+8615889750371" style="color: var(--color-accent);">+86 15889750371</a>
                        </li>
                        <li>
                            <?php esc_html_e('WhatsApp:', 'ulx'); ?>
                            <a href="https://wa.me/8615889750371" style="color: var(--color-accent);">+86 15889750371</a>
                        </li>
                    </ul>

                </div>

            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
