/*
int (n°caracteres)          ENTERO 255
integer (n°caracteres)   ENTERO 255
varchar(n° caracteres)  STRING /ALFANUMERICO 255
char(n° caracteres)       ALFANUMERICO 255
float(cifras,n° decmales)DECIMALES/COMA FLOTANTE 255
date(), time, timestamp

//STRINGS MAS GRANDES
MEDIUMTEXT 16 millones caracteres
LONGTEXT 16 billones caracteres
TEXT 65000 caracteres       

//ENTEROS MAS GRANDES
MEDIUMINT()
BIGINT()            
*/


/*
CREAR TABLA 
*/

CREATE TABLE usuarios(
id                      int(11) auto_increment not null,
nombre             varchar(100) not null,
apellidos           varchar(255) default 'Hola que tal?',
email                 varchar(100) not null,
password          varchar(255),
CONSTRAINT pk_usuarios PRIMARY KEY(id)
);