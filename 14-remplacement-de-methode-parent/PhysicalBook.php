<?php
require_once 'Book.php';

class PhysicalBook extends Book
{
    public int $weight;

    public function __construct(string $title, string $author, int $prices, int $weight)
    {
        parent::__construct($title, $author, $prices);
        $this->weight = $weight;
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


    public function printBook(): string
    {
        $string = "{$this->title}, {$this->author}, Weight: {$this->getWeight()}";
        return print $string.PHP_EOL;
    }

}