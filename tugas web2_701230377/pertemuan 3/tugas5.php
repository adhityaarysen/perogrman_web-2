<?php
function faktorial($n) {
    if ($n == 0) {
        return 1;
    } else {
        return $n * faktorial($n - 1);
    }
}

// Contoh penggunaan:
echo "Faktorial dari 5 = " . faktorial(5);
 ?>