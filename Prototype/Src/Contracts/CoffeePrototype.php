<?php

namespace Src\Contracts;

interface CoffeePrototype
{
    public function cloneObject(): self;
}
