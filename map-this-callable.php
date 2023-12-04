<?php

function myArrayMap(callable $callback, array $array, array ...$arrays): array {
    if(!is_callable($callback)) {
        return [];
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