<?php

class Phone
{
    public $name;
    public $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getDollardFromEuroToCurrency($coefficient, $currentSymbol = "$"){
        return $this->price * $coefficient.$currentSymbol;
    }
}

$phone = new Phone("iPhone", 500000);
$price = $phone->getDollardFromEuroToCurrency(1.08);
var_dump($price).PHP_EOL;
$price = $phone->getDollardFromEuroToCurrency(0.86, "€");
var_dump($price).PHP_EOL;
