<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form values
    $name = strip_tags(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $message = strip_tags(trim($_POST['message']));

    // Validate form values
    if (empty($name) || empty($email) || empty($message)) {
        // Required fields are missing, show an error message and redirect
        header('Location: contact.php?error=1');
        exit;
    }

    // Prepare email
    $recipient = 'greitano6@gmail.com';
    $subject = 'New Contact Form Submission';
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";
    $email_headers = "From: $name <$email>";

    // Send the email
    if (mail($recipient, $subject, $email_content, $email_headers)) {
        // Email sent successfully, redirect to a success page or the same page with a success message
        header('Location: contact.php?success=1');
    } else {
        // Email sending failed, show an error message and redirect
        header('Location: contact.php?error=2');
    }
} else {
    // Invalid request, redirect to the contact form
    header('Location: contact.php');
}
?>
```