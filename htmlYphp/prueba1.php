<?php
// $opciones = [
//     'cost' => 12,
// ];
// $hash=password_hash("rasmuslerdorf", PASSWORD_BCRYPT, $opciones)."\n";

// if (password_verify('rasmuslerdorf', $hash)) {
//     echo 'La contraseña es válida!';
// } else {
//     echo 'La contraseña no es válida.';
// }


try{
    $mbd= new PDO('mysql:host=localhost;dbname=usuarios','usuario1','usuario1');

    $contraseña1=password_hash("rasmuslerdorf", PASSWORD_BCRYPT);
    $contraseña2=password_hash("1234", PASSWORD_BCRYPT);
    $contraseña3=password_hash("ajdajd", PASSWORD_BCRYPT);
    $contraseña4=password_hash("perro", PASSWORD_BCRYPT);

    $query1="INSERT INTO users VALUES ('jesus', '$contraseña1'),('ivan', '$contraseña2'),
    ('isaac', '$contraseña3'),
    ('khaled', '$contraseña4')";
    
    $mbd->query($query1);
   



} catch (PDOException $e){
    print "¡Error!: ". $e->getMessage(). "<br/>";
}
?>



