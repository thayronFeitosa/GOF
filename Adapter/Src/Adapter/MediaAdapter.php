<?php

namespace Src\Adapter;

use Src\Adapter\Contracts\AdvancedMediaPlayer;
use Src\Enum\TypeMedia;
use Src\Target\MediaPlayer;

class MediaAdapter implements MediaPlayer
{
    private AdvancedMediaPlayer $advancedPlayer;

    public function __construct(string $audioType)
    {
        $this->advancedPlayer = match ($audioType) {
            TypeMedia::MP4->value => new Mp4Player(),
            TypeMedia::VLC->value => new VlcPlayer(),
            default => throw new \InvalidArgumentException("Formato {$audioType} não suportado pelo adapter"),
        };
    }

    public function play(string $audioType, string $fileName): void
    {
        match ($audioType) {
            TypeMedia::MP4->value => $this->advancedPlayer->playAudioMedia($fileName),
            TypeMedia::VLC->value => $this->advancedPlayer->playAudioMedia($fileName),
            default => throw new \InvalidArgumentException("Formato {$audioType} não suportado pelo adapter"),
        };
    }
}
