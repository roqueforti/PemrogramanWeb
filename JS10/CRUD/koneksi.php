<?php
// koneksi ke database
$koneksi = mysqli_connect("127.0.0.1:3308", "root", "123", "prakwebdb");

// periksa koneksi 
if(mysqli_connect_errno()){
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>