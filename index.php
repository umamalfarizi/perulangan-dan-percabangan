<?php

$artikel = array (
    (object) array (
        'gambar' => 'image/1.jpg',
        'judul' => 'Keutamaan Surat Al-Mulk & Bacaannya Bagi Umat Muslim',
        'text' => 'Surat Al-Mulk merupakan surat ke-67 dalam Alquran yang memiliki 30 ayat. Al-Mulk termasuk ke dalam golongan surat Makkiyah, yang diturunkan setelah...'
    ),
    (object) array (
        'gambar' => 'image/2.jpg',
        'judul' => 'Ciri-ciri Teman Sejati Menurut Islam',
        'text' => 'Memiliki teman yang seru dan bisa diajak berbincang tentang apa saja pastinya menyenangkan. Apalagi jika kamu bisa berbagi rahasia dan keluh kesah...'
    ),
    (object) array (
        'gambar' => 'image/3.jpg',
        'judul' => 'Kenali Malaikat Israfil, Sang Peniup Sangkakala di Hari Akhir',
        'text' => 'Malaikat adalah makhluk ciptaan Allah SWT yang dibuat dari nur atau cahaya. Malaikat berjumlah ribuan, namun sebagai umat-NYA kita wajib mengimani...'
    ),
    (object) array (
        'gambar' => 'image/4.jpg',
        'judul' => 'Doa untuk Meminta Keselamatan Dunia dan Akhirat',
        'text' => 'Sebagai umat muslim, selain menjalankan kewajiban, para muslim juga dianjurkan untuk selalu berdoa kepada Allah SWT. Dengan berdoa, hubungan kamu dan...'
    ),
    (object) array (
        'gambar' => 'image/5.jpg',
        'judul' => 'Kisah 4 Sahabat yang Mendapat Anugerah Menuliskan Wahyu',
        'text' => 'Pada zaman Rasulullah SAW, tidak banyak sahabat yang mampu membaca dan menulis. Bahkan, Rasulullah SAW sendiri pun tidak pandai membaca dan menulis...'
    ),
    (object) array (
        'gambar' => 'image/6.jpg',
        'judul' => '99 Asmaul Husna, Berikut Arti dan Manfaat Menghafalkannya',
        'text' => 'Allah SWT memiliki 99 nama yang indah atau yang disebut dengan Asmaul Husna. Tentunya, Asmaul Husna ini tersebar di surat-surat dalam Alquran. Sehingga...'
    )
);

$carousel = array (
    (object) array (
        'gambar' => 'image/2.jpg',
        'judul' => 'Ciri-ciri Teman Sejati Menurut Islam'
    ),
    (object) array (
        'gambar' => 'image/3.jpg',
        'judul' => 'Kenali Malaikat Israfil, Sang Peniup Sangkakala di Hari Akhir'
    ),
    (object) array (
        'gambar' => 'image/4.jpg',
        'judul' => 'Doa untuk Meminta Keselamatan Dunia dan Akhirat'
    ),
    (object) array (
        'gambar' => 'image/5.jpg',
        'judul' => 'Kisah Empat Sahabat Rasul yang Mendapat Anugerah Menuliskan Wahyu',
    ),
    (object) array (
        'gambar' => 'image/6.jpg',
        'judul' => '99 Asmaul Husna, Berikut Arti dan Manfaat Menghafalkannya'
        )
);

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <title>Logika Pemrograman</title>
  </head>

  <body id="home">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Umam Alfarizi</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#news">News</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- /NAVBAR -->

    <!-- CAROUSEL -->
    <div id="carouselExampleCaptions" class="carousel slide mb-4" data-bs-ride="carousel">
      <!-- Carousel Indicator -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
      </div>
      <!---------------------------->

      <!-- Carousel Inner -->
      <div class="carousel-inner">

        <div class="carousel-item active">
            <img src="image/1.jpg" alt="gambar 1" class="d-block w-100" />
            <div class="carousel-caption d-none d-md-block">
                <h5>Keutamaan Surat Al-Mulk & Bacaannya Bagi Umat Muslim</h5>
            </div>
        </div>

        <?php foreach ($carousel as $data) { ?>

            <div class="carousel-item">
                <img src="<?= $data->gambar?>" class="d-block w-100" alt="gambar 2" />
                <div class="carousel-caption d-none d-md-block">
                    <h5><?= $data->judul?></h5>
                </div>
            </div>

        <?php } ?>

      </div>
      <!---------------------------->

      <!-- Carousel Navigation -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!---------------------------->

    <!-- /CAROUSEL -->

    <!-- GRID -->
    <div class="pt-5" id="about">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card text-center py-3">
              <div class="card-body">
                <div class="icon mb-4">
                  <i class="bi bi-alarm"></i>
                </div>
                <h5 class="card-title">Ketelitian dan Kedisiplinan</h5>
                <p class="card-text">Belajar ngoding harus teliti dan disiplin.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card text-center py-3">
              <div class="card-body">
                <div class="icon mb-4">
                  <i class="bi bi-alarm"></i>
                </div>
                <h5 class="card-title">Ketelitian dan Kedisiplinan</h5>
                <p class="card-text">Belajar ngoding harus teliti dan disiplin.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card text-center py-3">
              <div class="card-body">
                <div class="icon mb-4">
                  <i class="bi bi-alarm"></i>
                </div>
                <h5 class="card-title">Ketelitian dan Kedisiplinan</h5>
                <p class="card-text">Belajar ngoding harus teliti dan disiplin.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="news" class="py-5">
      <div class="container">
        <div class="row">
          <div class="col">
            <h2 class="text-center mb-3">News</h2>
          </div>
        </div>

        <div class="row">

            <?php foreach ($artikel as $data) { ?>

            <div class="col-md-4">
                <div class="card mb-3">
                <img src="<?=$data->gambar ?>" class="card-img-top" />
                <div class="card-body">
                    <h5 class="card-title"> <?=$data->judul ?> </h5>
                    <p class="card-text"> <?=$data->text ?> </p>
                    <p class="card-tex"><small class="text-muted">Last updated 3 mins ago.</small></p>
                </div>
                </div>
            </div>

            <?php } ?>

        </div>
      </div>
    </div>
    <!-- /GRID -->

    <!-- FOOTER -->
    <footer class="bg-dark text-center text-white pb-5 shadow-sm">
      <p>Created with <i class="bi bi-heart-fill text-danger"></i> by <a href="https://web.facebook.com/idji.dgretonger/" target="_blank" class="fw-bold text-white">Umam Alfarizi</a></p>
    </footer>
    <!-- /FOOTER -->
  </body>
</html>
