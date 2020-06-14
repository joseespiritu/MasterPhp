<?php
// Declaracion del paquete espacio de nombre
namespace PanelAdministrador;

class Usuario{
    public $nombre;
    public $email;
    
    public function __construct() {
        $this->nombre = "Antonio Pineda";
        $this->email = "Antonio@antonio.com";
    }
}
?>
