<?php

require_once 'JsonFileReader.php';

try{
    $reader = new JsonFileReader();
    $items = $reader->readFileAsassociativeArray('foo.json');
    print_r($items);
}
catch(FileNotFoundException|JsonException $e){
    print 'File problem.. figure it out yourself'.PHP_EOL;
}
catch(Exception $exception){
    print 'A problem occured..'. $exception->getMessage(). ' on line ' . $exception->getLine(). ' in file ' . $exception->getFile().PHP_EOL;
}