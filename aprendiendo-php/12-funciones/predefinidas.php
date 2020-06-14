<?php
//DEBUGEAR
$nombre="Jose";
var_dump($nombre);

// Fechas
echo date('d-m-y');
echo "<br/>";
echo time(); //FECHA EN FORMATO UNIX

// Matematicas
echo "<br/>";
echo "Raiz cuadrada de 10: ".  sqrt(10);

echo "<br/>";
echo "Numero aleatorio entre 10 y 40: ".  rand(10, 40);

echo "<br/>";
echo "Numero pi: ".  pi();

echo "<br/>";
echo "Redondear: ".  round(7.891234,2);

//Mas funciones generales
//DETECTAR TIPADO
echo "<br/>";
echo gettype($nombre);

echo "<br/>";
if (is_string($nombre)){
    echo "Esa variable es un string";
}

echo "<br/>";
if (is_float($nombre)){
    echo "La variable no es un numero conm decimales";
}

//COMPROBAR SI EXISTE UNA VARIABLE
echo "<br/>";
if (isset($edad)){
    echo "La variable existe";
} else {
    echo "La variable no existe";
}

//Limpiar espacios delante y atras
echo "<br/>"; 
$frase = "  mi contenido    ";
var_dump(trim($frase));

//Elimar variables / indices
$year = 2020;
unset($year);

//  Comprobar variable vacia
$texto = "";
if(empty(trim($texto))){
    echo "La variable texto esta vacia";
} else {
    echo "La variable tiene contenido";
}

// Contar caracteres de una cadena
echo "<br/>";
$cadena = "12345";
echo strlen($cadena);

//Encontrar caracter
echo "<br/>";
$frase ="La vida es bella";
echo strpos($frase, "vida");
echo "<br/>";

//reemplazar palabras de un string
$frase = str_replace("vida", "moto", $frase);
echo $frase;
echo "<br/>";

//Mayusculas y minusculas
echo strtolower($frase);
echo "<br/>";
echo strtoupper($frase);

?>

