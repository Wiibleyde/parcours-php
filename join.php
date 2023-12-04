<?php

function joinWord(array $listToJoin, $separator = " ") {
    $result = "";
    for ($i = 0; $i < count($listToJoin); $i++) {
        $result .= $listToJoin[$i];
        if ($i < count($listToJoin) - 1) {
            $result .= $separator;
        }
    }
    return $result;    
}

echo joinWord(["Hello", "world"], "A");
?>