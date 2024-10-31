<?php

session_start();

$errNombre =$errPass= $errRadio =$año= $errSelectMul = $errCheck = $errSelect = $radioSelec=$check
= $ciudad[]="";


// es post el metodo que se ha usaod?
// buscador tipo op
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $error = false ;
	$nombre=$_POST["nombre"];
    $contraseña=$_POST["contraseña"];
	$radioSelec=isset($_POST["color"])?$_POST["color"]:"";
	$check=isset($_POST["publi"])?$_POST["publi"]:"";
	$año=isset($_POST["año"])?$_POST["año"]:"";
	
	

    if(empty($_POST["nombre"])){
        $errNombre ="Introduce un nombre";
        $error = true;
    }
    if(empty($_POST["contraseña"])){
        $errPass ="Introduce una contraseña";
        $error = true;
    }

    if(empty($_POST["color"])){
        $errRadio ="Selecciona un color";
        $error = true;
    }

    if(is_null($_POST["año"])){
        $errSelect =  "Selecciona un año";
        $error = true;
    }

    if(is_null($_POST["ciudad"])){
        $errSelectMul =  "Selecciona una ciudad";
        $error = true;
    }

    // guardar la sesion
    if(!$error){
        $_SESSION['buscador'] = $_POST['buscador'];
        $_SESSION['tipo'] = $_POST['tipo'];
        $_SESSION['op'] = $_POST['op'];
        header("Location: /PHP/Repintado/repintado-resolucion.php");
        exit();
    }


}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .error{
            color: red;
        }
        
    </style>
</head>


<body>


    <form  action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST"> 
    <fieldset>
        <h1>Recibe parámetros y repinta el formulario</h1>
        <h3>CAMPOS DE TEXTO</h3>
        <label for= "nombre">Nombre: </label>  
        <input type = "text" id = "nombre" name = "nombre" value="<?php if(isset($nombre)) echo $nombre; ?>"> 
        <span class = "error"><?php echo $errNombre; ?></span>
        <br>
        <label for="contraseña">Contraseña:</label>
        <input type="password" id="contraseña" name="contraseña">
        <span class = "error"><?php echo $errPass; ?></span>
        
      
        <br>
    </fieldset>
    <fieldset>
        <h3>RADIO:</h3> 
        <input type = "radio" id = "color" name = "color" value = "rojo" <?php if($radioSelec=="rojo") echo "checked" ?> >Rojo
        <input type = "radio" id = "color" name = "color" value = "naranja" <?php if($radioSelec=="naranja") echo "checked" ?>>Naranja
        <input type = "radio" id = "color" name = "color" value = "verde" <?php if($radioSelec=="verde") echo "checked" ?>>Verde
        <span class = "error"><?php echo $errRadio?></span>
    </fieldset>
    <fieldset>
        <h3>CHECKBOX:</h3>
            <label for="publi">Quiero recibir publicidad</label>
            <input type="checkbox" id="publi" name="publi" value="publi" <?php if($check=="publi") echo "checked" ?>>
            <span class = "error"><?php echo $errCheck; ?></span>
    </fieldset>
    <fieldset>
        <h3>SELECT:</h3>
        <h4>Simple:</h4>
        <label for="año">Año de finalización de estudios:</label>
        <select name="año" id="año">
            <option value=null <?php if($año==null) echo "selected" ?>></option>
            <option value="2010" <?php if($año=="2010") echo "selected" ?>>2010</option>
            <option value="2011" <?php if($año=="2011") echo "selected" ?>>2011</option>
            <option value="2012" <?php if($año=="2012") echo "selected" ?>>2012</option>
            <option value="2013" <?php if($año=="2013") echo "selected" ?>>2013</option>
            <option value="2014" <?php if($año=="2014") echo "selected" ?>>2014</option>
        </select>
        <span class = "error"><?php echo $errSelect; ?></span>
        <h4>Multiple:</h4>
        <label for="ciudad">Ciudades:</label>
        <select MULTIPLE size="3" name="ciudad[]" id="ciudad">
            <option value="g">Gerona</option>
            <option value="m">Madrid</option>
            <option value="z">Zaragoza</option>
        </select>
        <span class = "error"><?php echo $errSelectMul; ?></span>
        
    </fieldset>

    <input type="submit" name="" id="">
    
</body>
</html>