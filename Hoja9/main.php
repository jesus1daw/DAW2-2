<?php
include("Empresa.php");

$empl1= new Empleado("99999999Z","Jesus",
"Villaverde",1200,23);
echo $empl1->getApellido()."<br>";
echo $empl1->__toString()."<br>";
$empl1->incrementarAntiguedad(2);
echo $empl1->__toString()."<br>";
$empl1->incrementarSueldo(50);
echo $empl1->__toString()."<br>";
$empl1->setSueldo(3100);
$empl1->setAntiguedad(20);
echo $empl1->__toString()."<br>";
$empl1->impuestos();
echo $empl1."<br>";
echo "<br>";
echo "<br>";
echo "<br>";



//Crear empresa sin empleados
$miEmpresa = new Empresa([], "Juan Pérez", "CIF123", "124787142", "Madrid","Majadahonda", "28001", "España");

// Crear Empleados
$empleado1 = new Empleado("12345678A", "Juan", "Perez",1800,0);
$empleado2 = new Empleado("87654321B", "Marcos", "Rodriguez",1800,0);

// Añadir empleados a la empresa
$miEmpresa->añadeEmpleado($empleado1);
$miEmpresa->añadeEmpleado($empleado2);

//Mostrar empleados de la empresa
$miEmpresa->verEmpleados();

$miEmpresa->eliminaEmpleado("12345678A");
echo "<br>";
$miEmpresa->verEmpleados();

