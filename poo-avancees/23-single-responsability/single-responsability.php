<?php

require_once 'vendor/autoload.php';

$song = new \App\Song('The Beatles', 'Hey Jude', 180);
$songAsText = $song->write(true);
dd($songAsText);