<?php

require_once 'Rateable.php';
class Product
{
    use Rateable;
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

    public function __set(string $propertyName, mixed $value): void
    {
        $methodName = "set$propertyName";
        if (!method_exists($this, $methodName)) {
            throw new \http\Exception\BadMethodCallException("Method {$methodName} does not exist");
        }
        $this->$methodName($value);
    }
}