<?php

declare(strict_types=1);
require_once 'Song.php';
require_once 'Playlist.php';

$playlist = new Playlist();
$song1 = new Song("Yesterday", 1000000);
$song2 = new Song("Black Bird", 1000000);
$playlist->addSong($song1);
$playlist->addSong($song2);

foreach ($playlist->songs as $song) {
    print $song->name . PHP_EOL;
}

