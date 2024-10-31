<?php
$ciudades[5]='Madrid';
$ciudades[7]='Oviedo';
$ciudades[]='Cáceres';
$ciudades[]='ALICANTE';
$ciudades[]='Almería';
$ciudades[]='Zaragoza';


rsort($ciudades); //Mayor a menor sin mantener la asociación
print_r($ciudades);
echo"<br>";
$ciudades= array();

$ciudades[5]='Madrid';
$ciudades[7]='Oviedo';
$ciudades[]='Cáceres';
$ciudades[]='ALICANTE';
$ciudades[]='Almería';
$ciudades[]='Zaragoza';



arsort($ciudades);//Mayor a menor manteniendo la asociación
print_r($ciudades);
echo"<br>";

$ciudades= array();

$ciudades[5]='Madrid';
$ciudades[7]='Oviedo';
$ciudades[]='Cáceres';
$ciudades[]='ALICANTE';
$ciudades[]='Almería';
$ciudades[]='Zaragoza';



ksort($ciudades); //Menor a mayor por la clave
print_r($ciudades);
echo"<br>";

$ciudades= array();

$ciudades[5]='Madrid';
$ciudades[7]='Oviedo';
$ciudades[]='Cáceres';
$ciudades[]='ALICANTE';
$ciudades[]='Almería';
$ciudades[]='Zaragoza';

shuffle($ciudades); //Aleatoriamente
print_r($ciudades);
echo"<br>";

$ciudades= array();

$ciudades[5]='Madrid';
$ciudades[7]='Oviedo';
$ciudades[]='Cáceres';
$ciudades[]='ALICANTE';
$ciudades[]='Almería';
$ciudades[]='Zaragoza';


print_r(array_rand($ciudades,2)); //Dos claves aleatorias  
echo"<br>";

$ciudades= array();

$ciudades[5]='Madrid';
$ciudades[7]='Oviedo';
$ciudades[]='Cáceres';
$ciudades[]='ALICANTE';
$ciudades[]='Almería';
$ciudades[]='Zaragoza';


rsort($ciudades, SORT_NATURAL); // Mayor a menor sin diferenciar mayusculas y minusculas
print_r($ciudades);
echo"<br>";