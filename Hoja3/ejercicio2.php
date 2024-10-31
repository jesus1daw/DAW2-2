<?php
$a="Hola";
$b="Buenos";
$c="Dias";

if (strlen($a)> strlen($b)&strlen($a)> strlen($c)){
    echo "A es la cadena mas larga";
} elseif(strlen($b)>strlen($a)&strlen($b)>strlen($c)) {
    echo "B es la cadena mas larga";
}else{
    echo "C es la mas larga";
}