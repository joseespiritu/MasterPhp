<?php
// Programacion orientada a objetos en PHP (POO)


// Definir una clase, molde para crear más objetos de tipo coche con caracteristicas parecidas
class Coche{
    
    // Atributos o propiedades (variables)
    public $color = "rojo";
    public $marca = "Ferrari";
    public $modelo = "Aventador";
    public $velocidad = 300;
    public $caballaje = 500;
    public $plazas = 2;
    
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
    
    public function acelerar(){
        $this->velocidad++;
    }
    
    public function frenar(){
        $this->velocidad--;
    }
    
    public function getVelocidad(){
        return $this->velocidad;
    }
    
} // Fin definicion de la clase

//Crear un objeto o isntanciar una clase
$coche = new Coche();

// Usar los metodos
//echo $coche->getVelocidad();

$coche->setColot("Amarillo");
echo "El color del coche es ".$coche->getColor().'<br/>';

$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->frenar();

echo "Velocidad del coche: ".$coche->getVelocidad();

$coche2 = new Coche();
$coche2->setColot("Verde");
$coche2->setModelo("Gallardo");

var_dump($coche);
var_dump($coche2);

?>