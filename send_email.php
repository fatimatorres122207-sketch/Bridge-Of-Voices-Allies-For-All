<?php
$to = "bridgeofvoicesalliesforall@gmail.com";
$subject = "Test Email";
$message = "This is a test message";
$headers = "From: no-reply@yourdomain.com";

if (mail($to, $subject, $message, $headers)) {
    echo "Test email sent!";
} else {
    echo "Failed to send test email.";
}
?>
