/*
Mostrar los clientes que mas encargos han hecho y mostrar cuantos hicieron
*/

SELECT c.nombre, COUNT(e.id) FROM encargos e
inner join clientes c ON c.id= e.cliente_id
GROUP BY cliente_id ORDER BY 2 DESC LIMIT 2;
