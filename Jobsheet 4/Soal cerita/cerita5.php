<?php
echo"Soal cerita 4<br><rb>";
echo"Seorang guru ingin mencetak daftar nilai siswa dalam ujian matematika. 
Guru tersebut memiliki data setiap siswa terdrir dari nama dan nilai. 
Bantu guru ini mencetak daftar nilai siswa yang mencapai nilai di atas rata-rata kelas. 
Dengan ketentuan nama dan nilai siswa Alice dapat 85, Bob dapat 92, Charlie dapat 78, David dapat 64, Eva dapat 90<br><br>";

$nilaiSiswa = [
    "Alice" => 85,
    "Bob" => 92,
    "Charlie" => 78,
    "David" => 64,
    "Eva" => 90
];

$totalNilai = 0;
foreach ($nilaiSiswa as $nilai) {
    $totalNilai += $nilai;
}
$rataRata = $totalNilai / count($nilaiSiswa);

echo "Daftar siswa yang nilainya di atas rata-rata ($rataRata): <br>";
foreach ($nilaiSiswa as $nama => $nilai) {
    if ($nilai > $rataRata) {
        echo "$nama: $nilai <br>";
    }
}
?>