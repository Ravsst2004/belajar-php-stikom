<?php
require_once(__DIR__ . '/db_connection.php');

function customer_add($query)
{
  global $conn;

  $name = htmlspecialchars($query['name']);
  $phone = htmlspecialchars($query['phone']);
  $email = htmlspecialchars($query['email']);
  $address = htmlspecialchars($query['address']);
  // print_r($name, $phone, $email, $address);

  $qry = "INSERT INTO customers(name,phone,email,address) VALUES ('$name', '$phone', '$email', '$address')";
  $result = mysqli_query($conn, $qry);

  if ($result) {
    return true;
  } else {
    return false;
  }
}

function customer_show($query) {
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
