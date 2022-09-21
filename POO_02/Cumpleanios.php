<?php
trait Cumpleanios {
    public function edad($fecNac) {
        $nacimiento = new DateTime($fecNac);
        $ahora = new DateTime(date("Y-m-d"));
        $diferencia = $ahora->diff($nacimiento);
        $edad = $diferencia->format("%y");
        $cumpleanios = $diferencia->format("%m/%d");
        echo "<strong>Edad: </strong>".$edad."<br>";
        echo "<strong>Cumpleanios: </strong>".$cumpleanios."<br>";
    }
}
?>