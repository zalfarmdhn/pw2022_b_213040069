<?php
session_start();
require '../functions.php';
// Mengecek session dan login admin atau user
checkLoginAdmin();

// ambil data di URL
$id = $_GET["id"];

$kategori = query("SELECT * FROM kategori WHERE id_kategori = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // cek apakah data berhasil diubah atau tidak
    if (editKategori($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil diubah!');
                document.location.href = 'kategori.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diubah!');
                document.location.href = 'kategori.php';
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

    <title>Punimu Admin - Edit</title>

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
        <h3 class="mt-3">Edit Kategori <span style="color: #F73D93;">Punimu</h3>
        <hr class="sidebar-divider">
        <div class="card shadow">
            <ul>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $kategori["id_kategori"]; ?>">
                        <a href="kategori.php" class="mt-2"><i class="fas fa-arrow-left mb-3"></i> Kembali</a>
                        <div class="mb-3 row">
                            <label for="genre" class="col-sm-2 col-form-label">Nama Genre</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="genre" name="genre" required style="width: 150px;" value="<?= $kategori["genre"]; ?>">
                            </div>
                        </div>

                        <button type="submit" name="submit" class="btn text-light" style="background-color: #16003B">Edit Kategori!</button>
                    </form>
                </div>
            </ul>
        </div>

        <?php require_once '../inc/footer.php'; ?>

</body>

</html>