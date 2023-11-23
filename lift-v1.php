<?php

function getFloor(int $currentFloor, ?int $requestedFloor, array $calledFloors): int {
    if ($requestedFloor !== null) {
        return $requestedFloor;
    }
    $closestFloor = null;
    foreach ($calledFloors as $floor) {
        if ($closestFloor === null || abs($currentFloor - $floor) < abs($currentFloor - $closestFloor)) {
            $closestFloor = $floor;
        }
    }
    return $closestFloor;
}

function getDirection(int $currentFloor, ?int $requestedFloor, array $calledFloors): int {
    $nextFloor = getFloor($currentFloor, $requestedFloor, $calledFloors);
    if ($nextFloor == $currentFloor) {
        return 0;
    } elseif ($nextFloor > $currentFloor) {
        return 1;
    } else {
        return -1;
    }
}
?>