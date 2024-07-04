<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['Name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set recipient email address
    $to = "sumitshinde8771@gmail.com";

    // Email subject
    $subject = "Contact Form Submission";

    // Email body
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    // Email headers
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        http_response_code(200); // Success response
        echo "Message sent successfully.";
    } else {
        http_response_code(500); // Server error response
        echo "Failed to send message.";
    }
} else {
    http_response_code(403); // Forbidden if not a POST request
    echo "Invalid request.";
}
?>
