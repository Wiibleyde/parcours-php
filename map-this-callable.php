<?php

function myArrayMap(callable $callback, array ...$arrays): array {
    if (count($arrays) < 2) {
        throw new InvalidArgumentException('myArrayMap expects at least two arrays');
    }

    $result = [];
    $length = count($arrays[0]);

    for ($i = 0; $i < $length; $i++) {
        $params = array_column($arrays, $i);
        $result[] = $callback(...$params);
    }

    return $result;
}

?>