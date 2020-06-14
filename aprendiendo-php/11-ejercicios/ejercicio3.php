<?php

/* 
 * IMPRIMA POR PANTALLA LOS CUADRADOS DE LOS 40 PRIMEROS NUMEROS NATURALES
 */
$contador = 0;
while($contador <=40){
    $cuadrado = $contador*$contador;
    echo "<h3> El cuadrado de $contador es $cuadrado </h3>";
    $contador++;
}

for ($i = 0; $i<=40;$i++){
    $cuadrado = $contador*$contador;
    echo "<h3> El cuadrado de $contador es $cuadrado </h3>";
}


?>