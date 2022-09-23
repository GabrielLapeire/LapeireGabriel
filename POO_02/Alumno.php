<?php
require_once "Cumpleanios.php";

class Alumno extends Persona{
    use Cumpleanios;
    public function arancel($arancel) {
        $edad = $this->edad($this->fecNac);
        $cumpleanios = $this->cumpleanios($this->fecNac);
        $ahora = new DateTime(date("Y-m-d"));
        $ahora = $ahora->format("m-d");
        if ($cumpleanios == $ahora) {
            $arancel = 0;
        }
        if ($edad <= 25) {
            $arancel = $arancel * 0.8;
        } else {
            echo "sin descuento";
        }
    }
}
?>