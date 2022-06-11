<?php
require 'functions.php';
session_start();

$conn = koneksi();
$anime = query("SELECT * FROM anime");
$kategori = query("SELECT * FROM kategori");



?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!-- Personal Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">

    <title>Punimu</title>

    <style>
        .top {
            margin-top: 10rem;
        }

        .heading-text {
            color: #343A40;
            font-family: 'Poppins', sans-serif;
        }

        .stream-tab {
            padding: 32px;
            box-shadow: 0px 7px 30px rgba(0, 0, 0, 0.09);
        }

        .gradient {
            background: linear-gradient(rgba(59, 59, 59, 0.85), rgba(59, 59, 59, 0.85));
            background-size: cover;
        }

        a:hover {
            text-decoration: none;
        }

        .detail {
            letter-spacing: 2px;
        }

        h1 {
            font-family: 'Roboto Slab', serif;
        }

        p,
        a {
            font-family: 'Poppins', sans-serif;
        }

        .promo-text h2,
        .promo-text p {
            font-size: 19px;
        }
    </style>

</head>

<body>

    <?php include_once 'inc/user-header.php'; ?>

    <!-- Menu -->

    <!-- Carousel -->
    <div class="row mb-5">
        <div class="col top">
            <img src="assets/img/onodera.png" alt="">
        </div>
        <div class="col top">
            <h1>Selamat datang di Punimu!</h1>
            <p>Portal anime-mu</p>
            <?php if (isset($_SESSION["login"])) { ?>
                <a href="anime-section.php" class="btn btn-primary"><i class="fas fa-clapperboard"></i> Anime</a>
                <a href="#" class="btn btn-primary"><i class="fas fa-book"></i> Manga</a>
            <?php } else { ?>
                <a href="login.php" class="btn btn-primary">Login</a>
            <?php } ?>
        </div>
    </div>


    <!-- End of carousel -->


    <!-- Marketing messaging and featurettes
      ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
        <hr class="featurette-divider">
        <?php if (isset($_SESSION["login"])) { ?>
            <p class="detail mt-3 text-primary text-center">
                <strong>WELCOME</strong>
            </p>
            <!-- <img src="assets/img/punimu.png" class="mt-3 d-flex pr-5" weight="150px" height="150px"> -->
            <p>Hallo, <?= $_SESSION["nama"]; ?>! Kami adalah website penyedia portal layanan anime legal yang dimuat dalam database kami. <br> Silahkan berjelajah di website ini. </p>
            <hr class="featurette-divider">
        <?php } ?>
        <p class="detail mt-3 text-primary text-center">
            <strong>TOP ANIME</strong>
        </p>
        <div class="card bg-dark text-white w-50 mx-auto">
            <img class="card-img gradient" src="assets/img/hxhcover.jpg" alt="Card image">
            <a href="view.php?id=13" class="card-img-overlay gradient promo-text">
                <h2 class="card-title text-light">Hunter X Hunter</h2>
                <p class="card-text text-light">579,574 watched</p>
            </a>
        </div>
        <div class="card bg-dark text-white mt-2 w-50 mx-auto">
            <img class="card-img gradient" src="assets/img/bojji.jpg" alt="Card image">
            <a href="view.php?id=1" class="card-img-overlay gradient promo-text">
                <h2 class="card-title text-light">Ousama Ranking</h2>
                <p class="card-text text-light">144,354 watched</p>
            </a>
        </div>
        <hr class="featurette-divider">
        <p class="detail mt-3 text-primary text-center">
            <strong>STREAMING PLATFORM</strong>
        </p>
        <div class="row g-4">
            <a href="https://www.netflix.com" class="col-lg-4 col-md-6 text-center">
                <div class="stream-tab mt-3">
                    <img src="assets/img/netflix.png" style="width: 200px; height: 150px;">
                    <h5 class="mt-2 text-dark font-weight-light">Netflix</h5>
                </div>
            </a>
            <a href="https://www.crunchyroll.com" class="col-lg-4 col-md-6 text-center">
                <div class="stream-tab mt-3">
                    <img src="assets/img/crunchyroll.png" style="width: 180px; height: 150px;">
                    <h5 class="mt-2 text-dark font-weight-light">Crunchyroll</h5>
                </div>
            </a>
            <a href="https://www.bilibili.tv/id" class="col-lg-4 col-md-6 text-center">
                <div class="stream-tab mt-3">
                    <img src="assets/img/bstation.png" style="width: 180px; height: 150px;">
                    <h5 class="mt-2 text-dark font-weight-light">Bstation</h5>
                </div>
            </a>
        </div>


    </div><!-- /.container -->
    </div>

    <?php include_once 'inc/user-footer.php'; ?>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="vendor/ckeditor5/build/ckeditor.js"></script>
    <script src="assets/js/script.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
</body>

</html>