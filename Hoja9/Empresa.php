<?php

include("Empleado.php");


class Empresa{

    private $empleados=[];
    private $nombreEmpresa;
    private $representante;
    private $CIF;
    private $direccion;
    private $localidad;
    private $codigoPostal;
    private $pais;
    private $numEmpleados;

    public function __construct($empleados,$nombreEmpresa,$representante,$CIF,$direccion
    ,$localidad,$codigoPostal,$pais){
        $this->empleados=$empleados;
        $this->nombreEmpresa=$nombreEmpresa;
        $this->representante=$representante;
        $this->CIF=$CIF;
        $this->direccion=$direccion;
        $this->localidad=$localidad;
        $this->codigoPostal=$codigoPostal;
        $this->pais=$pais;

    }
     // Métodos SET y GET
     public function setNombreEmpresa($nombreEmpresa) {
        $this->nombreEmpresa = $nombreEmpresa;
    }

    public function getNombreEmpresa() {
        return $this->nombreEmpresa;
    }

    public function setRepresentanteLegal($representanteLegal) {
        $this->representanteLegal = $representanteLegal;
    }

    public function getRepresentanteLegal() {
        return $this->representante;
    }

    public function setCif($cif) {
        $this->CIF = $cif;
    }

    public function getCif() {
        return $this->CIF;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function setLocalidad($localidad) {
        $this->localidad = $localidad;
    }

    public function getLocalidad() {
        return $this->localidad;
    }

    public function setCodigoPostal($codigoPostal) {
        $this->codigoPostal = $codigoPostal;
    }

    public function getCodigoPostal() {
        return $this->codigoPostal;
    }

    public function setPais($pais) {
        $this->pais = $pais;
    }

    public function getPais() {
        return $this->pais;
    }

    public function getNumEmpleados() {
        return $this->numEmpleados;
    }

    public function verEmpleados(){
        sort($this->empleados);
        foreach($this->empleados as $emp) {
            echo "Nombre: " . $emp->getNombre() ." ". $emp->getApellido() . " [ DNI: " . $emp->getDni() . 
            " || Antigüedad: " . $emp->getAntiguedad() . " años || Sueldo: " . 
            $emp->getSueldo() . " euros ]<br>";

        }
    }
    //METODOS PROPIOS

    public function añadeEmpleado($empleadoN){
        $this->empleados[]=$empleadoN;
    }
    public function eliminaEmpleado($DNI){
        foreach( $this->empleados as $indice=>$empleado ) {
            if($empleado->getDni()==$DNI){
                unset($this->empleados[$indice]);
                return true;
            }   
        }
        return false;
    }

    public function masAntiguos(){
        
    }
    public function menosAntiguos(){

    }
    public function sueldoMedio(){

    }
    public function antiguedadMedia(){

    }
    public function paganImpuestos(){

    }










}