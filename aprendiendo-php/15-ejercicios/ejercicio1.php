<?php

/* 
 * ARRAY CON 8 NUMEROS, RECORRER MOSTRARLO ORDENARLO, LONGITUD BUSCAR
 */

//Funciones
function mostrarArray($numeros){
    $resultado = "";
    foreach ($numeros as $recorrido) {
        
        $resultado .=$recorrido.'<br/>';
    }
    return $resultado;
}

echo "<h1>Recorrer y mostrar</h1>";
$numeros = array(32,5,32,76,1,7,3,1,43);
echo mostrarArray($numeros);

// Ordenarlo y mostrarlo
echo "<h1>Ordenar y mostrar</h1>";
sort($numeros);
echo mostrarArray($numeros);
//var_dump($numeros);


//Mostrar su longitud
echo "<h1>Numero total de elementos</h1>";
echo count($numeros);

//Busqueda en el array
//Busqueda por el parametro de la URL
if (isset($_GET['numero'])){
    $busqueda = $_GET['numero'];
    echo "<h1>Buscar en el array el numero $busqueda</h1>";
    $search = array_search($busqueda, $numeros);
    if (!empty($search)){
        echo "<h4> El numero buscado existe en el array, en el indice: $search</h4>";   
    }else {
        echo "<h4> El numero buscado NO existe en el array</h4>";
    }
}


?>
