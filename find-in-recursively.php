<?php
function findIn(string $key, array $array): bool {
    if (array_key_exists($key, $array)) {
        return $array[$key];
    }
    foreach ($array as $item) {
        if (is_array($item)) {
            $result = findIn($key, $item);
            if ($result !== false) {
                return $result;
            }
        }
    }
    return false;
}
?>