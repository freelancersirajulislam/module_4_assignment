<?php
class Product {
    private $id;
    private $name;
    private $price;

    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }
}
$product1 = new Product(1, "Product A", 19.99);
$product2 = new Product(2, "Product B", 29.99);

// Accessing product properties
echo "Product ID: " . $product1->getId() . "\n";
echo "Product Name: " . $product1->getName() . "\n";
echo "Product Price: $" . $product1->getPrice() . "\n";





