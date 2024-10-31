<?php
$array1 = array("imagen12.png", "imagen10.png", "imagen2.png", "img1.png");

natsort($array1);
//$array1 = array_values($array1); // Reindexar el array
print_r($array1);
echo "<br>";
$array1 = array();
$array1 = array("imagen12.png", "imagen10.png", "imagen2.png", "img1.png");

asort($array1);
$array1 = array_values($array1); // Reindexar el array si es necesario

print_r($array1);

