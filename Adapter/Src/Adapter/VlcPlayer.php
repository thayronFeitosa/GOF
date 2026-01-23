<?php

namespace Src\Adapter;

use Src\Adapter\Contracts\AdvancedMediaPlayer;

class VlcPlayer implements AdvancedMediaPlayer {

    public function playMedia(string $fileName) {
        echo "Reproduzindo arquivo VLC: {$fileName}" . PHP_EOL;
    }
}
