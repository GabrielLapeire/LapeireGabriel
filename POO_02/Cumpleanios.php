<?php
trait Cumpleanios {
    public function edad($fecNac) {
        $nacimiento = new DateTime($fecNac);
        $ahora = new DateTime(date("Y-m-d"));
        $diferencia = $ahora->diff($nacimiento);
        $edad = $diferencia->format("%y");
        return $edad;
    }
    public function cumpleanios($fecNac) {
        $nacimiento = new DateTime($fecNac);
        $cumpleanios = $nacimiento->format("m-d");
        return $cumpleanios;
    }
}
?>