<?php

function dnaDiff(string $dna1, string $dna2) {
    if (strlen($dna1) != strlen($dna2)) {
        return false;
    }

    $differences = 0;
    for ($i = 0; $i < strlen($dna1); $i++) {
        if ($dna1[$i] != $dna2[$i]) {
            $differences++;
        }
    }

    return $differences;
}

?>