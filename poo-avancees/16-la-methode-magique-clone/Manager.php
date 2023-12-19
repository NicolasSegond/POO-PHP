<?php

class Manager
{
    public function __construct(public string $name){

    }
}

$managerOne = new Manager('Manager One');
$managerTwo = clone $managerOne;
$managerTwo->name = 'Manager Two';

class Department
{
    public function __construct(public string $name, public Manager $manager){

    }

    public function __clone(){
        $this->manager = clone $this->manager;
    }
}

$departmentOne = new Department('Sales', $managerOne);
$departmentTwo = clone $departmentOne;

$departmentTwo->name = 'Marketing';
$departmentTwo->manager->name = 'Manager Three';
print_r($departmentOne);
print_r($departmentTwo);
