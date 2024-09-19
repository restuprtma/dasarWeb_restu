
<?php
echo"Soal cerita 2<br><rb>";
echo"Ada seorang guru ingin menghitung total nilai dari 10 siswa dalam ujian matematika. 
Guru ini ingin mengabaikan dua nilai tertinggi dan dua nilai terendah. 
Bantu guru ini menghitung total nilai yang akan digunakan untuk menentukan nilai rata-rata setelah mengabaikan nilai tertinggi dan terendah. 
Berikut daftar nilai dari 10 siswa (85, 92, 78, 64, 90, 75, 88, 79, 70, 96)<br><br>";

$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

$nilaiTertinggi1 = $nilaiSiswa[0];
$nilaiTertinggi2 = $nilaiSiswa[0];
$nilaiTerendah1 = $nilaiSiswa[0];
$nilaiTerendah2 = $nilaiSiswa[0];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai > $nilaiTertinggi1) {
        $nilaiTertinggi2 = $nilaiTertinggi1;
        $nilaiTertinggi1 = $nilai;
    } elseif ($nilai > $nilaiTertinggi2) {
        $nilaiTertinggi2 = $nilai;
    }

    if ($nilai < $nilaiTerendah1) {
        $nilaiTerendah2 = $nilaiTerendah1;
        $nilaiTerendah1 = $nilai;
    } elseif ($nilai < $nilaiTerendah2) {
        $nilaiTerendah2 = $nilai;
    }
}

$totalNilai = array_sum($nilaiSiswa) - $nilaiTertinggi1 - $nilaiTertinggi2 - $nilaiTerendah1 - $nilaiTerendah2;
$jumlahNilai = count($nilaiSiswa) - 4;
$rataRata = $totalNilai / $jumlahNilai;

echo "Dua nilai tertinggi: $nilaiTertinggi1, $nilaiTertinggi2 <br>";
echo "Dua nilai terendah: $nilaiTerendah1, $nilaiTerendah2 <br>";
echo "Total nilai setelah mengabaikan nilai tertinggi dan terendah: $totalNilai <br>";
echo "Rata-rata nilai: $rataRata";
?>