<?php
$mahasiswa = [
    [
        "Zalfa Ramadhan", "213040069",
        "Teknik Informatika", "zalfarmdhn1011@gmail.com"
    ],
    [
        "Tony Iskandar", "213040234",
        "Teknik Industri", "tonyiskandar@gmail.com"
    ],
    [
        "Ijul Supijul", "213040234",
        "Sastra Mesin", "ijulpijul@gmail.com"
    ],
];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa (Cara 1)</h1>

    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li><?= $mhs[0]; ?></li>
        <?php endforeach; ?>
    </ul>

    <h1>Daftar Mahasiswa (Cara 2)</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li> Nama :<?= $mhs[0]; ?> </li>
            <li>NRP : <?= $mhs[1]; ?></li>
            <li> Jurusan :<?= $mhs[2]; ?></li>
            <li>Email : <?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>