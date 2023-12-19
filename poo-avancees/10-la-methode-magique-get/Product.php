<?php

class Product
{
    public function __construct(private string $manufacturer, private string $itemName)
    {
    }

    public function getName(): string
    {
        return $this->manufacturer . ' ' . $this->itemName;
    }

    public function __get(string $propertyName): string
    {
        $methodName = "get$propertyName";
        if (method_exists($this, $methodName)) {
            return $this->$methodName();
        }
    }
}