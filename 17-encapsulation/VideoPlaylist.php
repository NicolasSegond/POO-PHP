<?php

class VideoPlaylist
{
    private array $videos = [];

    /**
     * @param Video $video
     * @return void
     */
    public function addVideo(Video $video):void
    {
        $this->videos[] = $video;
    }

    /**
     * @return array
     */
    public function getVideos():array
    {
        return $this->videos;
    }
}