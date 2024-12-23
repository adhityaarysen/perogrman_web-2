<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Luas dan Keliling Persegi Panjang</title>
</head>
<body>
    <h1>Hitung Luas dan Keliling Persegi Panjang</h1>
    <form method="POST">
        <label for="panjang">Panjang:</label>
        <input type="number" name="panjang" id="panjang" required>
        <br><br>
        <label for="lebar">Lebar:</label>
        <input type="number" name="lebar" id="lebar" required>
        <br><br>
        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil data dari form
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];

        // Menghitung luas dan keliling
        $luas = $panjang * $lebar;
        $keliling = 2 * ($panjang + $lebar);

        // Menampilkan hasil
        echo "<h2>Hasil:</h2>";
        echo "Luas persegi panjang: " . $luas . "<br>";
        echo "Keliling persegi panjang: " . $keliling;
    }
    ?>
</body>
</html>
