<?php

class Product {
    public float $price;
    public int $amount;
    public string $name;


    public function __construct($name, $price, $amount) {
        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;
    }

    public function printProduct(): string {
        return "$this->name, price, " .
            number_format($this->price, 2, ',', ' ') .
            " amount $this->amount ";
    }

}
$product1 = new Product("Logitech mouse", 70.00, 14);
echo $product1->printProduct();
echo PHP_EOL;
$product2 = new Product("iPhone 5s", 999.99, 3);
echo $product2->printProduct();
echo PHP_EOL;
$product3 = new Product("Epson EB-U05", 440.46, 1);
echo $product3->printProduct();
echo PHP_EOL;
