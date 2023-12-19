<?php

require_once 'JsonFileReader.php';

try{
    $filePointer = fopen('errors.txt', 'ab+');
    fwrite($filePointer, 'Starting...');
    $reader = new JsonFileReader();
    $items = $reader->readFileAsassociativeArray('inventory.json');
    print_r($items);
}
catch(FileNotFoundException|JsonException $fileException){
    fwrite($filePointer, "There a probleme in our file.. please check the errors : {$fileException->getMessage()} in file {$fileException->getFile()} on line {$fileException->getLine()} on line {$fileException->getLine()}");
}
catch(Exception $exception){
    fwrite($filePointer, 'A problem occured..'. $exception->getMessage(). ' on line ' . $exception->getLine(). ' in file ' . $exception->getFile().PHP_EOL);
}
finally{
    print "Finally block is executed".PHP_EOL;
    fclose($filePointer);
}