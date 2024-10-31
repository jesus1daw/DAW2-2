<?php
$array = array(
    'k0' => 'Juan',
    'k1' => 'Álvaro',
    'k2' => 'Maite',
    'k3' => 'Álvaro',
    'k4' => 'Juan',
    'k5' => 'Martina'
);

$valorBuscado = 'Juan';

if (in_array($valorBuscado, $array)) {
    echo "El valor '$valorBuscado' se encuentra en el array.";
} else {
    echo "El valor '$valorBuscado' no se encuentra en el array.";
}
