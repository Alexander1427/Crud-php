USE base_php;
CREATE TABLE users(
    id INT(11) NOT NULL AUTO_INCREMENT,
    username VARCHAR(16) NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    correo VARCHAR(10) NOT NULL,
    password VARCHAR(60) NOT NULL,
    fullname VARCHAR(100) NOT NULL,
    registro DATETIME,
     PRIMARY KEY (id)
);

DROP TABLE users;
SELECT * FROM users;

ALTER TABLE users
    ADD PRIMARY KEY (id);

    ALTER TABLE users
    ADD registro DATETIME;

ALTER TABLE users
CHANGE COLUMN `correo` `email` VARCHAR(150);

CREATE TABLE productos(
    id INT(11) NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    descripcion VARCHAR(50) NULL,
    precio DOUBLE(10,4) NOT NULL,
    cantidad INT(100) NOT NULL
 
);

ALTER TABLE productos
    ADD PRIMARY KEY (id);
    ALTER TABLE productos
    ADD registro DATETIME;
