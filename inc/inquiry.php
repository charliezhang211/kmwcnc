<?php
/**
 * Inquiry Form Handlers
 *
 * Handles two forms:
 *   1. Main inquiry form (Contact page / inquiry-form.php)
 *   2. Sidebar quick quote form (blog single sidebar)
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

/**
 * Notification email — override with filter 'ulx_inquiry_email'
 */
function ulx_get_inquiry_email() {
    return apply_filters('ulx_inquiry_email', 'sales@kmwcnc.com');
}

/**
 * Thank You page redirect URL
 */
function ulx_get_thank_you_url() {
    $page = get_page_by_path('thank-you');
    return $page ? get_permalink($page->ID) : home_url('/thank-you/');
}

/* ───────────────────────────────────────────
   ① Main Inquiry Form (Contact page)
   ─────────────────────────────────────────── */

function ulx_handle_inquiry_submit() {

    // Verify nonce
    if (
        empty($_POST['ulx_inquiry_nonce']) ||
        ! wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['ulx_inquiry_nonce'])), 'ulx_inquiry_submit')
    ) {
        wp_safe_redirect(add_query_arg('inquiry', 'error', wp_get_referer() ?: home_url('/')));
        exit;
    }

    // Sanitize fields
    $name    = sanitize_text_field(wp_unslash($_POST['ulx_name'] ?? ''));
    $company = sanitize_text_field(wp_unslash($_POST['ulx_company'] ?? ''));
    $email   = sanitize_email(wp_unslash($_POST['ulx_email'] ?? ''));
    $phone   = sanitize_text_field(wp_unslash($_POST['ulx_phone'] ?? ''));
    $message = sanitize_textarea_field(wp_unslash($_POST['ulx_message'] ?? ''));

    // Optional context sent by the PDP popup / floating widget
    $product  = sanitize_text_field(wp_unslash($_POST['ulx_product'] ?? ''));
    $sku      = sanitize_text_field(wp_unslash($_POST['ulx_product_sku'] ?? ''));
    $quantity = sanitize_text_field(wp_unslash($_POST['ulx_quantity'] ?? ''));
    $country  = sanitize_text_field(wp_unslash($_POST['ulx_country'] ?? ''));
    $source   = sanitize_text_field(wp_unslash($_POST['ulx_source'] ?? ''));
    $page_url = esc_url_raw(wp_unslash($_POST['ulx_page_url'] ?? $_POST['ulx_product_url'] ?? ''));

    $source_labels = [
        'pdp_popup'       => 'Product Page Popup',
        'floating_widget' => 'Floating Inquiry Widget',
    ];
    $source_label = $source_labels[$source] ?? 'Contact Form';

    // Basic validation
    if (empty($name) || empty($email) || ! is_email($email) || empty($message)) {
        wp_safe_redirect(add_query_arg('inquiry', 'error', wp_get_referer() ?: home_url('/')));
        exit;
    }

    // Build email
    $to      = ulx_get_inquiry_email();
    $subject = sprintf('[KMW CNC] New Inquiry from %s', $company ?: $name);

    $body  = "New inquiry received from your website.\n\n";
    $body .= "━━━━━━━━━━━━━━━━━━━━━━━━━\n";
    $body .= "Name:     {$name}\n";
    $body .= "Company:  {$company}\n";
    $body .= "Email:    {$email}\n";
    $body .= "Phone:    {$phone}\n";

    if ($product || $sku || $quantity || $country) {
        $body .= "━━━━━━━━━━━━━━━━━━━━━━━━━\n";
        if ($product)  { $body .= "Product:  {$product}\n"; }
        if ($sku)      { $body .= "Model:    {$sku}\n"; }
        if ($quantity) { $body .= "Quantity: {$quantity}\n"; }
        if ($country)  { $body .= "Destination: {$country}\n"; }
    }

    $body .= "━━━━━━━━━━━━━━━━━━━━━━━━━\n";
    $body .= "Message:\n{$message}\n\n";
    $body .= "━━━━━━━━━━━━━━━━━━━━━━━━━\n";
    $body .= "Source:    {$source_label}\n";
    if ($page_url) {
        $body .= "Page:      {$page_url}\n";
    }
    $body .= "Submitted: " . current_time('Y-m-d H:i:s') . "\n";
    $body .= "IP: " . sanitize_text_field(wp_unslash($_SERVER['REMOTE_ADDR'] ?? '')) . "\n";

    // Handle file upload
    $attachments = [];
    if (! empty($_FILES['ulx_file']) && $_FILES['ulx_file']['error'] === UPLOAD_ERR_OK) {
        $upload = wp_handle_upload($_FILES['ulx_file'], ['test_form' => false]);
        if (! empty($upload['file'])) {
            $attachments[] = $upload['file'];
            $body .= "Attachment: " . basename($upload['file']) . "\n";
        }
    }

    $headers = [
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $name . ' <' . $email . '>',
    ];

    $sent = wp_mail($to, $subject, $body, $headers, $attachments);

    // Auto-reply
    if ($sent && $email) {
        $reply_subject = 'We received your inquiry — KMW CNC';
        $reply_body    = sprintf(
            "Dear %s,\n\nThank you for your inquiry. Our engineering team has received your message and will respond within 24 hours.\n\nIf your request is urgent, please contact us directly:\nPhone: +86 15889750371\nWhatsApp: +86 15889750371\nEmail: sales@kmwcnc.com\n\nBest regards,\nKMW CNC — Kaimingwei Precision Technology\nwww.kmwcnc.com",
            $name
        );
        wp_mail($email, $reply_subject, $reply_body);
    }

    wp_safe_redirect(ulx_get_thank_you_url());
    exit;
}
add_action('admin_post_ulx_inquiry_submit', 'ulx_handle_inquiry_submit');
add_action('admin_post_nopriv_ulx_inquiry_submit', 'ulx_handle_inquiry_submit');


/* ───────────────────────────────────────────
   ② Sidebar Quick Quote Form (blog single)
   ─────────────────────────────────────────── */

function ulx_handle_sidebar_quote() {

    // Verify nonce
    if (
        empty($_POST['_ulx_nonce']) ||
        ! wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['_ulx_nonce'])), 'ulx_sidebar_quote')
    ) {
        wp_safe_redirect(add_query_arg('inquiry', 'error', wp_get_referer() ?: home_url('/')));
        exit;
    }

    // Sanitize
    $name    = sanitize_text_field(wp_unslash($_POST['name'] ?? ''));
    $email   = sanitize_email(wp_unslash($_POST['email'] ?? ''));
    $message = sanitize_textarea_field(wp_unslash($_POST['message'] ?? ''));

    // Validate
    if (empty($name) || empty($email) || ! is_email($email) || empty($message)) {
        wp_safe_redirect(add_query_arg('inquiry', 'error', wp_get_referer() ?: home_url('/')));
        exit;
    }

    // Build email
    $to      = ulx_get_inquiry_email();
    $subject = sprintf('[KMW CNC] Quick Quote from %s', $name);

    $body  = "New quick quote request from blog sidebar.\n\n";
    $body .= "━━━━━━━━━━━━━━━━━━━━━━━━━\n";
    $body .= "Name:    {$name}\n";
    $body .= "Email:   {$email}\n";
    $body .= "━━━━━━━━━━━━━━━━━━━━━━━━━\n";
    $body .= "Message:\n{$message}\n\n";
    $body .= "━━━━━━━━━━━━━━━━━━━━━━━━━\n";
    $body .= "Source:    Blog Sidebar Form\n";
    $body .= "Page:      " . wp_get_referer() . "\n";
    $body .= "Submitted: " . current_time('Y-m-d H:i:s') . "\n";
    $body .= "IP: " . sanitize_text_field(wp_unslash($_SERVER['REMOTE_ADDR'] ?? '')) . "\n";

    $headers = [
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $name . ' <' . $email . '>',
    ];

    $sent = wp_mail($to, $subject, $body, $headers);

    // Auto-reply
    if ($sent && $email) {
        $reply_subject = 'We received your inquiry — KMW CNC';
        $reply_body    = sprintf(
            "Dear %s,\n\nThank you for reaching out. Our team will review your message and respond within 24 hours.\n\nPhone: +86 15889750371\nWhatsApp: +86 15889750371\nEmail: sales@kmwcnc.com\n\nBest regards,\nKMW CNC — Kaimingwei Precision Technology\nwww.kmwcnc.com",
            $name
        );
        wp_mail($email, $reply_subject, $reply_body);
    }

    wp_safe_redirect(ulx_get_thank_you_url());
    exit;
}
add_action('admin_post_ulx_sidebar_quote', 'ulx_handle_sidebar_quote');
add_action('admin_post_nopriv_ulx_sidebar_quote', 'ulx_handle_sidebar_quote');
