<?php

class Video
{
    public string $name;
    public int $numberOfPlays;

    public function __construct(string $name, int $numberOfPlays)
    {
        $this->name = $name;
        $this->numberOfPlays = $numberOfPlays;
    }


}