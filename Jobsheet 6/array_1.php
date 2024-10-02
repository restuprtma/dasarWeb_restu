<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Array terindeks</h2>
    <?php
        $Listdosen=["Elok Nur Hamdana","Unggul Pemenang","Bagas Nugraha"];
        $jumlah_dosen = count($Listdosen);

        // Menampilkan array dengan perulangan for
        for($i = 0; $i < $jumlah_dosen; $i++) {
            echo $Listdosen[$i] . "<br>";
        }
    ?>
</body>
</html>