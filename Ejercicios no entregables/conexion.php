<?php
$host = "localhost";
$user = "root";
$pass = "";
$bd = "test_db";

$conexion = new mysqli($host, $user, $pass, $bd);
if ($conexion -> connect_errno) {
    die("Fallo la conexion");
};
echo "ok <br>";
?>