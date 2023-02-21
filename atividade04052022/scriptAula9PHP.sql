CREATE DATABASE BancoAula9PHP;

CREATE TABLE Funcionario(
  idFuncionario INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(45) NOT NULL,
  cargo VARCHAR(45) NOT NULL,
  salarioBruto FLOAT NOT NULL,
  descontoINSS FLOAT NOT NULL,
  salarioLiquido FLOAT NOT NULL,
  PRIMARY KEY (idFuncionario));
  
SELECT * FROM funcionario;

DELETE FROM `bancoaula9php`.`funcionario` WHERE idFuncionario=5;
