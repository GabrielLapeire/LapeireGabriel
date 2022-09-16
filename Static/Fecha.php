<?php
class Date_F {
    public static function getFecha() {
        $anio = date('Y');
        $mes = date('m');
        $dia = date('d');
        return $dia."/".$mes."/".$anio;
    }
}
echo Date_F::getFecha();
?>