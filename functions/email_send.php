<?php
$to = "datukputra23@gmail.com";
$subject = "Test Email";
$message = "This is a test email.";

// Set additional headers
$headers = "From: sender@example.com\r\n";
$headers .= "Reply-To: sender@example.com\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// SMTP configuration
ini_set("SMTP", "smtp.gmail.com");
ini_set("smtp_port", "587");
ini_set("sendmail_from", "sender@gmail.com");
ini_set("sendmail_path", "C:\xampp\sendmail\sendmail.exe -t -i");

// Send email
if (mail($to, $subject, $message, $headers)) {
  echo "Email sent successfully!";
} else {
  echo "Failed to send email.";
}
