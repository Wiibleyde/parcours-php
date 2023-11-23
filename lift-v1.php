<?php
function getFloor(int $currentFloor, ?int $requestFloor, array $listButtonCalled):  null|int {
    if (is_int($requestFloor)) {
        return $requestFloor;
    } else {
        $i = true;
        $scale = 0;
        while ($i == true) {
            if (in_array($currentFloor,$listButtonCalled)){
                return $currentFloor;
            }
            if (count($listButtonCalled) == 0){
                return null;
            }
            if (in_array($currentFloor + $scale, $listButtonCalled)) {
                return $currentFloor + $scale;
            } elseif (in_array($currentFloor - $scale, $listButtonCalled)) {
                return $currentFloor - $scale;
            }
            $scale++;
        }
    }
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