<?php
$mov = new ffmpeg_movie(dirname(__FILE__) . '/test_media/robot.avi');
$img = dirname(__FILE__) . '/test-';
$i = 0;

while (($frame = $mov->getFrame()) != false) {
    $i = $mov->getFrameNumber();
    $filename = $img . $i . '.png';
    $gd_image = $frame->toGDImage();
    imagepng($gd_image, $filename);
    printf("ffmpeg frame->isKeyFrame($i)= %d\n", $frame->isKeyFrame());
    imagedestroy($gd_image);
    unlink($filename);
}
?>
