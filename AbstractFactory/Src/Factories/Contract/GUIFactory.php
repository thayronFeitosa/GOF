<?php

namespace Src\Factories\Contract;

use Src\Products\Button;
use Src\Products\CheckBox;

interface GUIFactory {
    public function createButton(): Button;
    public function createCheckBox(): CheckBox;
}