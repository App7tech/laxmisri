<?php
    $to = 'laxmisriart2@gmail.com';
    $subject = 'Contact Request';
    $from = 'contact@laxmisri.com';
    $userName = $_POST['userName'];
    $userEmail = $_POST['userEmail'];
    $subject = $_POST['subject'];
    $content = $_POST['content'];
    
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
    $message .= '<p style="color:#080;font-size:18px;">New contact request from laxmisri.com</p>';
    $message .= '<p style="color:#080;font-size:18px;">Name: '.$userName.'</p>';
    $message .= '<p style="color:#080;font-size:18px;">Email: '.$userEmail.'</p>';
    $message .= '<p style="color:#080;font-size:18px;">Subject: '.$subject.'</p>';
    $message .= '<p style="color:#080;font-size:18px;">Content: '.$content.'</p>';
    $message .= '</body></html>';
    
    // Sending email
    if(mail($to, $subject, $message, $headers)){
        echo 'Your mail has been sent successfully.';
    } else{
        echo 'Unable to send email. Please try again.';
    }
?>