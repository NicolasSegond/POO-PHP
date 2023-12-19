<?php

require_once 'Book.php';
require_once 'Song.php';

// Ici nous allons créer un système permettant de générer un identifiant unique
// dans un trait et que cette méthode soit rendu comme en implétant une interface sur les classes

$book = new Book();
print $book->getHexId().PHP_EOL;

$song = new Song();
print $song->getHexId().PHP_EOL;