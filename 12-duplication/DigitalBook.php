<?php

class DigitalBook
{
    public string $title;
    public string $author;
    public int $prices;
    public int $fileSize;

    public function __construct(string $title, string $author, int $prices, int $fileSize)
    {
        $this->title = $title;
        $this->author = $author;
        $this->prices = $prices;
        $this->fileSize = $fileSize;
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
    public function getFileSize(): int
    {
        return $this->fileSize;
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
     * @param int $fileSize
     */
    public function setFileSize(int $fileSize): void
    {
        $this->fileSize = $fileSize;
    }

    public function printDigitalBook():string
    {
        $string = "{$this->title}, {$this->author}, FileSize: {$this->getFileSize()}";
        return print $string;
    }
}