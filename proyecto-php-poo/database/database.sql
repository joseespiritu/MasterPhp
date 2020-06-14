DROP DATABASE IF EXISTS tienda_master;
CREATE DATABASE tienda_master;
USE tienda_master;

DROP TABLE IF EXISTS usuarios;
CREATE TABLE usuarios(
id int(255) auto_increment NOT NULL,
nombre varchar(100) NOT NULL,
apellidos varchar(255),
email varchar(255) NOT NULL,
password varchar(255) NOT NULL,
rol varchar(20),
imagen varchar(255),
CONSTRAINT pk_usuarios PRIMARY KEY(id),
CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDb DEFAULT CHARSET=utf8;

INSERT INTO usuarios VALUES
(NULL, 'Admin', 'Admin', 'admin@admin.com', 'contraseña', 'admin', null),
(NULL, 'juan', 'juan', 'juan@juan.com', 'juan', 'admin', null),
(NULL, 'hola', 'hola', 'hola@hola.com', 'hola', 'user', null);

DROP TABLE IF EXISTS categorias;
CREATE TABLE categorias(
id int(255) auto_increment NOT NULL,
nombre varchar(100) NOT NULL,
CONSTRAINT pk_categorias PRIMARY KEY(id)
)ENGINE=InnoDb DEFAULT CHARSET=utf8;

INSERT INTO categorias VALUES
(NULL, 'Manga corta'),
(NULL, 'Tirantes'),
(NULL, 'Manga larga'),
(Null, 'Sudaderas'),
(null, 'Gorras'),
(null, 'Chaquetas');

DROP TABLE IF EXISTS productos;
CREATE TABLE productos(
id              int(255) auto_increment not null,
categoria_id    int(255) not null,
nombre          varchar(100) not null,
descripcion     text,
precio          float(100,2) not null,
stock           int(255) not null,
oferta          varchar(2),
fecha           date not null,
imagen          varchar(255),
CONSTRAINT pk_categorias PRIMARY KEY(id),
CONSTRAINT fk_producto_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id)
)ENGINE=InnoDb DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS pedidos;
CREATE TABLE pedidos(
id int(255) auto_increment NOT NULL,
usuario_id int(255) NOT NULL,
provincia varchar(255) NOT NULL,
localidad varchar(100) NOT NULL,
direccion varchar(255) NOT NULL,
coste float(200,2) NOT NULL,
estado varchar(20) NOT NULL,
fecha date,
hora time,
CONSTRAINT pk_pedidos PRIMARY KEY(id),
CONSTRAINT fk_pedidos_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id)
)ENGINE=InnoDb DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS lineas_pedidos;
CREATE TABLE lineas_pedidos(
id int(255) auto_increment NOT NULL,
pedido_id int(255) NOT NULL,
producto_id int(255) NOT NULL,
unidades int(255) NOT NULL,
CONSTRAINT pk_lineas_pedidos PRIMARY KEY(id),
CONSTRAINT fk_linea_pedido FOREIGN KEY(pedido_id) REFERENCES pedidos(id),
CONSTRAINT fk_linea_producto FOREIGN key(producto_id) REFERENCES productos(id)
)ENGINE=InnoDb DEFAULT CHARSET=utf8;