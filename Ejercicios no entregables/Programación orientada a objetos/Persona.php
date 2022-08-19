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
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->fecnac = $fecnac;
    }
    public function getNombre() {
        return $this->nombre;
    }
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    public function fullName() {
        return "{$this->apellido}, {$this->nombre}";
    }
};

$persona = new Persona('Javier', 'Parra', 1980-07-20);
//$persona->nombre = 'Javier Parra';
//$persona->setNombre('Juan');
//echo $persona->getNombre();
//echo $persona->fullName();
?>