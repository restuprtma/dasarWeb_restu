<?php
//1
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10 * 5);
$e = $d - $c;

echo "Variable a : {$a} <br>";
echo "Variable b : {$b} <br>";
echo "Variable c : {$c} <br>";
echo "Variable d : {$d} <br>";
echo "Variable e : {$e} <br>";

var_dump($e);
echo "<br>";

//2
$apakahSiswaLulus = true;
$apakahSiswaSudahUjian = false;

var_dump($apakahSiswaLulus);
echo "<br>";
var_dump($apakahSiswaSudahUjian);
echo "<br>";

//3
$namaDepan = "Ibnu";
$namaBelakang = "Jakaria";

$namaLengkap = "{$namaDepan} {$namaBelakang}";
$namaLengkap2 = $namaDepan . ' ' . $namaBelakang;

echo "Nama Depan : {$namaDepan} <br>";
echo 'Nama Belakang : ' . $namaBelakang . '<br>';

echo $namaLengkap;
echo "<br>";

//4
$listMahasiswa = ["Wahid Abdullah", "Elmo Bachtiar", "Lendis Fabri"];
echo $listMahasiswa[0];
?>