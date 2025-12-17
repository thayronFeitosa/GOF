<?php

use Src\Factories\Contract\GUIFactory;
use Src\Factories\DarkFactory;
use Src\Factories\LightFactory;

require_once __DIR__ . '/autoload.php';

function renderUI(GUIFactory $factory)
{
    $factory->createButton()->render();
    $factory->createCheckbox()->render();
}

/**
 * @var GUIFactory $factory
 */
$factory = null;

$isDarkMode = false;

if ($isDarkMode) {
    $factory = new DarkFactory();
} else {
    $factory = new  LightFactory();
}

renderUI($factory);
