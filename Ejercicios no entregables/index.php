<?php
require_once('conexion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table" border="3">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>DNI</th>
            <th>Email</th>
            <th>Contraseña</th>
        </tr>
        <?php
    $consulta_personas = "select * from personas";
    $resultado_personas = $conexion -> query($consulta_personas);
    while ($registro = $resultado_personas -> fetch_array()) {
        echo $registro['id']."<br>";
        echo $registro['nombre']."<br>";
        echo $registro['apellido']."<br>";
        echo $registro['email']."<br>";
        echo $registro['dni']."<br>";
        echo $registro['password']."<br>";
    }
    ?>
    </table>
</body>
</html>