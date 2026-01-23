<?php
namespace Src\Adapter;

use Src\Adapter\Contracts\AdvancedMediaPlayer;

class Mp4Player implements AdvancedMediaPlayer {
    public function playMedia(string $fileName) {
        echo "Reproduzindo arquivo MP4: {$fileName}" . PHP_EOL;
    }
}
