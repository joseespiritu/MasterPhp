<?php

$cantantes = ['2pack','drake','jenny','Alfredo'];
$numeros = [1,2,5,8,3,2];

//ASORT ALFABETICO
//ARSORT ALFABETICO INVERSO
arsort($cantantes);
var_dump($cantantes);
//ORDENA NUMEROS
sort($numeros);
var_dump($numeros);

//AADIR ELEMENTOS AL ARRAY
$cantantes[] = "Natos";

//AÑADIR VALOR A UN ELEMENTO
//array_push($cantantes, "waor");

//ELIMINAR EL ULTIMO ELEMENTO DEL ARRAY
//array_pop($cantantes);
//unset($cantantes[2]);

// Aleatorio
$indice = array_rand($cantantes);
echo $cantantes[$indice];

// Dar la vuelta
var_dump(array_reverse($numeros));

//Buscar dentro de un array
$resultado = array_search('Alfredo1', $cantantes);
var_dump($resultado);

// Contar numero de elementos
echo count($cantantes);
echo '<br/>';
echo sizeof($cantantes);


?>

