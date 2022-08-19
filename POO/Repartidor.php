<?php
class Repartidor extends Empleado{
    public $zona;
    public function setZona($zona) {
        $this->zona = $zona;
    }
    public function getZona() {
        return $this->zona;
    }
    public function plus() {
        if ($this->edad < 25 && $this->zona == 'A') {
            echo "Repartidor recibe plus de ".self::PLUS;
        } else {
            echo "Repartidor no recibe plus";
        }
    }
}
?>