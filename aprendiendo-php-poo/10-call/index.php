<?php

class Persona{
    private $nombre;
    private $edad;
    private $ciudad;
    
    public function __construct($nombre, $edad, $ciudad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->ciudad = $ciudad;
    }
    
    // Metodo magico Call para cuando no existen metodos que se quieran llamar
    // Y los pone como metodos sin crearlos
    public function __call($name, $arguments) {
        $prefix_metodo = substr($name, 0, 3);
        
        if($prefix_metodo == 'get'){
            $nombre_metodo = substr(strtolower($name), 3);
            
            // En caso de que no exista el valor o el metodo
            if (!isset($this->$nombre_metodo)){
                return "El metodo que estas invocando no existe";
            }  
            
            // Es igual a $this->nombre;
            return $this->$nombre_metodo;
        } else {
            return "El metodo que estas invocando no existe";
        }
        
        return $nombre_metodo;
    }
}

$persona = new Persona("Victor", 66, "Madrid");

// Llamada de los metodos magicos Call
echo $persona->getNombre();
echo $persona->getEdad();
echo $persona->getCiudad();

// Caso en el que no existe un metodo
echo $persona->getEmail();