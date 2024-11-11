<?php
try{
$mbd= new PDO('mysql:host=localhost;dbname=usuarios','usuario1','usuario1');
foreach($mbd->query('SELECT * from users') as $fila) {
    print_r($fila);








}
} catch (PDOException $e){
    print "¡Error!: ". $e->getMessage(). "<br/>";
}



?>