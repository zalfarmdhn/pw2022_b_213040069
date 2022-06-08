<?php
require 'functions.php';
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
}
$conn = koneksi();
$anime = query("SELECT * FROM anime NATURAL JOIN kategori") or die(mysqli_error($conn));
$kategori = query("SELECT * FROM kategori");

// mendapatkan id dari URL
// $id = $_GET["id_kategori"];
// $cari_kategori = query("SELECT * FROM anime WHERE id_kategori = $id");



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
    <!-- Favicons -->
    <link rel="icon" href="/assets/img/favicon.ico">

    <style>
        .top {
            margin-top: 5rem;
        }

        a:hover {
            text-decoration: none;
        }
    </style>
</head>

<body>

    <?php include_once 'inc/user-header.php'; ?>

    <!-- Menu -->

    <div class="container top">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-light">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Anime</li>
            </ol>
        </nav>
        <h3 class="menu-title float-left">Anime</h3>
        <div class="row col-3 float-right">

            <form class="d-none d-sm-inline-block form-inline navbar-search" action="" method="post">
                <div class="input-group">
                    <input type="text" name="keyword" class="form-control bg-light border-1 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" id="keyword">
                    <button class="btn btn-primary" type="submit" name="cari" id="filter" hidden>
                    </button>
                </div>
            </form>


        </div>
        <!-- End of menu -->


        <!-- Card/content -->
        <div class="card mb-3 row container border-0">
            <div class="row no-gutters" id="content">
                <?php foreach ($anime as $ani) : ?>
                    <a href="view.php?id=<?= $ani["id"]; ?>">
                        <div class="mt-3 mr-3">
                            <img class="rounded shadow" src="assets/img/<?= $ani["poster_anime"]; ?>" width="200px" height="300px">
                            <div class="card-body pr-3">
                                <h6 class="card-text row"><small class="text-muted"><?= $ani["studio"]; ?></small></h6>
                                <h5 class="card-title row"><?= $ani["nama_anime"]; ?></h5>
                                <p class="card-text row"><small class="text-muted"><?= $ani["rilis"]; ?></small></p>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- End of card -->

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