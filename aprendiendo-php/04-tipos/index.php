<?php
/*
 * TIPOS DE DATOS:
 * Entero (int / integer) = 99
 * Coma flotante (float / double) = 3.45
 * Cadenas (String) = "Hola yo soy un String"
 * Bolenao (bool) = 1 0 true false
 * null
 * Array (Coleccion de datos)
 * Objetos
 */

$numero = 100;
$decimal = 27.9;
$texto = "Soy un texto $numero";
$verdadero = true;
$nula = null;

echo gettype($numero);
echo "</br>";
echo gettype($decimal);
echo "</br>";
echo gettype($texto);
echo "</br>";
echo gettype($verdadero);
echo "</br>";
echo gettype($nula);
echo $texto;

// DEBUGEAR
$mi_nombre[] = "Jose";
$mi_nombre[] = "Jose";
var_dump($mi_nombre);

?>