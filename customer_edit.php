<?php
include_once __DIR__ . '/functions/functions_customers.php';
$id = $_GET['customer_id'];

$customer = customer_show("SELECT * FROM customers WHERE customer_id = $id")[0];

if (isset($_POST['submit'])) {
  if (customers_edit($_POST)) {
    echo "
            <script>
                alert('Data Berhasil di ubah');
                document.location.href = 'customer.php';
            </script>
        ";
  } else {
    echo "
            <script>
                alert('Data Gagal di ubah');
                document.location.href = 'customer.php';
            </script>
        ";
  }
}
?>

<?php include "./src/layouts/header.php"; ?>

<form class="max-w-lg mx-auto mt-10" action="" method="POST">
  <input name="customer_id" value="<?= $customer['customer_id'] ?>" class="hidden" />

  <div class="mb-5">
    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Your Name</label>
    <input type="name" id="name" name="name" value="<?= $customer['name'] ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Jro Gobler" required />
  </div>
  <div class="mb-5">
    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Your Phone</label>
    <input type="phone" id="phone" name="phone" value="<?= $customer['phone'] ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="123456789" required />
  </div>
  <div class="mb-5">
    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
    <input type="email" id="email" name="email" value="<?= $customer['email'] ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="name@gmail.com" required />
  </div>
  <div class="mb-5">
    <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Your address</label>
    <input type="text" id="address" name="address" value="<?= $customer['address'] ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Jl. Datuk" required />
  </div>
  <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
</form>

<?php include "./src/layouts/footer.php"; ?>