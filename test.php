<?php
// Function to send email
function sendEmail($fromEmail, $fromName, $toEmail, $subject, $body) {
    // Set headers
    $headers = "From: $fromName <$fromEmail>\r\n";
    $headers .= "Reply-To: $fromEmail\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Send email
    if (mail($toEmail, $subject, $body, $headers)) {
        echo "Email sent successfully to $toEmail";
    } else {
        echo "Failed to send email.";
    }
}

// Example usage
$fromEmail = 'noreply@paypal.com';
$fromName = 'pay pal';
$toEmail = 'shubhamrautwork@gmail.com';
$subject = 'Test Email Without SMTP';
$body = '<h1>Hello!</h1><p>This is a test email sent using PHP mail().</p>';

sendEmail($fromEmail, $fromName, $toEmail, $subject, $body);
?>
