<?php

function calc(string $operation): int {
    $operation = str_replace(' ', '', $operation);
    if (!preg_match('/^[0-9+\-()]*$/', $operation)) {
        throw new Exception('Invalid characters in operation');
    }
    $result = eval("return $operation;");
    return $result;
}
?>