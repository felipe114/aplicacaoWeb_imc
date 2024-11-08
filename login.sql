CREATE DATABASE login;

CREATE TABLE `login`.`usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome_completo` VARCHAR(250) NOT NULL,
  `email` VARCHAR(110) NOT NULL,
  `senha` VARCHAR(15) NOT NULL,
  `celular` VARCHAR(14) NOT NULL,
  `data_nasc` DATE NOT NULL,
  PRIMARY KEY (`id`));
  

select * from usuarios;
