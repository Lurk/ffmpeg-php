<?php
$mov = new ffmpeg_movie(dirname(__FILE__) . '/test_media/robot.avi', 1);
$mov2 = new ffmpeg_movie(dirname(__FILE__) . '/test_media/robot.avi', 1);
printf("ffmpeg getDuration(): %0.2f\n", $mov->getDuration());
printf("ffmpeg getDuration(): %0.2f\n", $mov2->getDuration());
?>
