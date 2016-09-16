<?php
$file = $_SERVER['DOCUMENT_ROOT'] . "/RI/pension.mp4";
header ("Content-type: video/mp4");
header ("Content-disposition: inline; filename=".$file.";");
header("Content-Length: ".filesize($file));
readfile($file);
exit;
?>