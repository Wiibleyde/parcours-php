<?php
function myArrayFilter($array) {
    $filteredArray = [];
    foreach ($array as $key => $value) {
        if ($value) {
            $filteredArray[$key] = $value;
        }
    }
    return $filteredArray;
}
?>