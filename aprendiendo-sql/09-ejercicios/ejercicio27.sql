/*
Viusalizar los nombres de los clientes y la cantidad de encargos
realizados incluyendo los que no hayan realizado encargos
*/

INSERT INTO clientes VALUES(NULL,4,'Tienda Organica INC', 'Murcia', 0, CURDATE());

SELECT c.nombre, count(e.id) FROM clientes c
LEFT JOIN encargos e ON c.id=e.cliente_id 
GROUP BY 1;
