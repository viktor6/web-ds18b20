<?php
 
//Asetetaan tiedosto
$file = '/sys/bus/w1/devices/28-21ee67000900/w1_slave';
//Luetaan tedosto rivi rivilta
$lines = file($file);
//Otetaan lampotila ensimmaiselta rivilta
$temp = explode('=', $lines[1]);
//Setup some nice formatting (i.e. 21,3)
$temp = number_format($temp[1] / 1000, 1, ',', '');
 
echo $temp . "°C";
?>