<?php
$user = "root";
$pass = "";
$db = "test_db";
$server = "localhost";
$conexion = new mysqli($server, $user, $pass, $db);
$consulta = "select * from personas";
$resultado = mysqli_query($conexion, $consulta);
$fila = mysqli_fetch_array($resultado);

//if (mysqli_error($conexion)) {
//    echo "error en conexion";
//} else {
//    echo "ok"."<br>";
//}

$usuario = $_POST['user'];
//$pw = $_POST['pw'];
//echo $usuario."<br>".$cont."<br>";

$consulta1 = "select * from personas where dni =".$usuario;
$resultado1 = mysqli_query($conexion, $consulta1);
$fila1 = mysqli_fetch_array($resultado1);

if ((!empty($fila1))) {
    echo "sesion iniciada";
} else {
    echo "el usuario no existe";
}
?>