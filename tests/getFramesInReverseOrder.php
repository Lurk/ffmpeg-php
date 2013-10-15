<?php
$mov = new ffmpeg_movie(dirname(__FILE__) . '/test_media/robot.avi');

$framecount = $mov->getFrameCount();
for($i = $framecount; $i > 0; $i--) {
    $img = sprintf("%s/test-%04d.png", dirname(__FILE__), $i);
    $frame = $mov->getFrame($i);
    $image = $frame->toGDImage();
    imagepng($image, $img);
    printf("ffmpeg getFramesInReverseOrder($i): md5 = %s\n", md5(file_get_contents($img)));
    imagedestroy($image);
    unlink($img);
}
?>
