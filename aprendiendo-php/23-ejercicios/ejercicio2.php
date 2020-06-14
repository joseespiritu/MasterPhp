<?php

/* 
 * Una funcion
 * Validar un email con filter_var
 * Recofer una variable pro get y validarla
 * Mostrar el resultado
 */

function validarEmail($email){
    $status = "No valido";
    if((!empty($email)) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $status = "Valido";
    }
    return $status;
}

if(isset($_GET['email'])){
    echo validarEmail($_GET['email']);
}else{
    echo "Pasa por GET un email";
}

?>

