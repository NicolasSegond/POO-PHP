<?php

require_once 'Video.php';
require_once 'VideoPlaylist.php';

$videoTitles = ['Video 1', 'Video 2', 'Video 3', 'Video 4', 'Video 5'];

// Ici on utilise l'index du tableau pour enregistrer la valeur
// la propriété name étant public et on peut même écraser cette valeur à la volée
//$video = new Video($videoTitles[0], 4356);
//$video->name= $videoTitles[1];

// Ici regardons ce qu'il se passe si on oublie de lui attribuer la valeur de cet index
// et que la propriété name n'est pas typée
 $video = new Video($videoTitles[0], 65343);
 $video->name=$videoTitles;

 var_dump($video->name);