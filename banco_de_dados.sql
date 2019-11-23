
/*CREATE DATABASE alan;*/

use id11652384_alan;

CREATE TABLE empresa
(
  cnpj VARCHAR(14) NOT NULL,
  razao_social VARCHAR(50) NOT NULL UNIQUE,
  endereco VARCHAR(50) NOT NULL,
  telefone VARCHAR(11) NOT NULL,
  PRIMARY KEY(cnpj)
);
  
INSERT INTO empresa(cnpj,razao_social,endereco,telefone) VALUES('xxxxxxxxxxxxx0', 'Zé da Budega','Av. são joão', '88999999999' );
INSERT INTO empresa(cnpj,razao_social,endereco,telefone) VALUES('xxxxxxxxxxxxx1', 'João da Budega','Av. são joão', '88999999999' );
INSERT INTO empresa(cnpj,razao_social,endereco,telefone) VALUES('xxxxxxxxxxxxx2', 'Maria da Budega','Av. são joão', '88999999999' );

