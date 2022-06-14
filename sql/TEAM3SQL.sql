SET SESSION sql_require_primary_key = 0;

DROP DATABASE IF EXISTS LDAW;

CREATE DATABASE LDAW;

use LDAW;

CREATE TABLE usuarios (
    id_usuario int NOT NULL,
    id_rol int,
    typeUser varchar(255) NOT NULL DEFAULT "general",
    nombre varchar(255) NOT NULL,
    celular varchar(255) NOT NULL,
    email varchar(255),
    `password` varchar(255),
    fecha_creado TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    fecha_actualizado TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE asistentes (
    id_asistente int NOT NULL,
    nombre varchar(255) NOT NULL,
    edad varchar(255) NOT NULL,
    celular varchar(255) NOT NULL,
    institucion varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    estado_residencia varchar(255) NOT NULL,
    fecha_creado TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    fecha_actualizado TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE roles (
    id_rol int NOT NULL,
    nombre varchar(255) NOT NULL,
    esta_activo boolean NOT NULL,
    fecha_creado TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    fecha_actualizado TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE permisos (
    id_permiso int NOT NULL,
    nombre varchar(255) NOT NULL,
    esta_activo boolean NOT NULL,
    fecha_creado TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    fecha_actualizado TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE eventos (
    id_evento int NOT NULL,
    id_metodo int NOT NULL,
    id_categoria int NOT NULL,
    nombre varchar(255) NOT NULL,
    siglas varchar(255) NOT NULL,
    descripcion varchar(1200) NOT NULL,
    duracion varchar(255) NOT NULL,
    fecha date NOT NULL,
    cupo varchar(255) NOT NULL,
    costo varchar(255) NOT NULL,
    lugar varchar(255) NOT NULL,
    activo boolean NOT NULL DEFAULT 1,
    fecha_creado TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    fecha_actualizado TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE categorias (
    id_categoria int NOT NULL,
    nombre varchar(255) NOT NULL,
    fecha_creado TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    fecha_actualizado TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE metodos_pago (
    id_metodo int NOT NULL,
    nombre varchar(255) NOT NULL,
    fecha_creado TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    fecha_actualizado TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE roles_permisos (
    id_rol int NOT NULL,
    id_permiso int NOT NULL,
    esta_activo boolean NOT NULL,
    fecha_creado TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    fecha_actualizado TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE roles_usuarios(
    id_usuario int NOT NULL,
    id_rol int NOT NULL,
    esta_activo boolean NOT NULL,
    fecha_creado TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    fecha_actualizado TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE eventos_asistentes (
    id int NOT NULL,
    id_asistente int NOT NULL,
    id_evento int NOT NULL,
    boleto_acceso varchar(255) NOT NULL,
    fecha_creado TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    fecha_actualizado TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE eventos_usuarios (
    id int NOT NULL,
    id_usuario int NOT NULL,
    id_evento int NOT NULL,
    fecha_creado TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    fecha_actualizado TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

/*AQUELLAS TABLAS SIN LLAVES FORANEAS*/

ALTER TABLE
    roles
ADD
    CONSTRAINT pk_roles PRIMARY KEY (id_rol),
    CHANGE id_rol id_rol int NOT NULL AUTO_INCREMENT;

ALTER TABLE
    permisos
ADD
    CONSTRAINT pk_permisos PRIMARY KEY (id_permiso),
    CHANGE id_permiso id_permiso int NOT NULL AUTO_INCREMENT;

ALTER TABLE
    categorias
ADD
    CONSTRAINT pk_categorias PRIMARY KEY (id_categoria),
    CHANGE id_categoria id_categoria int NOT NULL AUTO_INCREMENT;

ALTER TABLE
    metodos_pago
ADD
    CONSTRAINT pk_metodos PRIMARY KEY (id_metodo),
    CHANGE id_metodo id_metodo int NOT NULL AUTO_INCREMENT;

ALTER TABLE
    eventos
ADD
    CONSTRAINT pk_eventos PRIMARY KEY (id_evento),
    CHANGE id_evento id_evento int NOT NULL AUTO_INCREMENT;

    ALTER TABLE
    asistentes
ADD
    CONSTRAINT pk_asistente PRIMARY KEY (id_asistente),
    CHANGE id_asistente id_asistente int NOT NULL AUTO_INCREMENT;

ALTER TABLE
    usuarios
ADD
    CONSTRAINT pk_usuarios PRIMARY KEY (id_usuario),
    CHANGE id_usuario id_usuario int NOT NULL AUTO_INCREMENT;

/*TABLAS CON LLAVES PRIMARIAS COMPUESTAS */

ALTER TABLE
    roles_permisos
ADD
    CONSTRAINT pk_roles_permisos PRIMARY KEY (id_permiso, id_rol),
ADD
    CONSTRAINT fk_permisos FOREIGN KEY (id_permiso) REFERENCES permisos(id_permiso),
ADD
    CONSTRAINT fk_roles_permisos FOREIGN KEY (id_rol) REFERENCES roles(id_rol);

ALTER TABLE
    eventos_usuarios
ADD
    CONSTRAINT pk_eu PRIMARY KEY (id, id_usuario, id_evento),
    CHANGE id id int NOT NULL AUTO_INCREMENT,
ADD
    CONSTRAINT fk_events FOREIGN KEY (id_evento) REFERENCES eventos(id_evento),
ADD
    CONSTRAINT fk_users FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario);

ALTER TABLE
    eventos_asistentes
ADD
    CONSTRAINT pk_ea PRIMARY KEY (id, id_asistente, id_evento),
    CHANGE id id int NOT NULL AUTO_INCREMENT,
ADD
    CONSTRAINT fk_eventoss FOREIGN KEY (id_evento) REFERENCES eventos(id_evento),
ADD
    CONSTRAINT fk_uasistentes FOREIGN KEY (id_asistente) REFERENCES asistentes(id_asistente);

/* AUTOINCREMENTS*/

ALTER TABLE
    eventos_usuarios
MODIFY
    COLUMN id INT AUTO_INCREMENT;

ALTER TABLE
    eventos_asistentes
MODIFY
    COLUMN id INT AUTO_INCREMENT;