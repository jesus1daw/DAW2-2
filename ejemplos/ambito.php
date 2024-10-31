<?php
$x=10;  
$y= 20;

function ambito(){
    $x= 1;
    $y= 2;
    echo"Variables locales a la funcion: <br>";
    echo"x= $x <br>";
    global $x, $y;
    echo"x= $x <br>";
    echo"y= $y <br>";
}

ambito();
echo"Variables globales: <br>";
echo "x= $x <br>";
echo "y= $y";


print_r($GLOBALS); //Ver variables globales
