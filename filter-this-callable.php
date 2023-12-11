<?php
function myArrayFilter(array $array, ?callable $callback = null): array {
    $result = [];
    if ($callback === null) {
        foreach ($array as $key => $value) {
            if ($value) {
                $result[] = $value;
            }
        }
        return $result;
    }
    foreach ($array as $key => $value) {
        if ($callback($value, $key, $array)) {
            $result[] = $value;
        }
    }
    return $result;
}
?>