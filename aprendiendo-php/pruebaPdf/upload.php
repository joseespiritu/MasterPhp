<?php

define('Vacio',25608);                                          //Constante que almacena el tamaño de 30 KB en bits
define('Pesado',1048576);                                  //Constante que almacena el tamaño de 1MB en bits
$file_type=$_FILES['file']['type'];                         //Variable que guarda el tipo de dato
$tamano_archivo = $_FILES['file']['size'];           //Variable que guarda el tamaño de dato
$archivo = $_FILES['file'];                                  //Variable que reconoce el archivo
$nombre = $archivo ['name'];                            //Variable que guarda el nombre del archivo


//CONDICION QUE EVALUA SI EL ARCHIVO ES PDF Y ES MENOR AL TAMAÑO MAXIMO DE 1 MB
// Y ES MAYOR AL TAMAÑO MINIMO
if (($file_type=="application/pdf") && ($tamano_archivo < Pesado) && ($tamano_archivo > Vacio)) {
        
        //verifica si hay una carpeta docs creada y si no la crea con todos los permisos (0777)
        if(!is_dir('docs')){
            mkdir('docs',0777);
        } 
        
        //Mueve el archivo a la carpeta creada previemaente y coloca el nombre del archivo
        move_uploaded_file($archivo['tmp_name'], 'docs/'.$nombre);
        
        //Muestra el mensaje de que el archivo se subio correctamente y refresca la pagina por 5 segndos
        header("Refresh: 5; URL=index.php");
        echo "<h1>El archivo ". basename( $_FILES['file']['name']). " se subio correctamente</h1>";
        
}  elseif(($tamano_archivo <= Vacio) && ($file_type=="application/pdf")) { //Condcion que evalua los archivos vacios
    
    header("Refresh: 5; URL=index.php");
    echo "<h1>El archivo esta vacio, verifica que contenga algo</h1><br/>";
    
} elseif(($tamano_archivo >= Pesado) && ($file_type=="application/pdf")) { //Condicion que evalua el limite de tamaño de un archivo
    
    header("Refresh: 5; URL=index.php");
    echo "<h1>El archivo pesa mas de 1MB, selecciona otro</h1><br/>";
    
} else { //Condicion default cuando el archivo no es PDF
    
    header("Refresh: 5; URL=index.php");
    echo "<h1>Solo puedes subir archivos PDFs</h1><br/>";
}
?>

