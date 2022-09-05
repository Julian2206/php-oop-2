<?php
include_once __DIR__ . '/User.php';

class Product
{
    private $type;
    private $brand;
    private $price;
    private $products = [];


    public function __construct($_type, $_brand, $_price, ...$_products)
    {
        $this->type = $_type;
        $this->brand = $_brand;
        $this->price = $_price;
        $this->products = $_products;
    }

    public function getType()
    {
        return $this->type;
    }
    public function setType($_type)
    {
        $this->type = $_type;
    }

    public function getBrand()
    {
        return $this->brand;
    }
    public function setbrand($_brand)
    {
        $this->brand = $_brand;
    }

    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice($_price)
    {
        $this->price = $_price;
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function addProducts(...$_products)
    {
        array_merge($this->products, $_products);
        //array_push($this->products, ...$_products);
    }
}

$dogFood1 = new Product('dog food', 'Pedigree', 39.99, 'Pedigree 15kg');

$dogFood2 = new Product('dog food', 'Barkyn', 25.00, 'Barkyn-croquettes');

$dogFood3 = new Product('dog food', 'Arkwrights', 27.90, 'Arkwrights BEEF');

$dogGame1 = new Product('dog game', 'Kong', 19.65, 'KONG - Extreme');

$dogGame2 = new Product('dog game', 'Trixie', 22.99, 'Trixie - Strategic');

$dogBed1 = new Product('dog bed', 'Feandrea', 17.99, 'Feandrea beds for animals');

$dogBed2 = new Product('dog bed', 'Lionto', 17.99, 'Lionto beds for dogs');

$dogBed3 = new Product('dog bed', 'William Walker', 299.99, 'William Walker The Cloud');

var_dump($dogFood1, $dogFood2, $dogFood3, $dogGame1, $dogGame2, $dogBed1, $dogBed2, $dogBed3);
