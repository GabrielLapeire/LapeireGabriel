<?php
require_once 'Empleado.php';
require_once 'Repartidor.php';
require_once 'Comercial.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$salario = $_POST['salario'];
$comision = $_POST['comision'] ?? NULL;
$zona = $_POST['zona'] ?? NULL;

echo "<strong>Nombre: </strong>".$nombre."<br>";
echo "<strong>Apellido: </strong>".$apellido."<br>";
echo "<strong>Edad: </strong>".$edad."<br>";
echo "<strong>Salario: </strong>".$salario."<br>";
if (isset ($comision)) {
    echo "<strong>Comision: </strong>".$comision."<br>";
} else {
    echo "<strong>Zona: </strong>".$zona."<br>";
}

if (isset ($comision)) {
    $comercial = new Comercial($nombre, $apellido, $edad, $salario);
    $comercial->setComision($comision);
    echo $comercial->plus();
} else {
    $repartidor = new Repartidor($nombre, $apellido, $edad, $salario);
    $repartidor->setZona($zona);
    echo $repartidor->plus();
}


//Se solicita hacer un programa que gestione empleados, los empleados tendran nombre, apellido,
//edad y salario
//el sistema tendra 2 tipos de empleado: repartidor y comercial
//el comercial, ademas de los atributos anterores tendra uno llamado comisón
//el repartidor, ademas de los atributos anteriores, tendra uno llamado zona
//las clases tendran un metodo llamado plus y en cada clase tendra una implementación distinta
//este plus aumenta el salario del empleado
//si comercial tiene + de 30 años y cobra una comisión de mas de $200 se aplica el plus
//si repartidor tiene - de 25 años y reparte en la zona A se aplica el plus
//crear una clase ejecutable donde se creen distintos empleados y mostrar en pantalla resultados
?>