<?php

echo"Soal cerita 1<br><br>";
echo"Sebuah restoran memiliki 45 kursi di dalamnya. Pada suatu malam, 28 kursi telah ditempati oleh pelanggan. Berapa persen kursi yang masih kosong di restoran tersebut?<br><br>";

$total_kursi = 45;
$kursi_terisi = 28;
$kursi_kosong = $total_kursi - $kursi_terisi;
$persentase_kosong = ($kursi_kosong / $total_kursi) * 100;

echo"persentase kursi kosong adalah $persentase_kosong%";
?>