
/*
Visualizar el nombre y los apellidos de los vendedores
en una misma columna y su fecha de registro y el dia de
la semana en la que se regstraron
*/

SELECT CONCAT(nombre, ' ', apellidos) as 'Nombre' ,
fecha, DAYNAME(fecha) FROM vendedores;
