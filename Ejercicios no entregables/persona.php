<?php
class Persona {
    public $nombre = 'Gabriel';
    public $apellido = 'Lapeire';
    public $fecnac = 2002-05-14;
    // fecha de nacimiento
    public function getNombreCompleto() {
    return;
    }
    public function __construct($nombre, $apellido, $fecnac) {
        $this-> nombre = $nombre;
        $this-> apellido = $apellido;
        $this->fecnac = $fecnac;
    }
    public function getNombre() {
        return $this -> nombre;
    }
    public function setNombre($nombre) {
        $this -> nombre = $nombre;
    }
};

$persona = new Persona('Gabriel', 'Lapeire', 2002-05-14);
$persona -> nombre = 'Gabriel Lapeire';
$persona -> setNombre('Juan');
echo $persona -> getNombre();
?>