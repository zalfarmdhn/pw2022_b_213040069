<?php
session_start();
require '../functions.php';
// Mengecek session dan login admin atau user
checkLoginAdmin();

$conn = koneksi();
$adm = query("SELECT * FROM users", true) or die('KONEKSI GAGAL');

// tombol cari ditekan 
if (isset($_POST["cari"])) {
    $users = cariKategori($_POST["keyword"]);
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
        <h3 class="mt-3">Data Admin Punimu</h3>
        <p class="mb-4">Data admin yang tersimpan dalam website Punimu</p>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Level</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php $no = 1;
                foreach ($adm as $a) { ?>
                    <tr class="align-middle">
                        <th scope="row"><?= $no++; ?></th>
                        <td><?= $a["username"]; ?></td>
                        <td><?= $a["nama"]; ?></td>
                        <td><?= $a["email"]; ?></td>
                        <td><?= $a["level"]; ?></td>
                        <td>
                            <a href="edit-admin.php?id=<?= $a["id"]; ?>" class="btn-circle btn-sm badge bg-warning text-light action-button"><i class="fas fa-pen"></i></a>
                            <a href="delete-admin.php?id=<?= $a["id"]; ?>" class="btn-circle btn-sm badge bg-danger text-light action-button" onclick="return confirm('Apakah kamu yakin akan menghapus data ini?')"><i class="fas fa-trash"></i></a>
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