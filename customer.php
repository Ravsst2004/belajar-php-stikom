<?php
require_once(__DIR__ . '/functions/functions_customers.php');

// Cek jika tombol submit ditekan
if (isset($_POST['submit'])) {
  $succes = customer_add($_POST);
}
// Menampilkan ke halaman
$customers = customer_show('SELECT * FROM customers');
?>




<?php require_once "./src/layouts/header.php" ?>
<!-- Form -->
<form class="max-w-lg mx-auto mt-10" action="" method="POST">
  <div class="mb-5">
    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Your Name</label>
    <input type="name" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Jro Gobler" required />
  </div>
  <div class="mb-5">
    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Your Phone</label>
    <input type="phone" id="phone" name="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="123456789" required />
  </div>
  <div class="mb-5">
    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
    <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="name@gmail.com" required />
  </div>
  <div class="mb-5">
    <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Your address</label>
    <input type="text" id="address" name="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Jl. Datuk" required />
  </div>
  <!-- <div class="flex items-start mb-5">
      <div class="flex items-center h-5">
        <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
      </div>
      <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
    </div> -->
  <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
</form>


<!-- Table Customers -->
<div class="relative w-max-lg overflow-x-auto mt-20">
  <table class="w-full text-sm text-left rtl:text-right text-black">
    <thead class="text-xs text-gray-700 uppercase bg-gray-200">
      <tr>
        <th scope="col" class="px-6 py-3">
          No
        </th>
        <th scope="col" class="px-6 py-3">
          Name
        </th>
        <th scope="col" class="px-6 py-3">
          Phone
        </th>
        <th scope="col" class="px-6 py-3">
          Email
        </th>
        <th scope="col" class="px-6 py-3">
          Address
        </th>
        <th scope="col" class="px-6 py-3">
          Actions
        </th>
      </tr>
    </thead>
    <tbody>
      <?php $nomor = 1 ?>
      <?php foreach ($customers as $customer) : ?>
        <tr class="bg-gray-100 border-b ">
          <td scope="row" class="px-6 py-4">
            <?= $nomor++ ?>
          </td>
          <td scope="row" class="px-6 py-4">
            <?= $customer['name'] ?>
          </td>
          <td class="px-6 py-4">
            <?= $customer['phone'] ?>
          </td>
          <td class="px-6 py-4">
            <?= $customer['email'] ?>
          </td>
          <td class="px-6 py-4">
            <?= $customer['address'] ?>
          </td>
          <td class="px-6 py-4">
            <!-- Tombol Edit -->
            <button class="bg-blue-500 hover:bg-blue-700 text-white text-gray font-bold py-2 px-4 rounded-full mr-2">
              Edit
            </button>
            <!-- Tombol Delete -->
            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">
              Delete
            </button>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>


<?php require_once "./src/layouts/footer.php" ?>