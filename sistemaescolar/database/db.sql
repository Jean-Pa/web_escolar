CREATE TABLE usuarios(
    id_usuario INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombres VARCHAR(255) NOT NULL,
    cargo VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE KEY,
    password TEXT NOT NULL,
    fyh_creacion DATETIME NULL,
    fyh_actualizacion DATETIME NULL,
    estado VARCHAR(11)
)ENGINE=InnoDB;

insert into usuarios (nombres,cargo,email,password,fyh_creacion,estado) 
VALUES ('Jean Palacios','Administrador','admin@admin.com','12345678','2024-07-24 03:49:10','1')
