<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming form fields are submitted via POST method
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    // Query to check username and password in the database
    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($connect, $query);

    // Check if query execution was successful
    if (!$result) {
        echo "Error executing query: " . mysqli_error($connect);
    } else {
        // Check the number of rows returned by the query
        $cek = mysqli_num_rows($result);

        if ($cek) {
            echo "Anda berhasil login. Silahkan menuju <a href='homeAdmin.html'>Home</a>";
        } else {
            echo "Anda gagal login. Silahkan <a href='loginForm.html'>Login Kembali</a>";
        }
    }
} else {
    echo "Metode pengiriman data tidak valid.";
}

// Close the database connection (optional, but recommended)
mysqli_close($connect);
?>
