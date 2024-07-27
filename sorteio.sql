CREATE DATABASE sorteio;

USE sorteio;

CREATE TABLE participantes (
	id	integer primary key auto_increment,
	nome_completo	varchar(100),
    telefone varchar(20)
);