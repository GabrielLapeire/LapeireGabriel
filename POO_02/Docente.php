<?php
require_once "Cumpleanios.php";

class Docente extends Persona{
    use Cumpleanios;
    public function arancel($arancel) {
        $edad = $this->edad($this->fecNac);
        $cumpleanios = $this->cumpleanios($this->fecNac);
        $ahora = new DateTime(date("Y-m-d"));
        $ahora = $ahora->format("m-d");
        if ($cumpleanios == $ahora) {
            $arancel = $arancel * 2;
        }
        if ($edad >= 40) {
            $arancel = $arancel * 0.9;
        } else {
            echo "sin descuento";
        }
    }
}
?>