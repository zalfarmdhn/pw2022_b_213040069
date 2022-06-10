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
    </style>

</head>

<body>

    <?php include_once 'inc/user-header.php'; ?>

    <!-- Menu -->

    <!-- Carousel -->
    <div id="carouselExampleInterval" class="carousel slide w-50 mx-auto top" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="10000">
                <img src="assets/img/bg-login.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-interval="2000">
                <img src="assets/img/bg-login.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/img/bg-login.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleInterval" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleInterval" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
        <h3 class="heading-text">Selamat datang di Punimu!</h3>
    </div>
    <hr class="container featurette-divider">
    <!-- End of carousel -->


    <!-- Marketing messaging and featurettes
      ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
        <?php if (!isset($_SESSION["login"])) { ?>
            <h2>Silahkan Login</h2>
            <a href="login.php" class="btn btn-primary">Login</a>
            <hr class="featurette-divider">
        <?php } else { ?>
            <img src="assets/img/punimu.png" class=" d-flex mx-auto pr-5" weight="150px" height="150px">
            <h2 class="text-center">Tentang Kami</h2>
            <p>Selamat datang, <?= $_SESSION["nama"]; ?>! Kami adalah website penyedia portal layanan anime legal yang dimuat dengan database kami. Silahkan eksplorasi di website ini. </p>
            <hr class="featurette-divider">
        <?php } ?>
        <h2 class="text-center">Top Anime</h2>
        <div class="card bg-dark text-white w-50 mx-auto">
            <img class="card-img gradient" src="assets/img/hxhcover.jpg" alt="Card image">
            <a href="view.php?id=13" class="card-img-overlay gradient">
                <h2 class="card-title text-light">Hunter X Hunter</h2>
                <p class="card-text text-light">579,574 visits</p>
            </a>
        </div>
        <div class="card bg-dark text-white mt-2 w-50 mx-auto">
            <img class="card-img gradient" src="assets/img/bojji.jpg" alt="Card image">
            <a href="view.php?id=1" class="card-img-overlay gradient">
                <h2 class="card-title text-light">Ousama Ranking</h2>
                <p class="card-text text-light">144,354 visits</p>
            </a>
        </div>
        <hr class="featurette-divider">
        <h2 class="text-center">Supported Streaming Platform</h2>
        <div class="row g-4">
            <a href="https://www.netflix.com" class="col-lg-4 col-md-6 text-center">
                <div class="stream-tab mt-3">
                    <img src="assets/img/netflix.png" style="width: 200px; height: 150px;">
                    <h5 class="mt-2 text-dark"><strong>Netflix</strong></h5>
                </div>
            </a>
            <a href="https://www.crunchyroll.com" class="col-lg-4 col-md-6 text-center">
                <div class="stream-tab mt-3">
                    <img src="assets/img/crunchyroll.png" style="width: 180px; height: 150px;">
                    <h5 class="mt-2 text-dark"><strong>Crunchyroll</strong></h5>
                </div>
            </a>
            <a href="https://www.bilibili.tv/id" class="col-lg-4 col-md-6 text-center">
                <div class="stream-tab mt-3">
                    <img src="assets/img/bstation.png" style="width: 180px; height: 150px;">
                    <h5 class="mt-2 text-dark"><strong>Bstation</strong></h5>
                </div>
            </a>
        </div>


    </div><!-- /.container -->
    </div>

    <!-- FOOTER -->
    <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 500" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150">
        <path d="M 0,500 C 0,500 0,250 0,250 C 90.28571428571428,284.5357142857143 180.57142857142856,319.07142857142856 300,315 C 419.42857142857144,310.92857142857144 568,268.25 691,243 C 814,217.75 911.4285714285716,209.92857142857142 1032,214 C 1152.5714285714284,218.07142857142858 1296.2857142857142,234.03571428571428 1440,250 C 1440,250 1440,500 1440,500 Z" stroke="none" stroke-width="0" fill="#343a40ff" class="transition-all duration-300 ease-in-out delay-150 path-0"></path>
    </svg>
    <!-- End of footer -->



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