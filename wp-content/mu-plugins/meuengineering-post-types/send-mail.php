<?php
header("Access-Control-Allow-Origin: *");

add_action('rest_api_init', function () {
    register_rest_route('custom-form/v1/contact', '/send', array(
        'methods' => 'POST',
        'callback' => 'handle_form_submission',
        'permission_callback' => '__return_true',
        'args' => array(
            'file' => array(
                'required' => false,
                'validate_callback' => function($param, $request, $key) {
                    return is_uploaded_file($param['tmp_name']);
                },
            ),
        ),
    ));
});

function handle_form_submission(WP_REST_Request $request) {
    // Extract form data
    $form_data = $request->get_body_params();
    
    $name = sanitize_text_field($form_data['name']);
    $mobile = sanitize_text_field($form_data['mobile']);
    $email = sanitize_email($form_data['email']);
    $website = isset($form_data['website']) ? sanitize_text_field($form_data['website']) : '';
    $quantity = isset($form_data['quantity']) ? sanitize_text_field($form_data['quantity']) : '';
    $message = sanitize_textarea_field($form_data['message']);

    // Handle file upload
    if (isset($_FILES['file']) && !empty($_FILES['file']['tmp_name'])) {
        $uploaded_file = $_FILES['file'];

        // Check for upload errors
        if ($uploaded_file['error'] !== UPLOAD_ERR_OK) {
            return new WP_Error('upload_failed', 'Failed to upload file.', array('status' => 400));
        }

        // Move the uploaded file to the desired directory
        $upload_dir = wp_upload_dir();
        $target_dir = $upload_dir['basedir'] . '/custom_uploads';
        if (!file_exists($target_dir)) {
            wp_mkdir_p($target_dir);
        }

        $target_file = $target_dir . '/' . basename($uploaded_file['name']);
        if (!move_uploaded_file($uploaded_file['tmp_name'], $target_file)) {
            return new WP_Error('move_failed', 'Failed to move uploaded file.', array('status' => 500));
        }

        $uploaded_file_path = $target_file;
    } else {
        $uploaded_file_path = ''; // Handle the case where no file is uploaded
    }

    $to = 'sales@meuengineering.com';
    $subject = 'New Form Submission';
    $body = "Name: $name,\n Mobile: $mobile,\n Email: $email,\n Website: $website,\n Quantity: $quantity,\n Message: $message";
    $headers = array('Content-Type: text/html; charset=UTF-8');
    $attachments = $uploaded_file_path ? array($uploaded_file_path) : array();

    // Debugging: Log the email parameters
    error_log("Sending email to: $to");
    error_log("Subject: $subject");
    error_log("Body: $body");
    error_log("Headers: " . implode(", ", $headers));
    if ($uploaded_file_path) {
        error_log("Attachments: " . implode(", ", $attachments));
    }

    // Send email
    $mail_sent = wp_mail($to, $subject, $body, $headers, $attachments);

    if ($mail_sent) {
        return new WP_REST_Response('Message sent successfully', 200);
    } else {
        return new WP_Error('email_failed', 'Failed to send email', array('status' => 500));
    }
}

