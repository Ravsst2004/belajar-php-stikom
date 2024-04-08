<?php
$nim = 220040046;
$nama = "Putu Ravindra Viswanatha";
$kode_jurusan = "BB224";
$angkatan = 2022;
$usia = 20;
$gender = "Laki";
$hobis = ["Renang", "Coding", "Main Games"];
$role = rand(1, 0);
?>



<?php require_once "./src/layouts/header.php" ?>

<div class="flex flex-col mt-56 text-center gap-y-8">
  <h1 class="text-7xl font-bold ">What kind of web is this?</h1>
  <p class="text-3xl ">This web is about what i learn in 1 semester of <span class="font-bold text-blue-700">Back end <br> web development</span> lecture. Learn from basic, make some <br> progress, and more!!</p>
  <p class="text-3xl underline">Maybe you need to know who i am.</p>
  <p class="text-3xl">"Sup!! My name is <span class="font-bold text-blue-700">Putu Ravindra Viswanatha</span>. I am 20 <br> years old. My student ID is 220040046, and my class is <br> BB224. I belong to the class of 2022. I am male."</p>
  <!-- <div class="w-12 flex mx-auto gap-x-2">
    <a href=""><img src="public/svg/instagram.svg" alt="instagram"></a>
    <a href=""><img src="public/svg/facebook.svg" alt=""></a>
  </div> -->
</div>





<!-- Card Perkenalan diri -->
<!-- <div class="grid grid-cols-4 gap-4 mt-32">
  <?php for ($i = 0; $i < 4; $i++) : ?>
    <div class=" flex flex-col items-center mt-10">
      <div class=" max-w-sm rounded overflow-hidden shadow-lg">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">
            <?= $nama ?>
            <span class="font-thin text-sm"><?= $role == 1 ? "Admin" : "Guest" ?></span>
          </div>
          <p class="text-gray-700 text-base">
            <?= "Usia saya $usia tahun. nim saya $nim kelas saya $kode_jurusan. Saya angkatan $angkatan. Saya seorang $gender!." ?>
          </p>
        </div>
        <div class="px-6 pt-4 pb-2">
          <?php foreach ($hobis as $hobi) : ?>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"><?= $hobi ?></span>
          <?php endforeach ?>
        </div>
      </div>
    </div>
  <?php endfor ?>
</div> -->


<?php require_once("./src/layouts/footer.php") ?>