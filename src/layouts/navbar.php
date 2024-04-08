<?php
$url = $_SERVER['REQUEST_URI'];
$url = str_replace('/php-belajar/', '', $url);

$link_navbar = [
  "Home" => "index.php",
  "About" => "about.php",
  "Contact" => "contact.php"
];

$link_navbar_dropdown = [
  "Customer" => "customer.php",
  "Kabataku" => "kabataku.php"
];

?>


<nav class="flex flex-row items-center justify-between py-4 px-28 border-b-[1px] bg-white shadow-xl top-0 fixed w-full" id="navbar">
  <ul class="font-bold">
    <li><a href="index.php">Back-end Web</a></li>
  </ul>

  <ul class="flex gap-x-5 items-center font-medium">
    <?php foreach ($link_navbar as $key => $link) : ?>

      <?php
      $isActive = $url == $link;
      ?>
      <li class="<?= $isActive ? 'text-blue-600' : ''; ?> relative inline cursor-pointer font-medium before:bg-blue-600 before:absolute before:-bottom-1 before:block before:h-[2px] before:w-full before:origin-bottom-right before:scale-x-0 before:transition before:duration-300 before:ease-in-out hover:before:origin-bottom-left hover:before:scale-x-100"><a href="<?= $link ?>"><?= $key ?></a></li>
    <?php endforeach ?>

    <li class="relative">
      <button id="dropdownButton" data-dropdown-toggle="dropdown" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">Data <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
        </svg>
      </button>

      <!-- Dropdown menu -->
      <div id="dropdownMenu" class="hidden absolute bg-white divide-gray-100 rounded-lg shadow mt-[5px] z-[1500] dark:bg-gray-700 top-full left-0">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownButton">
          <?php foreach ($link_navbar_dropdown as $key => $dropdown_link) : ?>
            <li>
              <a href=<?= $dropdown_link ?> class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><?= $key ?></a>
            </li>
          <?php endforeach ?>
        </ul>
      </div>
    </li>
  </ul>
</nav>



<script>
  let dropdownButton = document.getElementById("dropdownButton");
  let dropdownMenu = document.getElementById("dropdownMenu");

  dropdownButton.addEventListener("click", function() {
    dropdownMenu.classList.toggle("hidden");
  });
</script>