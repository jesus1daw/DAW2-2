<?php 
	/*comprueba que el usuario haya abierto sesión o redirige*/
	require 'sesiones.php';
	require_once 'bd.php';
   
	comprobar_sesion();


?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>Lista de categorías</title>
	</head>
	<body>
		<?php require 'cabecera.php';?>
		<h1>Examen</h1>		
		<!--lista de vínculos con la forma 
		productos.php?categoria=1-->
		<?php
		$categorias = cargar_preguntas();
            $respuestas = cargar_respuestas(1);
        
		if($categorias===false){
			echo "<p class='error'>Error al conectar con la base datos</p>";
		}else{
			//abrir la lista
			foreach($categorias as $cat){				
				/*$cat['nombre] $cat['codCat']*/
				echo $cat['idPregunta']." ";
				echo $cat['enunciado'];
                foreach($respuestas as $res){
                    echo $res['texto'];
                }
                echo "<hr>";
                
			}
			
		}
		?>
	</body>
</html>