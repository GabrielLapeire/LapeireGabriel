<?php
require_once 'Persona.php';
require_once 'Cuenta.php';
require_once 'CuentaJoven.php';

echo "<hr>Persona<hr>";
$persona = new Persona("Gabriel", 20, 44164066);
$persona->mostrar();
$persona->esMayorDeEdad();

echo "<br>";

echo "<hr>Cuenta<hr>";
$cuenta = new Cuenta("Gabriel", 12000.50);
$cuenta->mostrar();
$cuenta->ingresar(500);
$cuenta->retirar(13000.50);

echo "<br>";

echo "<hr>Cuenta Joven<hr>";
$cuentaJoven = new CuentaJoven("Gabriel", 10000, 20);
$cuentaJoven->esTitularValido(20);
$cuentaJoven->mostrar();
?>