<?php
$mahasiswa = [
    [
        "nama" => "Zalfa Ramadhan",
        "npm" => "213040069",
        "email" => "zalfarmdhn1011@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "img/jongxina.jpg"
    ],
    [
        "nama" => "Amelia Watson",
        "npm" => "213040048",
        "email" => "amewatson@gmail.com",
        "jurusan" => "Kriminologi",
        "gambar" => "img/amelia.jpg"
    ],
    [
        "nama" => "Mori Calliope",
        "email" => "yourdad@gmail.com",
        "npm" => "213040039",
        "jurusan" => "Teknik Mesin",
        "gambar" => "img/mori.jpg"
    ],
    [
        "nama" => "Ouro Kronii",
        "email" => "kronii@gmail.com",
        "npm" => "213040037",
        "jurusan" => "Teknik Industri",
        "gambar" => "img/kronii.jpg"
    ],
];
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
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php $no = 1;
                foreach ($mahasiswa as $m) : ?>
                    <tr class="align-middle">
                        <th scope="row"><?= $no++; ?></th>
                        <td>
                            <img src="<?= $m["gambar"]; ?>" width="50" height="50" class="rounded-circle">
                        </td>
                        <td><?= $m["nama"]; ?></td>
                        <td>
                            <a href="" class="btn badge bg-warning">edit</a>
                            <a href="" class="btn badge bg-danger">delete</a>
                            <a href="kuliah_latihan4.php?gambar=<?= $m["gambar"] ?>&nama=<?= $m["nama"]; ?>&npm=<?= $m["npm"]; ?>&email=<?= $m["email"]; ?>&jurusan=<?= $m["jurusan"]; ?>" class="btn badge bg-info">detail</a>
                        </td>
                        </ul>
                    <?php endforeach; ?>

            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>