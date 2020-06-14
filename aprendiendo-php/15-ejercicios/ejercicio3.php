<?php

/* 
 * Si un variable esta vacia, y si esta vacia rellenarla 
 * con minusculas y mostrarlo en mayusculas y negrita
 */

$texto = "";

if (empty($texto)){
    $texto = "hola yo soy el relleno de la variable texto";
    $textoMayus= strtoupper($texto);
    echo "<strong>".$textoMayus."</strong>";
} else {
    echo "La variable tiene este contenido dentro".$texto;
}

?>
