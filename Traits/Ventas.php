<?php
require_once "ClassTienda.php";

$objProducto = new Tienda ();
$objProducto->setProducto("Alfajor", 250, 100);
echo $objProducto->getProducto();
$Cantidad = $_POST['cantidad'];
$objProducto->setCarrito("Alfajor", $Cantidad);
$objProducto->setStock($Cantidad);
echo $objProducto->getCarrito();
echo $objProducto->getProducto();
?>