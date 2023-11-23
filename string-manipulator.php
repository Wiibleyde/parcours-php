<?php
function capsMe(string $toUpper): string {
    return strtoupper($toUpper);
}

function lowerMe(string $toLower): string {
    return strtolower($toLower);
}

function upperCaseFirst(string $toTransform): string {
    return ucfirst($toTransform);
}

function lowerCaseFirst(string $toTransform): string {
    return lcfirst($toTransform);
}

function removeBlankSpace(string $toTransform): string {
    return str_replace(" ","", $toTransform);
}
?>