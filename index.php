<?php require_once "./src/layouts/header.php" ?>

<section class="w-screen">

  <div class=" md:flex items-center justify-between px-10 sm:px-16 md:px-20 lg:px-28 pt-36 lg:pt-60">
    <div class=" flex flex-col xl:gap-x-4 gap-y-2">
      <h1 class="text-2xl md:text-3xl lg:text-6xl font-bold ">Back-end Web <br> Development Lecture</h1>
      <p class="text-md lg:text-xl text-justify w-full lg:w-[35rem]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, recusandae nisi! Dignissimos quas eum omnis labore et. Modi harum odio totam quia perferendis?</p>
      <a href="#result" class="text-md bg-blue-600 md:text-lg p-2 w-fit rounded-md text-white hover:bg-blue-800 hover:ring-4 hover:outline-none hover:ring-blue-300">Know what i made</a>
    </div>
    <div class="hidden xl:flex">
      <img src="./public/svg/landing_page.svg" alt="web-development" width="650">
    </div>
  </div>



  <!-- Grid layouts -->
  <?php $resultOf1stSemeter = [] ?>
  <div class="px-10 sm:px-16 md:px-20 lg:px-28 mt-20 lg:mt-32" id="result">
    <h1 class="text-lg font-semibold lg:text-2xl">Results of 1 Semester</h1>
    <div class="grid grid-cols-3 gap-4 text-center lg:text-justify">
      <a href="kabataku.php" class="border  lg:w-full border-gray-300 lg:p-4 hover:text-white hover:bg-gradient-to-br from-blue-700 ">
        <h1 class="text-sm xl:text-xl">Kabataku</h1>
        <img src="public/img/Kabataku.png" alt="kabataku" class="border-2 border-black">
      </a>
      <a href="kabataku.php" class="border  lg:w-full border-gray-300 lg:p-4 hover:text-white hover:bg-gradient-to-br from-blue-700 ">
        <h1 class="text-sm xl:text-xl">Kabataku</h1>
        <img src="public/img/Crud.png" alt="crud-php" class="border-2 border-black">
      </a>
      <?php for ($i = 1; $i <= 8; $i++) : ?>
        <div class="border border-gray-300 lg:p-4 text-sm xl:text-xl"><?= "Coming Soon!" ?></div>
      <?php endfor ?>
    </div>
  </div>
</section>




<?php require_once "./src/layouts/footer.php" ?>