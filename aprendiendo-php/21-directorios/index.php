<?php

//CREAR CARPETA
if(!is_dir('mi_carpeta')){
    mkdir('mi_carpeta', 0777) or die("No se puede crear la carpeta");
} else {
    echo 'ya existe la carpeta';
}

//BORRAR DIRECTORIOS
//rmdir('mi_carpeta');

echo "</hr><h1>Contenido carpetas</h1>";
if($gestor = opendir('./mi_carpeta')){
    while(false != ($archivo = readdir($gestor))){
        if($archivo != '.' && $archivo!='..'){
            echo $archivo.'<br/>';
        }
    }
}



?>

