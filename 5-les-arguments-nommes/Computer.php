<?php

class Computer
{
    public $name = "MacBook Pro";
    public $price;

    public function getPriceFromEuroToCcurrency($coefficient, $currentSymbol = "$"){
        //Nous avons donné une valeur par défaut à $currentSymbol
        return $this->price * $coefficient.$currentSymbol;
    }
}

$computer = new Computer();
$computer->price = 500000;
// Nouvelle écriture depuis PHP8.0
$dollardComputerPrice = $computer->getPriceFromEuroToCcurrency(coefficient: 1.08);
var_dump($dollardComputerPrice).PHP_EOL;
// ici on écrase la valeur par défaut
$dollardComputerPrice = $computer->getPriceFromEuroToCcurrency(coefficient: 0.86, currentSymbol: "€");
var_dump($dollardComputerPrice).PHP_EOL;