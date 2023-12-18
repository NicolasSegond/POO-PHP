<?php

require_once 'Book.php';
require_once 'DigitalBook.php';
require_once 'PhysicalBook.php';

$physicalBook = new PhysicalBook("The Lord of the Rings", "J. R. R. Tolkien", 20, 2);
$digitalBook = new DigitalBook("The Lord of the Rings", "J. R. R. Tolkien", 20, 2);
$book = new Book("The Lord of the Rings", "J. R. R. Tolkien", 20);

print $physicalBook->getAuthor() . PHP_EOL;
print $digitalBook->getAuthor() . PHP_EOL;

$physicalBook->printBook();
$digitalBook->printBook();