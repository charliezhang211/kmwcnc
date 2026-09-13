<?php
/**
 * Template Name: Privacy Policy
 *
 * KMW CNC — Privacy Policy
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
                <?php esc_html_e('Privacy Policy', 'ulx'); ?>
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

                    <h2 style="color: var(--color-primary);"><?php esc_html_e('1. Introduction', 'ulx'); ?></h2>
                    <p style="color: var(--color-muted);">
                        <?php esc_html_e('Kaimingwei Precision Technology (Shenzhen) Co., Ltd. ("KMW CNC", "we", "us", or "our") is committed to protecting your personal information and your right to privacy. This Privacy Policy explains how we collect, use, store, and protect information when you visit our website or contact us for business purposes.', 'ulx'); ?>
                    </p>

                    <h2 style="color: var(--color-primary);"><?php esc_html_e('2. Information We Collect', 'ulx'); ?></h2>
                    <p style="color: var(--color-muted);"><?php esc_html_e('We collect information you provide voluntarily when you:', 'ulx'); ?></p>
                    <ul style="color: var(--color-muted);">
                        <li><?php esc_html_e('Submit a quotation request or inquiry form', 'ulx'); ?></li>
                        <li><?php esc_html_e('Upload CAD drawings, 3D models, or technical files for quoting', 'ulx'); ?></li>
                        <li><?php esc_html_e('Contact us by phone, email, or WhatsApp', 'ulx'); ?></li>
                        <li><?php esc_html_e('Subscribe to product updates or communications (if applicable)', 'ulx'); ?></li>
                    </ul>
                    <p style="color: var(--color-muted);"><?php esc_html_e('The types of information collected may include:', 'ulx'); ?></p>
                    <ul style="color: var(--color-muted);">
                        <li><?php esc_html_e('Full name and job title', 'ulx'); ?></li>
                        <li><?php esc_html_e('Company name and business type', 'ulx'); ?></li>
                        <li><?php esc_html_e('Business email address', 'ulx'); ?></li>
                        <li><?php esc_html_e('Phone number', 'ulx'); ?></li>
                        <li><?php esc_html_e('Country / region', 'ulx'); ?></li>
                        <li><?php esc_html_e('Part specifications, material requirements, quantity, and other project details', 'ulx'); ?></li>
                        <li><?php esc_html_e('CAD files, technical drawings, and engineering documents', 'ulx'); ?></li>
                    </ul>
                    <p style="color: var(--color-muted);"><?php esc_html_e('We may also automatically collect certain technical data when you visit our website, including IP address, browser type, referring URL, pages visited, and time of visit, through cookies and similar technologies.', 'ulx'); ?></p>

                    <h2 style="color: var(--color-primary);"><?php esc_html_e('3. How We Use Your Information', 'ulx'); ?></h2>
                    <p style="color: var(--color-muted);"><?php esc_html_e('We use the information we collect for the following purposes:', 'ulx'); ?></p>
                    <ul style="color: var(--color-muted);">
                        <li><?php esc_html_e('To review your technical requirements and provide accurate quotations', 'ulx'); ?></li>
                        <li><?php esc_html_e('To communicate with you about machining projects, prototypes, and production orders', 'ulx'); ?></li>
                        <li><?php esc_html_e('To process and manage our business relationship with you', 'ulx'); ?></li>
                        <li><?php esc_html_e('To improve our website content and user experience', 'ulx'); ?></li>
                        <li><?php esc_html_e('To comply with applicable legal obligations', 'ulx'); ?></li>
                    </ul>
                    <p style="color: var(--color-muted);">
                        <?php esc_html_e('We do not use your information for automated decision-making or profiling.', 'ulx'); ?>
                    </p>

                    <h2 style="color: var(--color-primary);"><?php esc_html_e('4. Confidentiality of Technical Files', 'ulx'); ?></h2>
                    <p style="color: var(--color-muted);">
                        <?php esc_html_e('We understand the sensitivity of engineering drawings and proprietary designs. All CAD files, 3D models, and technical documents shared with us are treated as strictly confidential. We will not share, reproduce, or use your technical files for any purpose other than quoting and manufacturing your parts. Non-disclosure agreements (NDAs) are available upon request.', 'ulx'); ?>
                    </p>

                    <h2 style="color: var(--color-primary);"><?php esc_html_e('5. Sharing of Information', 'ulx'); ?></h2>
                    <p style="color: var(--color-muted);">
                        <?php esc_html_e('We do not sell, rent, or trade your personal information to third parties. We may share your information with:', 'ulx'); ?>
                    </p>
                    <ul style="color: var(--color-muted);">
                        <li><?php esc_html_e('Our internal engineering, sales, and production teams, solely for the purpose of handling your project', 'ulx'); ?></li>
                        <li><?php esc_html_e('Trusted service providers (e.g. email delivery, website hosting) under confidentiality obligations', 'ulx'); ?></li>
                        <li><?php esc_html_e('Competent authorities, if required by law or legal process', 'ulx'); ?></li>
                    </ul>

                    <h2 style="color: var(--color-primary);"><?php esc_html_e('6. Data Retention', 'ulx'); ?></h2>
                    <p style="color: var(--color-muted);">
                        <?php esc_html_e('We retain your personal information for as long as necessary to fulfil the purposes described in this Privacy Policy, or as required by applicable laws and regulations. Inquiry records are generally retained for a period of three (3) years unless a business relationship is established, in which case records may be retained for the duration of the relationship plus any statutory minimum retention period.', 'ulx'); ?>
                    </p>

                    <h2 style="color: var(--color-primary);"><?php esc_html_e('7. Cookies', 'ulx'); ?></h2>
                    <p style="color: var(--color-muted);">
                        <?php esc_html_e('Our website uses cookies and similar tracking technologies to enhance browsing experience and collect aggregate usage statistics. Essential cookies are necessary for the website to function properly. You may disable non-essential cookies through your browser settings; however, this may affect certain features of the website.', 'ulx'); ?>
                    </p>

                    <h2 style="color: var(--color-primary);"><?php esc_html_e('8. Data Security', 'ulx'); ?></h2>
                    <p style="color: var(--color-muted);">
                        <?php esc_html_e('We implement appropriate technical and organisational measures to protect your personal information against unauthorised access, disclosure, alteration, or destruction. While we take reasonable precautions, no method of transmission over the Internet is completely secure, and we cannot guarantee absolute security.', 'ulx'); ?>
                    </p>

                    <h2 style="color: var(--color-primary);"><?php esc_html_e('9. International Data Transfers', 'ulx'); ?></h2>
                    <p style="color: var(--color-muted);">
                        <?php esc_html_e('Our business serves clients worldwide. If you submit an inquiry from outside mainland China, your personal information will be processed in China. By using our website, you acknowledge and consent to this cross-border transfer for the purposes described in this policy.', 'ulx'); ?>
                    </p>

                    <h2 style="color: var(--color-primary);"><?php esc_html_e('10. Your Rights', 'ulx'); ?></h2>
                    <p style="color: var(--color-muted);"><?php esc_html_e('Depending on your location, you may have rights to:', 'ulx'); ?></p>
                    <ul style="color: var(--color-muted);">
                        <li><?php esc_html_e('Access the personal information we hold about you', 'ulx'); ?></li>
                        <li><?php esc_html_e('Request correction of inaccurate data', 'ulx'); ?></li>
                        <li><?php esc_html_e('Request deletion of your data (subject to legal retention requirements)', 'ulx'); ?></li>
                        <li><?php esc_html_e('Withdraw consent where processing is based on consent', 'ulx'); ?></li>
                        <li><?php esc_html_e('Lodge a complaint with your local data protection authority', 'ulx'); ?></li>
                    </ul>
                    <p style="color: var(--color-muted);">
                        <?php esc_html_e('To exercise any of these rights, please contact us at the details below.', 'ulx'); ?>
                    </p>

                    <h2 style="color: var(--color-primary);"><?php esc_html_e('11. Links to Other Websites', 'ulx'); ?></h2>
                    <p style="color: var(--color-muted);">
                        <?php esc_html_e('Our website may contain links to third-party websites. We are not responsible for the privacy practices of those sites. We encourage you to review the privacy policies of any external websites you visit.', 'ulx'); ?>
                    </p>

                    <h2 style="color: var(--color-primary);"><?php esc_html_e('12. Updates to This Policy', 'ulx'); ?></h2>
                    <p style="color: var(--color-muted);">
                        <?php esc_html_e('We may update this Privacy Policy from time to time. The updated version will be indicated by a revised "Last updated" date at the top of this page. We encourage you to review this policy periodically to stay informed of how we protect your information.', 'ulx'); ?>
                    </p>

                    <h2 style="color: var(--color-primary);"><?php esc_html_e('13. Contact Us', 'ulx'); ?></h2>
                    <p style="color: var(--color-muted);">
                        <?php esc_html_e('If you have any questions or concerns about this Privacy Policy, or wish to exercise your data rights, please contact us:', 'ulx'); ?>
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
