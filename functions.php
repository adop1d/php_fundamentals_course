<?php

function greet ($name = "guest"): string {
    return "Hello, " . $name . "!";
}


function add (int $a, int $b): int {
    return $a + $b;
}

echo add ("5","8");
echo "\n";
echo greet ("Kelvin");