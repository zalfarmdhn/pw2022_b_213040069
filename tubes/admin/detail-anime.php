<?php
session_start();
require '../functions.php';
// Mengecek session dan login admin atau user
checkLoginAdmin();

// ambil id dari URL
$id = $_GET["id"];

// query data anime berdasarkan id
$ani = query("SELECT * FROM anime INNER JOIN kategori ON anime.id_kategori = kategori.id_kategori WHERE id = $id")[0] or die('KONEKSI GAGAL');



?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Punimu - Details</title>

    <!-- Custom fonts for this template -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Personal Custom CSS -->
    <link href="../assets/css/style.css" rel="stylesheet">

</head>

<body id="page-top">

    <?php require_once '../inc/header.php'; ?>

    <!-- Begin Page Content -->
    <div class="container">
        <!-- Page Heading -->
        <!-- Kembali -->
        <div class="mb-1 row">
            <a href="anime.php"><i class="fas fa-arrow-left mb-3"></i> Kembali</a>
        </div>
        <!-- Page Content -->
        <div class="pb-5 row mt-5">
            <div class="col-4 md-5">
                <img class="img-fluid shadow" src="../assets/img/<?= $ani["poster_anime"]; ?>" alt="">
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
                <div class="container row pl-3">
                    <p class="mb-3"><?= $ani["deskripsi"]; ?>
                    </p>
                </div>
                <h4>Tonton <?= $ani["nama_anime"]; ?> di platform streaming dibawah ini! </h4>
                <div class="row">
                    <div class="col-1">
                        <a href="#" class="logo"><img src="../assets/img/netflix.png" alt="" class="logo"></a>
                    </div>
                    <div class="col-1 ml-2">
                        <a href="#" class=""><img src="../assets/img/crunchyroll.png" alt="" class="logo"></a>
                    </div>
                </div>
            </div>
        </div>


        <?php require_once '../inc/footer.php'; ?>

</body>

</html>