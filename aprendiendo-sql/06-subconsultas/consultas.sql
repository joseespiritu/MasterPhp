/*
SUBCONSULTAS:
- Son consultas que se ejecutan dentro de otras.
- Consiste en utilizar los resultados de la subconsulta para operar en la consulta prinicipal.
- Jugando con las claves foraneas.
*/

# sacar usuarios con entradas #
SELECT * FROM usuarios;
INSERT INTO usuarios VALUES(null,'Admin','Admin','admin@admin.com','admin',CURDATE());
SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas);
SELECT * FROM usuarios WHERE id NOT IN (SELECT usuario_id FROM entradas);

# Sacar los usuarios que tengan alguna entrada que en su titulo hable de GTA #
INSERT INTO entradas VALUES(null, 3,1, 'Guia de GTA Vice City','GTA',CURDATE());
SELECT nombre, apellidos FROM usuarios WHERE id 
IN (SELECT usuario_id FROM entradas WHERE titulo LIKE '%GTA%');


# Sacar todas la entradas de la categoria accion  utilizando su nombre #
SELECT categoria_id, titulo FROM entradas WHERE categoria_id 
IN (SELECT id FROM categorias WHERE nombre = 'Deportes');

# Mostrar las categorias con mas de 3 entradas #
SELECT nombre FROM categorias WHERE
id IN (SELECT categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(categoria_id)>=3);

# Mostrar los usuarios que crearon una entrada un martes #
SELECT * FROM usuarios  WHERE id IN 
(SELECT usuario_id FROM entradas WHERE DAYOFWEEK(fecha)=3);

# Mostrar el nombre del usuario que tenga mas entradas #
SELECT CONCAT(nombre ,' ',apellidos) AS 'El usuario con mas entradas' FROM usuarios WHERE id =
(SELECT usuario_id FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC LIMIT 1);

# Mostrar las categorias sin entradas #
SELECT * FROM categorias WHERE id NOT IN
(SELECT categoria_id FROM entradas);

