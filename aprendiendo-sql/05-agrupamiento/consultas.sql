# CONSULTAS DE AGRUPAMIENTO #
SELECT COUNT(titulo) as 'numero de entradas', categoria_id FROM entradas GROUP BY categoria_id;

# CONSULTAS DE AGRUPAMIENTO CON CONDICIONES #
SELECT COUNT(titulo) as 'numero de entradas',
categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(titulo) >=3;

/*
AVG sacar promedio
COUNT contar el numero de elementos
MAX valor maximo del grupo
MIN valor minimo del grupo
SUM sumar todo el contenido del grupo
*/

SELECT AVG(id) As 'Promedio' FROM entradas;
SELECT MAX(id) AS 'MAXIMO ID', titulo FROM entradas;
SELECT MIN(id) AS 'MINIMO ID', titulo FROM entradas;
SELECT SUM(id) AS 'SUMA ID', titulo FROM entradas;


