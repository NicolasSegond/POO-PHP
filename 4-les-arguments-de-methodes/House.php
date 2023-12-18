<?php

class House
{
    public $name = "Maison";
    public $price;

    public function getDollarPrice($currentSymbol = "$"){
        //Nous avons donné une valeur par défaut à $currentSymbol
        return $this->price * 1.08.$currentSymbol;
    }
}

$house = new House();
$house->price = 500000;
$dollardHousePrice = $house->getDollarPrice();
var_dump($dollardHousePrice).PHP_EOL;
// ici on écrase la valeur par défaut
$dollardHousePrice = $house->getDollarPrice("€");
var_dump($dollardHousePrice).PHP_EOL;