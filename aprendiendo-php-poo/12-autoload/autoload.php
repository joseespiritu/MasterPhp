<?php

// Funcion que se crea para hacer el autoload
function autocargar_clases($class){
    // Es preferible usar el require, pero es para verificar si una clase existe o no existe
    include 'clases/' . $class . '.php';
}

// Funcion que busca todas las clases del directorio
spl_autoload_register('autocargar_clases');

?>
