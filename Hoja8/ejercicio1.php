<?php
$fechaActual = new DateTime();

echo $fechaActual->format('l') . "<br>";
echo $fechaActual->format('l dS \o\f F Y h:i:s A') . "<br>";
echo $fechaActual->format('l, d \d\e F \d\e Y h:i:s A') . "<br>";
echo $fechaActual->format('F j, Y, g:i a') . "<br>";
echo $fechaActual->format('d.m.y') . "<br>";
echo $fechaActual->format('j,n, Y') . "<br>";
echo $fechaActual->format('Ymd') . "<br>";
echo 'it is the ' . $fechaActual->format('jS') . ' day.' . "<br>";
echo $fechaActual->format('D M d H:i:s T Y') . "<br>";
echo $fechaActual->format('H:i:s a') . "<br>";
echo $fechaActual->format('H:i:s') . "<br>";

