<?php
// function  tampilkanHalloDunia(){
//     echo "Hallo Dunia!! <br>";

//     tampilkanHalloDunia();
// }

// tampilkanHalloDunia();

function tampilkanAngka(int $jumlah, int $indeks = 1){
    echo "Perulangan ke-{$indeks} <br>";

    if($indeks < $jumlah){
        tampilkanAngka($jumlah, $indeks + 1);
    }
}

tampilkanAngka(20);
?>