<?php
echo"Soal cerita 4<br><rb>";
echo"Seorang pemain game ingin menghitung total skor mereka dalam permainan. 
Mereka mendapatkan skor berdasarkan poin yang mereka kumpulkan. 
Jika mereka memiliki lebih dari 500 poin, maka mereka akan mendapatkan hadiah tambahan. 
Buat tampilan baris pertama “Total skor pemain adalah: (poin)”. Dan baris kedua “Apakah pemain mendapatkan hadiah tambahan? (YA/TIDAK)”<br><br>";

$totalPoin = 600; 

if ($totalPoin > 500) {
    $hadiah = "YA";
} else {
    $hadiah = "TIDAK";
}

echo "Total skor pemain adalah: " . $totalPoin . "<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? " . $hadiah;
?>