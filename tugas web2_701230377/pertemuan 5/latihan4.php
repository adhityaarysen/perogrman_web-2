<?php
// Membuat array multidimensi untuk data negara ASEAN
$negaraASEAN = [
    "Indonesia" => [
        "ibukota" => "D.K.I. Jakarta",
        "kode_telepon" => "+62",
        "makanan_khas" => "Rendang",
        "harga_makanan" => "Rp 50.000"
    ],
    "Singapura" => [
        "ibukota" => "Singapura",
        "kode_telepon" => "+65",
        "makanan_khas" => "Hainanese Chicken Rice",
        "harga_makanan" => "SGD 10"
    ],
    "Malaysia" => [
        "ibukota" => "Kuala Lumpur",
        "kode_telepon" => "+60",
        "makanan_khas" => "Nasi Lemak",
        "harga_makanan" => "RM 5"
    ],
    "Brunei" => [
    "ibukota" => "Bandar Seri Begawan",
    "kode_telepon" => "+673",
    "makanan_khas" => "Ambuyat",
    "harga_makanan" => "BND 15"
    ],
    "Thailand" => [
    "ibukota" => "Bangkok",
    "kode_telepon" => "+66",
    "makanan_khas" => "Pad Thai",
    "harga_makanan" => "THB 7"
    ],
    "Laos" => [
    "ibukota" => "Vientiane",
    "kode_telepon" => "+856",
    "makanan_khas" => "Laap",
    "harga_makanan" => "LAK 3"
    ],

    // Tambahkan data negara lain dengan format yang sama
];

// Menampilkan data dalam bentuk tabel HTML
echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>";
echo "<title>Data Negara ASEAN</title>";
echo "<style>";
echo "table { border-collapse: collapse; width: 100%; }";
echo "th, td { text-align: left; padding: 8px; border: 1px solid #ddd; }";
echo "tr:nth-child(even) { background-color: #f2f2f2; }";
echo "</style>";
echo "</head>";
echo "<body>";

echo "<h2>Data Negara ASEAN</h2>";
echo "<table>";
echo "<tr><th>Negara</th><th>Ibukota</th><th>Kode Telepon</th><th>Makanan Khas</th><th>Harga</th></tr>";
foreach ($negaraASEAN as $negara => $data) {
    echo "<tr>";
    echo "<td>" . $negara . "</td>";
    echo "<td>" . $data["ibukota"] . "</td>";
    echo "<td>" . $data["kode_telepon"] . "</td>";
    echo "<td>" . $data["makanan_khas"] . "</td>";
    echo "<td>" . $data["harga_makanan"] . "</td>";
    echo "</tr>";
}
echo "</table>";

echo "</body>";
echo "</html>";
