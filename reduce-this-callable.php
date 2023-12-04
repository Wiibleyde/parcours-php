<?php

function myArrayReduce(array $array, callable $callback, $initial = null) {
    $accumulator = $initial;

    foreach ($array as $value) {
        $accumulator = $callback($accumulator, $value);
    }

    return $accumulator;
}

$sum = myArrayReduce([1, 2, 3, 4, 5], fn($acc, $val) => $acc + $val, 0);
echo $sum;
?>