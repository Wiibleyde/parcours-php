<?php

function joinWords(array $listToJoin, $separator = " ") {
    $result = "";
    for ($i = 0; $i < count($listToJoin); $i++) {
        $result .= $listToJoin[$i];
        if ($i < count($listToJoin) - 1) {
            $result .= $separator;
        }
    }
    return $result;    
}

echo joinWords(["Hello", "world", "!", "How", "are", "you", "doing", "today?"], "OUAIS");
?>