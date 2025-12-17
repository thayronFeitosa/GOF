<?php

namespace Src\Factories;

use Src\ConcreteProduct\DarkButton;
use Src\ConcreteProduct\DarkCheckbox;
use Src\Factories\Contract\GUIFactory;
use Src\Products\Button;
use Src\Products\CheckBox;

class DarkFactory implements GUIFactory
{
    public function createButton(): Button
    {
        return new DarkButton();
    }

    public function createCheckBox(): CheckBox
    {
        return new DarkCheckbox();
    }
}
