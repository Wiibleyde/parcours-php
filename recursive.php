<?php
function factorial(int $number): float|int {
    if ($number <= 1) {
        return $number * factorial($number - 1);
    }
    return 1;
}
?>