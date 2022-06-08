<?php
require 'functions_kuliah.php';

$mahasiswa = query("SELECT * FROM mahasiswa");


?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar Mahasiswa</title>
</head>

<body>



    <div class="container">
        <br>
        <h1>Daftar Mahasiswa</h1>

        <a href="tambah_kuliah.php" class="btn btn-primary">Tambah Data Mahasiswa</a>


        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NPM</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php $no = 1;
                foreach ($mahasiswa as $m) { ?>
                    <tr class="align-middle">
                        <th scope="row"><?= $no++; ?></th>
                        <td>
                            <img src="img/<?= $m["gambar"]; ?>" width="50" height="50" class="rounded-circle">
                        </td>
                        <td><?= $m["nama"]; ?></td>
                        <td><?= $m["npm"]; ?> </td>
                        <td><?= $m["email"]; ?></td>
                        <td><?= $m["jurusan"]; ?></td>
                        <td>
                            <a href="" class="btn badge bg-warning">edit</a>
                            <a href="hapus_kuliah.php?id=<?= $m["id"]; ?>" class="btn badge bg-danger" onclick="return confirm('yakin?');">delete</a>
                        </td>
                        </ul>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>