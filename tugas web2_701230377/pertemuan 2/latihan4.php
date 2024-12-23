<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modul 2 - Latihan 1k</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            text-align: center;
            line-height: 50px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            float: left;
            margin: 1px;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
<?php
$jumlah_baris = 5;

for ($i = 1; $i <= $jumlah_baris; $i++) {
    echo "<div class='clear'></div>";
    for ($j = 1; $j <= $i; $j++) {
        echo "<div class='kotak'>$j</div>";
    }
}
?>
</body>
</html>