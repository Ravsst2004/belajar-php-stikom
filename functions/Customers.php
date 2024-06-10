<?php
require_once(__DIR__ . '/Database.php');

// ADD DATA
class Customers extends Database
{
  private $tb_name = "customers";
  public function __construct()
  {
    parent::__construct();
  }
  public function getCustomers(string $query)
  {
    $result = mysqli_query($this->con, $query);
    while ($data = mysqli_fetch_assoc($result)) {
      $rows[] = $data;
    }
    return $rows;
  }

  public function storeCustomers(array $data)
  {
    $name = htmlspecialchars($data['name']);
    $phone = htmlspecialchars($data['phone']);
    $email = htmlspecialchars($data['email']);
    $address = htmlspecialchars($data['address']);

    $query = "INSERT INTO $this->tb_name(name,phone,email,address) VALUES ('$name', '$phone', '$email', '$address')";
    $result = mysqli_query($this->con, $query);

    if ($result) {
      return true;
    } else {
      return false;
    }
  }

  public function updateCustomers(array $data)
  {
    $id = $data['customer_id'];
    $name = htmlspecialchars($data['name']);
    $phone = htmlspecialchars($data['phone']);
    $email = htmlspecialchars($data['email']);
    $address = htmlspecialchars($data['address']);

    $edit = "UPDATE $this->tb_name SET name = '$name', phone = '$phone', email = '$email', address = '$address' WHERE customer_id = $id";
    $result = mysqli_query($this->con, $edit);

    return $result;
  }

  public function deleteCustomers(int $id)
  {
    $delete = "DELETE FROM $this->tb_name WHERE customer_id = $id";
    $result = mysqli_query($this->con, $delete);
    return $result;
  }
}

$Customer = new Customers();



// DELETE DATA
// function customers_delete($id)
// {
//   global $conn;
//   $delete = "DELETE FROM customers WHERE customer_id = $id";
//   $result = mysqli_query($conn, $delete);
//   return $result;
// }





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
