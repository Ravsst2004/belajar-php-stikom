<?php
require_once(__DIR__ . '/functions/functions_customers.php');

// Cek jika tombol submit ditekan untuk mengeksekusi query tambah data
if (isset($_POST['submit'])) {
  $succes = customer_add($_POST);
}

// Ambil data
$customers = customer_show('SELECT * FROM customers');

// Ambil boolean status
// $deleted = isset($_GET['deleted']) ? $_GET['deleted'] : false;
?>




<?php require_once "./src/layouts/header.php" ?>

<!-- ALERT -->
<!-- <?php if ($deleted === true) : ?>
  <div id="alert-3" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex items-center m-auto max-w-2xl p-4 mb-4 rounded-lg bg-gray-800 text-green-400" role="alert">
    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
    </svg>
    <span class="sr-only">Info</span>
    <div class="ms-3 text-sm font-medium">
      A simple info alert with an <a href="#" class="font-semibold underline hover:no-underline">example link</a>. Give it a click if you like.
    </div>
    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
      <span class="sr-only">Close</span>
      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
      </svg>
    </button>
  </div>
<?php endif ?> -->





<!-- Form -->

<form class="max-w-lg mx-auto mt-32 w-screen " action="" method="POST">
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
  <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
</form>


<!-- Table Customers -->

<div class="relative w-max-lg overflow-x-auto mt-20 w-screen">
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
          <td class="flex flex-col md:flex-row text-center gap-y-2 px-6 py-4 w-full">
            <!-- Tombol Edit -->
            <a href="customer_edit.php?customer_id=<?= $customer['customer_id'] ?>" class="w-24 bg-blue-500 hover:bg-blue-700 text-white text-gray font-bold py-2 px-4 rounded-full mr-2">Edit</a>
            <!-- Tombol Delete -->
            <a href="customer_delete.php?customer_id=<?= $customer['customer_id'] ?>" onclick="return confirm('Are you sure?')" class="w-24 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">Delete</a>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>



<?php require_once "./src/layouts/footer.php" ?>