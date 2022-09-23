<?php
require_once 'Persona.php';
require_once 'Alumno.php';
require_once 'Docente.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['DNI'];
$tipo = $_POST['tipo'];
$arancel = $_POST['arancel'];
$fecNac = $_POST['fecNac'];

if ($tipo == "Alumno") {
    $alumno = new Alumno($nombre, $apellido, $dni, $fecNac);
    $edad = $alumno->edad($alumno->fecNac);
    if ($edad < 18) {
        echo "menores de edad no tienen permitido utilizar este sistema";
        die;
    }
    $cumpleanios = $alumno->cumpleanios($alumno->fecNac);
    $arancelFinal = $alumno->arancel($arancel);
} else {
    $docente = new Docente($nombre, $apellido, $dni, $fecNac);
    $edad = $docente->edad($docente->fecNac);
    if ($edad < 18) {
        echo "menores de edad no tienen permitido utilizar este sistema";
        die;
    }
    $cumpleanios = $docente->cumpleanios($docente->fecNac);
    $arancelFinal = $docente->arancel($arancel);
}

echo "<strong>Nombre: </strong>".$nombre."<br>";
echo "<strong>Apellido: </strong>".$apellido."<br>";
echo "<strong>DNI: </strong>".$dni."<br>";
echo "<strong>Tipo: </strong>".$tipo."<br>";
echo "<strong>Arancel: </strong>".$arancel."<br>";
echo "<strong>Fecha de nacimiento: </strong>".$fecNac."<br>";
echo "<strong>Cumpleanios: </strong>".$cumpleanios."<br>";
echo "<strong>Edad: </strong>".$edad."<br>";
echo "<strong>Arancel final: </strong>".$arancelFinal."<br>";
?>