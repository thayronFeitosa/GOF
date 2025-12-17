<?php

namespace Src\ConcreteProduct;

use Src\Products\CheckBox;

class LightCheckbox implements CheckBox
{
    public function render(): void
    {
        echo "Rendering a light-themed checkbox.\n";
    }
}
