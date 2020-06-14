/*
Visualizar ls apellidos, fecha de alta, y su numero de grupo
ordenado por fecha descendente y limitarlo los 4 ultimos
*/

SELECT apellidos, fecha, id FROM vendedores ORDER BY fecha DESC LIMIT 4;
