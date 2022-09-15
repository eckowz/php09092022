/*
dbName "server"
*/

CREATE TABLE `server`.`usuario` (`ID_USER` INT(4) NOT NULL AUTO_INCREMENT , `NOME` VARCHAR(50) NOT NULL , `SENHA` VARCHAR(50) NOT NULL , PRIMARY KEY (`ID_USER`)) ENGINE = InnoDB;
INSERT INTO `usuario`(`ID_USER`, `NOME`, `SENHA`) VALUES ('[value-1]','nome1','senha1');
