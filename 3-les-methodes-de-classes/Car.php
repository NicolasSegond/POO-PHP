<?php

class Car
{
    public $name = "Tesla";
    public $price;

    public function getDollarPrice(){
        // $this permet de faire référence à l'objet que l'on instancie
        return $this->price * 1.08;
    }
}

$car = new Car();
$car->price = 500000;
$price = $car->getDollarPrice();
var_dump($price).PHP_EOL;