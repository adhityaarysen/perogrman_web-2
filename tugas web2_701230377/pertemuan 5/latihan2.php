<?php
$negara_asean = array("Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand");

echo "<h3>Daftar Negara ASEAN awal :</h3>";
echo "<ul>";
foreach($negara_asean as $negara) {
    echo "<li>" . $negara . "</li>";
}
echo "</ul>";

array_push($negara_asean, "Laos", "Filipina", "Myanmar");

echo "<h3>Daftar Negara ASEAN baru :</h3>";
echo "<ul>";
foreach($negara_asean as $negara) {
    echo "<li>" . $negara . "</li>";
}
echo "</ul>";
?>