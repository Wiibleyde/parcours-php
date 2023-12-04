<?php

function myArrayMap(callable $callback, array $array, array ...$arrays): array {
    $result = [];
    $arrays = array_merge([$array], $arrays);
    $count = count($arrays[0]);
    for ($i = 0; $i < $count; $i++) {
        $args = array_map(fn($array) => $array[$i], $arrays);
        $result[] = $callback(...$args);
    }
    return $result;
}

?>