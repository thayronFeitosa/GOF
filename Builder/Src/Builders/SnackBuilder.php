<?php

namespace Src\Builders;

use Src\Enum\SnackSize;
use Src\Enum\TypeBread;
use Src\Enum\TypeMeat;
use Src\Products\Snack;

class SnackBuilder implements ISnackBuilder
{
    private Snack $snack;

    public function __construct()
    {
        $this->reset();
    }

    public function typeBread(TypeBread $typeBread = TypeBread::AUSTRALIANO): self
    {
        $this->snack->setTypeBread($typeBread);
        return $this;
    }

    public function typeMeat(TypeMeat $typeMeat): self
    {
        $this->snack->setTypeMeat($typeMeat);
        return $this;
    }

    public function chooseSize(int $snackSize = SnackSize::MEDIUM->value): self
    {
        $this->snack->setSize($snackSize);
        return $this;
    }

    public function reset(): void
    {
        $this->snack = new Snack();
    }

    public function addBread(): self
    {
        return $this;
    }

    public function addMeat(): self
    {
        return $this;
    }

    public function addCheese(): self
    {
        $this->snack->addCheese(1);
        return $this;
    }

    public function addSauce(): self
    {
        $this->snack->addSauce(1);
        return $this;
    }

    public function addExtraIngredient(): self
    {
        $this->snack->addExtraIngredient('bacon');
        return $this;
    }

    public function getSnack(): Snack
    {
        return $this->snack;
    }
}
