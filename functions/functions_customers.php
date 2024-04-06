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

  $qry = "INSERT INTO customers(name,phone,email,address) VALUES ('$name', '$phone', '$email', '$address')";
  $result = mysqli_query($conn, $qry);

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

// function customers_edit($query) {
//   global $conn;

// }


// DELETE DATA
if (isset($_GET['customer_id'])) {
  $id = $_GET['customer_id'];
  customers_delete($id);
}
function customers_delete($id)
{
  global $conn;
  $delete = "DELETE FROM customers WHERE customer_id = $id";
  $result = mysqli_query($conn, $delete);
  if ($result) {
    echo "
            <script>
                alert('Data Berhasil di hapus');
                document.location.href = '../customer.php';
            </script>
        ";
  } else {
    echo "
            <script>
                alert('Data Gagal di hapus');
                document.location.href = '../customer.php';
            </script>
        ";
  }
}



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
