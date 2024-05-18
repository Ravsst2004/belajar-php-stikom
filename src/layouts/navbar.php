<?php
// include_once "../../functions/users.php";

$url = $_SERVER['REQUEST_URI'];
$url = str_replace('/php-belajar/', '', $url);

$link_navbar = [
  "Home" => "home.php",
  "About" => "about.php",
  "Contact" => "contact.php"
];

$link_navbar_dropdown = [
  "Customer" => "customer.php",
  "Kabataku" => "kabataku.php"
];

// After login and set session
$isLogin = true;
if (isset($_POST['logout'])) logout();
?>





<nav class="flex flex-row items-center justify-between py-4 px-10 sm:px-16 md:px-20 lg:px-28 border-b-[1px] bg-white shadow-xl top-0 fixed w-screen" id="navbar">
  <ul class="font-bold">
    <li><a href="index.php">Back-end Web</a></li>
  </ul>

  <ul id="navbar-default" class="absolute flex-col hidden w-32 p-4 font-medium rounded-lg lg:flex top-4 right-24 sm:right-28 md:right-32 bg-slate-300 gap-y-2 gap-x-5 lg:w-fit lg:p-0 lg:static lg:flex-row lg:items-center lg:bg-transparent">
    <?php foreach ($link_navbar as $key => $link) : ?>
      <?php
      $isActive = $url == $link;
      ?>
      <a href="<?= $link ?>" class="<?= $isActive ? 'lg:text-blue-600 bg-blue-700 text-white rounded-md' : ''; ?> relative inline cursor-pointer font-medium p-2 lg:p-0 lg:text-black lg:bg-transparent before:bg-blue-600 before:absolute before:-bottom-1 before:block before:h-[2px] before:w-full before:origin-bottom-right before:scale-x-0 before:transition before:duration-300 before:ease-in-out hover:before:origin-bottom-left hover:before:scale-x-100">
        <?= $key ?>
      </a>
    <?php endforeach ?>

    <?php if ($isLogin) : ?>
      <form method="POST" action="">
        <button type="submit" name="logout" class="text-red-400 hover:text-red-700">Logout</button>
      </form>
    <?php endif; ?>


    <!-- Data dropdown -->
    <li class="relative">
      <button id="dropdownButton" data-dropdown-toggle="dropdown" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">Data <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
        </svg>
      </button>

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

  <!-- Hamburger button -->
  <button data-collapse-toggle="navbar-default" type="button" id="navbar-toggle" class="flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-400 bg-blue-700 rounded-lg lg:hidden focus:outline-none focus:ring-2 hover:bg-blue-800 focus:ring-blue-600" aria-controls="navbar-default" aria-expanded="false">
    <span class="sr-only">Open main menu</span>
    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
    </svg>
  </button>
</nav>
<!-- Mobile menu -->
<!-- <ul class="absolute flex flex-col w-full mx-10 top-24 bg-slate-500">
  <?php foreach ($link_navbar as $key => $link) : ?>
    <?php
    $isActive = $url == $link;
    ?>
    <li class="<?= $isActive ? 'text-blue-600' : ''; ?> relative inline cursor-pointer font-medium before:bg-blue-600 before:absolute before:-bottom-1 before:block before:h-[2px] before:w-full before:origin-bottom-right before:scale-x-0 before:transition before:duration-300 before:ease-in-out hover:before:origin-bottom-left hover:before:scale-x-100">
      <a href="<?= $link ?>"><?= $key ?></a>
    </li>
  <?php endforeach ?>
</ul> -->




<script>
  let dropdownButton = document.getElementById("dropdownButton");
  let dropdownMenu = document.getElementById("dropdownMenu");
  dropdownButton.addEventListener("click", function() {
    dropdownMenu.classList.toggle("hidden");
  });


  let navbarToggle = document.querySelector("#navbar-toggle");
  let navbar = document.querySelector("#navbar-default");
  navbarToggle.addEventListener("click", function() {
    if (navbar.classList.contains("hidden") && !navbar.classList.contains("flex")) {
      navbar.classList.remove("hidden");
      navbar.classList.add("flex");
    } else {
      navbar.classList.remove("flex");
      navbar.classList.add("hidden");
    }
  })
</script>