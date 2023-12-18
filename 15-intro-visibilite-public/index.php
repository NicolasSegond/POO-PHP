<?php

require_once 'BaseClass.php';
require_once 'SubClass.php';

// Ici on accède à une propriété publique depuis la classe elle-même

$baseObject = new BaseClass();
print $baseObject->publicProperty . PHP_EOL;

// Iic nous accédons à une propriété publique depuis la sous-classe

$subObject = new SubClass();
print $subObject->publicProperty . PHP_EOL;

// Ici cette ligne on renverras une erreur, car la propriété $protectedProperty est protéger donc pas accessible ici
// il nous faut un getter pour y accéder
// print $baseObject->protectedProperty . PHP_EOL;

// Ici on accède à la valeur grâce à la méthode publique getProtectedProperty()
print $baseObject->getProtectedProperty() . PHP_EOL;

// Ici nous accèdons à la propriété protégée depuis la sous-classe
print $subObject->getParentProtectedProperty() . PHP_EOL;

// cette kugbe renverra une erreur, il faut a nouveau un getter pour y accéder
//print $baseObject->privateProperty . PHP_EOL;

// Ici avec une méthode get nous pouvons accéder à la propriété
print $baseObject->getPrivateProperty() . PHP_EOL;

// Ici nous aacédons à la propriété grâce au getter de la classe parent
print $subObject->getParentPrivateProperty() . PHP_EOL;