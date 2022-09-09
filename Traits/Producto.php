<?php
trait Producto {
    public $strProducto;
    public $fltPrecio;
    public $intStock;
    public function setProducto(string$Producto, float$Precio, int$Stock) {
        $this->strProducto = $Producto;
        $this->fltPrecio = $Precio;
        $this->intStock = $Stock;
    }
    public function getProducto() {
        $strInfo = "
        Producto: {$this->strProducto}<br>
        Precio: {$this->fltPrecio}<br>
        Stock: {$this->intStock}<br>";
        return $strInfo;
        echo "<br>";
    }
    public function setStock(int$Cantidad) {
        $this->intStock = $this->intStock - $Cantidad;
        echo "<br>";
    }
}
?>