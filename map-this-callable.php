<?php

function myArrayMap(?callable $callback, array $array, array ...$arrays) {
    $result = [];
    if ($callback === null) {
        if (count($arrays) === 0) {
            return $array;
        }
        foreach ($array as $key => $value) {
            $element = [$value];
            foreach ($arrays as $arr) {
                $element[] = isset($arr[$key]) ? $arr[$key] : null;
            }
            $result[] = $element;
        }
        return $result;
    }

    $keys = array_keys($array);
    $bool = false;
    foreach ($keys as $value2) {
        if (is_string($value2)) {
            $bool = true;
        }
    }
    if (!$bool) {
        foreach ($array as &$value) {
            $value = $callback($value);
        }
        return $array;
    } else {
        foreach ($array as &$value) {
            $result[] += $value;
        }
        return $result;
    }
}

?>