CREATE TABLE usuarios(
id int(255) auto_increment NOT NULL,
nombre varchar(100) NOT NULL,
apellidos varchar(100) NOT NULL,
email varchar(255) NOT NULL,
password varchar(255) NOT NULL,
fecha date NOT NULL,
CONSTRAINT pk_usuarios PRIMARY KEY(id),
CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDb;

CREATE TABLE categorias(
id int(255) auto_increment NOT NULL,
nombre varchar(100),
CONSTRAINT pk_categorias PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE entradas(
id int(255) auto_increment NOT NULL,
usuario_id int(255) not null,
categoria_id int(255) NOT NULL,
titulo varchar(255) NOT NULL,
descripcion mediumtext,
fecha date NOT NULL,
CONSTRAINT pk_entradas PRIMARY KEY(id),
CONSTRAINT fk_entrada_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id),
CONSTRAINT fk_entrada_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id)
)ENGINE=InnoDb;

# CASCADE
ON DELETE CASCADE
ON UPDATE CASCADE
ON DELETE SET NULL
ON DELETE SET DEFAULT
ON DELETE NO ACTION