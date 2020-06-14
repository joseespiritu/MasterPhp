<?php

/* 
 * Añada valores a un array mientrar sea menor a 120
 * y se muestre en pantalla
 */

$coleccion = array();

for ($i=0;$i<120;$i++){
    array_push($coleccion, "elemento-".$i);
}

echo $coleccion[45];

?>
