<?php

    session_start();

    $buscar = $_SESSION['buscador'];
    $tipo = $_SESSION['tipo'];
    $op = $_SESSION['op'];


    echo "<p><strong> Texto busqueda </strong> $buscar </p>";
    echo "<p><strong> Buscar en:</strong> $tipo </p>";
    echo "<p><strong> Genero:</strong> $op </p>";

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <a href="/PHP/Hoja10/ejercicio1.php"> VOLVER </a>
    </body>
    </html>