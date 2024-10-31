<?php
$var1=$_GET["numero1"];
$var2=$_GET["numero2"];
$operacion=$_GET["operacion"];
$resul=0;


switch ($operacion) {

    case "sumar":
        $resul=$var1+$var2;
        break;
    case "restar":
        $resul=$var1-$var2;
        break;
    case "multiplicar":
    $resul=$var1*$var2;
        break;
    case "dividir":
        $resul=$var1/$var2;
        break;
}

echo $resul;