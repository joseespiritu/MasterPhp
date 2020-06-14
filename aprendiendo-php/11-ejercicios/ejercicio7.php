<?php

/* 
 * NUMEROS QUE NOS MUESTRAN TODOS LOS NUMEROS ENTRE DOS NUMEROS QUE 
 * NOS LLEGUEN POR GET IMPARES
 */

if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    
    if($numero1<$numero2){
        for($i = 1; $i<=$numero2;$i++){
            if($i/2!=0){
                echo "<h4>$i es impar</h4>";
            } else {
                echo "<h4>$i es par</h4>";
            }
        }
    } else {
        echo "El numero 1 es menor al numero";
    }
} else {
    echo "<h1>LOS PARAMETROS GET NO EXISTEN</h1>";
}


?>