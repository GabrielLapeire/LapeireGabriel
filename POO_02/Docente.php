<?php
require_once "Cumpleanios.php";

class Docente extends Persona{
    use Cumpleanios;
    public function arancel($arancel) {
        $edad = $this->edad($this->fecNac);
        $cumpleanios = $this->cumpleanios($this->fecNac);
        $ahora = new DateTime();
        $ahora = $ahora->format("m-d");
        $arancelFinal = $arancel;
        if ($cumpleanios == $ahora) {
            $arancelFinal = $arancelFinal * 2;
        }
        if ($edad >= 40) {
            $arancelFinal = $arancelFinal * 0.9;
        }
        return $arancelFinal;
    }
}
?>