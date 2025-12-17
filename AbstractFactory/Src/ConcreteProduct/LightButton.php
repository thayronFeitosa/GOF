<?php

namespace Src\ConcreteProduct;

use Src\Products\Button;

class LightButton implements Button
{
    public function render(): void
    {
        echo "Rendering a light-themed button.\n";
    }
}