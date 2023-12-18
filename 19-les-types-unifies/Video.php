<?php

class Video
{
    public string $name;
    public int $numberOfPlays;

    private float|int $rating;

    public function __construct(string $name, int $numberOfPlays)
    {
        $this->name = $name;
        $this->numberOfPlays = $numberOfPlays;
    }

    public function getRating(): float|int
    {
        return $this->rating;
    }

    public function setRating(float|int $rating): void
    {
        // Si plus petti que 0, set à 0
        $rating = max(0, $rating);
        // Si plus grand que 5, set à 5
        $this->$rating = min(5, $rating);
    }
}