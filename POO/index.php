<?php
require_once 'Empleado.php';
require_once 'Repartidor.php';
require_once 'Comercial.php';

$repartidor = new Repartidor('Gabriel', 'Lapeire', 24, 100);
$repartidor->setZona('A');
echo $repartidor->plus();
echo "<br>";

$comercial = new Comercial('Gabriel', 'Lapeire', 31, 201);
$comercial->setComision(100);
echo $comercial->plus();


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
