<?php
$array = array(
    'k0' => 'Juan',
    'k1' => 'Álvaro',
    'k2' => 'Maite',
    'k3' => 'Álvaro',
    'k4' => 'Juan',
    'k5' => 'Martina'
);

// Buscar la primera clave de 'Juan'
$claveJuan = array_search('Juan', $array);
echo "Aparición de juan en: ". $claveJuan ."<br>";


// Visualizar todas las claves asociadas a 'Álvaro'
$clavesAlvaro = array();
foreach ($array as $clave => $valor) {
    if ($valor === 'Álvaro') {
        $clavesAlvaro[] = $clave;
    }
}
echo "Las claves asociadas a 'Álvaro' son: " . implode(', ', $clavesAlvaro) . "\n";


