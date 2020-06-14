<?php
/*
 * BUCLE WHILE
 * Estructura de control que itera o repite la ejecucion de una serie 
 * de instrucciones cuantas veces sea necesario
 */
$numero = 33;
while ($numero <=100){
    echo $numero;
    if($numero!=100){
        echo ", ";
    }
    $numero++;
}

echo '<hr/>';

//EJEMPLO
if(isset($_GET['numero'])){
    //Cambiar tipo de dato
    $numero = (int)$_GET['numero'];
} else {
    $numero = 33;
}

echo "<h1>Tabla de multiplicar del numero $numero<h1/>";
$contador = 0;
while($contador <= 10){
    echo "$numero x $contador = ".($numero*$contador)."<br/>";
    $contador++;
}

 echo "<hr/>";
 
//DO WHILE
$edad = 17;
$contador = 1;
do {
  echo "Tienes acceso al local privado $contador <br/>";
  $contador++;
} while($edad >=18 && $contador <=10);
        


?>

