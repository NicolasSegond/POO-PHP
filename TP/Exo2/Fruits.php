<?php

class Fruits
{
    private string $name;
    private int|float $weight;
    private int|float $price;
    private string $image;

    public function __construct(string $name, int $weight, int $price, string $image)
    {
        $this->name = $name;
        $this->weight = $weight;
        $this->price = $price;
        $this->image = $image;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     */
    public function setWeight(int $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    public function __toString(): string
    {
        return $this->getName() . " " . $this->getWeight() . " " . $this->getPrice() . " " . $this->getImage();
    }


}