<?php

use App\User;

require_once 'vendor/autoload.php';

$adminClass = new ReflectionClass(User::class);

$className = $adminClass->getName();

$shortName = $adminClass->getShortName();

$params = $adminClass->getMethod('__construct')->getParameters();

$methods = $adminClass->getMethods();