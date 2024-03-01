<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = 'responsive@website.com';
    $email_subject = 'New Form Submission';
    $email_body = "User Name: $name.\n".
                  "User Email: $visitor_email.\n".
                  "Subject: $subject.\n".
                  "User Message: $message .\n";

    $to = 'harshit9869@gmail.com';
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";

    // Send email
    if(mail($to, $email_subject, $email_body, $headers)) {
        
        header("Location: thank_you.html");
        exit;
    } else {

        header("Location: contact.html?status=error");
        exit;
    }
} else {

    header("Location: contact.html");
    exit;
}
?>
