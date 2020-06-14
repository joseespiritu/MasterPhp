/*
Sacar la media de sueldos entre todos los vendedores por grupo
*/

SELECT AVG(v.sueldo) as 'Promedio Salarial', g.nombre
FROM vendedores v
INNER JOIN grupos g
ON g.id = v.grupo_id
GROUP BY grupo_id;