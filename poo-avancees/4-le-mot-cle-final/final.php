<?php

class PercentageCalculator
{
    public function calculatePercentage($part, $whole):float
    {
        return $part / $whole * 100;
    }
}

class FinanceCalculator extends PercentageCalculator
{
    public function calculatePercentage($a, $b):float
    {
        return $a/$b;
    }
}

$financeCalculator = new FinanceCalculator();
print $financeCalculator->calculatePercentage(5, 20).PHP_EOL;

$financeCalculator = new PercentageCalculator();
print $financeCalculator->calculatePercentage(5, 20).PHP_EOL;