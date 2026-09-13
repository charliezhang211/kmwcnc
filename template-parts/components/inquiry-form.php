<?php
/**
 * Inquiry / Quote Request Form Component — KMW CNC
 *
 * Can be embedded anywhere. Handles POST via inc/inquiry.php.
 * Fields: Name*, Email*, Phone, Company, Message*, Upload File
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

$error   = isset($_GET['inquiry']) && $_GET['inquiry'] === 'error';
$service = isset($_GET['service']) ? sanitize_text_field(wp_unslash($_GET['service'])) : '';
?>

<div class="ulx-inquiry-form-wrap">

    <?php if ($error) : ?>
        <div class="p-4 rounded-lg mb-6 text-sm font-medium bg-red-50 text-red-600 border border-red-200">
            <?php esc_html_e('Something went wrong. Please try again or contact us directly at sales@kmwcnc.com.', 'ulx'); ?>
        </div>
    <?php endif; ?>

    <form method="POST" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" enctype="multipart/form-data" class="space-y-4" novalidate>
        <input type="hidden" name="action" value="ulx_inquiry_submit">
        <?php wp_nonce_field('ulx_inquiry_submit', 'ulx_inquiry_nonce'); ?>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <!-- Name -->
            <div>
                <label class="block text-sm font-medium text-text mb-1.5">
                    <?php esc_html_e('Your Name', 'ulx'); ?> <span class="text-red-500">*</span>
                </label>
                <input type="text" name="ulx_name" required
                       class="input"
                       placeholder="<?php esc_attr_e('John Smith', 'ulx'); ?>" />
            </div>
            <!-- Email -->
            <div>
                <label class="block text-sm font-medium text-text mb-1.5">
                    <?php esc_html_e('Email Address', 'ulx'); ?> <span class="text-red-500">*</span>
                </label>
                <input type="email" name="ulx_email" required
                       class="input"
                       placeholder="<?php esc_attr_e('you@company.com', 'ulx'); ?>" />
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <!-- Phone -->
            <div>
                <label class="block text-sm font-medium text-text mb-1.5">
                    <?php esc_html_e('Phone Number', 'ulx'); ?>
                </label>
                <input type="tel" name="ulx_phone"
                       class="input"
                       placeholder="<?php esc_attr_e('+1 555 000 0000', 'ulx'); ?>" />
            </div>
            <!-- Company -->
            <div>
                <label class="block text-sm font-medium text-text mb-1.5">
                    <?php esc_html_e('Company', 'ulx'); ?>
                </label>
                <input type="text" name="ulx_company"
                       class="input"
                       placeholder="<?php esc_attr_e('Acme Engineering Ltd.', 'ulx'); ?>" />
            </div>
        </div>

        <!-- Message -->
        <div>
            <label class="block text-sm font-medium text-text mb-1.5">
                <?php esc_html_e('Project Details', 'ulx'); ?> <span class="text-red-500">*</span>
            </label>
            <textarea name="ulx_message" rows="4" required class="input h-auto py-3 resize-none"
                      placeholder="<?php esc_attr_e('Describe your parts, materials, quantities, tolerances, and any special requirements…', 'ulx'); ?>"></textarea>
        </div>

        <!-- File Upload -->
        <div>
            <label class="block text-sm font-medium text-text mb-1.5">
                <?php esc_html_e('Upload File', 'ulx'); ?>
            </label>
            <div class="relative border-2 border-dashed border-border rounded-lg p-6 text-center hover:border-primary/30 transition-colors cursor-pointer" id="ulx-dropzone">
                <input type="file" name="ulx_file"
                       accept=".step,.stp,.iges,.igs,.stl,.pdf,.dwg,.dxf,.3mf,.obj,.sat,.x_t,.prt,.sldprt,.zip,.rar,.7z"
                       class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" />
                <div class="text-muted">
                    <svg class="w-8 h-8 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                    </svg>
                    <p class="text-sm font-medium"><?php esc_html_e('Drag & drop or click to upload', 'ulx'); ?></p>
                    <p class="text-xs mt-1"><?php esc_html_e('STEP, STP, IGES, STL, DWG, DXF, PDF (max 25MB)', 'ulx'); ?></p>
                </div>
            </div>
        </div>

        <!-- Submit -->
        <div class="pt-2">
            <button type="submit" class="btn-accent w-full sm:w-auto gap-2">
                <?php esc_html_e('Request a Quote', 'ulx'); ?>
                <?php echo ulx_icon('arrow-right', 'w-4 h-4'); ?>
            </button>
            <p class="text-xs mt-3 text-muted">
                <?php esc_html_e('We respond within 24 hours. Your information is kept strictly confidential.', 'ulx'); ?>
            </p>
        </div>

    </form>
</div>
