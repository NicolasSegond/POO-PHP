<?php

require_once 'DigitalBook.php';
require_once 'PhysicalBook.php';

$physicalBook = new PhysicalBook("The Lord of the Rings", "J. R. R. Tolkien", 20, 2);
$digitalBook = new DigitalBook("The Lord of the Rings", "J. R. R. Tolkien", 20, 2);

print $physicalBook->getAuthor() . PHP_EOL;
print $digitalBook->getAuthor() . PHP_EOL;

$physicalBook->printPhysicalBook();
$digitalBook->printDigitalBook();