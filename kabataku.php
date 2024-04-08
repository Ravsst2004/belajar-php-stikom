<?php require_once "./src/layouts/header.php" ?>


<!-- TABEL KABATAKU -->
<div class="flex flex-row justify-center mt-32 gap-x-12 ">
  <!-- Perkalian -->
  <div class="w-[27rem] ">
    <button class="w-full bg-blue-700 text-white text-xl py-2 rounded-md hover:bg-blue-800" id="collapsible1">Perkalian</button>
    <div class="hidden" id="contentCollapsible1">
      <!-- <div class="flex flex-row w-full text-center">
            <h1 class="bg-green-200 w-1/2">Ganjil</h1>
            <h1 class="bg-red-200 w-1/2">Genap</h1>
          </div> -->

      <div class="grid grid-cols-2 b-2 border-black">
        <!-- loop pertama -->
        <?php for ($k = 1; $k <= 10; $k++) : ?>
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

  <!-- Pembagian -->
  <div class="w-[27rem]">
    <button class="w-full bg-blue-600 text-white text-xl py-2 rounded-md hover:bg-blue-700" id="collapsible2">Pembagian</button>

    <div class="hidden" id="contentCollapsible2">
      <div class="grid grid-cols-2 b-2 border-black">
        <!-- Loop untuk pembagian ganjil -->
        <?php for ($k = 1; $k <= 10; $k++) : ?>
          <?php if ($k % 2 == 1) : ?>
            <div class="text-center border-black border-2">
              <div>
                <h1 class="px-10 border-y-2 border-black">Pembagian <?= $k ?></h1>
                <?php for ($j = 1; $j <= 10; $j++) : ?>
                  <p><?= $j * $k ?> / <?= $k ?> = <?= $j * $k / $k ?></p>
                <?php endfor ?>
              </div>
            </div>
          <?php endif ?>

          <?php if ($k % 2 == 0) : ?>
            <div class="flex flex-col text-center border-black border-2">
              <div>
                <h1 class="px-10 border-y-2 border-black">Pembagian <?= $k ?></h1>
                <?php for ($j = 1; $j <= 10; $j++) : ?>
                  <p><?= ($j * $k) ?> / <?= $k ?> = <?= ($j * $k) / $k ?></p>
                <?php endfor ?>
              </div>
            </div>
          <?php endif ?>
        <?php endfor ?>

      </div>
    </div>
  </div>

  <!-- Pertambahan -->
  <div class="w-[27rem]">
    <button class="w-full bg-blue-600 text-white text-xl py-2 rounded-md hover:bg-blue-700" id="collapsible3">Pertambahan</button>

    <div class="hidden" id="contentCollapsible3">
      <div class="grid grid-cols-2 b-2 border-black">
        <!-- Loop untuk Pertambahan ganjil -->
        <?php for ($k = 1; $k <= 10; $k++) : ?>
          <?php if ($k % 2 == 1) : ?>
            <div class="text-center border-black border-2">
              <div>
                <h1 class="px-10 border-y-2 border-black">Pertambahan <?= $k ?></h1>
                <?php for ($j = 1; $j <= 10; $j++) : ?>
                  <p><?= $j ?> + <?= $k ?> = <?= $j + $k ?></p>
                <?php endfor ?>
              </div>
            </div>
          <?php endif ?>

          <?php if ($k % 2 == 0) : ?>
            <div class="flex flex-col text-center border-black border-2">
              <div>
                <h1 class="px-10 border-y-2 border-black">Pertambahan <?= $k ?></h1>
                <?php for ($j = 1; $j <= 10; $j++) : ?>
                  <p><?= $j ?> + <?= $k ?> = <?= $j + $k ?></p>
                <?php endfor ?>
              </div>
            </div>
          <?php endif ?>
        <?php endfor ?>

      </div>
    </div>
  </div>

  <!-- Pengurangan -->
  <div class="w-[27rem]">
    <button class="w-full bg-blue-600 text-white text-xl py-2 rounded-md hover:bg-blue-700" id="collapsible4">Pengurangan</button>

    <div class="hidden" id="contentCollapsible4">
      <div class="grid grid-cols-2 b-2 border-black">
        <!-- Loop untuk Pengurangan ganjil -->
        <?php for ($k = 1; $k <= 10; $k++) : ?>
          <?php if ($k % 2 == 1) : ?>
            <div class="text-center border-black border-2">
              <div>
                <h1 class="px-10 border-y-2 border-black">Pengurangan <?= $k ?></h1>
                <?php for ($j = 1; $j <= 10; $j++) : ?>
                  <p><?= $j * $k ?> - <?= $k ?> = <?= $j * $k - $k ?></p>
                <?php endfor ?>
              </div>
            </div>
          <?php endif ?>

          <?php if ($k % 2 == 0) : ?>
            <div class="flex flex-col text-center border-black border-2">
              <div>
                <h1 class="px-10 border-y-2 border-black">Pengurangan <?= $k ?></h1>
                <?php for ($j = 1; $j <= 10; $j++) : ?>
                  <p><?= ($j * $k) ?> - <?= $k ?> = <?= ($j * $k) - $k ?></p>
                <?php endfor ?>
              </div>
            </div>
          <?php endif ?>
        <?php endfor ?>

      </div>
    </div>
  </div>

</div>

<script>
  let coll1 = document.getElementById("collapsible1");
  let coll2 = document.getElementById("collapsible2");
  let coll3 = document.getElementById("collapsible3");
  let coll4 = document.getElementById("collapsible4");
  let content1 = document.getElementById("contentCollapsible1");
  let content2 = document.getElementById("contentCollapsible2");
  let content3 = document.getElementById("contentCollapsible3");
  let content4 = document.getElementById("contentCollapsible4");


  coll1.addEventListener("click", function() {
    toggleContent(content1);
  });

  coll2.addEventListener("click", function() {
    toggleContent(content2);
  });

  coll3.addEventListener("click", function() {
    toggleContent(content3);
  });

  coll4.addEventListener("click", function() {
    toggleContent(content4);
  });

  function toggleContent(content) {
    if (content.classList.contains("hidden")) {
      content.classList.remove("hidden");
    } else {
      content.classList.add("hidden");
    }
  }
</script>


<?php require_once "./src/layouts/footer.php" ?>