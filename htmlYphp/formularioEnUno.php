<?php
$err1= $err2="";
$error=false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {  	

	$usuario = isset($_POST["usuario"]) ? $_POST["usuario"] : '';
	$contraseña = isset($_POST["clave"]) ? $_POST["clave"] : '';
	if (empty($usuario)) {
        $err1="Usuario obligatorio";
        $error=true;
    }
	if (empty($contraseña)) {
        $err2="Contraseña obligatoria";
        $error=true;
    }
	
	
	if($error==false){
	try{
		$mbd= new PDO('mysql:host=localhost;dbname=usuarios','usuario1','usuario1');
		$pass=$mbd->prepare("SELECT * FROM users WHERE userName=:usuario AND contraseña=:contraseña");
		$pass->bindParam(":usuario",$usuario);
		$pass->bindParam(":contraseña",$contraseña);
		$pass->execute();
		echo $pass;
		// $result=$pass->fetch(PDO::FETCH_ASSOC);
		// $contr=$result['contraseña'];
		
		if($pass=1){
            header("Location: principal.php");
		}else{
			$err=true;
		}
		} catch (PDOException $e){
			print "¡Error!: ". $e->getMessage(). "<br/>";
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
	<style>
		.error{
        color: red;
    }
	</style>
	<body>			
		<?php if(isset($err)){
			echo "<p> Revise usuario y contraseña</p>";
		}?>
		<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
			<label for = "usuario">Usuario</label> 
			<input value = "<?php if(isset($usuario))echo $usuario;?>"
			id = "usuario" name = "usuario" type = "text">	
			<span class = "error"><?php echo $err1; ?></span>	
			<br>	
			<br>	
			
			<label for = "clave">Clave</label> 
			<input id = "clave" name = "clave" type = "password">
			<span class = "error"><?php echo $err2; ?></span>			
			<br>
			<br>
			<input type = "submit">
		</form>
	</body>
</html>
