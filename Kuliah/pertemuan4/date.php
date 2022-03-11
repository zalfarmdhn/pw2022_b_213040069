<?php
// date()
// Untuk menampilkan tanggal dengan format tertentu
echo date("l, d-M-y");
echo "<hr>";

// time()
// UNIX Timestamp / EPOCH Time
// detik yang sudah berlalu sejak 1 Januari 1970
echo time();
echo "<hr>";
echo date("d M y", time() - 60 * 60 * 24 * 100);
echo "<hr>";

// mktime()
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun 
echo date("l", mktime(0, 0, 0, 11, 10, 2002));
echo "<hr>";

// strtotime
echo date("l", strtotime("10 nov 2002"));
?>