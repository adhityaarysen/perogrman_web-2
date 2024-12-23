<?php

$negaraASEAN = [
    "Indonesia" => "D.K.I. Jakarta",
    "Singapura" => "Singapura",
    "Malaysia" => "Kuala Lumpur",
    "Brunei" => "Bandar Seri Begawan",
    "Thailand" => "Bangkok",
    "Laos" => "Vientiane",
    "Filipina" => "Manila",
    "Myanmar" => "Naypyidaw"
];

echo "Daftar Negara ASEAN dan Ibukota:<br>";
echo "<ul>"; 
foreach ($negaraASEAN as $negara => $ibukota) {
    echo "<li>" . $negara . ": " . $ibukota . "</li>";
}
echo "</ul>";
?>