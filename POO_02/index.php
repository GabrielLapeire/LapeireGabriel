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

echo '<div align="center">'.
        '<strong>Nombre: </strong>'.$nombre.'<br>'.
        '<strong>Apellido: </strong>'.$apellido.'<br>'.
        '<strong>DNI: </strong>'.$dni.'<br>'.
        '<strong>Tipo: </strong>'.$tipo.'<br>'.
        '<strong>Arancel: </strong>'.$arancel.'<br>'.
        '<strong>Fecha de nacimiento: </strong>'.$fecNac.'<br>'.
        '<strong>Cumpleanios: </strong>'.$cumpleanios.'<br>'.
        '<strong>Edad: </strong>'.$edad.'<br>'.
        '<strong style="background-color: yellow;">Arancel final: </strong>'.$arancelFinal.'<br>'.
    '</div>';
?>