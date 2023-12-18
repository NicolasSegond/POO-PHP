<?php
require_once 'Book.php';

$physicalBook = new Book("The Hitchhiker's Guide to the Galaxy", "Douglas Adams", 42, "paper", 100, 1000000);
$digitalBook = new Book("The Hitchhiker's Guide to the Galaxy", "Douglas Adams", 42, "digital", 0, 1000000);

print $physicalBook->getWeight() . PHP_EOL;
print $digitalBook->getFileSize() . PHP_EOL;

$physicalBook->printBook();
$digitalBook->printBook();