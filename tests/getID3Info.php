<?php
$mov = new ffmpeg_movie(dirname(__FILE__) . '/test_media/16Hz-20kHz-Exp-1f-5sec.mp3');
printf("ffmpeg getTitle(): %s\n", $mov->getTitle());
printf("ffmpeg getArtist(): %s\n", $mov->getArtist());
printf("ffmpeg getAlbum(): %s\n", $mov->getAlbum());
printf("ffmpeg getGenre(): %s\n", $mov->getGenre());
printf("ffmpeg getTrackNumber(): %s\n", $mov->getTrackNumber());
printf("ffmpeg getYear(): %s\n", $mov->getYear());

?>
