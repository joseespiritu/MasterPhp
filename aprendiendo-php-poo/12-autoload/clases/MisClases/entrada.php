<?php
// Declaracion del paquete espacio de nombre
namespace MisClases;

class Entrada{
    public $titulo;
    public $fecha;
    
    public function __construct() {
        $this->titulo = "Review del GTA V";
        $this->fecha = "5 de Mayo de 2020";
    }
}
?>
