<?php

/* 
 * ARRAY:
 * Un array es una coleccion o un conjunto de datos /variable
 * es una variable que contiene muchas variables
 * bajo un unico nombre y para acceder a esos valores podemos
 * usar un indice numero o alfanumerico
 */

$pelicula ="Batman";
$peliculas = array('Batman', 'Spiderman', 'El señor de los anillos');
$cantantes = ['2pack','drake','jenny'];

//ARRAY ASOCIATIVO
$personas = array(
    'nombre' => 'victor',
    'apellidos' => 'Espiritu',
    'web' => 'Jose.com'
);

var_dump($_GET);//TAMBIEN SE CONSIDERAN ARRAYS ASOCIATIVOS
echo $personas['apellidos'];

//Recorrer con for
echo "<h1>Listado de peliculas</h1>";
echo '<ul>';
for($i=0;$i < count($peliculas);$i++){
    echo "<li>".$peliculas[$i]."</li>";
}
echo '</ul>';

//Recorrer con foreach
echo "<h1>Listado de cantantes</h1>";
echo '<ul>';
foreach ($cantantes as $cantante) {
    echo "<li>".$cantante."</li>";
}
echo '<ul>';

//arrays multidimensionales
$contacto = array(
  array(
      'nombre' => 'Jose',
      'mail' => 'jose@mail.com'
  ),
  array(
      'nombre' => 'Luis',
      'mail' => 'luis@mail.com'
  ), 
  array(
      'nombre' => 'Salvador',
      'mail' => 'salvador@mail.com'
  ), 
);

foreach ($contacto as $key => $cont) {
    var_dump($cont['nombre']);
}



        

?>

