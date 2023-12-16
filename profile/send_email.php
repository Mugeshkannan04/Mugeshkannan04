<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Your email address where you want to receive the message
    $to = "22am036@kpriet.ac.in";

    // Subject of the email
    $subject = "New Message from $firstName $lastName";

    // Email content
    $emailContent = "Name: $firstName $lastName\n";
    $emailContent .= "Email: $email\n\n";
    $emailContent .= "Message:\n$message";

    // Additional headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/plain\r\n";

    // Send the email
    mail($to, $subject, $emailContent, $headers);

    // Redirect back to the form or a thank you page
    header("Location: thank_you.html");
    exit();
}
?>
