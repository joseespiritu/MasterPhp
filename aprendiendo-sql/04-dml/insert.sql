# INSERTAR NUEVOS RFEGISTROS #
INSERT INTO usuarios VALUES(null, 'Victor','Robles','victor@mail.com','1234','2019-05-01');
INSERT INTO usuarios VALUES(null, 'Antonio','Martinez','antonio@mail.com','1234','2019-05-01');
INSERT INTO usuarios VALUES(null, 'Paco','Lopez','paco@mail.com','1234','2020-05-01');

# INSERTAR FILAS SOLO CON CIERTAS COLUMNAS #
INSERT INTO usuarios(email,password) VALUES ('admin@mail.com','admin');
