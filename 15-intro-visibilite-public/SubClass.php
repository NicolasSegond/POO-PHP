<?php

class SubClass extends BaseClass
{
    public function getParentProtectedProperty(): string
    {
        return $this->protectedProperty;
    }

    public function getParentPrivateProperty(): string
    {
        // Cette ligne renverra une erreur, car
        // la propriété $privateProperty n'est pas accessible depuis la classe enfant
        // return $this->privateProperty;

        // Pour y accéder, il faut passer par une méthode publique (getter)
        return $this->getPrivateProperty();
    }
}