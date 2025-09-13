<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Email settings
    $to = "bridgeofvoicesalliesforall@gmail.com";  // Replace with your email address
    $subject = "New message from your website contact form";
    
    // Create the email body
    $emailBody = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    // Set email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send email
    if (mail($to, $subject, $emailBody, $headers)) {
        echo "Thank you for contacting us! We will get back to you shortly.";
    } else {
        echo "There was an error sending your message. Please try again.";
    }
}
?>
