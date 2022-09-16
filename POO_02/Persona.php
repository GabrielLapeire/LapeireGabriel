<?php
class Persona {
    public $nombre;
    public $apellido;
    public $dni;
    public $fecNac;
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    public function getNombre() {
        return $this->nombre;
    }
    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }
    public function getApellido() {
        return $this->apellido;
    }
    public function setDNI($dni) {
        $this->dni = $dni;
    }
    public function getDNI() {
        return $this->dni;
    }
    public function setFecNac($fecNac) {
        $this->fecNac = $fecNac;
    }
    public function getFecNac() {
        return $this->fecNac;
    }
    public function __construct($nombre, $apellido, $dni, $fecNac) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->dni = $dni;
        $this->fecNac = $fecNac;
    }
}
?>