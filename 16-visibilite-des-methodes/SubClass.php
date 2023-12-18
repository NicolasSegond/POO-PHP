<?php

class SubClass extends BaseClass
{
    public function getParentProtectedProperty():string
    {
        return $this->getProtectedProperty();
    }

    public function getParentPrivateProperty():string
    {
        // On doit utiliser le getter
        return $this->getPrivateProperty();
    }
}