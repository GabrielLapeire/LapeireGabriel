<?php
trait Carrito {
    public $strProducto;
    public $intCantidad;
    public function setCarrito(string$Producto, int$Cantidad) {
        $this->strProducto = $Producto;
        $this->intCantidad = $Cantidad;
    }
}
?>