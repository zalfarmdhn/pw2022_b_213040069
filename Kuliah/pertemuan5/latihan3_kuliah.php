<?php
$mahasiswa = [
    [
        "Zalfa Ramadhan",
        "213040069",
        "zalfarmdhn1011@gmail.com",
        "Teknik Informatika"
    ],
    [
        "Radhitya",
        "213040048",
        "radhitya@gmail.com",
        "Teknik Informatika"
    ],
    [
        "Bilek",
        "213040052",
        "bilek@gmail.com",
        "Teknik Informatika"
    ]
];



?>

<?php foreach ($mahasiswa as $m) { ?>
    <ul>
        <li>Nama : <?php echo $m[0]; ?></li>
        <li>NPM : <?php echo $m[1]; ?> </li>
        <li>Email : <?php echo $m[2]; ?></li>
        <li>Jurusan : <?php echo $m[3]; ?></li>
    </ul>
<?php } ?>