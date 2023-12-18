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