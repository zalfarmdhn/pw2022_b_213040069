<?php
session_start();
require '../functions.php';
// Mengecek session dan login admin atau user
checkLoginAdmin();

$kategori = query("SELECT * FROM kategori");

if (isset($_POST["submit"])) {

    // cek apakah data berhasil di tambahkan atau tidak
    if (tambahAnime($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'anime.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan!');
                document.location.href = 'anime.php';
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Punimu Admin - Tambah</title>

    <!-- Custom fonts for this template -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Personal Custom CSS -->
    <link href="../assets/css/style.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Include header from ../inc/ -->
    <?php require_once '../inc/header.php'; ?>

    <!-- Begin Page Content -->
    <div class="container">
        <!-- Page Heading -->
        <!-- Page Content -->
        <h3 class="mt-3">Tambah Anime <span style="color: #F73D93;">Punimu</h3>
        <hr class="sidebar-divider">
        <div class="card shadow">
            <ul>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <a href="anime.php" class="mt-2"><i class="fas fa-arrow-left mb-3"></i> Kembali</a>
                        <div class="mb-3 row">
                            <label for="nama_anime" class="col-sm-2 col-form-label">Nama Anime</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama_anime" name="nama_anime" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="studio" class="col-sm-2 col-form-label">Studio</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="studio" name="studio" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="episode" class="col-sm-2 col-form-label">Episode</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="episode" name="episode" required style="width: 100px;">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="status_anime" class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10">
                                <select id="status_anime" class="form-control" id="status_anime" name="status_anime" style="width: 150px;">
                                    <option selected>...</option>
                                    <option>selesai</option>
                                    <option>ongoing</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="rilis" class="col-sm-2 col-form-label">Rilis</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="rilis" name="rilis" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="genres" class="col-sm-2 col-form-label">Genre</label>
                            <div class="col-sm-10">
                                <?php
                                foreach ($kategori as $k) :
                                ?>
                                    <input type="radio" value="<?= $k["id_kategori"]; ?>" name="genre"> <?= $k["genre"]; ?></input><br>
                                <?php
                                endforeach;
                                ?>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="poster_anime" class="col-sm-2 col-form-label">Gambar</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="poster_anime" name="poster_anime" required>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn text-light" style="background-color: #16003B">Tambah Data!</button>
                    </form>
                </div>
            </ul>
        </div>

        <?php require_once '../inc/footer.php'; ?>

</body>

</html>