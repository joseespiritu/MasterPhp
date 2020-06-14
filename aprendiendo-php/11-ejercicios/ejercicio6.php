<?php

/* 
 * IMPRIMIR TODAS LAS TABLAS DE MULTIPLICAR Y MOSTRARLAS EN HTML
 */

echo "<table border='1'> <tr>"; //INCIO TABLA
   
echo "<tr>";
    for($cabecera=1;$cabecera<=10;$cabecera++){
        echo "<td>Tabla del $cabecera</td>";
    }
echo "</tr>";

echo "<tr>";
    for ($i=1;$i<=10;$i++){
        echo "<td>";
            for($x=1;$x<=10;$x++){
                echo  "$i  x $x = ".($i*$x).'<br/>';
            }
        echo "</td>";
    }
echo "</tr>";

echo "</table>";//FIN DE TABLA

?>