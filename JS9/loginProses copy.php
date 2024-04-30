<?php
$host = "127.0.0.1";
$port = 3308;
$username = "root";
$password = "123";
$database = "prakwebdb";

// Membuat koneksi ke database
$conn = mysqli_connect($host, $username, $password, $database, $port);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil data dari formulir
$username = $_POST['username']; // Ambil data yang ingin Anda cari
$_password = $_POST['password'];

// Query untuk mencari data yang cocok berdasarkan username
$query = "SELECT * FROM user WHERE username = '$username' and password = '$_password'";

$result = mysqli_query($conn, $query);

if ($result) {
    if (mysqli_num_rows($result) > 0) {
        // Data ditemukan
        echo "Anda berhasil login. Silahkan menuju <a href='homeAdmin.html'>Halaman HOME</a>";
    } else {
        echo "Anda gagal Login. Silahkan <a href='loginForm.html'>Login Kembali</a>";
    }
} else {
    echo "Error: " . mysqli_error($conn);
}

// Tutup koneksi (seperti yang Anda gunakan sebelumnya)

// Tutup koneksi
mysqli_close($conn);
?>
