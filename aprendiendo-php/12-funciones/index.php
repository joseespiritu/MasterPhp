<?php

/* 
 * FUNCIONES:
 * ES UN CONJUNTO DE INSTRUCCIONES AGRUPADAS BAJO UN NOMBRE
 * CONCRETO Y QUE PUEDEN REUTILIZARSE SOLAMENTE INVOCANDO A
 * LA FUNCION TANTAS VECES COMO QUERAMOS
 */

//EJEMPLO 1:
function muestraNombres(){
   echo "Vicor <br/>";
   echo "Antonio <br/>";
   echo "Miguel <br/>";
   echo "Jose <br/>";
}

//invocar funciones
muestraNombres();
echo "</br>";

//Ejemplo 2
function tabla($numero){
    echo "<h3>Tabla de multiplicar del numero: $numero</h3>";
    for($i=1;$i<=10;$i++){
        $operacion = $numero*$i;
        echo "$numero x $i = $operacion <br/>";
    }
}

if(isset($_GET['numero'])){
    tabla($_GET['numero']);
}else {
    echo "No hay numero para sacar la tabla";
}

/*for($i=0;$i<=10;$i++){
    tabla($i);
}*/

echo "<hr/>";

//EJEMPLO 3
function calculadora($numero1,$numero2,$negrita = false){
    //Conjunto de instrucciones:
    $suma=$numero1+$numero2;
    $resta=$numero1-$numero2;
    $multiplicacion=$numero1*$numero2;
    $division=$numero1/$numero2;
    
    $cadena_texto = "";
    
    if($negrita){
        $cadena_texto.= "<h2>";
    }
    
    $cadena_texto .= "Suma: $suma <br/>";
    $cadena_texto .= "Resta: $resta <br/>";
    $cadena_texto .= "Multiplicacion: $multiplicacion <br/>";
    $cadena_texto .= "Division: $division <br/>";
    
    if($negrita){
        $cadena_texto .= "</h2>";
    }
    
    echo "<hr/>";
    
    return $cadena_texto;
 }
 
echo calculadora(10,30);
calculadora(3,30,true);


//EJEMPLO 4
function getNombre($nombre){
    $texto = "El nombre es: $nombre";
    return $texto;
}

function getApellidos($apellidos){
    $texto = "Los apellidos son: $apellidos";
    return $texto;
}

function devuelveNombre($nombre,$apellidos){
    $texto = getNombre($nombre)
            . "<br/>"
            . getApellidos($apellidos);
    return $texto;
}

echo devuelveNombre("Jose Luis","Espiritu");
//echo getApellidos("Espiritu");


?>

