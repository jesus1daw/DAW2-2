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
		
        $query="SELECT contraseña FROM users WHERE userName='$usuario'";
        $result=$mbd->query($query);
		$hash=$result->fetchColumn();

        if (password_verify($contraseña, $hash)) {
            header("Location: principal.php");
        } else {
            $err=true;
        }

		$sql = 'SELECT userName, contraseña, rol FROM users';
	$usuarios = $bd->query($sql);
	echo "Número de usuarios: " . $usuarios->rowCount() . "<br>";
	foreach ($usuarios as $usu) {
		print "Nombre : " . $usu['userName'];
		print " Clave : " . $usu['contraseña'] . "<br>";
	}
	/* consulta preparada, parametros por orden */	
	$preparada = $bd->prepare("select userName from users where rol = ?");	
	$preparada->execute( array(0));
	echo "Usuarios con rol 0: " .  $preparada->rowCount() . "<br>";
	foreach ($preparada as $usu) {
		print "Nombre : " . $usu['userName'] . "<br>";
	}
	/* consulta preparada, parametros por nombre */	
	$preparada_nombre = $bd->prepare("select userName from users where rol = :rol");
	$preparada_nombre->execute( array(':rol' => 0));
	echo "Usuarios con rol 0: " .  $preparada->rowCount() . "<br>";
	foreach ($preparada_nombre  as $usu) {
		print "Nombre : " . $usu['userName'] . "<br>";
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
