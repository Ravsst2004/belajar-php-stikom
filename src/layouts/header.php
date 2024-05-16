<?php
function getTitle()
{
  // Array of titles mapped to their respective URLs
  $titles = [
    '/belajar-php-stikom/index.php' => 'Home',
    '/belajar-php-stikom/about.php' => 'About',
    '/belajar-php-stikom/contact.php' => 'Contact',
    '/belajar-php-stikom/customer.php' => 'Customer',
    '/belajar-php-stikom/kabataku.php' => 'Kabataku',
    '/belajar-php-stikom/customer_edit.php' => 'Edit',
  ];

  // Get the current request URI
  $current_url = $_SERVER['REQUEST_URI'];

  // Return the title if the current URL exists in the array, otherwise return 'Page Not Found'
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

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body class="font-poppins">
  <?php include "./src/layouts/navbar.php"; ?>