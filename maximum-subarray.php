<?php

function findMaximumSubarray(array $arr): int | float {
    $max = $arr[0];
    $sum = 0;
    foreach ($arr as $val) {
        $sum += $val;
        if ($sum > $max) {
            $max = $sum;
        }
        if ($sum < 0) {
            $sum = 0;
        }
    }
    return $max;

}

echo findMaximumSubarray([-2, 1, -3, 4, -1, 2, 1, -5, 4]);

?>