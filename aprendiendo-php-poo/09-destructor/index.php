<?php

class Usuario{
    public $nombre;
    public $email;
    
    public function __construct() {
        $this->nombre = "Victor Robles";
        $this->email = "Victor@mail.com";
        echo "Creando el objeto"."<br/>";
    }
    
    //Metodo magico toString
    public function __toString() {
        return "Hola, {$this->nombre}, estas registrado con {$this->email}" ;
    }


    // Metodo destructor que elimina al objeto finalizado su uso
    public function __destruct() {
        echo "<br/>"."Destruyendo el objeto";
    }
}

$usuario = new Usuario();

// Uso del metodo magico ToString
echo $usuario;

