<?php
	$tam = $_FILES["myFile"]["size"];
    $tipo= $_FILES["myFile"]["type"];
	if($tam > 256 *1024){
		echo "<br>Demasiado grande";
		return;
	}
	echo "Nombre del fichero: " . $_FILES["myFile"]["name"];
	echo "<br>Nombre temporal del fichero en sel servidor: " . $_FILES["myFile"]["tmp_name"];	
	$res = move_uploaded_file($_FILES["myFile"]["tmp_name"],"C:/xampp/htdocs/subidos/" . $_FILES["myFile"]["name"]);
    if($res){
		echo "<br>Fichero guardado";
    } else {                 
        echo "<br>Error";
    }