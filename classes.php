<?php

class Product {

    public function __construct(
      public string $name,
      public int $price)
    {
    }
    public function itsExpensive(): bool {
        return $this->price > 100;
    }
    public static function create(string $name,$price) {
        return new Product($name, $price);
    }
    public function display(): void {
        echo "Product: {$this->name}, Price: \${$this->price}\n";
    }
}

$product1 = new Product("Laptop", 999);
$product2 = Product::create("Smartphone", 499);
$product3 = Product::create("Quake",  10);
$product1->display();
$product2->display();
$product3->display();

echo $product1->itsExpensive() ? "true" : "false";
echo $product2->itsExpensive() ? "true" : "false";
echo $product3->itsExpensive() ? "true" : "false";











?>