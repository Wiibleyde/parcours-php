<?php
for ($i = 2; $i < 100; $i++) {
    $isPrime = true;
    for ($j = 2; $j * $j <= $i; $j++) {
        if ($i % $j == 0) {
            $isPrime = false;
            break;
        }
    }
    if ($isPrime) {
        if ($i == 99) {
            echo $i;
        } else {
            echo $i . ', ';
        }
    }
}
?>