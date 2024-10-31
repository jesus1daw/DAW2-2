<?php

    session_start();

    $nombre = $_SESSION['nombre'];
    $radio = $_SESSION['color'];
    $check = $_SESSION['publi'];


    echo "<p><strong> Nombre: </strong> $nombre </p>";
    echo "<p><strong> Color seleccionado:</strong> $radio </p>";
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
        <a href="/PHP/Repintado/repintado.php"> VOLVER </a>
    </body>
    </html>