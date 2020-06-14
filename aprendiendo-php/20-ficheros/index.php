<?php

/*
//Abrir archivo
$archivo = fopen("fichero_texto.txt", "a+");

//Leer contenido
while(!feof($archivo)){
    $contenido = fgets($archivo);
    echo $contenido."<br/>";
}

//Escribir en un archivo
fwrite($archivo, "***soy un texto metido desde php");

//Cerrar archivo
fclose($archivo);
 */

//Copiar
//copy('fichero_texto.txt','fichero_copiado.txt') or die("Error al copiar");


//Renombrar un fichero
//rename('fichero_copiado.txt', 'archivito_recopiadito.txt');

//Elimar un fichero
//unlink('archivito_recopiadito.txt') or die("Error al borrar");

if(file_exists('fichero_texto.txt')){
    echo "El archivo existe";
}else {
    echo "El archivo NO existe";
}

?>

