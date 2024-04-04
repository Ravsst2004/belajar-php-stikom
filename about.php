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

<!-- Card Perkenalan diri -->
<div class="grid grid-cols-4 gap-4 mb-8">
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
</div>


<?php require_once("./src/layouts/footer.php") ?>