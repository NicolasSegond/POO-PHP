<?php

require_once 'DigitalBook.php';
require_once 'PhysicalBook.php';

$physicalBook = new PhysicalBook("The Lord of the Rings", "J. R. R. Tolkien", 20, 2);
$digitalBook = new DigitalBook("The Lord of the Rings", "J. R. R. Tolkien", 20, 2);

print $physicalBook->getWeight() . PHP_EOL;
print $digitalBook->getFileSize() . PHP_EOL;

$physicalBook->printPhysicalBook();
$digitalBook->printDigitalBook();