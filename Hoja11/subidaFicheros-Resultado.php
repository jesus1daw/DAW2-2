<?php

    session_start();

    $titulo = $_SESSION['titulo'];
    $texto = $_SESSION['texto'];
    $categoria=$_SESSION['categoria'];


    echo "<p><strong> Titulo: </strong> $titulo </p>";
    echo "<p><strong> Texto:</strong> $texto </p>";
    echo "<strong>Categorias: </strong> <br>";

    foreach($categoria as $cat){

        echo $cat ."<br>";
    }
    echo "<br>";

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <a href="/PHP/Hoja11/subidaFicheros.php"> VOLVER </a>
    </body>
    </html>