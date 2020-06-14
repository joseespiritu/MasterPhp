
# RENOMBRAR UNA TABLA

ALTER TABLE usuarios RENAME TO usuarios_renom;

# CAMBIAR EL NOMBRE DE UNA COLUMNA

ALTER TABLE usuarios_renom CHANGE apellidos apellido varchar(100) null;

# MODIFICAR COLUMNA SIN CAMBIAR NOMBRE

ALTER TABLE usuarios_renom MODIFY apellido char(40) not null;

# AÑADIR COLUMNA

ALTER TABLE usuarios_renom ADD website varchar(100) NULL;

# AÑADIR RESTRICCION A COLUMNA

ALTER TABLE usuarios_renom ADD CONSTRAINT uq_emai UNIQUE(email);

# BORRAR UNA COLUMNA

ALTER TABLE usuarios_renom DROP website;
