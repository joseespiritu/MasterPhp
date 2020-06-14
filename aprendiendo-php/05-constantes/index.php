<?php
/* 
 * CONSTANTES
 * Es un contenedor de informacion que no puede variar
 */

define('nombre','Jose');
define('web','jose.com');

$web ="Hola";

echo "<h1>".nombre."</h1>";
echo "<h1>".web."</h1>";
echo $web;

//CONSTANTES PREDEFINAS
echo PHP_VERSION;
echo PHP_OS;
echo __LINE__;
echo __FILE__;
echo __FUNCTION__;


?>

