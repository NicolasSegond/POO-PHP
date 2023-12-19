<?php
require_once 'Product.php';
require_once 'ProductWriter.php';

$writer = new JsonProductWriter();
$product = new Product('Apple', 'iPhone 12', new JsonProductWriter());

print $product->write($writer).PHP_EOL;