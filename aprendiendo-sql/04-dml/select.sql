#MOSTRAR TODOS LOS REGISTROS DE UNA TABLA#
SELECT email,nombre,apellidos FROM usuarios;

#MOSTRAR TODOS LOS CAMPOS#
SELECT * FROM usuarios;

#OPERADORES ARTIMETICOS#
SELECT email, (7%7) as 'Operacion' FROM usuarios;
SELECT id,email, (7*7) as 'OPERACION' FROM usuarios ORDER BY id DESC;
SELECT id,email, (id+7) as 'Operacion' FROM usuarios;

#FUNCIONES MATEMATICAS#
SELECT abs(7) as 'Operacion' FROM usuarios;
SELECT CEIL(7.34) as 'Operacion' FROM usuarios;
SELECT FLOOR(7.34) as 'Operacion' FROM usuarios;
SELECT RAND() as 'Operacion' FROM usuarios;
SELECT PI() as 'Operacion' FROM usuarios;
SELECT ROUND(7.91) as 'Operacion' FROM usuarios;
SELECT SQRT(7.5) as 'Operacion' FROM usuarios;
SELECT TRUNCATE(7.91,0) as 'Operacion' FROM usuarios;
SELECT ROUND(id,2) as 'Operacion' FROM usuarios;

#FUNCIONES PARA FECHAS#
SELECT email,fecha FROM usuarios;
SELECT email,fecha,CURDATE() as 'Fecha Actual' FROM usuarios;
SELECT email,DATEDIFF(fecha,CURDATE()) as 'Fecha Actual' FROM usuarios;
SELECT email,DAYNAME(fecha) as 'Fecha Actual' FROM usuarios;
SELECT email,DAYOFMONTH(fecha) as 'Fecha Actual' FROM usuarios;
SELECT email,DAYOFWEEK(fecha) as 'Fecha Actual' FROM usuarios;
SELECT email,DAYOFYEAR(fecha) as 'Fecha Actual' FROM usuarios;
SELECT email,MONTH(fecha) as 'Fecha Actual' FROM usuarios;
SELECT email,YEAR(fecha) as 'Fecha Actual' FROM usuarios;
SELECT email,DAY(fecha) as 'Fecha Actual' FROM usuarios;
SELECT email,HOUR(fecha) as 'Fecha Actual' FROM usuarios;
SELECT email,CURTIME() as 'Fecha Actual' FROM usuarios;
SELECT email,SYSDATE() as 'Fecha Actual' FROM usuarios;
SELECT email,DATE_FORMAT(fecha,'%d-%m-%Y') FROM usuarios;

#FUNCIONES GENERALES#
SELECT email, ISNULL(apellidos) FROM usuarios;
SELECT email, STRCMP('Hola','Hola') FROM usuarios;
SELECT VERSION() FROM usuarios;
SELECT USER() FROM usuarios;
SELECT DISTINCT USER() FROM usuarios;
SELECT DISTINCT DATABASE() FROM usuarios;
SELECT IFNULL(apellidos,'ESTE CAMPO ESTA VACIO') FROM usuarios;


