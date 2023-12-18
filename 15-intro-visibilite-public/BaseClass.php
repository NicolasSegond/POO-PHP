<?php

class BaseClass
{
    public string $publicProperty = 'Une propriété ou une méthode publique est accessible partout';

    protected string $protectedProperty = 'Une propriété ou une méthode protégée est accessible dans la classe et dans les classes qui en héritent';

    private string $privateProperty = 'Une propriété ou une méthode privée est accessible uniquement dans la classe qui la déclare';

    public function getProtectedProperty(): string
    {
        return $this->protectedProperty;
    }

    public function getPrivateProperty(): string
    {
        return $this->privateProperty;
    }
}