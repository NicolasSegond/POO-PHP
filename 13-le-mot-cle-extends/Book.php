<?php

class Book
{
    public string $title;
    public string $author;
    public int $prices;

    public function __construct(string $title, string $author, int $prices)
    {
        $this->title = $title;
        $this->author = $author;
        $this->prices = $prices;
    }

    public function getType(): string
    {
        return $this->type;
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
}