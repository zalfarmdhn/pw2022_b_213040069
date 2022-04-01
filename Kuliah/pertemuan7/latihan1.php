<?php
// Variabel Scope / lingkup variabel
$x = 10;

function tampilX()
{
    global $x;
    echo $x;
}

tampilX(); // Output : 10
echo '<br>';
echo $x; // Output : 10
echo '<br>';

// SUPERGLOBALS
// variable global milik PHP
// merupakan Array Associative
echo $_SERVER["SERVER_NAME"]; // Output : localhost
echo '<br>';

// $_GET
var_dump($_GET);
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

<!DOCTYPE html>
<html lang="en">

<head>
    <title>GET</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&npm=<?= $mhs["npm"]; ?>&email=<?= $mhs["email"]; ?>
                &jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>