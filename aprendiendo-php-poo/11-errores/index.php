<?php

// Mandar mensaje de error
// Capturar excepciones en codigo susceptible a errores
try{
    
    if(isset($_GET['id'])){
        echo "<h1>El parameto es: {$_GET['id']} </h1>";
    } else {
        throw new Exception("Faltan parametros por la URL");
    }
    
    
} catch (Exception $ex) {
    // Motrar el mensaje en pantalla
    echo "Ha habido un error: ".$ex->getMessage();
} finally {
    // Cuando se termine de ejecutar todo
    // Casi no es usado
    echo " Todo Correcto";
}



?>