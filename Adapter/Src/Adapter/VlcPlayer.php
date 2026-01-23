<?php

namespace Src\Adapter;

use Src\Adapter\Contracts\AdvancedMediaPlayer;

class VlcPlayer implements AdvancedMediaPlayer {

    public function playAudioMedia(string $fileName) {
        echo "Reproduzindo audio do arquivo VLC: {$fileName}" . PHP_EOL;
    }
}
