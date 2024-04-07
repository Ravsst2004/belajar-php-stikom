<?php
include_once __DIR__ . '/functions/functions_customers.php';

$id = $_GET['customer_id'];
if (customers_delete($id)) {
  echo "
            <script>
                alert('Data Berhasil di hapus');
                document.location.href = 'customer.php';
            </script>
        ";
} else {
  echo "
            <script>
                alert('Data Gagal di hapus');
                document.location.href = 'customer.php';
            </script>
        ";
}
