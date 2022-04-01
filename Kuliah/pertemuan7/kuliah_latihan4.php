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

    <title>Detail Mahasiswa</title>
</head>

<body>



    <div class="container">
        <h1>Detail Mahasiswa</h1>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?= $_GET["gambar"]; ?>" class="img-fluid rounded-start">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= $_GET["nama"]; ?></h5>
                        <p class="card-text"><?= $_GET["npm"]; ?></p>
                        <p class="card-text"><?= $_GET["email"]; ?></p>
                        <p class="card-text"><?= $_GET["jurusan"]; ?></p>

                        <a href="kuliah_latihan3.php">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>