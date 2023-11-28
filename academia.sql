CREATE DATABASE ACADEMIA;

CREATE TABLE USUARIO(
    ID INT AUTO_INCREMENT PRIMARY KEY,
    NOME VARCHAR(225),
    PLANO ENUM('VERÃO', 'INICIAL', 'BASICO', 'AVANÇADO'),
    EMAIL VARCHAR (225),
    SENHA VARCHAR (225)
)DEFAULT CHARSET = UTF8;