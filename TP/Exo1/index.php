<?php

require_once 'Fruits.php';

$apple = new Fruits('Apple', 100, 1, 'https://apple.jpg');
$cerise = new Fruits('Cerise', 150, 2, 'https://cerise.jpg');
$banana = new Fruits('Banana', 150, 2, 'https://banana.jpg');

$listFruits = array();
$listFruits[] = $apple;
$listFruits[] = $cerise;
$listFruits[] = $banana;

foreach($listFruits as $fruit) {
    if(in_array($fruit->getName(), ['Apple', 'Cerise'])) {
        print $fruit->__toString().PHP_EOL;
    }
}