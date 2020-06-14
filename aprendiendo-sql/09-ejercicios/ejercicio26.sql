/*
Sacar vendedores que tienen jefe y sacar el nombre del jefe
*/

SELECT v1.nombre AS 'Vendedor', e2.nombre AS 'Jefe' FROM vendedores v1
INNER JOIN vendedores e2 ON v1.jefe=e2.id;
