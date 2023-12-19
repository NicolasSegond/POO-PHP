<?php

interface AnimalKingdomInterface
{
    /// Les interfaces créent un contrat auquel les classes d'implémantation doivent adhérer.
    public function voice();

    public function eat();
}