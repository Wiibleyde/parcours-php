<?php
function findIn($key, $array): string|bool {
    foreach ($array as $k => $value) {
        if ($k === $key) {
            return $value;
        } elseif (is_array($value)) {
            $result = findIn($key, $value);
            if ($result !== false) {
                return $result;
            }
        }
    }

    return false;
}
$tab = [
    "name" => "forIn",
    "type" => "function",
    "arguments" => [
        "firstParam" => [
            "paramType" => "string",
            "description" => "the value key to find"
        ],
        "secondParam" => "array"
    ],
    "return" => "string or bool"
];
?>