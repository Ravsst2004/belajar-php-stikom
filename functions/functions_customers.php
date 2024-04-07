<?php
require_once(__DIR__ . '/db_connection.php');

// ADD DATA
function customer_add($query)
{
  global $conn;

  $name = htmlspecialchars($query['name']);
  $phone = htmlspecialchars($query['phone']);
  $email = htmlspecialchars($query['email']);
  $address = htmlspecialchars($query['address']);

  $add = "INSERT INTO customers(name,phone,email,address) VALUES ('$name', '$phone', '$email', '$address')";
  $result = mysqli_query($conn, $add);

  if ($result) {
    return true;
  } else {
    return false;
  }
}

// SHOW DATA
function customer_show($query)
{
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

// EDIT DATA
function customers_edit($query)
{
  global $conn;

  $id = $query['customer_id'];
  $name = htmlspecialchars($query['name']);
  $phone = htmlspecialchars($query['phone']);
  $email = htmlspecialchars($query['email']);
  $address = htmlspecialchars($query['address']);

  $edit = "UPDATE customers SET name = '$name', phone = '$phone', email = '$email', address = '$address' WHERE customer_id = $id";
  $result = mysqli_query($conn, $edit);
  return $result;
}

// DELETE DATA
function customers_delete($id)
{
  global $conn;
  $delete = "DELETE FROM customers WHERE customer_id = $id";
  $result = mysqli_query($conn, $delete);
  return $result;
}





// if (isset($_GET['customer_id'])) {
//   $id = $_GET['customer_id'];
//   customers_delete($id);
// }


// function customers_delete($id)
// {
//   global $conn;
//   $delete = "DELETE FROM customers WHERE customer_id = $id";
//   $result = mysqli_query($conn, $delete);
//   return $result ? true : false;
// }
// if (isset($_GET['customer_id'])) {
//   $id = $_GET['customer_id'];
//   $deleted = customers_delete($id);
//   header('location:../customer.php?status=' . ($deleted ? true : false));
// }
