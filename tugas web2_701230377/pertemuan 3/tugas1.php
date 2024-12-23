<?php
// Panjang dan lebar yang sudah ditentukan
$panjang = 10; // Ganti dengan nilai yang diinginkan
$lebar = 5;    // Ganti dengan nilai yang diinginkan

// Fungsi untuk menghitung luas persegi panjang
function hitungLuasPersegiPanjang($panjang, $lebar) {
    return $panjang * $lebar;
}

// Menghitung luas
$luas = hitungLuasPersegiPanjang($panjang, $lebar);

// Menampilkan hasil
echo "Panjang: " . $panjang . "\n";
echo "Lebar: " . $lebar . "\n";
echo "Luas persegi panjang adalah: " . $luas . "\n";
?>
