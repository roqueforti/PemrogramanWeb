<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "prakwebdb";

// Create connection
$connect = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$connect) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi berhasil";
}
?>
