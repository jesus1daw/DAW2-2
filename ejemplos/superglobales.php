<?php
echo"Ruta dentro de htdocs: ". $_SERVER['PHP_SELF'] . "<br>";
echo "Nombre del servidor: " . $_SERVER['SERVER_NAME'] . "<br>";
echo "Software del servidor: " . $_SERVER['SERVER_SOFTWARE'] . "<br>";
echo "Protocolo: " . $_SERVER['SERVER_PROTOCOL'] . "<br>";
echo "Metodo de la peticion: " . $_SERVER['REQUEST_METHOD'] . "<br>";

//print_r($_COOKIE);

