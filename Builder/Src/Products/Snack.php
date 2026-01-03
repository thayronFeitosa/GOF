<?php

namespace Src\Products;

use Src\Enum\SnackSize;
use Src\Enum\TypeBread;
use Src\Enum\TypeMeat;

class Snack
{
    private TypeBread $bread;
    private TypeMeat $typeMeat;
    private int $qtdMeat = 1;
    private array $cheese = [];
    private array $sauce = [];
    private array $extraIngredient = [];
    private string $size;

    public function setTypeBread(TypeBread $bread = TypeBread::AUSTRALIANO): void
    {
        $this->bread = $bread;
    }

    public function getTypeBread(): TypeBread
    {
        return $this->bread;
    }

    public function setTypeMeat(TypeMeat $typeMeat): void
    {
        $this->typeMeat = $typeMeat;
    }

    public function getTypeMeat(): TypeMeat
    {
        return $this->typeMeat;
    }

    public function setQtdMeat(int $qtdMeat): void
    {
        $this->qtdMeat += $qtdMeat;
    }

    public function getQtdMeat(): int
    {
        return $this->qtdMeat;
    }

    public function addCheese()
    {
        $this->cheese[] = 1;
    }

    public function getQtdCheese(): int
    {
        return count($this->cheese);
    }

    public function addSauce(int $sauce)
    {
        $this->sauce[] = $sauce;
    }

    public function getQtdSauce()
    {
        return count($this->sauce);
    }

    public function addExtraIngredient(string $ingredient)
    {
        $this->extraIngredient[] = $ingredient;
    }

    public function setSize(int $size = SnackSize::MEDIUM): self
    {
        $this->size = $size;
        return $this;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function getPreco()
    {
        $preco = 10;
        $preco += count($this->cheese) * 2;
        $preco += count($this->sauce) * 1.5;
        $preco += count($this->extraIngredient) * 3;
        if (isset($this->size)) {
            $preco += (5 * $this->size);
        }
        return $preco;
    }

    public function printSnackReceipt(): void
    {
        $line = str_repeat('-', 35);

        echo PHP_EOL;
        echo $line . PHP_EOL;
        echo str_pad('SNACK RECEIPT', 35, ' ', STR_PAD_BOTH) . PHP_EOL;
        echo $line . PHP_EOL;

        echo str_pad('Snack Size:', 22)
            . SnackSize::from($this->getSize())->name . PHP_EOL;

        echo str_pad('Bread:', 22)
            . $this->getTypeBread()->name . PHP_EOL;

        echo str_pad('Meat:', 22)
            . $this->getTypeMeat()->name . PHP_EOL;

        echo str_pad('Meat Quantity:', 22)
            . $this->getQtdMeat() . PHP_EOL;

        echo $line . PHP_EOL;
        echo str_pad('Cheeses:', 22)
            . $this->getQtdCheese() . PHP_EOL;

        echo str_pad('Sauces:', 22)
            . $this->getQtdSauce() . PHP_EOL;

        echo $line . PHP_EOL;
        echo str_pad('TOTAL PRICE:', 22)
            . '$ ' . number_format($this->getPreco(), 2, '.', ',') . PHP_EOL;

        echo $line . PHP_EOL;
        echo str_pad('THANK YOU!', 35, ' ', STR_PAD_BOTH) . PHP_EOL;
        echo $line . PHP_EOL . PHP_EOL;
    }
}
