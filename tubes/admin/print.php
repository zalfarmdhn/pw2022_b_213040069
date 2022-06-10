<?php
require_once '../vendor/autoload.php';
require '../functions.php';

$anime = query("SELECT * FROM anime NATURAL JOIN kategori") or die('KONEKSI GAGAL');

$mpdf = new \Mpdf\Mpdf();
$isiAnime =
    '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="../assets/css/print.css" rel="stylesheet">
    <title>Data Anime Punimu</title>
</head>
<body>
<h3 class="mt-3">Data Anime Punimu</h3>
<table class="table mt-3">
<thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Gambar</th>
        <th scope="col">Nama Anime</th>
        <th scope="col">Episode</th>
        <th scope="col">Status</th>
        <th scope="col">Rilis</th>
        <th scope="col">Genres</th>
    </tr>
</thead>
<tbody>';

$no = 1;
foreach ($anime as $ani) {
    $isiAnime .= '<tr class="align-middle">
            <th scope="row">' . $no++ . '</th>
            <td>
                <img src="../assets/img/' . $ani["poster_anime"] . '" width="100" height="150">
            </td>
            <td>' . $ani["nama_anime"] . '</td>
            <td>' . $ani["episode"] . '</td>
            <td>' . $ani["status_anime"] . '</td>
            <td>' . $ani["rilis"] . '</td>
            <td>' . $ani["genre"] . '</td>
        </tr>';
}

$isiAnime .= '</tbody>
</table>
</body>
</html>';

$mpdf->WriteHTML($isiAnime);
$mpdf->Output('data-anime.pdf', 'I');
