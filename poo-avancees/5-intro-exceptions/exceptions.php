<?php

require_once 'JsonFileReader.php';

$reader = new JsonFileReader();
$items = $reader->readFileAsassociativeArray('json');
// Renverra une exception
//$items = $reader->readFileAsassociativeArray('truc.json');

print_r($items);