<?php
class Persona {
    public $nombre;
    public $edad;
    public $dni;
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    public function getNombre() {
        return $this->nombre;
    }
    public function setEdad($edad) {
        $this->edad = $edad;
    }
    public function getEdad() {
        return $this->edad;
    }
    public function setDNI($dni) {
        $this->dni = $dni;
    }
    public function getDNI() {
        return $this->dni;
    }
    public function __construct($nombre = null, $edad = null, $dni = null) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->dni = $dni;
    }
    public function mostrar() {
        echo "Nombre: ".$this->nombre."<br>";
        echo "Edad: ".$this->edad."<br>";
        echo "DNI: ".$this->dni."<br>";
    }
    public function esMayorDeEdad() {
        if ($this->edad > 17) {
            $mayoriaDeEdad = true;
        } else {
            $mayoriaDeEdad = false;
        }
        echo "Mayoria de edad: ".$mayoriaDeEdad."<br>";
    }
}
?>