<?php
require_once "ClassTienda.php";

$objProducto = new Tienda ();
$objProducto->setProducto("Alfajor", 250, 100);
echo $objProducto->getProducto();
$Cantidad = $_POST['cantidad'];
$objProducto->setCarrito("Alfajor", 5);
$objProducto->setStock(5);
echo $objProducto->getProducto();
echo $objProducto->getCarrito();
?>