<?php
function cekBilangan($angka) {
    if ($angka == 1) {
        return "ganjil";
    } else if ($angka == 2) {
        return "genap dan sekaligus bilangan prima";
    } else if ($angka % 2 == 0) {
        return "genap";
    } else {
        // Cek bilangan prima
        for ($i = 2; $i <= sqrt($angka); $i++) {
            if ($angka % $i == 0) {
                return "ganjil";
            }
        }
        return "ganjil dan sekaligus bilangan prima";
    }
}

// Batas atas angka yang ingin dicek
$batas_atas = 19;

// Looping untuk memeriksa setiap angka
for ($i = 1; $i <= $batas_atas; $i++) {
    $kategori = cekBilangan($i);
    echo "Angka $i adalah bilangan $kategori<br>";
}
?>