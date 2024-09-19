<?php
echo"Soal cerita 3<br><rb>";
echo"Seorang pelanggan ingin membeli sebuah produk dengan harga Rp 120.000. 
Toko tersebut menawarkan diskon sebesar 20% untuk pembelian di atas Rp 100.000. 
Bantu pelanggan ini untuk menghitung harga yang harus dibayar setelah mendapatkan diskon.<br><br>";

$hargaAwal = 120000;
$diskon = 20;

if ($hargaAwal > 100000) {
    $jumlahDiskon = ($hargaAwal * $diskon) / 100;

    $hargaSetelahDiskon = $hargaAwal - $jumlahDiskon;

    echo "Anda mendapatkan diskon sebesar $diskon%.<br>";
    echo "Harga setelah diskon: Rp " . number_format($hargaSetelahDiskon, 0, ',', '.');
} else {
    echo "Tidak ada diskon karena harga di bawah Rp 100.000.";
}
?>