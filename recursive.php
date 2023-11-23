<?php
function factorial(int $number): int {
    if ($number > 1) {
        return $number * factorial($number - 1);
    } else {
        return 1;
    }
}
?>