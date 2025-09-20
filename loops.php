<?php

$colors = ['red', 'blue', 'green'];

foreach ($colors as $color) {
    echo $color;
}

// Or...
$invoiceItems = [
    ['item' => 'Laptop', 'price' => 1200],
    ['item' => 'Mouse', 'price' => 75],
    ['item' => 'Keyboard', 'price' => 100]
];

$total = 0;
foreach ($invoiceItems as $item) {
    $total += $item['price']; // shortcut for $total = $total + $item['price'];
}

echo $total;

echo'';
echo "\n";
echo "";

for ($i = 0; $i < 5; $i++) {
    echo $i;
}

// Counting backwards (like for a countdown)
for ($i = 10; $i > 0; $i--) {
    echo "$i second remaining...";
}

$numbers = [1, 2, 3, 4, 5];
$doubled = [];

$doubled = array_map(fn($number) => $number * 2, [1,2,3,4,5]);
var_dump($doubled);
?>



