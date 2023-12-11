<?php
function searchWord($board, $word) {
    $rows = count($board);
    $cols = count($board[0]);
    $visited = array_fill(0, $rows, array_fill(0, $cols, false));

    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $cols; $j++) {
            if (dfs($board, $word, 0, $i, $j, $visited)) {
                return true;
            }
        }
    }

    return false;
}

function dfs($board, $word, $index, $row, $col, &$visited) {
    if ($index === strlen($word)) {
        return true;
    }

    if ($row < 0 || $col < 0 || $row === count($board) || $col === count($board[0]) || $visited[$row][$col] || $board[$row][$col] !== $word[$index]) {
        return false;
    }

    $visited[$row][$col] = true;

    $dx = [-1, 1, 0, 0];
    $dy = [0, 0, -1, 1];

    for ($i = 0; $i < 4; $i++) {
        if (dfs($board, $word, $index + 1, $row + $dx[$i], $col + $dy[$i], $visited)) {
            return true;
        }
    }

    $visited[$row][$col] = false;

    return false;
}
?>