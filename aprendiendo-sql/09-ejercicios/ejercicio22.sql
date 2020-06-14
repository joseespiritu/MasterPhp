/*
Mostrar listado de clientes (numero de cliente, nombre)
Mostrar tambien el numero de vendedor y su nombre
*/

SELECT c.id, c.nombre, v.id, CONCAT(v.nombre, ' ', v.apellidos)
FROM clientes c, vendedores v
WHERE c.vendedor_id = v.id;
