<?php
require_once "Persona.php";
require_once "Alumno.php";
$alumno = new Alumno('Gabriel', 'Lapeire', 2002-05-14);
echo $alumno->fullName();
?>