Penjelasan:<br>
1. isset():<br>
   - Fungsi ini digunakan untuk memeriksa apakah suatu variabel telah diinisialisasi dan tidak bernilai NULL.<br>
   - Jika variabel sudah diset dan bukan NULL, maka akan mengembalikan nilai true. Jika variabel belum diinisialisasi atau bernilai NULL, akan mengembalikan false.<br>

2. empty():<br>
   - Fungsi ini digunakan untuk memeriksa apakah suatu variabel kosong. Variabel dianggap kosong jika bernilai 0, false, '' (string kosong), NULL, array kosong, atau belum diinisialisasi.<br>
   - Jika variabel kosong, fungsi ini mengembalikan true. Jika variabel berisi nilai, akan mengembalikan false.<br>
<br>
<br>
Contoh output:<br>
<?php
// Definisikan beberapa variabel
$variabel1 = "";
$variabel2 = "PHP";
$variabel3 = NULL;

// Memeriksa dengan isset()
echo "Pemeriksaan dengan isset():<br>";
echo "variabel1: " . (isset($variabel1) ? "Terdefinisi" : "Tidak Terdefinisi") . "<br>";
echo "variabel2: " . (isset($variabel2) ? "Terdefinisi" : "Tidak Terdefinisi") . "<br>";
echo "variabel3: " . (isset($variabel3) ? "Terdefinisi" : "Tidak Terdefinisi") . "<br>";
echo "<br>";

// Memeriksa dengan empty()
echo "Pemeriksaan dengan empty():<br>";
echo "variabel1: " . (empty($variabel1) ? "Kosong" : "Tidak Kosong") . "<br>";
echo "variabel2: " . (empty($variabel2) ? "Kosong" : "Tidak Kosong") . "<br>";
echo "variabel3: " . (empty($variabel3) ? "Kosong" : "Tidak Kosong") . "<br>";
?>
<br>
<br>

Output yang diharapkan:<br>
- Pemeriksaan dengan isset():<br>
  - variabel1: Terdefinisi (meskipun kosong, variabel ini tetap terdefinisi).<br>
  - variabel2: Terdefinisi.<br>
  - variabel3: Tidak Terdefinisi (karena nilainya NULL).<br>

- Pemeriksaan dengan empty():<br>
  - variabel1: Kosong (karena string kosong).<br>
  - variabel2: Tidak Kosong (karena berisi string "PHP").<br>
  - variabel3: Kosong (karena bernilai NULL). <br>

Ini akan menampilkan dengan jelas bagaimana kedua fungsi bekerja pada variabel yang berbeda.