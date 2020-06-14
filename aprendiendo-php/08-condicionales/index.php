<?php
/* 
 * CONDICIONALES:
 * IF
 */

/*
 * OPERADORES DE COMPARACION:
 * == IGUAL
 * === IDENTICO
 * != DISTINTO
 * <> DIFERENTE
 * !==  NO IDENTICO
 * < MENOR QUE
 * > MAYOR QUE
 * <= MENOR O IGUAL QUE
 * >= MAYOR O IGUAL QUE
 */

/*
 * OPERADORES LOGICOS:
 * && AND Y
 * || OR O
 * ! NOT NO
 * AND OR
 */

//EJEMPLO 1 CON IF
$color = "Verde";
if($color=="Rojo"){
    echo "El color es rojo";
} else {
    echo "El color no es rojo";
}

echo '<br/>';

//EJEMPLO 2 CON IF
$year = 2019;
if($year != 2019){
    echo "Es un año diferente a 2019";
} else {
    echo "Estamos a 2019";
}

echo '<br/>';

//EJEMPLO 3 CON IF
$nombre = "David extremaduro";
$ciudad = "Europa";
$continente = "Asia";
$edad = 49;
$mayoria_edad = 18;
if($edad >= $mayoria_edad){
    echo '<h1>'.$nombre." es mayor de edad".'<h1/>';
    if($continente == "Europa"){
       echo '<h2>'."Y es de ".$ciudad.'<h2/>';
    } else {
       echo '<h2>'."Y no es europeo ".'<h2/>'; 
    }
} else {
    echo '<h1>'.$nombre." no es mayor de edad".'<h1/>';
}

echo '<br/>';

//EJEMPLO 4 CON ELSE IF
$dia = 3;
if($dia == 1){
    echo "Es Lunes";
}elseif($dia == 2){
    echo "Es mnartes";
}elseif($dia == 3){
    echo "Es miercoles";
}elseif($dia == 4){
    echo "Jueves";
}elseif($dia==5){
    echo "Viernes";
}else {
    echo "Es fin de semana";
}

echo '<br/>';

$dia = 4;
switch($dia){
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miercoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    default:
        echo "Es fin de semana";
}

echo '<br/>';

//EJEMPLO 5 CON IF
$edad1=18;
$edad2=64;
$edad_oficial=17;
if($edad_oficial >= $edad1 && $edad_oficial <= $edad2){
    echo "Esta en edad de trabajar";
} else {
    echo "No puede trabajar";
}
echo '<br/>';


//EJEMPLO GOTO
goto marca;
echo "<h3>Instruccion 1 </h3>";
echo "<h3>Instruccion 2 </h3>";
echo "<h3>Instruccion 3 </h3>";
echo "<h3>Instruccion 4 </h3>";


marca:
echo "<h1>Me he saltado 4 ecos</h1>";


?>

