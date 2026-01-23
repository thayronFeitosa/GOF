<?php

namespace Src\Client;

use Src\Adapter\MediaAdapter;
use Src\Enum\TypeMedia;
use Src\Target\MediaPlayer;

class AudioPlayer implements MediaPlayer
{
    public function play(string $audioType, string $fileName)
    {

        match ($audioType) {
            TypeMedia::MP3->value => print "Reproduzindo arquivo MP3: {$fileName}" . PHP_EOL,
            TypeMedia::MP4->value, TypeMedia::VLC->value => (function () use ($audioType, $fileName) {
                $adapter = new MediaAdapter($audioType);
                $adapter->play($audioType, $fileName);
            })(),

            default => print "Formato {$audioType} não suportado" . PHP_EOL,
        };
    }
}
