<?php
$mysqli = new mysqli("localhost", "prueba1", "prueba1", "prueba1");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";

$query="SELECT * FROM alumno";
$resultado=$mysqli->query($query);
echo "<br>";
echo " Numero de alumnos: $resultado->num_rows". "<br>";

while($registro=$resultado->fetch_assoc()){
    foreach($registro as $campo){
        echo $campo ."<br>";
    }
}



$queryInset="INSERT INTO alumno VALUES (3,'12345678B','Jesus','VAGUADA','Madrid')";
$mysqli->query($queryInset);


$mysqli->query("CREATE TABLE test(id INT, etiqueta VARCHAR(30))");

$sentencia=$mysqli->prepare("INSERT INTO alumno VALUES (?,?,?,?,?)");
$nombre="Lucas";
$DNI="12345678D";
$calle="afnskfsaf";
$ciudad="Madrid";
$sentencia->bind_param('ssss',4,$DNI,$nombre, $calle, $ciudad);

$sentencia->execute();



// $query2="SELECT * FROM notas";
// $resultado2=$mysqli->query($query2);
// echo "<br>";
// echo " Numero de notas: $resultado2->num_rows";




// $query3="SELECT * FROM alumno WHERE nombre LIKE 'A%' ";
// $resultado3=$mysqli->query($query3);
// echo "<br>";
// echo " Numero de alumnos que empiezan por a: $resultado3->num_rows";

// $mysqli->close();


?>