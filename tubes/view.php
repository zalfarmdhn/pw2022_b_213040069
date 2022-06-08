<?php
require 'functions.php';
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
}

// ambil id dari URL
$id = $_GET["id"];


// query data anime berdasarkan id
$ani = query("SELECT * FROM anime NATURAL JOIN kategori WHERE id = $id")[0];
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Personal Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <title>Punimu</title>
    <style>
        .logo {
            width: 62px;
            height: 50px;
        }

        .top {
            margin-top: 5rem;
        }
    </style>
</head>

<body>
    <?php include_once 'inc/user-header.php'; ?>

    <!-- Content -->
    <div class="container mx-auto top">
        <nav aria-label="breadcrumb mb-5">
            <ol class="breadcrumb bg-light">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="anime-section.php">Anime</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $ani["nama_anime"]; ?></li>
            </ol>
        </nav>
        <div class="pb-5 row mt-5">
            <div class="col-4 md-5">
                <img class="img-fluid shadow" src="assets/img/<?= $ani["poster_anime"]; ?>" alt="">
            </div>
            <div class="col-8 md-5">
                <h1 class="mb-4"><i class="fas fa-tv"></i> <b><?= $ani["nama_anime"]; ?></b></h1>
                <div class="row">
                    <div class="col-6 col-sm-3">
                        <h4><b>Nama Anime</b></h4>
                    </div>
                    <div class="col-6 col-sm-3">
                        <?= $ani["nama_anime"]; ?>
                    </div>
                    <div class="col-6 col-sm-3">
                        <h4><b>Studio</b></h4>
                    </div>
                    <div class="col-6 col-sm-3">
                        <?= $ani["studio"]; ?>
                    </div>
                    <div class="col-6 col-sm-3">
                        <h4><b>Episode</b></h4>
                    </div>
                    <div class="col-6 col-sm-3">
                        <?= $ani["episode"]; ?>
                    </div>
                    <div class="col-6 col-sm-3">
                        <h4><b>Status</b></h4>
                    </div>
                    <div class="col-6 col-sm-3">
                        <?= $ani["status_anime"]; ?>
                    </div>
                    <div class="col-6 col-sm-3">
                        <h4><b>Rilis</b></h4>
                    </div>
                    <div class="col-6 col-sm-3">
                        <?= $ani["rilis"]; ?>
                    </div>
                    <div class="col-6 col-sm-3">
                        <h4><b>Genre</b></h4>
                    </div>
                    <div class="col-6 col-sm-3">
                        <?= $ani["genre"]; ?>
                    </div>
                </div>
                <div class="container row">
                    <p class="mb-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati quos tempora, ab nobis modi in quisquam eos! Maxime, soluta? Non iure veniam sequi error cumque tempora nam veritatis pariatur amet sapiente officia ipsa iste tenetur omnis, quidem officiis id! Laborum deserunt totam ipsa, beatae voluptates corrupti cupiditate eos tempore quam vero repellat ad nesciunt rerum deleniti dolor ut quod veritatis omnis expedita doloremque? Consectetur numquam sed ullam quod architecto dolore ducimus, doloribus, in tenetur placeat pariatur atque, natus consequuntur ratione praesentium aliquam non reprehenderit rerum enim culpa quis. Reprehenderit ab debitis et iusto corrupti error modi distinctio consectetur sed eveniet.<br><br>
                        Incidunt sunt nesciunt eum, velit magnam eveniet. Corrupti voluptatem doloribus nisi perspiciatis sequi libero laborum impedit rerum ducimus, quis itaque obcaecati in labore alias, amet accusantium repellat laboriosam, ut placeat sunt aspernatur sapiente. Maiores hic eos quisquam recusandae commodi, deserunt et veritatis!
                    </p>
                </div>
                <h4>Tonton <?= $ani["nama_anime"]; ?> di platform streaming dibawah ini! </h4>
                <div class="row">
                    <div class="col-1">
                        <a href="#" class="logo"><img src="assets/img/netflix.png" alt="" class="logo"></a>
                    </div>
                    <div class="col-1 ml-2">
                        <a href="#" class=""><img src="assets/img/crunchyroll.png" alt="" class="logo"></a>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- Footer -->
    <footer class="mt-5 fs-6 bg-dark">
        <div class="copyright">
            <p>©2022 Punimu</p>
        </div>
        <div class="row">
            <a href="#"><i class="fab fa-instagram mx-5" aria-hidden="true"></i></a>
            <a href="#"><i class="fab fa-twitter mx-5" aria-hidden="true"></i></a>
            <a href="#"><i class="fab fa-facebook-f mx-5" aria-hidden="true"></i></a>
        </div>
    </footer>
    <!-- End of Footer -->



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
</body>

</html>