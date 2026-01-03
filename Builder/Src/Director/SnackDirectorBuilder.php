<?php

namespace Src\Director;

use Src\Builders\ISnackBuilder;
use Src\Enum\TypeBread;
use Src\Enum\TypeMeat;
use Src\Enum\SnackSize;

class SnackDirectorBuilder
{
    private $builder;

    public function __construct(ISnackBuilder $builder)
    {
        $this->builder = $builder;
    }

    public function simpleSnach()
    {
        $this->builder
            ->typeBread(TypeBread::FRANCES)
            ->typeMeat(TypeMeat::BEEF)
            ->chooseSize(SnackSize::MEDIUM->value)
            ->addBread()
            ->addMeat()
            ->addCheese()
            ->addSauce();
    }

    public function vegetarianSnach()
    {
        $this->builder
            ->typeBread(TypeBread::INTEGRAL)
            ->typeMeat(TypeMeat::VEGGIE)
            ->chooseSize(SnackSize::MEDIUM->value)
            ->addBread()
            ->addMeat()
            ->addCheese()
            ->addSauce();
    }

    public function fullSnack()
    {
        $this->builder
            ->typeBread(TypeBread::AUSTRALIANO)
            ->typeMeat(TypeMeat::BEEF)
            ->chooseSize(SnackSize::LARGE->value)
            ->addBread()
            ->addMeat()
            ->addMeat()
            ->addCheese()
            ->addCheese()
            ->addCheese()
            ->addCheese()
            ->addSauce();
    }

    public function mediumSnack()
    {
        $this->builder
            ->typeBread(TypeBread::AUSTRALIANO)
            ->typeMeat(TypeMeat::BEEF)
            ->chooseSize(SnackSize::MEDIUM->value)
            ->addBread()
            ->addMeat()
            ->addCheese()
            ->addCheese()
            ->addSauce();
    }

    public function childrenSnack()
    {
        $this->builder
            ->typeBread(TypeBread::INTEGRAL)
            ->typeMeat(TypeMeat::BEEF)
            ->chooseSize(SnackSize::SMALL->value)
            ->addBread()
            ->addMeat()
            ->addCheese()
            ->addSauce();
    }
}
