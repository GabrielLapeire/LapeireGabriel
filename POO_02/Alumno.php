<?php
require_once "Cumpleanios.php";

class Alumno extends Persona{
    use Cumpleanios;
    public function arancel() {
        if ($this->edad <= 25) {
            echo "descuento de 20%";
        } else {
            echo "sin descuento";
        }
    }
}
?>