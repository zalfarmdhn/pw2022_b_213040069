<?php
session_start();
require '../functions.php';
// Mengecek session dan login admin atau user
checkLoginAdmin();

$conn = koneksi();
$kategori = query("SELECT * FROM kategori");

$check = mysqli_query($conn, "SELECT * FROM kategori");

if (!$check) {
    echo mysqli_error($conn);
}

// tombol cari ditekan 
if (isset($_POST["cari"])) {
    $kategori = cariKategori($_POST["keyword"]);
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

    <title>Punimu Admin</title>

    <!-- Custom fonts -->
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
    <div class="container-fluid container">
        <!-- Page Heading -->
        <h3 class="mt-3">Data Kategori Punimu</h3>
        <p class="mb-4">Data kategori yang tersimpan dalam website Punimu</p>
        <!-- Page Content -->
        <a href="add-kategori.php" class="btn btn-primary float-right mb-3">
            <span class="icon"><i class="fas fa-plus"></i> Tambah Kategori</span>
        </a>
        <!-- Search -->
        <form class="d-none d-sm-inline-block form-inline navbar-search float-left" action="" method="post">
            <div class="input-group">
                <input type="text" name="keyword" class="form-control bg-light border-1 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit" name="cari">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>
        <!-- End of search -->
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php $no = 1;
                foreach ($kategori as $k) { ?>
                    <tr class="align-middle">
                        <th scope="row"><?= $no++; ?></th>
                        <td><?= $k["genre"]; ?></td>
                        <td>
                            <a href="edit-kategori.php?id=<?= $k["id_kategori"]; ?>" class="btn-circle btn-sm badge bg-warning text-light action-button"><i class="fas fa-pen"></i></a>
                            <a href="delete-kategori.php?id=<?= $k["id_kategori"]; ?>" class="btn-circle btn-sm badge bg-danger text-light action-button" onclick="return confirm('Apakah kamu yakin akan menghapus data ini?')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
        <!-- End of Main Content -->

        <?php require_once '../inc/footer.php'; ?>

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->


</body>

</html>