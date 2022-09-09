<?php
require_once "Carrito.php";
require_once "Producto.php";

class Tienda {
    use Producto, Carrito;
    public function getCarrito() {
        $this->fltTotal = $this->fltPrecio * $this->intCantidad;
        $infoCarrito = "
        <hr>Carrito</hr>
        <hr>
        Producto: {$this->strProducto}<br>
        Cantidad: {$this->intCantidad}<br>
        Precio: {$this->fltPrecio}<br>
        Total: {$this->fltTotal}<br>";
        return $infoCarrito;
        echo "<br>";
    }
}
?>