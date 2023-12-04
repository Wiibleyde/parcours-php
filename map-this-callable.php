<?php

function myArrayMap(callable $callback, array $array, array ...$arrays): array {
    if(!is_callable($callback)) {
        throw new TypeError('myArrayMap() expects parameter 1 to be a valid callback, no array or string given');
    }
    $result = [];
    $arrays = array_merge([$array], $arrays);
    $length = 0;
    foreach ($arrays as $arr) {
        $length = max($length, count($arr));
    }
    
    for ($i = 0; $i < $length; $i++) {
        $params = [];
        foreach ($arrays as $arr) {
            $params[] = $arr[$i] ?? null;
        }
        
        $result[] = $callback(...$params);
    }
    
    return $result;
}

?>