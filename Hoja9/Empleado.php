<?php
include("Persona.php");
class Empleado extends Persona{
    protected $sueldo;
    private $antiguedad;

    function __construct($DNI,$nombre,$apellido,$sueldo,$antiguedad) {
        parent::__construct($DNI,$nombre,$apellido);
        $this->sueldo=$sueldo;
        $this->antiguedad=$antiguedad;
}

public function getSueldo() {
    return $this->sueldo;
}
public function getAntiguedad() {
    return $this->antiguedad;  
}
public function setSueldo($sueldo) {
    $this->sueldo=$sueldo;
}
public function setAntiguedad($antiguedad) {
    $this->antiguedad=$antiguedad;
}

public function incrementarSueldo($porcentaje){
    $sueldoIN=$this->sueldo*(($porcentaje/100)+1);
    $this->setSueldo($sueldoIN);
}
public function incrementarAntiguedad($años){
    $antiguedadN=$this->antiguedad+$años;
    $this->setAntiguedad($antiguedadN);
}
public function impuestos(){
    if($this->sueldo>= 3000){
        echo "Debe pagar impuestos <br>";
} else {
    echo "No debe pagar impuestos <br>";
}
}

public function __toString(){
    return parent::__toString()." Sueldo:".$this->sueldo." Antiguedad:".$this->antiguedad;
}




}