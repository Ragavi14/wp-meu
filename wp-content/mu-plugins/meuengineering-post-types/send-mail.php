<?php
header("Access-Control-Allow-Origin: *");

add_action('init', 'send_mail');
function send_mail(){
    
    register_rest_route('custom-form/v1/contact', '/send', array( 
        'methods' => 'POST',
        'callback' => 'handle_form_submission',
    ));
}



function handle_form_submission($request)
{

    
    $form_data = $request->get_json_params();
 
    // Extract form data
    $name = sanitize_text_field($form_data['name']);
    $mobile = sanitize_text_field($form_data['mobile']);
    $email = sanitize_email($form_data['email']);
    $message = sanitize_textarea_field($form_data['message']);

    
    // Send email
    $to = 'ragavi@netiapps.com';
    $subject = 'New Form Submission';
    $body = "Name : ".$name."\nMobile : ". $mobile."\nEmail : ". $email."\nMessage : ".$message;

    $result = wp_mail($to, $subject, $body);
    

    if ($result) {
        echo 'OK';exit;
    } else {
        echo 'Not Ok';exit;
    }
}

