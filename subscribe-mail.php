<?php
    $to = 'laxmisriart2@gmail.com';
    $subject = 'Subscribe Request';
    $from = 'contact@laxmisri.com';
    $email = $_POST['email'];

    // To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    
    // Create email headers
    $headers .= 'From: '.$from."\r\n".
        'Reply-To: '.$from."\r\n" .
        'X-Mailer: PHP/' . phpversion();
    
    // Compose a simple HTML email message
    $message = '<html><body>';
    $message .= '<h1 style="color:#f40;">Hello Admin!</h1>';
    $message .= '<p style="color:#080;font-size:18px;">New Subscription request from laxmisri.com</p>';
    $message .= '<p style="color:#080;font-size:18px;">Email: '.$email.'</p>';
    $message .= '</body></html>';
    
    // Sending email
    if(mail($to, $subject, $message, $headers)){
        echo 'Subscribed Successfully!';
    } else{
        echo 'Unable to Subscribe email. Please try again.';
    }
?>