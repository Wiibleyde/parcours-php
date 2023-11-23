<?php
function factorial(int $number): float|int {
    if ($number === 0 || $number === 1) {
        return 1;
    }elseif ($number < 0){
        return $number;
    } else {
        return $number * factorial($number - 1);
    }
}
?>