<?php

require_once 'JsonFileReader.php';

try {
    $reader= new JsonFileReader();
    $items = $reader->readFileAsassociativeArray('foo.json');
    print_r($items);
}
catch(Exception $e) {
    echo $e->getMessage().PHP_EOL;
}