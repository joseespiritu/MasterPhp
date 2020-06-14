<?php

class Coche{
    
    // Atributos o propiedades (variables)
    
    // PUBLIC podemos acceder a el desde cualquier lugar
    //              dentro de clases que hereden esta clase o fuera de la clase
    public $color;
    
    //PROTECTED: Podemos accdeser desde la que clase que los define y desde
    // clases que hereden esta clase
    protected $marca;
    
    // PRIVATE: Unicamente se puede acceder desde esta clase
    private $modelo;
    
    
    public $velocidad;
    public $caballaje;
    public $plazas;
    
    
    public function __construct($color,$marca,$modelo,$velocidad,$caballaje,$plazas) {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->caballaje = $caballaje;
        $this->plazas = $plazas;
    }
    
    // Metodos, son acciones que hace el objeto (antes funciones)
    public function getColor(){
        // Busca en esta clase la propiedad x
        return $this->color;
    }
    
    public function setColot($color){
        $this->color = $color;
    }
    
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    
    public function getModelo(){
        return $this->modelo;
    }
    
    public function setMarca($marca){
        $this->marca = $marca;
    }
    
    public function acelerar(){
        $this->velocidad++;
    }
    
    public function frenar(){
        $this->velocidad--;
    }
    
    public function getVelocidad(){
        return $this->velocidad;
    }
    
    public function mostrarInformacion(Coche $miObjeto){
        
        if(is_object($miObjeto)){
        $informacion = "<h1>Informacion del coche </h1>";
        $informacion .= "Modelo: ".$miObjeto->modelo;
        $informacion .= "<br/> Color: ".$miObjeto->color;
        $informacion .= "<br/> Velocidad: ".$miObjeto->velocidad;
        } else {
            $Informacion = "Tu dato es este: ".$miObjeto;
        }
        return $informacion;
    }
    
}

?>

