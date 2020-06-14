<?php

// Llamada automatica de las clases
require_once 'autoload.php';

// LLAMADA  MANUAL DE LAS CLASES
//require_once 'clases/usuario.php';
//require_once 'clases/categoria.php';
// require_once 'clases/entrada.php';

/*
  $usuario = new Usuario();
  echo $usuario->nombre;
  echo "<br/>";
  echo $usuario->email;

  $categoria = new Categoria();
  echo "<br/>".$categoria->nombre;
 */

// Cargar espacios de nombre para todos los PHP
use MisClases\Usuario;
use MisClases\Categoria;
use MisClases\Entrada;

// Colocar un alias a un NameSpace y clase que se llaman igual 
use PanelAdministrador\Usuario as UsuarioAdmin;
// En php 7 se puede usar de esta manera
// use MisClases\Usuario, MisClases\Categoria,MisClases\Entrada ;

// Espacios de nombres y paquetes
class Principal {

    public $usuario;
    public $categoria;
    public $entrada;

    public function __construct() {
        // Llamada de los NameSpaces sin tanta redundancia de Mis Clases
        $this->usuario = new Usuario();
        $this->categoria = new Categoria();
        $this->entrada = new Entrada();
        // new MisClases\Usuario();
    }
    
    public function getUsuario() {
        return $this->usuario;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getEntrada() {
        return $this->entrada;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    public function setEntrada($entrada) {
        $this->entrada = $entrada;
    }
    
    // Constantes de clase, por medio de una funcion y las constantes
    // que se van generando nos puede devolver la informacion adecuada
    function informacion(){
        echo __METHOD__;
    }
    
}

// Instancia de la clase
// Objeto Principal
$principal = new Principal();
$principal->informacion();
var_dump($principal->usuario);

// Devolver metodos de una clase, lo devuelve de manera de array
var_dump(get_class_methods($principal));

// Recorrido del array/ Busqueda
$metodos = get_class_methods($principal);

$busqueda = array_search('setEntrada', $metodos);
var_dump($busqueda);


// Objeto de otro paquete
// No se pueden utilizar con el mismo NameSpace
// Se puede usar para tener mas paquetes de clase
$usuario = new UsuarioAdmin();
var_dump($usuario);

// Comprobar si existe una clase
// No se pueden usar los alias
// Con el arroba se oucltan los fallos
$clase = @class_exists('PanelAdministrador\Us2uario');
if($clase){
    echo "<h1> La Clase si existe </h1>";
} else {
    echo "<h1> La clase no existe </h1>";
}