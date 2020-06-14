<?php
// Declaracion del paquete espacio de nombre
namespace MisClases;

class Usuario{
    public $nombre;
    public $email;
    
    public function __construct() {
        $this->nombre = "Mi nombre";
        $this->email = "Email";
    }
}
?>
