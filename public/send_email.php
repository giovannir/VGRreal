<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Replace these with your own values
    $to = 'greitano6@gmail.com';
    $subject = 'Contact Form Submission';
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        // Redirect back to the contact page with a success parameter
        header("Location: contact.php?success=1");
        exit();
    } else {
        // Redirect back to the contact page with an error parameter
        header("Location: contact.php?error=1");
        exit();
    }
}
?>