<?php
$num1=$_POST["num1"];
$num2=$_POST["num2"];
$op=$_POST["op"];
$fecha=$_POST["fecha"];
$resul=0;

switch ($op) {

    case "S":
        $resul=$num1+$num2;
        break;
    case "R":
        $resul=$num1-$num2;
        break;
    case "M":
    $resul=$num1*$num2;
        break;
    case "D":
        $resul=$num1/$num2;
        break;
}


echo "Resultado es: ". $resul. "<br>";
echo "Fecha: ". $fecha. "<br>";


