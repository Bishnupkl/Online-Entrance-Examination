<?php
$imagedata = file_get_contents("C:\Users\safal sigdel\Pictures\The.Italian.Job.2003.720p.BrRip.x264.YIFY.mp4_snapshot_00.02.50_[2018.04.26_20.48.03].jpg");
             // alternatively specify an URL, if PHP settings allow
$base64 = base64_encode($imagedata);
echo $base64;


?>