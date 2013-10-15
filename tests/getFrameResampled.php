<?php
$frame = 70;
$mov = new ffmpeg_movie(dirname(__FILE__) . '/test_media/robot.avi');
$img = sprintf("%s/test-%04d.png", dirname(__FILE__), $frame);

$ff_frame = $mov->getFrame($frame);
if ($ff_frame) {
    $ff_frame->resize(360, 460);
    $gd_image = $ff_frame->toGDImage();
    if ($gd_image) {
        imagepng($gd_image, $img);
        imagedestroy($gd_image);
        // generate md5 of file (NOTE: different versions of ffmpeg may produce different
        // md5 hashes since resampling has been changed slightly due to a fix. Need to
        // use EXPECTREX to test for both md5 possibilities.
        printf("ffmpeg getFrameResampled(): md5 = %s\n", md5(file_get_contents($img)));
//        unlink($img);
    }
}
?>