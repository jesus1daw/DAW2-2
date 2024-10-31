<?php
$supermercado = array(
    "Electrodomesticos" => array("Televisor", "Heladera"),
    "alimentos" => array("Carne", "Leche", "Verduras")
);

$claves = array_keys($supermercado);

foreach ($claves as $clave) {
    echo $clave . "\n";
}

