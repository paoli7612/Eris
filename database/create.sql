DROP DATABASE IF EXISTS eris;
CREATE DATABASE eris;

USE eris;

CREATE TABLE `professori` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) NOT NULL,
  `cognome` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE `corsi` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `titolo` varchar(32) NOT NULL,
  `anno` int(4) NOT NULL,
  `idProfessore` int(15) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`idProfessore`)
    REFERENCES `professori` (`id`)
) ENGINE=InnoDB;


INSERT INTO `professori` (`id`,`nome`,`cognome`) VALUES
    (1,'Michela', 'Eleuteri'),
    (2,'Arrigo', 'Bonisoli'),
    (3,'Paolo', 'Valente');

INSERT INTO `corsi` (`titolo`,`anno`,`idProfessore`) VALUES
    ('Analisi matematica 1', 1, 1),
    ('Algebra lineare', 1, 2),
    ('Programmazione 1', 1, 3);
