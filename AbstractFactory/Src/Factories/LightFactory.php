<?php

namespace Src\Factories;

use Src\ConcreteProduct\LightButton;
use Src\ConcreteProduct\LightCheckbox;
use Src\Factories\Contract\GUIFactory;
use Src\Products\Button;
use Src\Products\CheckBox;

class LightFactory implements GUIFactory
{
    public function createButton(): Button
    {
        return new LightButton();
    }

    public function createCheckBox(): CheckBox
    {
        return new LightCheckbox();
    }
}
