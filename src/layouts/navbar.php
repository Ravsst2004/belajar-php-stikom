<!-- Navbar -->
<?php $link_navbar = ["Home" => "index.php", "About" => "about.php", "Contact" => "contact.php"]; ?>
<?php $link_navbar_dropdown = ["customer" => "customer.php"] ?>
<nav class="flex flex-row items-center justify-between py-4 px-14 bg-black text-white relative" id="navbar">
  <ul class="flex gap-x-5 items-center">
    <?php foreach ($link_navbar as $key => $link) : ?>
      <a href=<?= $link ?>><?= $key ?></a>
    <?php endforeach ?>

    <button id="dropdownButton" data-dropdown-toggle="dropdown" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Data <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
      </svg>
    </button>
  </ul>
</nav>

<!-- Dropdown menu -->
<div id="dropdownMenu" class="hidden absolute mt-1 ml-64 bg-white divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
  <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownButton">
    <?php foreach ($link_navbar_dropdown as $key => $dropdown_link) : ?>
      <li>
        <a href=<?= $dropdown_link ?> class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><?= $key ?></a>
      </li>
    <?php endforeach ?>
  </ul>
</div>

<script>
  let dropdownButton = document.getElementById("dropdownButton");
  let dropdownMenu = document.getElementById("dropdownMenu");

  dropdownButton.addEventListener("click", function() {
    dropdownMenu.classList.toggle("hidden");
  });
</script>