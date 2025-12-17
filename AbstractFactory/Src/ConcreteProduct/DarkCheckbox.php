<?php

namespace Src\ConcreteProduct;

use Src\Products\CheckBox;

class DarkCheckbox implements CheckBox
{
    public function render(): void
    {
        echo "Rendering a dark-themed checkbox.\n";
    }
}
