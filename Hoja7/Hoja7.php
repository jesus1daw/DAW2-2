<?php
$cad="defjvb/n";
$cad1="fp.informatica.iessanjuandelacruz@educa.madrid.org";
$cad2= "educa.madrid.org";
$cad3="defghijk/n";
$cad4="defghi";
$cad5= 'path=["\usr\$usuario"]|\usr';
$cad6= "C/ Claveles 23,20D,28033,Madrid";
$cad7=" juan rodríguez Hernández";
$long=15;
$car1='.';
$car2='*';

//1
echo (addslashes($cad5));
echo'<br>';
//2
print_r(quotemeta($cad3) );
echo '<br>';
//3
print_r(trim($cad1) );
echo '<br>';
//4
print_r(chop($cad3) );
echo '<br>';
//5
print_r(chr(45) );
echo '<br>';
//6
print_r(strlen($cad6));
echo '<br>';
//7
print_r(strchr($cad1,$car1) );
echo '<br>';
//8
print_r(str_pad($cad4,$long,$car1,STR_PAD_RIGHT));
echo '<br>';
//9
print_r(str_pad($cad3,-2,$car2,STR_PAD_BOTH));
echo '<br>';
//10
print_r(strrchr($cad6,','));
echo '<br>';
//11
print_r(ucwords($cad7));
echo '<br>';
//12
print_r(substr($cad1,-9));
echo '<br>';
//13
print_r(strstr($cad6, 'claveles'));
echo '<br>';
//14
print_r(stristr($cad6, 'claveles'));
echo '<br>';
//15
print_r(str_repeat($cad4,6));
echo '<br>';
//16
print_r( count_chars($cad2,3));
echo '<br>';
//17
print_r(strpos($cad1,".i", 2));
echo '<br>';
//18
print_r(strrpos($cad1,'i'));
echo '<br>';
//19
print_r(strstr($cad1,'@'));
echo '<br>';
//20
print_r(strncmp($cad3,$cad,4));
echo '<br>';
//21
print_r(quotemeta($cad5));
echo '<br>';
//22
print_r(strcmp(strstr($cad1,'@'), $cad2));
echo '<br>';
//23
print_r(strrev($cad3));
echo '<br>';
//24
print_r(strtr("fp","FP", $cad1));
echo '<br>';
//25
print_r(strcmp($cad3,$cad4));
echo '<br>';
//26
print_r(strnatcmp($cad3,$cad4));
echo '<br>';
//27
print_r(substr($cad1, 15, -16));
echo '<br>';
//28
print_r(strcspn($cad6,"20D"));
echo '<br>';


