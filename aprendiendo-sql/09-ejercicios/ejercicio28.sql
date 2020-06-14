/*
Mostrar todos los vendedores tengan o no clientes
y el numero de clientes
*/

SELECT v.nombre, v.apellidos, COUNT(c.id) FROM vendedores v
LEFT JOIN clientes c ON c.vendedor_id=v.id
GROUP BY v.id;
