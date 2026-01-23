<?php

namespace Src;

use Src\Contracts\CoffeePrototype;
use Src\Enum\Intensity;
use Src\Enum\CoffeeSize;

class Coffee implements CoffeePrototype {

    private CoffeeSize $size;
    private Intensity $intensity;
    private bool $milk;
    private bool $sugar;

    public function __construct()
    {
        // sleep(5);

        $this->size = CoffeeSize::SMALL;
        $this->intensity = Intensity::MEDIUM;
        $this->milk = false;
        $this->sugar = false;
    }

    public function cloneObject(): static
    {
        return clone $this;
    }

    public function withSize(CoffeeSize $size): static
    {
        $this->size = $size;
        return $this;
    }

    public function withIntensity(Intensity $intensity): static
    {
        $this->intensity = $intensity;
        return $this;
    }

    public function withMilk(): static
    {
        $this->milk = true;
        return $this;
    }

    public function withSugar(): static
    {
        $this->sugar = true;
        return $this;
    }

    public function describe(): void
    {
        echo "Coffee size: {$this->size->name}" . PHP_EOL;
        echo "Intensity: {$this->intensity->name}" . PHP_EOL;
        echo "Milk: " . ($this->milk ? 'yes' : 'no') . PHP_EOL;
        echo "Sugar: " . ($this->sugar ? 'yes' : 'no') . PHP_EOL;
        echo "------------------------" . PHP_EOL;
    }
}