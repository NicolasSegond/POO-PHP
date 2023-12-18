<?php

class Book
{
    public string $title;
    public string $author;
    public int $prices;
    public string $type;
    public int $weight;
    public int $fileSize;

    public function __construct(string $title, string $author, int $prices, string $type, int $weight, int $fileSize)
    {
        $this->title = $title;
        $this->author = $author;
        $this->prices = $prices;
        $this->type = $type;
        $this->weight = $weight;
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
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @param int $weight
     */
    public function setWeight(int $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @param int $fileSize
     */
    public function setFileSize(int $fileSize): void
    {
        $this->fileSize = $fileSize;
    }

    // Ici nous avons géré la différence entre livre physique et digital
    // mais on se rend bien compte que cela sera difficile à maintenir et
    // à faire évoluer
    public function printBook():string
    {
        $string = "{$this->title}, {$this->author}, ";
        if ($this->type === "digital") {

        } else if($this->type === "physical"){

        }
        return;
    }
}