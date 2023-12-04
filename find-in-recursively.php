<?php
function findIn(string $key, array $array): string|bool {
    foreach ($array as $value => $item) {
        if ($value === $key) {
            return $item;
        } elseif (is_array($value)) {
            $result = findIn($key, $value);
            if ($result === true) {
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

echo findIn("description", $tab);
?>