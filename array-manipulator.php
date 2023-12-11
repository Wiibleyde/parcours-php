<?php
function reverse(array $array): array {
    for ($i = 0, $j = count($array) - 1; $i < $j; $i++, $j--) {
        $temp = $array[$i];
        $array[$i] = $array[$j];
        $array[$j] = $temp;
    }
    return $array;
}

function push(array &$array, string ...$elements): int {
    foreach ($elements as $element) {
        $array[] = $element;
    }
    return count($array);
}

function sum(array $array): int {
    $sum = 0;
    foreach ($array as $value) {
        $sum += $value;
    }
    return $sum;
}

function arrayContains(array $array, $value) {
    foreach ($array as $element) {
        if ($element === $value) {
            return $value;
        }
    }
    return "Nothing";
}

function merge(array ...$arrays): array {
    $result = [];
    foreach ($arrays as $array) {
        foreach ($array as $value) {
            $result[] = $value;
        }
    }
    return $result;
}

$array = [1, 2, 3, 4, 5];
echo implode(" ", $array) . PHP_EOL;
echo sum($array) . PHP_EOL;
echo arrayContains($array, 3) . PHP_EOL;
echo arrayContains($array, 6) . PHP_EOL;
echo implode(" ", merge([1, 2, 3], [4, 5, 6], [7, 8, 9])) . PHP_EOL;
?>