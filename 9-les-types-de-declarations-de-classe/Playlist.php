<?php

class Playlist
{
    public $songs = [];

    public function addSong(Song $song)
    {
        $this->songs[] = $song;
    }
}