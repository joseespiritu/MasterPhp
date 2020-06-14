/*
Visualizar todos los coches en cuya marca exista la letra "A" y cuyo modelo
que empiecen por "F" 
*/

SELECT * FROM coches WHERE marca LIKE '%a%' AND modelo LIKE 'F%';
