<?php

class Phone
{
    // Depuis PHP8.0 on peut écrire le constructeur de cette manière
    public function __construct(public $name, public $price)
    {

    }

    public function getDollardFromEuroToCurrency($coefficient, $currentSymbol = "$"){
        return $this->price * $coefficient.$currentSymbol;
    }
}

$phone = new Phone("iPhone", 500000);
print $phone->name.PHP_EOL;
print $phone->price.PHP_EOL;