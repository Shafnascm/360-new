<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // Your email address where the form submissions will be sent
    $to = 'shafnascm1@gmail.com';

    // Subject of the email
    $subject = 'New Contact Form Submission';

    // Email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    if (!empty($phone)) {
        $email_content .= "Phone: $phone\n";
    }
    $email_content .= "Message:\n$message\n";

    // Email headers
    $headers = "From: $name <$email>";

    // Send the email
    if (mail($to, $subject, $email_content, $headers)) {
        echo 'Thank you! Your message has been sent.';
    } else {
        echo 'Oops! Something went wrong, and we couldn\'t send your message.';
    }
} else {
    echo 'There was a problem with your submission. Please try again.';
}
?>
