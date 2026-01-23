<?php
namespace Src\Adapter;

use Src\Adapter\Contracts\AdvancedMediaPlayer;

class Mp4Player implements AdvancedMediaPlayer {
    public function playAudioMedia(string $fileName) {
        echo "Reproduzindo audio do arquivo MP4: {$fileName}" . PHP_EOL;
    }
}
