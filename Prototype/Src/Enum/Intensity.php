<?php

namespace Src\Enum;

enum Intensity: int
{
    case MILD = 1;
    case MEDIUM = 2;
    case INSENSE = 3;
    case STRONG = 4;
    case EXTRA_STRONG = 5;
}
