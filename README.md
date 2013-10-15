ffmpeg-php 0.7.0
==========

this is copy of http://sourceforge.net/p/ffmpeg-php/code/HEAD/tree/trunk/ffmpeg-php/ that copmpiles against php 5.4.2 and ffmpeg 1.2.4

instalation 
----------

	phpize
	./configure && make
	sudo make install

then add to your php.ini 
> extension=ffmpeg.so

tests
----------

unfortunately not all tests pased, but i try to fix them later

	=====================================================================
	TEST RESULT SUMMARY
	---------------------------------------------------------------------
	Exts skipped    :    0
	Exts tested     :   60
	---------------------------------------------------------------------

	Number of tests :   30                29
	Tests skipped   :    1 (  3.3%) --------
	Tests warned    :    0 (  0.0%) (  0.0%)
	Tests failed    :    9 ( 30.0%) ( 31.0%)
	Expected fail   :    0 (  0.0%) (  0.0%)
	Tests passed    :   20 ( 66.7%) ( 69.0%)
	---------------------------------------------------------------------
	Time taken      :   28 seconds
	=====================================================================

	=====================================================================
	FAILED TEST SUMMARY
	---------------------------------------------------------------------
	ffmpeg getFrame test [tests/getFrame.phpt]
	ffmpeg getFrameResampled test [tests/getFrameResampled.phpt]
	ffmpeg getFrames forward test [tests/getFramesForward.phpt]
	ffmpeg getFrames forward test [tests/getFramesForwardPassedEnd.phpt]
	ffmpeg getFrame in reverse order test [tests/getFramesInReverseOrder.phpt]
	ffmpeg getFramesNoArg test [tests/getFramesNoArg.phpt]
	ffmpeg getID3Info() test [tests/getID3Info.phpt]
	ffmpeg get key frames test [tests/getNextKeyFrame.phpt]
	ffmpeg persistent movie test [tests/persistentMovie.phpt]
	=====================================================================


