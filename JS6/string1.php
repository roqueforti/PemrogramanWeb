<?php
// soal no 9
// $lorem = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis corporis tempore quos animi laudantium voluptatem minima sint quasi fugiat odio nisi earum ut, molestiae fuga assumenda reiciendis, totam porro illo?.";

// echo "<p>{$lorem}</p>";
// echo "Panjang karakter: ". strlen($lorem). "<br>";
// echo "Panjang kata: ". str_word_count($lorem). "<br>";
// echo "<p>" . strtoupper($lorem) . "</p>";
// echo "<p>" . strtolower($lorem) . "</p>";

// soal no 10
// echo "Baris\nbaru <br>"; //soal no 10.a
// echo 'Baris\nbaru <br>'; //soal no 10.b
// echo "Halo\rDunia <br>"; //soal no 10.c
// echo 'Halo\rDunia <br>'; //soal no 10.d

// echo "<pre>Halo\tDunia</pre>"; //soal no 10.e
// echo '<pre>Halo\tDunia</pre>'; //soal no 10.f

// echo "Katakanlah \"Tidak pada narkoba!\" <br>"; //soal no 10.g
// echo 'Katakanlah \'Tidak pada narkoba!\' <br>'; //soal no 10.h

// soal no 11
// $pesan = "Saya arek malang";
// echo strrev($pesan) . "<br>";

// soal no 12
$pesan = "saya arek malang";
// ubah variabel $pesan menjadi array dengan perintah explode
$pesanPerKata = explode(" ",$pesan);
// ubah setiak kata dalam array menjadi kebalikannya
$pesanPerKata = array_map(fn($pesan) => strrev($pesan), $pesanPerKata);
// gabungkan kembali array menjadi string
$pesan = implode(" ", $pesanPerKata);

echo $pesan . "<br>";
?>