<?php
$array1 = array('IMG0.png', 'img12.png', 'img10.png', 'img2.png', 'img1.png', 'IMG3.png');

natsort($array1); 
print_r($array1);
echo "<br>";

$array1=array();
$array1 = array('IMG0.png', 'img12.png', 'img10.png', 'img2.png', 'img1.png', 'IMG3.png');

usort($array1, 'strnatcasecmp');
print_r($array1);
