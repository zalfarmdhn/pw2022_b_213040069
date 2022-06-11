<?php
require 'functions.php';
session_start();
if (!isset($_SESSION["login"])) {
    echo "      <script>
                    alert('Anda harus login terlebih dahulu!');       
                    window.location.href = 'login.php';
                </script>
         ";
}

$filter = $_GET["id"];

$anime = query("SELECT * FROM anime NATURAL JOIN kategori WHERE id_kategori = '$filter'");
$kategori = query("SELECT * FROM kategori");

$nama = query("SELECT genre FROM kategori WHERE id_kategori = '$filter'")[0];
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
            margin-top: 5rem;
        }

        a:hover {
            text-decoration: none;
        }

        h3,
        h1 {
            font-family: 'Roboto Slab', serif;
        }

        h6,
        h5 {
            font-family: 'Poppins', sans-serif;
        }

        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
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
                <li class="breadcrumb-item"><a href="anime-section.php">Anime</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $nama["genre"]; ?></li>
            </ol>
        </nav>
        <h3 class="menu-title float-left">Anime <?= $nama["genre"]; ?></h3>
        <!-- End of menu -->

        <!-- Card/content -->
        <div class="card mb-3 row container border-0">
            <div class="row no-gutters" id="content">
                <?php if (!empty($anime)) { ?>
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
                <?php } else { ?>
                    <div class="mt-5 mb-5 text-center">
                        <h1 style="color: #ddd;">Data tidak tersedia</h1>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- End of card -->

    <?php include_once 'inc/user-footer.php'; ?>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="vendor/ckeditor5/build/ckeditor.js"></script>
    <script src="assets/js/filter.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
</body>

</html>