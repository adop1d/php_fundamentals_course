<?php

$colors = ["red", "green", "blue", "yellow", "purple", "orange", "pink"];
$user = [
    "name" => "Kelvin Puche",
    "age" => 21,
    "email" => "kelpucha@gmail.com",
    "password" => "123456789"
    ];


if (($colors) > 2) {
    echo "true";
}
var_dump ($colors);
unset($colors[3]);
var_dump($colors);


?>
