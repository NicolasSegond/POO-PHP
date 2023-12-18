<?php
require_once 'Book.php';
class DigitalBook extends Book
{
    public string $title;
    public string $author;
    public int $prices;
    public int $fileSize;

    public function __construct(string $title, string $author, int $prices, int $fileSize)
    {
        parent::__construct($title, $author, $prices);
        $this->fileSize = $fileSize;
    }

    /**
     * @return int
     */
    public function getFileSize(): int
    {
        return $this->fileSize;
    }

    public function printDigitalBook():string
    {
        $string = "{$this->title}, {$this->author}, FileSize: {$this->getFileSize()}";
        return print $string;
    }

    // Maintenant cette méthode est commune à tous les livres (au deux classes)
    // Elle est transmise par le prince d'héritage et grâce au mot clé extends
    public function getPriceAsCurrency(){
        return '$' . $this->getPrices()/100;
    }


}