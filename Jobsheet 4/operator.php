<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil perhitungan:<br>";
echo "Penjumlahan: $a + $b = $hasilTambah<br>";
echo "Pengurangan: $a - $b = $hasilKurang<br>";
echo "Perkalian: $a * $b = $hasilKali<br>";
echo "Pembagian: $a / $b = $hasilBagi<br>";
echo "Sisa Bagi: $a % $b = $sisaBagi<br>";
echo "Pangkat: $a pangkat $b = $pangkat<br><br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil perbandingan:<br>";
echo "Apakah $a sama dengan $b? ", ($hasilSama) ? "Ya" : "Tidak", "<br>";
echo "Apakah $a tidak sama dengan $b? ", ($hasilTidakSama) ? "Ya" : "Tidak", "<br>";
echo "Apakah $a lebih kecil dari $b? ", ($hasilLebihKecil) ? "Ya" : "Tidak", "<br>";
echo "Apakah $a lebih besar dari $b? ", ($hasilLebihBesar) ? "Ya" : "Tidak", "<br>";
echo "Apakah $a lebih kecil dari atau sama dengan $b? ", ($hasilLebihKecilSama) ? "Ya" : "Tidak", "<br>";
echo "Apakah $a lebih besar dari atau sama dengan $b? ", ($hasilLebihBesarSama) ? "Ya" : "Tidak", "<br><br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;
echo "Hasil operasi logika:<br>";
echo "a AND b: " . ($hasilAnd ? "Benar" : "Salah") . "<br>";
echo "a OR b: "  . ($hasilOr ? "Benar" : "Salah") . "<br>";
echo "NOT a: "  . ($hasilNotA ? "Benar" : "Salah") . "<br>";
echo "NOT b: "  . ($hasilNotB ? "Benar" : "Salah") . "<br><br>";


$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;
echo "Hasil operasi aritmatika penugasan:<br>";
echo "a += b: " . $a . "<br>"; // Nilai a setelah penjumlahan
echo "a -= b: " . $a . "<br>"; // Nilai a setelah pengurangan
echo "a *= b: " . $a . "<br>"; // Nilai a setelah perkalian
echo "a /= b: " . $a . "<br>"; // Nilai a setelah pembagian
echo "a %= b: " . $a . "<br><br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;
echo "Apakah a identik dengan b? " . ($hasilIdentik ? "Ya" : "Tidak") . "<br>";
echo "Apakah a tidak identik dengan b? " . ($hasilTidakIdentik ? "Ya" : "Tidak") . "<br><br>";

?>