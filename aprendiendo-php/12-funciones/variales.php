<?php

/* 
 * Variables Locales:
 * Las que se declaran dentro de una funcion y no pueden usadas 
 * fuera de la funcion solo estan disponibles dentro a no ser de 
 * que se haga un return
 * 
 * Variables Globales:
 * Las que se declaran fuera de una funcionj y estan dispoonibles
 */


//Variable Global
$frase = "Ni los genios son tan genios, ni los mediocres tan mediocres";

echo $frase;

function holaMundo(){
    global $frase;
    echo "<h1>$frase</h1>";
    
    $year=2019;
    echo "<h1>$year</h1>";
    
    return $year;
}

holaMundo();
//echo holaMundo();

//FUNCIONES VARIABLES

function buenasDias(){
    return "<h1>Hola, Buenos dias</h1>";
}

function buenasTardes(){
    return "<h1>Hey, Que tal ha ido la comida</h1>";
}

function buenasNoches(){
    return "<h1>¿Te vas a dormir ya? Buenas noches</h1>";
}

$horario=$_GET['horario'];
$mi_funcion = "buenas".$horario;
echo $mi_funcion();


?>
