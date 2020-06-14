/*
CONSULTA MULTITABLA:
Son consultas que sirven pata consultar varias tablas en una sola sentencia
*/
# Mostrar las entradas con el nombre del autor y el nombre de la categoria #
SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria'
FROM entradas e, usuarios u, categorias c
WHERE e.usuario_id = u.id AND e.categoria_id = c.id;

# INNER JOIN #
SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria'
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id = u.id
INNER JOIN categorias c ON e.categoria_id = c.id;


# MOSTRAR EL NOMBRE DE LAS CATEGORIAS Y CUANTAS ENTRADAS TIENEN
SELECT c.nombre, COUNT(e.id) from categorias c,entradas e
WHERE e.categoria_id = c.id GROUP BY e.categoria_id; 

SELECT c.nombre, COUNT(e.id) from entradas e
RIGHT JOIN categorias c ON e.categoria_id = c.id
GROUP BY e.categoria_id;

SELECT c.nombre, COUNT(e.id) from categorias c
LEFT JOIN entradas e ON e.categoria_id = c.id
GROUP BY e.categoria_id;

# MOSTRAR EL EMAIL DE LOS USUARIOS Y CUANTAS ENTRADAS TIENEN
SELECT u.email,COUNT(titulo) FROM usuarios u, entradas e
WHERE e.usuario_id = u.id GROUP BY e.usuario_id;