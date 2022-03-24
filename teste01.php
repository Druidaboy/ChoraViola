<?php
date_default_timezone_set('Europe/Amsterdam');
$DateAndTime = date('m/d/Y', time());
date_default_timezone_set('America/Buenos_Aires');    
$DateAndTime01 = date('h:i:s', time());
echo $DateAndTime;
echo "<br>";
echo $DateAndTime01;
?>