<?php

function manageMovements(string $movements): array {
    $instructions = [];
    $conversionTable = ['R' => 'RIGHT', 'L' => 'LEFT', 'F' => 'FRONT', 'B' => 'BACKWARDS'];
    $previousMovement = '';

    for ($i = 0; $i < strlen($movements); $i++) {
        $movement = $movements[$i];
        $instruction = $conversionTable[$movement];

        if ($movement === $previousMovement) {
            $instruction .= ' AGAIN';
        }

        $instructions[] = $instruction;
        $previousMovement = $movement;
    }

    return $instructions;
}

var_dump(manageMovements('RFFFRFRFRF'));
?>