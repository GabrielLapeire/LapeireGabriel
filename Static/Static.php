<?php
class Humano {
    public static $nombre = "Javier Parra";
    public static function saludar() {
        echo "hola mundo<br>";
    }
    public function saludoPersonalizado() {
        echo "hola ".self::$nombre."<br>";
    }
}
Humano::saludar();

$humano = new Humano;
$humano -> saludoPersonalizado();
//al ser estatica la clase, debe usarse "self::" en lugar de "$this->"

class Argentino extends Humano {
    public function saludarArgentino() {
        echo "hola ".parent::$nombre."<br>";
    }
}
$argentino = new Argentino;
$argentino -> saludarArgentino()
//al acceder a una clase padre, se usa "parent::"
?>