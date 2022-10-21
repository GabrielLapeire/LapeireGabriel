<?php
$user = "root";
$pass = "";
$db = "test_db";
$server = "localhost";
$conexion = new mysqli($server, $user, $pass, $db);
$sql = "select * from personajes";
$consulta = mysqli_query($conexion, $sql);
$res = mysqli_fetch_array($consulta);

/*if (mysqli_error($conexion)) {
    echo "error en conexion";
} else {
    echo "ok"."<br>";
}*/

$id = $_POST['id'];
$sql1 = "select * from personajes where id ='{$id}'";
$consulta1 = mysqli_query($conexion, $sql1);
$res1 = mysqli_fetch_array($consulta1);

if ((empty($res1))) {
    //ingrear personaje
    $sql2 = "INSERT INTO personajes (id, nombre, estado, especie, tipo, genero, origen, ubicacion, imagen)
        VALUES ()";
    $consulta2 = mysqli_query($conexion, $sql2);
    $res2 = mysqli_fetch_array($consulta2);
    echo "<strong>Personaje guardado en la base de datos</strong><br>";
} else {
    echo "El personaje ya se encuentra en la base de datos";
}

//rickandmortyapi.com
//segun id mostrar datos de un personaje
//permitir guardar los datos en una base de datos
?>