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
$pw = $_POST['pw'];

$sql1 = "select * from personas where dni =".$usuario;
$consulta1 = mysqli_query($conexion, $sql1);
$res1 = mysqli_fetch_array($consulta1);
$sql2 = "select * from personas where password =".$pw;
$consulta2 = mysqli_query($conexion, $sql2);
$res2 = mysqli_fetch_array($consulta2);

if ((!empty($res1))) {
    if (!empty($res2)) {
        echo "sesion iniciada";
    } else {
        echo "contraseña incorrecta";
    }
} else {
    echo "el usuario no existe";
}
?>