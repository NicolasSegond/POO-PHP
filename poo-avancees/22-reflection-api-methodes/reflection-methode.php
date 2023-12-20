<?php

use App\User;

require_once 'vendor/autoload.php';

$userClass = new ReflectionClass(User::class);

$parent = $userClass->getParentClass();
$parentMethod = $parent->getMethods();

foreach($parentMethod as $method) {
    $content = "Method name : ".$method->getName().PHP_EOL;
    $content .= "Method start line : ".$method->getStartLine().PHP_EOL;
    if($method->isPublic()) {
        $content .= "Method is public".PHP_EOL;
    }
}