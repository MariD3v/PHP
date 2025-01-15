DROP DATABASE IF EXISTS gestor;
CREATE DATABASE IF NOT EXISTS gestor CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;
USE gestor;


create table usuario(
	codigo_usuario int auto_increment,
    nombre varchar(100) not null,
    contraseña varchar(255) not null,
    email varchar(100) unique not null,
    primary key (codigo_usuario)
);

create table tarea(
    codigo_tarea int auto_increment,
    titulo varchar(100) not null,
    descripcion text not null,
    fecha_creacion datetime not null,
    fecha_vencimiento datetime not null,
    completada boolean not null,
    codigo_usuario int not null,
    primary key(codigo_tarea),
    foreign key (codigo_usuario) references usuario(codigo_usuario) ON UPDATE CASCADE ON DELETE CASCADE
);

INSERT INTO usuario VALUES (1, 'Mari','asdasd','mari@gmail.com');
INSERT INTO usuario VALUES (2, 'Miki','asdasd','miki@gmail.com');

INSERT INTO tarea VALUES (1,'Hacer la compra', 'Ir al super a comprar', '2020-11-02 21:54:23','2021-11-02 21:54:23', 0,1);
INSERT INTO tarea VALUES (2,'Sacar al perro', 'Dar un paseo por el parque con el perro', '2020-11-02 21:24:13', '2021-11-02 21:54:23', 1,2);
