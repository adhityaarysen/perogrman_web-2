<!DOCTYPE html>
<html>
<head>
    <title>Tugas 2</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 15px;
            text-align: left;
        }
    </style>
</head>
<body>

<?php
// Fungsi untuk menampilkan data dalam tabel
function tampilkanData($data) {
    echo "<table>";
    echo "<tr><th>No</th><th>Nama</th><th>Kategori</th><th>Gambar</th></tr>";
    $no = 1;
    foreach ($data as $item) {
        echo "<tr>";
        echo "<td>" . $no++ . "</td>";
        echo "<td>" . $item['nama'] . "</td>";
        echo "<td>" . $item['kategori'] . "</td>";
        echo "<td><img src='gambar/" . $item['gambar'] . "' alt='" . $item['nama'] . "' width='100'></td>";
        echo "</tr>";
    }
    echo "</table>";
}

// Input NRP (ganti dengan NRP Anda)
$nrp = 123456;

// Validasi NRP
if (!is_numeric($nrp)) {
    echo "NRP harus berupa angka.";
    exit;
}

// Tentukan kategori
$kategori = $nrp % 5;

// Data (sesuaikan dengan kategori dan jumlah data yang Anda butuhkan)
$data = array(
    array('nama' => 'Tari Saman', 'kategori' => 'Budaya Daerah di Indonesia', 'gambar' => 'tari_saman.jpeg'),
    array('nama' => 'Thomas Alva Edison', 'kategori' => 'Penemu-penemu terkenal di dunia', 'gambar' => 'thomas_alva_edison.jpeg'),
    array('nama' => 'Kantong Semar dan Komodo', 'kategori' => 'Flora dan Fauna terancam punah', 'gambar' => array('kantong_semar.jpeg','komodo.jpeg')),
    array('nama' => 'Pangeran Diponegoro', 'kategori' => 'Pahlawan Nasional Indonesia', 'gambar' => 'pangeran_diponegoro.jpeg'),
    array('nama' => 'Apple', 'kategori' => 'Perusahaan Teknologi', 'gambar' => 'apple.jpeg'),
);

// Tampilkan data
tampilkanData($data);

?>

</body>
</html>
