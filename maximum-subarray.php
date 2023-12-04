<?php

function findMaximumSubarray(array $arr): int | float {
    $maxSoFar = $arr[0];
    $maxEndingHere = $arr[0];

    for ($i = 1; $i < count($arr); $i++) {
        $maxEndingHere = max($arr[$i], $maxEndingHere + $arr[$i]);
        $maxSoFar = max($maxSoFar, $maxEndingHere);
    }

    return $maxSoFar;
}

echo findMaximumSubarray([-2, 1, -3, 4, -1, 2, 1, -5, 4]);

?>