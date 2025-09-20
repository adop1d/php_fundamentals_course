<?php

$greet = function($name = "you")  {
    echo "Hello, $name";
};


function add (int $a, int $b): int {
    return $a + $b;
}

echo add ("5","8");
echo "\n";

$greet();