<?php

function explodeWords(string $str, string $separator = ' ', int $limit = PHP_INT_MAX): array {
    $result = [];
    $word = '';
    $len = strlen($str);
    for ($i = 0; $i < $len; $i++) {
        if ($str[$i] != $separator) {
            $word .= $str[$i];
        }
        if ($str[$i] == $separator || $i == $len - 1) {
            $result[] = $word;
            $word = '';
            if (count($result) == $limit) {
                $result[count($result) - 1] .= substr($str, $i);
                break;
            }
        }
    }
    if ($limit < 0) {
        $result = array_slice($result, 0, $limit);
    } elseif ($limit == 0 && count($result) > 0) {
        $result = [$result[0]];
    }
    return $result;
}
?>