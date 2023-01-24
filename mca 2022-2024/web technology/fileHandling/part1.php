<?php 
$file = fopen('file1.txt', 'r');

echo fread($file,filesize($file));

fclose($file);
?>