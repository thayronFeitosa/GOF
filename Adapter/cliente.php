<?php

use Src\Client\AudioPlayer;
use Src\Enum\TypeMedia;

require __DIR__ . '/autoload.php';

$player = new AudioPlayer();

$player->play(TypeMedia::MP3->value, 'musica.mp3');
$player->play(TypeMedia::MP4->value, 'video.mp4');
$player->play(TypeMedia::VLC->value, 'filme.vlc');
$player->play(TypeMedia::AVI->value, 'arquivo.avi');