<?php
$array=array('k3'=>'JUAN','k5'=> 'Álvaro','k0'=> 'Maite',
'k2'=> 'ÁLVARO','k1'=> 'Juan','k4'=> 'Martina');
//print_r($array );
echo"<br>";


rsort($array); //Mayor a menor sin mantener la asociación
print_r($array);
echo"<br>";

$array=array('k3'=>'JUAN','k5'=> 'Álvaro','k0'=> 'Maite',
'k2'=> 'ÁLVARO','k1'=> 'Juan','k4'=> 'Martina');


arsort($array);//Mayor a menor manteniendo la asociación
print_r($array);
echo"<br>";

$array=array('k3'=>'JUAN','k5'=> 'Álvaro','k0'=> 'Maite',
'k2'=> 'ÁLVARO','k1'=> 'Juan','k4'=> 'Martina');

ksort($array); //Menor a mayor por la clave
print_r($array);
echo"<br>";

$array=array('k3'=>'JUAN','k5'=> 'Álvaro','k0'=> 'Maite',
'k2'=> 'ÁLVARO','k1'=> 'Juan','k4'=> 'Martina');

shuffle($array); //Aleatoriamente
print_r($array);
echo"<br>";

$array=array('k3'=>'JUAN','k5'=> 'Álvaro','k0'=> 'Maite',
'k2'=> 'ÁLVARO','k1'=> 'Juan','k4'=> 'Martina');

print_r(array_rand($array,2)); //Dos claves aleatorias  
echo"<br>";

$array=array('k3'=>'JUAN','k5'=> 'Álvaro','k0'=> 'Maite',
'k2'=> 'ÁLVARO','k1'=> 'Juan','k4'=> 'Martina');

rsort($array, SORT_NATURAL); // Mayor a menor sin diferenciar mayusculas y minusculas
print_r($array);
echo"<br>";


