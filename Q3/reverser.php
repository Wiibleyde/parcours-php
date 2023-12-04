<?php
function reverse($string): string {
    return strrev($string);
}

function isPalindrome($string): bool {
    return $string == reverse($string);
}
?>