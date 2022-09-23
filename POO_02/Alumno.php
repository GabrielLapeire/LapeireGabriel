<?php
require_once "Cumpleanios.php";

class Alumno extends Persona{
    use Cumpleanios;
    public function arancel($arancel) {
        $edad = $this->edad($this->fecNac);
        $cumpleanios = $this->cumpleanios($this->fecNac);
        $ahora = new DateTime();
        $ahora = $ahora->format("m-d");
        $arancelFinal = $arancel;
        if ($cumpleanios == $ahora) {
            $arancelFinal = 0;
        }
        if ($edad <= 25) {
            $arancelFinal = $arancelFinal * 0.8;
        }
        return $arancelFinal;
    }
}
?>