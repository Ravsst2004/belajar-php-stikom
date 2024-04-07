<?php require_once "./src/layouts/header.php" ?>


<div class="flex items-center justify-between px-28 pt-56">
  <div class=" flex flex-col gap-y-2">
    <h1 class="text-6xl font-bold ">Back-end Web <br> Development Lecture</h1>
    <p class="text-xl text-justify w-[35rem]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, recusandae nisi! Dignissimos quas eum omnis labore et. Modi harum odio totam quia perferendis?</p>
    <a href="#result" class="bg-blue-600 text-lg p-2 w-fit rounded-md text-white hover:bg-blue-800 hover:ring-4 hover:outline-none hover:ring-blue-300">Know what i made</a>
  </div>
  <div class="">
    <img src="./public/svg/landing_page.svg" alt="web-development" width="650">
  </div>
</div>




<?php $resultOf1stSemeter = [] ?>
<div class="p-28 mt-32" id="result">
  <h1 class="font-semibold text-2xl ">Results of 1 Semester</h1>
  <div class="grid grid-cols-3 gap-4">
    <a href="kabataku.php" class="border border-gray-300 p-4 hover:text-white hover:bg-gradient-to-br from-blue-700 ">
      <h1>Kabataku</h1>
      <img src="public/img/Kabataku.png" alt="kabataku" class="border-2 border-black">
    </a>
    <?php for ($i = 1; $i <= 8; $i++) : ?>
      <div class="border border-gray-300 p-4"><?= "Coming Soon!" ?></div>
    <?php endfor ?>
  </div>
</div>



<?php require_once "./src/layouts/footer.php" ?>