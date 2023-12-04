<?php
$today = function() {
    return "It is " . date("F d, Y");
};

$isLeapYear = function($year) {
    return ($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0);
};

echo $today();
echo "\n";
echo $isLeapYear(2016) ? "true" : "false";
echo "\n";
?>