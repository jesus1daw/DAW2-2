<?php
/* si va bien redirige a principal.php si va mal, mensaje de error */
if ($_SERVER["REQUEST_METHOD"] == "POST") {  	


	try{
		$mbd= new PDO('mysql:host=localhost;dbname=usuarios','usuario1','usuario1');
		
		$usuario=$_POST["usuario"];
		$contraseña=$_POST["clave"];

		$pass=$mbd->prepare("SELECT password FROM users WHERE userName=:usuario");
		$pass->bindParam(":usuario",$usuario);
		$pass->execute();
		$row = $stmt->fetch(PDO::FETCH_ASSOC);


		if($pass==$contraseña){
            header("Location: principal.php");
        }else{
            $err=true;
        }
		} catch (PDOException $e){
			print "¡Error!: ". $e->getMessage(). "<br/>";
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
