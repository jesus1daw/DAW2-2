<?php
function leer_config($nombre, $esquema){
	$config = new DOMDocument();
	$config->load($nombre);
	$res = $config->schemaValidate($esquema);
	if ($res===FALSE){ 
	   throw new InvalidArgumentException("Revise fichero de configuración");
	} 		
	$datos = simplexml_load_file($nombre);	
	$ip = $datos->xpath("//ip");
	$nombre = $datos->xpath("//nombre");
	$usu = $datos->xpath("//usuario");
	$clave = $datos->xpath("//clave");	
	$cad = sprintf("mysql:dbname=%s;host=%s", $nombre[0], $ip[0]);
	$resul = [];
	$resul[] = $cad;
	$resul[] = $usu[0];
	$resul[] = $clave[0];
	return $resul;
}
function comprobar_usuario($nombre, $clave){
	$res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
	$bd = new PDO($res[0], $res[1], $res[2]);
	$ins = "select codRes, correo from restaurantes where correo = '$nombre' 
			and clave = '$clave'";
	$resul = $bd->query($ins);	
	if($resul->rowCount() === 1){		
		return $resul->fetch();		
	}else{
		return FALSE;
	}
}
function cargar_categorias(){
	$res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
	$bd = new PDO($res[0], $res[1], $res[2]);
	$ins = "select codCat, nombre from categorias";
	$resul = $bd->query($ins);	
	if (!$resul) {
		return FALSE;
	}
	if ($resul->rowCount() === 0) {    
		return FALSE;
	}
	//devuelve la fila de la categoría 
	return $resul;	
}
function cargar_categoria($codCat){
	$res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
	$bd = new PDO($res[0], $res[1], $res[2]);
	$ins = "select nombre, descripcion from categorias where codcat = $codCat";
	$resul = $bd->query($ins);	
	if (!$resul) {
		return FALSE;
	}
	if ($resul->rowCount() === 0) {    
		return FALSE;
	}	
	//devuelve la fila de la categoría
	return $resul->fetch();	
}
function cargar_productos_categoria($codCat){
	$res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
	$bd = new PDO($res[0], $res[1], $res[2]);	
	$sql = "select * from productos where categoria  = $codCat";	
	$resul = $bd->query($sql);	
	if (!$resul) {
		return FALSE;
	}
	if ($resul->rowCount() === 0) {    
		return FALSE;
    }	
	//si hay 1 o más
	return $resul;			
}

// recibe un array de códigos de productos
// devuelve un cursor con los datos de esos productos
function cargar_productos($codigosProductos){
	$res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
	$bd = new PDO($res[0], $res[1], $res[2]);
	$texto_in = implode(",", $codigosProductos);
	$ins = "select * from productos where CodProd in($texto_in)";
	$resul = $bd->query($ins);	
	if (!$resul) {
		return FALSE;
	}else
          //Almacena los productos en un array
          $productos = array();
          while ($producto=$resul->fetch(PDO::FETCH_ASSOC)){
               $productos[]=$producto;
          }
      return $productos;	
   
} 
