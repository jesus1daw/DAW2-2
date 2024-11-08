
<?php
session_start();
$error=false;
$err1 = $err2 = $err3 = $err4 = 
$titulo = $texto = $imagen = $err5="" ;
$categoria = []; // Aseguramos que siempre sea un array


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $titulo = isset($_POST["titulo"]) ? $_POST["titulo"] : '';
    $texto = isset($_POST["texto"]) ? $_POST["texto"] : '';
    $categoria = isset($_POST["categoria"]) ? (array)$_POST["categoria"] : []; // Convertimos a array si no lo es
    $imagen = isset($_POST["imagen"]) ? (array)$_POST["imagen"] : [];

    if (empty($titulo)) {
        $err1="Titulo obligatorio";
        $error=true;
    }
 
    if (empty($texto)) {
        $err2="Texto obligatorio";
        $error=true;
    }
    if (empty($categoria)) {
        $err3="Categoria obligatoria";
        $error=true;
    }
    if (empty($imagen)) {
        $err4="Imagen obligatoria";
        $error=true;
    }
    
    
   

    if (!$error) {
        $_SESSION['titulo'] = $titulo;
        $_SESSION['texto'] = $texto;
        $_SESSION['categoria'] = $categoria; // Guardamos como array en la sesión
        $_SESSION['imagen'] = $imagen;
        header("Location: /PHP/Hoja11/subidaFicheros-Resultado.php");
        exit(); 
    }


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fichero</title>
</head>
<style>
    fieldset{
        width: 80%;
    
        border: solid black;
    }
    .error{
        color: red;
    }

</style>
<body>



<h3>Subida de ficheros</h3>
<h4>Insertar nueva noticia</h4>
<fieldset>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="titulo">Titulo:*</label>
        <input type="text" name="titulo" id="titulo" value="<?php echo htmlspecialchars($titulo); ?>">
        <span class = "error"><?php echo $err1; ?></span>
        <br><br>
        
        <label for="texto">Texto:*</label>
        <textarea name="texto" id="texto"><?php echo htmlspecialchars($texto); ?></textarea>
        <span class = "error"><?php echo $err2; ?></span>
        <br><br>
        
        <label for="categoria">Categoría:</label>
        <select multiple name="categoria[]" id="categoria">
            <option value="Promociones" <?php if (in_array("Promociones", $categoria)) echo "selected"; ?>>Promociones</option>
            <option value="Locales Comerciales" <?php if (in_array("Locales Comerciales", $categoria)) echo "selected"; ?>>Locales Comerciales</option>
            <option value="Nueva Construccion" <?php if (in_array("Nueva Construccion", $categoria)) echo "selected"; ?>>Nueva Construcción</option>
            <option value="Pisos" <?php if (in_array("Pisos", $categoria)) echo "selected"; ?>>Pisos</option>
            <option value="Naves Industriales" <?php if (in_array("Naves Industriales", $categoria)) echo "selected"; ?>>Naves Industriales</option>
            <option value="Terrenos" <?php if (in_array("Terrenos", $categoria)) echo "selected"; ?>>Terrenos</option>
        </select>
        <span class = "error"><?php echo $err3; ?></span>
        <br><br>
        
        <label for="imagen">Imagen:</label>
        <input type="file" id="imagen" name="imagen[]" multiple>
        <span class = "error"><?php echo $err4; ?></span>
        <br><br>
        
        <input type="submit" value="Insertar Noticia">
    </form>
</fieldset>
</body>
</html>

