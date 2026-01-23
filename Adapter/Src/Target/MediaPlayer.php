<?php

namespace Src\Target;

interface MediaPlayer {
    public function play(string $audioType, string $fileName);
}
