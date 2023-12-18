<?php
require_once 'BaseClass.php';
require_once 'SubClass.php';

$base = new BaseClass();
$sub = new SubClass();

print $sub->getParentProtectedProperty().PHP_EOL;
