<?php

function explodeWords(string $str, string $separator = ' ', int $limit = PHP_INT_MAX): array {
    $result = [];
    $word = '';
    $i = 0;
    while ($i < strlen($str) && count($result) < $limit) {
        if ($str[$i] === $separator) {
            $result[] = $word;
            $word = '';
        } else {
            $word .= $str[$i];
        }
        $i++;
    }
    $result[] = $word;
    return $result;
}

echo explodeWords('My-name/is-John', '/'); // ['My-name', 'is-John']

?>