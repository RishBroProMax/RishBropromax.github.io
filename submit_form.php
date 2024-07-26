<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = htmlspecialchars(strip_tags(trim($_POST["name"])));
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(strip_tags(trim($_POST["message"])));

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    // Set the recipient email address
    $to = "rishbro2022@gmail.com"; // Replace with your email address

    // Set the email subject
    $subject = "New Contact Form Submission from $name";

    // Build the email content
    $email_content = "Name: $name\n";
    $email_content = "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // Build the email headers
    $email_headers = "From: $name <$email>";

    // Send the email
    if (mail($to, $subject, $email_content, $email_headers)) {
        // Redirect to a thank you page
        header("Location: thank_you.html");
        exit;
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
} else {
    echo "There was a problem with your submission, please try again.";
}
?>
