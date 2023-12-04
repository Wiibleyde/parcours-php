<?php

function f() {
    return [
        '+' => function($a, $b) { return $a + $b; },
        '-' => function($a, $b) { return $a - $b; },
        '*' => function($a, $b) { return $a * $b; },
    ];
}

$functions = f();
echo $functions['+'](2, 3);
echo $functions['-'](5, 2);
echo $functions['*'](3, 4);
?>