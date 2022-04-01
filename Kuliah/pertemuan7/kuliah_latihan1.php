<?php
// SUPERGLOBALS
// Variabel bawaan PHP yang bisa diakses di mana pun
// Bentuknya Array Associative
// $_GET
// $_POST
// $_SERVER
// // $_GET["nama" => "Zalfa", "email" => "zalfarmdhn1011@gmail.com"];
// $_GET["nama"] = "Zalfa";
// $_GET["email"] = "zalfarmdhn1011@gmail.com";

// var_dump($_GET);

?>
<!-- <h1>Halo, <?= $_GET["nama"]; ?></h1> -->

<ul>
    <li>
        <a href="kuliah_latihan2.php?nama=Zalfa&npm=213040069&email=zalfarmdhn1011@gmail.com">Zalfa</a>
    </li>
    <li>
        <a href="kuliah_latihan2.php?nama=Ollie&npm=213040070&email=ollie@gmail.com">Ollie</a>
    </li>
    <li>
        <a href="kuliah_latihan2.php?nama=Zeta&npm=213040071&email=zeta@gmail.com">Zeta</a>
    </li>
</ul>