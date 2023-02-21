/* Tem que ter comportamento similar ao AVA */
CREATE DATABASE aula08062022Renan;
USE aula08062022Renan;
CREATE TABLE usuarios(
	idLogin INT NOT NULL AUTO_INCREMENT,
    loginEmail VARCHAR(50) NOT NULL,
    nomeUsuario VARCHAR(50) NOT NULL,
    loginSenha VARCHAR(50) NOT NULL,
    PRIMARY KEY(idLogin)
);
INSERT INTO usuarios(loginEmail,nomeUsuario,loginSenha) VALUES ("geraldo@hotmail.com","Geraldo","123456");
select * from usuarios;
