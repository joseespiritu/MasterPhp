<?php

/* 
 * Operadores aritmeticos
 */
$numero1 = 65;
$numero2 = 33;

echo 'Suma: '.($numero1+$numero2).'<br/>';
echo 'Resta: '.($numero1-$numero2).'<br/>';
echo 'Multiplicacion: '.($numero1*$numero2).'<br/>';
echo 'Division: '.($numero1/$numero2).'<br/>';
echo 'Resto: '.($numero1%$numero2).'<br/>';

//OPERADORES INCREMENTO Y DECREMENTO
$year = 2019;
$year++;
echo "<h1>$year</h1>";

//DECREMENTO
$year--;
echo "<h1>$year</h1>";

//INCREMENTO
++$year;
echo "<h1>$year</h1>";
$year+1;
echo "<h1>$year</h1>";

/*
 * OPERADORES DE ASIGANCION
 */

$edad=55;
echo $edad.'<br/>';

//vghcxvgxc
echo ($edad+=5);

echo ($edad*=5);

?>