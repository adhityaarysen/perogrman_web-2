<?php

$GLOBALS['varGlobal'] = 18; //variabel Global

function testvar()
{
    $varLokal = 1; //variabel lokal
    echo "<p> test variabel didalam function.<p>";
    // mengakses variabel Global didalam function
    echo "Varibel global : ".$GLOBALS['varGlobal'];
    echo "<br>";
    echo "Varibel lokal : $varLokal ";
    echo "<br>";
}

testVar();

    echo "<p> test variabel didalam function.<p>";
    echo "Varibel global : $varGlobal ";
    echo "<br>";
    // mengakses variabel Lokal didalam function
    echo "Varibel lokal : $varLokal ";
    echo "<br>";

 ?>