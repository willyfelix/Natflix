CREATE DATABASE natflix;

USE natflix;

CREATE TABLE usuarios (
	id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    senha VARCHAR(60) NOT NULL,
    email VARCHAR(60) NOT NULL
);

CREATE TABLE filmes (
	id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(255) NOT NULL,
    diretor VARCHAR(255) NOT NULL,
    genero VARCHAR(60) NOT NULL,
    anoDeLancamento VARCHAR(60) NOT NULL,
    usuario_id int(11) NOT NULL,
    CONSTRAINT filmes_usuarios_fk FOREIGN KEY (usuario_id) REFERENCES usuarios (id)
);
