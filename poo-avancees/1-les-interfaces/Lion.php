<?php

class Lion implements AnimalKingdomInterface
{

    public function voice()
    {
        return 'un lion rugit';
    }

    public function eat()
    {
        return 'le lien est carnivore';
    }
}