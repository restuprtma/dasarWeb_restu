<?php
if (isset($_POST["submit"])) {
    $targetdir = "uploads/";
    $targetfile = $targetdir . basename($_FILES["myfile"]["name"]);
    $fileType = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));

    $allowedExstensions = array("jpg", "jpeg", "png", "gif");
    $maxsize = 5*1024*1024;

    if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)) {
        echo "File berhasil diunggah";
    } else{
        echo "File gagal diunggah";
    }
} else{
    echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan";
}
?>