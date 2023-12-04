<?php
function findIn(string $key, array $array): string|bool {
    // Recursive function to find a key in an array
    foreach ($array as $value) {
        if ($value === $key) {
            return $value;
        } elseif (is_array($value)) {
            $result = findIn($key, $value);
            if ($result === true) {
                return true;
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

echo findIn("name", $tab);
?>