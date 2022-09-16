<?php
require_once "Cumpleanios.php";

class Docente extends Persona{
    use Cumpleanios;
    public function arancel() {
        if ($this->edad >= 40) {
            echo "descuento de 10%";
        } else {
            echo "sin descuento";
        }
    }
}
?>