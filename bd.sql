CREATE DATABASE crud character set utf8 collate utf8_general_ci;
USE crud;
CREATE TABLE usuarios(
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR (100) NOT NULL,
    email VARCHAR (100) NOT NULL,
    senha VARCHAR (32) NOT NULL -- NINGUÉM FAZ ISSO OK? NÃO USE MD5 TB OK?
)