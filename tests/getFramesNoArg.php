<?php
$mov = new ffmpeg_movie(dirname(__FILE__) . '/test_media/robot.avi');
$img = dirname(__FILE__) . '/test-';
$i = 0;

while (($frame = $mov->getFrame()) != false) {
    $i++;
    $filename = $img . $i . '.png';
    $gd_image = $frame->toGDImage();
    imagepng($gd_image, $filename);
    printf("ffmpeg getFrame($i): md5 = %s\n", md5(file_get_contents($filename)));
    imagedestroy($gd_image);
    unlink($filename);
}
?>
