<?php

require_once 'JsonFileReader.php';

try {
    $reader = new JsonFileReader('data.json');
    $data = $reader->readFileAsassociativeArray('json');
    $div = 100/0;
}catch (ArgumentCountError|TypeError $e) {
    print "Erreur : " . $e->getMessage() . PHP_EOL;
} catch(Error $error){
    print "Erreur : " . $error->getMessage() . PHP_EOL;
}