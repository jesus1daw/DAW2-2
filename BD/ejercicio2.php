<?php
try{
$mbd= new PDO('mysql:host=localhost;dbname=prueba1','prueba1','prueba1');
foreach($mbd->query('SELECT * from alumno') as $fila) {
    print_r($fila);
}

$stmt=$mbd->prepare("INSERT INTO alumno VALUES (:id,:dni,:nombre,:direccion,:localidad)");
$stmt->bindParam(':id', $id);
$stmt->bindParam(':dni', $dni);
$stmt->bindParam(':nombre', $nombre);
$stmt->bindParam(':direccion', $direccion);
$stmt->bindParam(':localidad', $localidad);

$id=4;
$dni="12345678F";
$nombre="Ivan";
$direccion="Pozuelo";
$localidad="Madrid";
$stmt->execute();
 echo "<br> Insert existoso";








 $mbd = null;
} catch (PDOException $e){
    print "¡Error!: ". $e->getMessage(). "<br/>";
}

