<?php

function checkCircuits(int $number): array {
    $bugLocations = [];
    $debugTable = [2 => 'Left arm', 3 => 'Right arm', 5 => 'Motherboard', 7 => 'Processor', 11 => 'Zip Defluxer', 13 => 'Motor'];

    foreach ($debugTable as $prime => $location) {
        if ($number % $prime == 0) {
            $bugLocations[] = $location;
        }
    }

    return $bugLocations;
}

?>