<?php require_once "./src/layouts/header.php" ?>

  <!-- Perkalian -->
  <div class="mx-[40rem] mt-10">
    <button class="w-full bg-blue-600 text-white text-xl py-2 hover:bg-blue-700" id="collapsible">Perkalian</button>

    <div class="hidden" id="contentCollapsible">
      <!-- <div class="flex flex-row w-full text-center">
        <h1 class="bg-green-200 w-1/2">Ganjil</h1>
        <h1 class="bg-red-200 w-1/2">Genap</h1>
      </div> -->

      <div class="grid grid-cols-2 b-2 border-black">
        <!-- loop pertama -->
        <?php for ($k = 1; $k <= 4; $k++) : ?>
          <div class="flex flex-col text-center border-black border-2">
            <?php for ($j = 1; $j <= 10; $j++) : ?>
              <?php if ($k % 2 == 0) : ?>
                <div>
                  <?php if ($j == 1) : ?>
                    <h1 class="px-10 border-y-2 border-black">Perkalian <?= $k ?></h1>
                  <?php endif ?>
                  <p><?= $j ?> x <?= $k ?> = <?= $j * $k ?></p>
                </div>
              <?php endif ?>
              <!--  -->
              <?php if ($k % 2 == 1) : ?>
                <div>
                  <?php if ($j == 1) : ?>

                    <h1 class="px-10 border-y-2 border-black">Perkalian <?= $k ?></h1>
                  <?php endif ?>
                  <p><?= $j ?> x <?= $k ?> = <?= $j * $k ?></p>
                </div>
              <?php endif ?>
            <?php endfor ?>
          </div>
        <?php endfor ?>
        <!-- end loop pertama -->
      </div>
    </div>
  </div>




  <!-- Latihan -->
  <?php
  // $nilai1 = 70;
  // $nilai2 = 70;
  // $nilai3 = 70;
  // $nilai4 = 70;
  // $nilai5 = 70;
  // $rata_rata = ($nilai1 + $nilai2 + $nilai3 + $nilai4 + $nilai5) / 5;
  // if ($rata_rata >= 70) {
  //   echo "Selamat, anda lulus";
  // } else {
  //   echo "Kocak Gaming";
  // }

  // $k = 0;
  // while ($k < 5) {
  //   echo $k;
  //   $k++;
  // }

  // $k = 0;
  // do {
  //   echo($k);
  //   $k++;
  // } while($k < 0);
  ?>


<?php require_once "./src/layouts/footer.php" ?>