<?php
class Comercial extends Empleado{
    public $comision;
    public function setComision($comision) {
        $this->comision = $comision;
    }
    public function getComision() {
        return $this->comision;
    }
    public function plus() {
        if ($this->edad > 30 && $this->salario > 200) {
            echo "Empleado comercial recibe plus de ".self::PLUS;
        } else {
            echo "Empleado comercial no recibe plus";
        }
    }
}
?>