<?php

require_once 'Fruits.php';
require_once 'Panier.php';

$apple = new Fruits('Apple', 100, 1, 'https://apple.jpg');
$cerise = new Fruits('Cerise', 150, 2, 'https://cerise.jpg');
$banana = new Fruits('Banana', 150, 2, 'https://banana.jpg');

$panier1 = new Panier();
$panier1->addPanier($apple);
$panier1->addPanier($cerise);
$panier1->addPanier($banana);

print 'Panier 1:';
foreach ($panier1->getPanier() as $fruit) {
    print $fruit->__toString().PHP_EOL;
}

$panier2 = new Panier();
$panier2->addPanier($apple);

print 'Panier 2:';
foreach ($panier2->getPanier() as $fruit) {
    print $fruit->__toString().PHP_EOL;
}

