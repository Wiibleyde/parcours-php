<?php
$primary = array();
for ($i = 2; $i < 100; $i++) {
    for ($j = 2; $j * $j <= $i; $j++) {
        if ($i % $j == 0) {
            continue 2;
            break;
        }
    }
    $primary[] = $i;
}
for ($i = 0; $i < count($primary); $i++) {if ($i == count($primary) - 1) {echo $primary[$i];} else {echo $primary[$i] . ", ";}}echo "\n";
?>