<?php
$angka1 = 10;
$angka2 = 5;
$hasil = $angka1 + $angka2;
echo "Hasil penjumlahan $angka1 dan $angka2 adalah $hasil <br>"; 

$benar = true;
$salah = false;
echo "Variable benar : $benar, Variable salah : $salah <br>";

define("NAMA_SITUS", "WebsiteKU.com");
define("TAHUN_PENDIRIAN", 2003);

echo " selamat datang di " . NAMA_SITUS . ", situs yang didirikan pada tahun " . TAHUN_PENDIRIAN . ".";
?>