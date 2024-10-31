<?php
$pila = array(
    '12345678A',
    '23456789B',
    '34567890C',
    '45678901D'
);

echo "Pila inicial:\n";
print_r($pila );

array_push($pila, '56789012E');
echo "<br>Después de apilar '56789012E': ";
print_r($pila);

$ultimoDNI = array_pop($pila);
echo "<br>Desapilando el último DNI: $ultimoDNI\n";
print_r($pila);

$primerDNI = array_shift($pila);
echo "<br>El primer DNI de la pila es: $primerDNI\n";
print_r($pila);
