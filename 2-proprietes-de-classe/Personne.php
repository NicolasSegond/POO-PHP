<?php

class Personne
{
    public $name = "John Doe";
}

$personne = new Personne();
print $personne->name . "\n";

// Ici on accède à la propriété $name de la classe Personne
// et on lui affecte une nouvelle valeur
$personne->name = "Jane Doe";
print $personne->name . "\n";