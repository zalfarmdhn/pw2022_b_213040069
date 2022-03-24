<?php
// $mahasiswa = [
//     ["Zalfa Ramadhan", "213040069", 
//     "zalfarmdhn1011@gmail.com", "Teknik Informatika"],
//     ["Dedi Corbuzier", "213040050", 
//     "dedicorbuz@gmail.com", "Teknik Industri"]
// ];

// Array Assciative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$anime = [
    [
        "nama" => "SKET Dance",
        "episode" => "77",
        "tayang" => "7 April, 2011",
        "durasi" => "24 menit / episode",
        "gambar" => "img/sketdance.jpg"
    ],
    [
        "nama" => "JoJo's Bizarre Adventure: Stardust Crusaders",
        "episode" => "24",
        "tayang" => "5 April, 2014",
        "durasi" => "24 menit / episode",
        "gambar" => "img/jojo.jpg"

    ]
];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Daftar Anime</title>
    <style>
        li {
            list-style: none;
        }
    </style>
</head>

<body>
    <h1>Daftar Anime</h1>
    <?php foreach ($anime as $ani) :  ?>
        <ul>
            <li>
                <img width="200px" height="300px" src="<?= $ani["gambar"]; ?>" alt="">
            </li>
            <li>Nama Anime : <?= $ani["nama"]; ?></li>
            <li>Episode : <?= $ani["episode"]; ?></li>
            <li>Durasi : <?= $ani["durasi"]; ?></li>
            <li>Rilis : <?= $ani["tayang"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>