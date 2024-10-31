<?php
/* si va bien redirige a principal.php si va mal, mensaje de error */
if ($_SERVER["REQUEST_METHOD"] == "POST") {  	

$usuarios=array("usuario"=>"1234",
    "usuario2"=>"2345",
    "usuario3"=>"3456",
    "usuario4"=>"4567");

$usuario=$_POST["usuario"];
$clave=$_POST["clave"];


    foreach ($usuarios as $key => $value) {
        if($usuario==$key&&$clave==$value){
            header("Location: principal.php");
        }else{
            $err=true;
        }
    }
}


?>
<!DOCTYPE html>
<html>
	<head>
		<title>Formulario de login</title>		
		<meta charset = "UTF-8">
	</head>
	<body>			
		<?php if(isset($err)){
			echo "<p> Revise usuario y contraseña</p>";
		}?>
		<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
			<label for = "usuario">Usuario</label> 
			<input value = "<?php if(isset($usuario))echo $usuario;?>"
			id = "usuario" name = "usuario" type = "text">				
			
			<label for = "clave">Clave</label> 
			<input id = "clave" name = "clave" type = "password">			
			
			<input type = "submit">
		</form>
	</body>
</html>
