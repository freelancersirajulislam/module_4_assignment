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

    public function getFormattedPrice() {
        // Format the price with two decimal places
        return number_format($this->price, 2);
    }
}

// Create an instance of the Product class
$product = new Product(1, "Product A", 19.99);

// Get and display the formatted price
$formattedPrice = $product->getFormattedPrice();
echo "Formatted Price: $" . $formattedPrice . "\n";






