<?php
require_once "functions/Customers.php";

// Ambil id dari url
$id = $_GET['customer_id'];

// Cek jika query berhasil atau tidak, nilai yang di return boolean
if ($Customer->deleteCustomers($id)) {
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
