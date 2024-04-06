<?php
function getTitle()
{
  $titles = [
    '/php-belajar/index.php' => 'Home',
    '/php-belajar/about.php' => 'About',
    '/php-belajar/contact.php' => 'Contact',
    '/php-belajar/customer.php' => 'Customer'
  ];
  $current_url = $_SERVER['REQUEST_URI'];
  return isset($titles[$current_url]) ? $titles[$current_url] : 'Page Not Found';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= getTitle() ?></title>

  <link rel="stylesheet" href="src/css/output.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-poppins">
  <?php include "./src/layouts/navbar.php"; ?>