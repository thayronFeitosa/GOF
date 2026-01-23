<?php
require __DIR__ . '/autoload.php';

use Src\Coffee;
use Src\Enum\CoffeeSize;

$baseCoffee = new Coffee();

$coffee1 = $baseCoffee
    ->cloneObject()
    ->withSize(CoffeeSize::LARGE)
    ->withMilk();

$coffee2 = $baseCoffee->cloneObject()->withSugar();

$coffee1->describe();
$coffee2->describe();
