<?php
class CuentaJoven extends Cuenta {
    public $bonificacion;
    public function setBonificacion($bonificacion) {
        $this->bonificacion = $bonificacion;
    }
    public function getBonificacion() {
        return $this->bonificacion;
    }
    public function __construct($titular, $cantidad = null, $bonificacion) {
        $this->titular = $titular;
        $this->cantidad = $cantidad;
        $this->bonificacion = $bonificacion;
    }
    public function esTitularValido($edad) {
        if ($edad > 17 && $edad < 25) {
            $Validez = true;
        } else {
            $Validez = false;
        }
        echo "Usuario valido: ".$Validez."<br>";
    }
    public function mostrar() {
        echo "Cuenta Joven ".$this->bonificacion."%";
    }
}
?>