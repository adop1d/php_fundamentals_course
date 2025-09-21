<?php
class User {
      public function __construct(
        public readonly string $name,
        public string $email,
        public int $status,
      ) {}
}

$user = new User(name: 'Kelvin', email: 'klvpvch@alcaldiasanfrancisco.gob.ve', status:200);
echo $user->name;
echo '';
echo "\n";
echo $user->email;
echo "\n";

$status = $user->status;

$result = match ($status) {
    200 => 'success',
    404 => 'not found',
    500 => 'server error',
    default => 'unknown status'
};

echo $result;

class Order {
  public function getAddress(): ?string {
    return null;
  }
}

$order = new Order();
$country = $order->getAddress()?->country ?? 'Unknown country';
echo "\n";
echo $country;

class Product {
  public function __construct(
    public string $name,
    public float $price,
    public ?string $description = "product",
  ) {}
}
$product = new Product(name:"ropes", price:10.99);
echo "\n";
echo "\n";
echo $product->name;
echo $product->price;
echo $product->description;









?>