<?php

namespace Src\Builders;

use Src\Enum\TypeBread;
use Src\Enum\TypeMeat;
use Src\Products\Snack;

interface ISnackBuilder
{
    public function typeBread(TypeBread $typeBread): self;
    public function typeMeat(TypeMeat $typeMeat): self;
    public function addBread(): self;
    public function addMeat(): self;
    public function addCheese(): self;
    public function addSauce(): self;
    public function addExtraIngredient(): self;
    public function chooseSize(): self;
    public function getSnack(): Snack;
    public function reset(): void;
}
