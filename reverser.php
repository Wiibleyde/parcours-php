<?php
function reverse($string) {
    return strrev($string);
}

function isPalindrome($string) {
    return $string == reverse($string);
}
?>