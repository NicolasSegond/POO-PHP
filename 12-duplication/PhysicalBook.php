<?php

class PhysicalBook
{
    public string $title;
    public string $author;
    public int $prices;
    public int $weight;

    public function __construct(string $title, string $author, int $prices, int $weight)
    {
        $this->title = $title;
        $this->author = $author;
        $this->prices = $prices;
        $this->weight = $weight;
    }


    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @return int
     */
    public function getPrices(): int
    {
        return $this->prices;
    }

    /**
     * @return int
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @param string $author
     */
    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

    /**
     * @param int $prices
     */
    public function setPrices(int $prices): void
    {
        $this->prices = $prices;
    }


    /**
     * @param int $weight
     */
    public function setWeight(int $weight): void
    {
        $this->weight = $weight;
    }


    public function printPhysicalBook(): string
    {
        $string = "{$this->title}, {$this->author}, Weight: {$this->getWeight()}";
        return print $string;
    }

    public function getPriceAsCurrent(){
        return "$".$this->getPrices();
    }

}