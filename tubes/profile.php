<?php
require 'functions.php';
session_start();

$conn = koneksi();
$anime = query("SELECT * FROM anime");
$user = query("SELECT * FROM users");

// ambil data di URL
$id = $_GET["id"];

$uadm = query("SELECT * FROM users WHERE id = $id")[0];

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
    </style>

</head>

<body>

    <?php include_once 'inc/user-header.php'; ?>

    <!-- Menu -->

    <!-- Profile -->
    <div class="container card shadow top">
        <ul>
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $uadm["id"]; ?>">
                    <a href="admin.php" class="mt-2"><i class="fas fa-arrow-left mb-3"></i> Kembali</a>
                    <div class="mb-3 row">
                        <label for="genre" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" required style="width: 150px;" value="<?= $uadm["nama"]; ?>">
                        </div>
                        <label for="genre" class="col-sm-2 mt-3 col-form-label">Username</label>
                        <div class="col-sm-10 mt-3">
                            <input type="text" class="form-control" id="username" name="username" required style="width: 150px;" value="<?= $uadm["username"]; ?>">
                        </div>
                        <label for="genre" class="col-sm-2 mt-3 col-form-label">Email</label>
                        <div class="col-sm-10 mt-3">
                            <input type="text" class="form-control" id="email" name="email" required style="width: 200px;" value="<?= $uadm["email"]; ?>">
                        </div>
                        <label for="genre" class="col-sm-2 mt-3 col-form-label">Password Baru</label>
                        <div class="col-sm-10 mt-3">
                            <input type="password" class="form-control" id="password" name="password" style="width: 200px;" value="">
                        </div>
                        <label for="genre" class="col-sm-2 mt-3 col-form-label">Konfirm Password</label>
                        <div class="col-sm-10 mt-3">
                            <input type="password" class="form-control" id="confPass" name="confPass" style="width: 200px;" value="">
                        </div>
                    </div>
                    <!-- End of profile -->


                    <!-- Marketing messaging and featurettes
      ================================================== -->
                    <!-- Wrap the rest of the page in another container to center all the content. -->
        </ul>
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