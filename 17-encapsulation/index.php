<?php

require_once 'Video.php';
require_once 'VideoPlaylist.php';

$playlist = new VideoPlaylist();
$video = new Video('PHP for beginners', 1000);
$fakeVideo = "Ce n'est pas un objet vidéo";

// Ici le fait de privatiser la propriété et ne la rendre accessible que par
// la méthode addVideo() empeche d'enregistrer une vidéo qui n'est pas un objet
//$playlist->addVideo($fakeVideo);

$playlist->addVideo($video);
$playlist->addVideo(new Video('Astuces', 2000));

var_dump($playlist->getVideos());