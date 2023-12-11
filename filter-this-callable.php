<?php
function myArrayFilter($array, $callback)
{
    $filteredArray = [];
    foreach ($array as $key => $value) {
        if ($callback($value, $key)) {
            $filteredArray[$key] = $value;
        }
    }
    return $filteredArray;
}
?>