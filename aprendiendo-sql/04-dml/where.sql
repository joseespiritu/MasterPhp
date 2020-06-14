# CONSULTA CON UNA CONDICION
SELECT * FROM usuarios WHERE email  ='admin@mail.com';

/*
OPERADORES DE COMPARACION
Igual                   =
Distinto             !=
Menor que           <
Mayor que           >
Menor o igual       <=
Mayor o igual       >=
Entre                   between A and B
En                       IN
Es nulo                is null
No nulo               is not null
Como                  like
No es como          not like

OPERADORES LOGICOS:
O                   OR
Y                   AND
NO                NOT

COMODINES:
Cualquier cantidad de caracteres: %
Un caracter desconocido: _
*/

#EJEMPLOS#
# 1. Mostrar nombre y apellidos de todos los usuarios regstrados en 2019
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) = 2019;

# 1. Mostrar nombre y apellidos de todos los usuarios  QUE NO regstrados en 2019
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) != 2019 OR ISNULL(fecha);

# 3. Mostrar el email de los usuarios cuyo apellido contenga la letra A
#     y que su conraseña sea 1234
SELECT email FROM usuarios WHERE apellidos LIKE '%a%';
SELECT email FROM usuarios WHERE apellidos LIKE '%a%' AND password = 1234;


# 4. Sacar todos los registros de la tabla usuarios cuyo año sea par
SELECT * FROM usuarios WHERE (YEAR(fecha)%2 = 0); 
SELECT * FROM usuarios WHERE (YEAR(fecha)%2 != 0); # IMPARES

# 5. Sacar todos los registros de la tabla usuarios cuyo nombre tenga
#     masde 5 letras y se hayan registrado antes de 2020, y mostrar el nombre en mayus
SELECT UPPER(nombre) AS 'Nombre', apellidos FROM usuarios WHERE (LENGTH(nombre) > 5) AND YEAR(fecha) < 2020;

# ORDENANDO CAMPOS
SELECT * FROM usuarios ORDER BY id;
SELECT * FROM usuarios ORDER BY id ASC;
SELECT * FROM usuarios ORDER BY id DESC;
SELECT * FROM usuarios ORDER BY fecha ASC;


# LIMIT 
SELECT * FROM usuarios LIMIT 3;
SELECT * FROM usuarios LIMIT 0,2;
SELECT * FROM usuarios LIMIT 0,4;