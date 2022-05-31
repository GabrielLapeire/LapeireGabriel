<?php
$apellido = $_POST['apellido'];
$nombre = $_POST['nombre'];
$dni = $_POST['dni'];
$fecha = $_POST['birth'];
$sexo = $_POST['sexo'];

echo "<strong>Apellido: </strong>".$apellido."<br>";
echo "<strong>Nombre: </strong>".$nombre."<br>";
echo "<strong>DNI: </strong>".$dni."<br>";
echo "<strong>Fecha de nacimiento: </strong>".$fecha."<br>";
echo "<strong>Sexo: </strong>".$sexo."<br>";
echo "<strong>Colores: </strong><br>";
if(!empty($_POST['color'])){
    foreach($_POST['color'] as $aux){
    echo $aux."</br>";
    }}
//(isset())  array_push()
?>