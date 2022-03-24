<h1>Daftar Mahasiswa</h1>
<?php
// Array Associative
// Array yang indexnya berupa string, yang ber asosiasi dengan nilainya

$mahasiswa = [
    [
        "nama" => "Zalfa Ramadhan",
        "npm" => "213040069",
        "email" => "zalfarmdhn1011@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Amelia Watson",
        "npm" => "213040048",
        "email" => "amewatson@gmail.com",
        "jurusan" => "Kriminologi"
    ],
    [
        "nama" => "Ouro Kronii",
        "email" => "kronii@gmail.com",
        "npm" => "213040040",
        "jurusan" => "Teknik Mesin"
    ]
];
// var_dump($mahasiswa["satu"]["email"]);
?>


<?php foreach ($mahasiswa as $m) { ?>
    <ul>
        <li>Nama : <?= $m["nama"]; ?></li>
        <li>NPM : <?= $m["npm"]; ?> </li>
        <li>Email : <?= $m["email"]; ?></li>
        <li>Jurusan : <?= $m["jurusan"]; ?></li>
    </ul>
<?php } ?>