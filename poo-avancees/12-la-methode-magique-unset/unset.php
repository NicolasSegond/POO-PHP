<?php

require_once 'Product.php';

$product = new Product('Acme', 'Radio Knob');
print $product->name . PHP_EOL;

try{
    $product->rating = 6;

    print 'Rating: ' . $product->rating . PHP_EOL;
} catch (BadMethodCallException $e) {
    print "Erreur : " . $e->getMessage() . PHP_EOL;
}

unset($product->rating);

print 'Rating: ' . $product->rating . PHP_EOL;