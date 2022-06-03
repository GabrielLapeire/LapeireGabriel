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
//    echo "ok";
//}

if ($conexion -> connect_errno) {
    echo "error en conexion";
} else {
    echo "ok"."<br>";
}

var_dump($fila)
?>