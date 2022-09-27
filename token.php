<?php
 
$login = $_GET['token'];
 
$file = fopen('file.txt', 'a');
fwrite($file, $login . PHP_EOL);
fclose($file);
 
?>
