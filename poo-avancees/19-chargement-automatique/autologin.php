<?php
$simpleAutoload = static function(string $className) {
    if(file_exists($className.'.php')) {
        require_once $className.'.php';
    }
};

spl_autoload_register($simpleAutoload);

$chart = new Chart();
print $chart->draw();