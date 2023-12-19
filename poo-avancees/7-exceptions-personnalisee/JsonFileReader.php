<?php

class JsonFileReader
{
    public function readFileAsassociativeArray(string $filename):array
    {
        if(!file_exists($filename)) {
            throw new Exception("File $filename does not exist");
        }
        $content = file_get_contents($filename);

        $items = json_decode($content, true);

        return $items;
    }
}