<?php

function breakLines($string, $maxLength): string {
    $result = '';

    while ($string != '') {
        if (strlen($string) <= $maxLength) {
            $result .= $string . "\n";
            break;
        } else {
            $lastSpace = strrpos(substr($string, 0, $maxLength), ' ');
            if ($lastSpace === false) {
                throw new Exception('Word length exceeds maximum line length');
            }
            $result .= substr($string, 0, $lastSpace) . "\n";
            $string = substr($string, $lastSpace + 1);
        }
    }

    return $result;
}

echo breakLines("Line with words should break", 15);
?>