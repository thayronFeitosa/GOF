<?php

namespace Src\ConcreteProduct;

use Src\Products\Button;

class DarkButton implements Button
{
    public function render(): void
    {
        echo "Rendering a dark-themed button.\n";
    }
}
