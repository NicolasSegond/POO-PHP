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
}