<?php
$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [
                        "nama" => "Pantai"
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
            ],
            [
                "nama" => "Gunung"
            ],
            [
                "nama" => "Hiburan"
            ]
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ],
];

function tampilkanMenuBertingkat(array $menu) {
    echo "<ul>";
    foreach ($menu as $key => $item) {
      if (isset($item['subMenu'])) {
        echo "<li>{$item['nama']}";
        tampilkanMenuBertingkat($item['subMenu']);
        echo "</li>";
      } else {
        echo "<li>{$item['nama']}</li>";
      }
    }
    echo "</ul>";
  }

tampilkanMenuBertingkat($menu);
?>