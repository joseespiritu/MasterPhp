<?php

/* 
 * crear un array con el contenido de la tabla:
 * Accion, aventura,    deportes
 * gta     assasins     fifa
 * COD     crash        pes
 * pugb    princeof     moto gp
 * 
 * cada columna debe ir en un fichero separado
 */

$tabla = array(
    "ACCION" => array("GTA 5", "Call of duty","PUGB"),
    "AVENTURA" => array("Assasins creed","Crash Bamdicoot","Prince Of Persia"),
    "DEPORTES" => array("FIFA 19","PES 19", "MOTO GP 19")
);

$categorias = array_keys($tabla);
?>

<table border="1">
    <?php require_once 'ejercicio5/encabezados.php' ?>
    <?php require_once 'ejercicio5/primera.php' ?>
    <?php require_once 'ejercicio5/segunda.php' ?>
    <?php require_once 'ejercicio5/tercera.php' ?>
    
    
    
    
</table>


