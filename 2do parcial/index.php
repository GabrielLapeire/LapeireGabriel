<?php
require_once 'Persona.php';
require_once 'Cuenta.php';
require_once 'CuentaJoven.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['DNI'];
$edad = $_POST['edad'];
$monto = $_POST['monto'];
$transaccion = $_POST['transaccion'];
$operacion = $_POST['operacion'];
const BONO = 1.2;

$persona = new Persona($nombre." ".$apellido, $edad, $dni);
$persona->mostrar();
$persona->esMayorDeEdad();
echo "<hr>";

if ($edad < 18) {
    echo "No es un usuario valido";
    die;
} elseif ($edad > 24) {
    echo "Cuenta Senior <br>";
    $cuenta = new Cuenta($nombre." ".$apellido, $monto);
    $cuenta->mostrar();
    if ($operacion == "ingreso") {
        $cuenta->ingresar($transaccion);
    } elseif ($operacion == "retiro") {
        $cuenta->retirar($transaccion);
    }
} else {
    echo "Cuenta Joven <br>";
    $cuentaJoven = new CuentaJoven($nombre." ".$apellido, $monto, BONO);
    $cuentaJoven->mostrarBonificacion();
    $cuentaJoven->mostrar();
    if ($operacion == "ingreso") {
        $cuentaJoven->ingresar($transaccion * BONO);
    } elseif ($operacion == "retiro") {
        $cuentaJoven->retirar($transaccion);
    }
}
?>