<?php

class Panier
{
    private array $fruits = [];

    /**
     * @param Fruits $fruit
     * @return void
     */
    public function addPanier(Fruits $fruit):void
    {
        if(in_array($fruit->getName(), ['Apple','Cerise'])) {
            $this->fruits[] = $fruit;
        }
    }

    /**
     * @return array
     */
    public function getPanier():array
    {
        return $this->fruits;
    }

    public function __toString():string
    {
        $panier = '';
        foreach ($this->fruits as $fruit) {
            $panier .= $fruit->__toString().PHP_EOL;
        }
        return $panier;
    }
}