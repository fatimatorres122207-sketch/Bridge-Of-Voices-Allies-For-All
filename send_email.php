<?php
$to = "bridgeofvoicesalliesforall@gmail.com";  // Your email address
$subject = "Test Email from Contact Form";
$message = "This is a test message to check the PHP mail function.";
$headers = "From: no-reply@yourdomain.com";

if (mail($to, $subject, $message, $headers)) {
    echo "Test email sent successfully.";
} else {
    echo "Failed to send test email.";
}
?>

