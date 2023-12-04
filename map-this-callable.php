<?php

function myArrayMap(callable $callback, array $array): array {
    $result = [];

    foreach ($array as $value) {
        $result[] = $callback($value);
    }

    return $result;
}

?>