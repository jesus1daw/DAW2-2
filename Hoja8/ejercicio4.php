<?php
$fechaActual = new DateTime();

setlocale(LC_TIME,'ES_es','Spanish_Spain','es_ES.UTF-8');
echo 'Hoy es ' . $fechaActual->format("l");