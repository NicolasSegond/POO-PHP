<?php

class Bee implements  AnimalKingdomInterface, InsectKingdomInterface
{

    public function voice()
    {
        return 'une abeille bourdonne';
    }

    public function eat()
    {
        return 'une abeille est herbivore';
    }

    public function shellColor()
    {
        return "la carapace de l'abeille est noire";
    }
}