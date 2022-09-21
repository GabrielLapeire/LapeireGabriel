<?php
require_once 'Persona.php';
require_once 'Alumno.php';
require_once 'Docente.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['DNI'];
$tipo = $_POST['tipo'];
//$arancel = ;
$fecNac = $_POST['fecNac'];

echo "<strong>Nombre: </strong>".$nombre."<br>";
echo "<strong>Apellido: </strong>".$apellido."<br>";
echo "<strong>DNI: </strong>".$dni."<br>";
echo "<strong>Tipo: </strong>".$tipo."<br>";
echo "<strong>Fecha de nacimiento: </strong>".$fecNac."<br>";

if ($tipo = "Alumno") {
    $alumno = new Alumno($nombre, $apellido, $dni, $fecNac);
    echo $alumno->edad($fecNac);
    echo $alumno->arancel();

} else {
    $docente = new Docente($nombre, $apellido, $dni, $fecNac);
    echo $docente->edad($fecNac);
    echo $docente->arancel();
}
?>