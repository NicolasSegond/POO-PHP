<?php

class Buffalo implements AnimalKingdomInterface
{

    public function voice()
    {
        return "un buffle beugle";
    }

    public function eat()
    {
        return "un buffle est herbivore";
    }
}