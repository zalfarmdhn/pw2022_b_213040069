<?php
// Pertemuan 2 - PHP Dasar 
// Sintaks PHP

// Standard Output
// echo, print 
// print_r 
// var_dump  

echo "Zalfa Ramadhan";
echo "<br>";
echo 'Zalfa';
echo "<br>";
echo 10;
echo "<br>";
echo true;
echo false;
// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan Tipe Data
// Variabel 
// Tidak boleh diawali dengan angka, tapi boleh mengandung angka

$nama = "Sandhika";
echo "Hallo, Selamat Datang $nama";
echo "<br>";

// Operator 
// Aritmatika
// + - * / % 
$x = 20;
$y = 30;
echo $x * $y;
echo "<br>";

// Penggabungan String

$nama_depan = "Zalfa";
$nama_belakang = "Ramadhan";
echo $nama_depan . " " . $nama_belakang;
echo "<br>";

// Assignment 
// =, +=, -=, *=, /=, %=, .=
$d = 1;
$d -= 5;
echo $d;
echo "<br>";

$nama1 = "Sandhika";
$nama1 .= " ";
$nama1 .= "Galih";
echo $nama1;
echo "<br>";

// Perbandingan
// <, >, <=, >=, ==

var_dump(1 > 5);
var_dump(1 == "1");
echo "<br>";

// Identitas
// ===, !==
var_dump(1 === "1");
echo "<br>";

// Logika
// &&, ||, !
$z = 10;
var_dump($x < 20 && $x % 2 == 0);


?>
<br>