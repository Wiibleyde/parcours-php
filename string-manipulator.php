<?php
function capsMe(string $toUpper): string {
    return strtoupper($toUpper);
}

function lowerMe(string $toLower): string {
    return strtolower($toLower);
}

function upperCaseFirst(string $toTransform): string {
    return ucwords($toTransform);
}

function lowerCaseFirst(string $toTransform): string {
    $splitted = explode(" ", $toTransform);
    $result = "";
    foreach ($splitted as $word) {
        if ($word == end($splitted)) {
            $result .= lcfirst($word);
            break;
        }
        $result .= lcfirst($word) . " ";
    }
    return $result;
}

function removeBlankSpace(string $toTransform): string {
    return str_replace(" ","", $toTransform);
}
?>