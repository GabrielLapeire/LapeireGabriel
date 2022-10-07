<?php
class Cuenta {
    public $titular;
    public $cantidad;
    public function setTitular($titular) {
        $this->titular = $titular;
    }
    public function getTitular() {
        return $this->titular;
    }
    public function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }
    public function getCantidad() {
        return $this->cantidad;
    }
    public function __construct($titular, $cantidad = null) {
        $this->titular = $titular;
        $this->cantidad = $cantidad;
    }
    public function mostrar() {
        echo "Titular: ".$this->titular."<br>";
        echo "Cantidad: ".$this->cantidad."<br>";
    }
    public function ingresar($cantidad) {
        if ($cantidad > 0) {
            $this->cantidad = $this->cantidad + $cantidad;
            echo "Cantidad post ingreso: ".$this->cantidad."<br>";
        }
    }
    public function retirar($cantidad) {
        $this->cantidad = $this->cantidad - $cantidad;
        echo "Cantidad post retiro: ".$this->cantidad."<br>";
    }
}
?>