<?php
// Koneksi Ke DB
$conn = mysqli_connect('localhost', 'root', '', 'pw2022_b_213040069') or die('KONEKSI GAGAL');

// Query ke tabel mahasiswa
$result = mysqli_query($conn, 'SELECT * FROM mahasiswa') or die(mysqli_error($conn));

// Siapkan data $mahasiswa
$rows = [];

while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

$mahasiswa = $rows;


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
                            <a href="" class="btn badge bg-primary">edit</a>
                            <a href="" class="btn badge bg-danger">delete</a>
                        </td>
                        </ul>
                    <?php } ?>

            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>