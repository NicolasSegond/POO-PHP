<?php

// les différents types de déclaration
// boolean
// integer
// float
// string
// objet
// array
// ressource
// NULL

// Permet les types stricts, exemple un int ne sera pas
// interprété comme un string

declare(strict_types=1);
require_once('Song.php');

$song = new Song("Bohemian Rhapsody", 1000000);
var_dump($song);
print $song->name.PHP_EOL;