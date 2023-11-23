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

function getDirection(int $currentFloor, ?int $requestFloor, array $listButtonCalled): string {
    if (is_int($requestFloor)) {
        if ($requestFloor > $currentFloor) {
            return 1;
        } elseif ($requestFloor < $currentFloor) {
            return -1;
        } else {
            return 0;
        }
    } else {
        if (count($listButtonCalled) == 0) {
            return 1;
        }
        $i = true;
        $scale = 0;
        while ($i == true) {
            if (in_array($currentFloor + $scale, $listButtonCalled)) {
                return 1;
            } elseif (in_array($currentFloor - $scale, $listButtonCalled)) {
                return -1;
            }
            $scale++;
        }
    }
}
?>