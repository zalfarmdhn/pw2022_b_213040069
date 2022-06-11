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

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">

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

        h3,
        h1 {
            font-family: 'Roboto Slab', serif;
        }

        h4,
        p {
            font-family: 'Poppins', sans-serif;
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
                <h3 class="mb-4" style="color: #767676;"><?= $ani["nama_alternatif"]; ?></h3>
                <div class="row">
                    <div class="col-6 col-sm-3">
                        <h4><b>Nama</b></h4>
                    </div>
                    <div class="col-6 col-sm-3">
                        <p><?= $ani["nama_anime"]; ?></p>
                    </div>
                    <div class="col-6 col-sm-3">
                        <h4><b>Studio</b></h4>
                    </div>
                    <div class="col-6 col-sm-3">
                        <p><?= $ani["studio"]; ?></p>
                    </div>
                    <div class="col-6 col-sm-3">
                        <h4><b>Episode</b></h4>
                    </div>
                    <div class="col-6 col-sm-3">
                        <p><?= $ani["episode"]; ?></p>
                    </div>
                    <div class="col-6 col-sm-3">
                        <h4><b>Status</b></h4>
                    </div>
                    <div class="col-6 col-sm-3">
                        <p><?= $ani["status_anime"]; ?></p>
                    </div>
                    <div class="col-6 col-sm-3">
                        <h4><b>Rilis</b></h4>
                    </div>
                    <div class="col-6 col-sm-3">
                        <p><?= $ani["rilis"]; ?></p>
                    </div>
                    <div class="col-6 col-sm-3">
                        <h4><b>Genre</b></h4>
                    </div>
                    <div class="col-6 col-sm-3">
                        <p><?= $ani["genre"]; ?></p>
                    </div>
                </div>
                <div class="container row">
                    <p class="mb-3"><?= $ani["deskripsi"]; ?>
                    </p>
                </div>
                <h4>Tonton <?= $ani["nama_anime"]; ?> di platform streaming dibawah ini! </h4>
                <div class="row">
                    <div class="col-1 ml-2">
                        <a href="#" class="logo"><img src="assets/img/netflix.png" alt="" class="logo"></a>
                    </div>
                    <div class="col-1 ml-2">
                        <a href="#" class=""><img src="assets/img/crunchyroll.png" alt="" class="logo"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once 'inc/user-footer.php'; ?>



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