<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $to = 'datukputra23@gmail.com';

  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";


  if (mail($to, $subject, $message, $headers)) {
    echo 'Email terkirim bang';
  } else {
    echo 'Halah pepek eror BOSS!!';
  }
} else {
  header("Location: ../../../index.php");
  exit;
}
