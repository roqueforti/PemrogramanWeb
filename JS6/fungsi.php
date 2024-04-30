<?php
// soal no 1
function perkenalan(){
    echo "Assalamualaikum, ";
    echo "Perkenalkan, nama saya Fadhlu<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}
perkenalan();
perkenalan();
// soal no 2
// function perkenalan($nama, $salam){
//     echo $salam.", ";
//     echo "Perkenalkan, nama saya ".$nama."<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }

// perkenalan("Hamdana","Hallo");

// echo "<hr>";

// $saya = "Fadhlu";
// $ucapanSalam = "Selamat pagi";

// perkenalan($saya,$ucapanSalam);


// soal no 3
// function perkenalan($nama, $salam="Assalamualaikum"){
//     echo $salam.", ";
//     echo "Perkenalkan, nama saya ".$nama."<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }

// perkenalan("Hamdana","Hallo");

// echo "<hr>";

// $saya = "Elok";
// $ucapanSalam = "Selamat pagi";

// perkenalan($saya);


// soal no 4
// function hitungUmur($thn_lahir, $thn_sekarang){
    //     $umur = $thn_sekarang - $thn_lahir;
    //     return $umur;
    // }
    
    // echo "Umur saya adalah ". hitungUmur(2004, 2023). " tahun";
    
// soal no 5
    // function hitungUmur($thn_lahir, $thn_sekarang){
    //     $umur = $thn_sekarang - $thn_lahir;
    //     return $umur;
    // }
    // function perkenalan($nama, $salam="Assalamualaikum"){
    //     echo $salam.", ";
    //     echo "Perkenalkan, nama saya ".$nama."<br/>";

    //     echo "Saya berusia " . hitungUmur(2004, 2023) . " tahun<br/>";
    //     echo "Senang berkenalan dengan Anda<br/>";
    // }

    // perkenalan("Fadhlu");

// soal no 6
// function tampilkanHaloDunia(){
//     echo "Halo dunia! <br>";
//     tampilkanHaloDunia();
// }
// tampilkanHaloDunia();


// soal no 7
// for($i=1; $i <= 25; $i++){
//     echo "Perulangan ke-($i) <br>";
// }

// function tampilkanAngka(int $jumlah, int $indeks = 1){
//     echo "Perulangan ke-{$indeks} <br>";

//     // panggil diri sendiri selama $indeks <= jumlah
//     if($indeks <ul $jumlah){
//         tampilkanAngka($jumlah, $indeks + 1);
//     }
// }
// tampilkanAngka(20);

// soal no 8
// $menu = [
//     [
//         "nama" => "Beranda"
//     ],
//     [
//         "nama" => "Berita",
//         "subMenu" => [
//             [
//                 [
//                     "nama" => "Wisata",
//                     "subMenu" => [
//                         [
//                             "nama" => "Pantai"
//                         ],
//                         [
//                             "nama" => "Gunung"
//                         ]
//                     ]
//                 ],
//                 [
//                     "nama" => "Kuliner"
//                 ],
//                 [
//                     "nama" => "Hiburan"
//                 ]
//             ]
//         ]
//     ],
//     [
//         "nama" => "Tentang"
//     ],
//     [
//         "nama" => "Kontak"
//     ],
// ];
// soal no 7
// function tampilkanMenuBertingkat(array $menu){
//     echo "<ul>";
//     foreach ($menu as $key => $item){
//         echo "<li>{$item['nama']}</li>";
//     }
//     echo "</ul>";
// }
// tampilkanMenuBertingkat($menu);

// soal no 8
// $menu = [
//     [
//         "nama" => "Beranda"
//     ],
//     [
//         "nama" => "Berita",
//         "subMenu" => [
//             [
//                 "nama" => "Wisata",
//                 "subMenu" => [
//                     [
//                         "nama" => "Pantai"
//                     ],
//                     [
//                         "nama" => "Gunung"
//                     ]
//                 ]
//             ],
//             [
//                 "nama" => "Kuliner"
//             ],
//             [
//                 "nama" => "Hiburan"
//             ]
//         ]
//     ],
//     [
//         "nama" => "Tentang"
//     ],
//     [
//         "nama" => "Kontak"
//     ],
// ];

// function tampilkanMenuBertingkat(array $menu){
//     echo "<ul>";
//     foreach ($menu as $key => $item){
//         echo "<li>{$item['nama']}";
        
//         // Periksa apakah ada submenu dan apakah submenu tersebut adalah array
//         if (isset($item['subMenu']) && is_array($item['subMenu'])) {
//             // Panggil fungsi rekursif untuk menampilkan submenu
//             tampilkanMenuBertingkat($item['subMenu']);
//         }
        
//         echo "</li>";
//     }
//     echo "</ul>";
// }

// tampilkanMenuBertingkat($menu);

?>