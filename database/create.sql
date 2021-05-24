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
  `semestre` int(2) NOT NULL,
  `idProfessore` int(15),
  PRIMARY KEY (`id`),
  FOREIGN KEY (`idProfessore`)
    REFERENCES `professori` (`id`)
) ENGINE=InnoDB;

CREATE TABLE `argomenti` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `nome` varchar(32) NOT NULL,
  `idCorso` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`idCorso`)
    REFERENCES `corso` (`id`)
) ENGINE=InnoDB;

INSERT INTO `professori` (`id`,`nome`,`cognome`) VALUES
    (1,'Michela', 'Eleuteri'),
    (2,'Arrigo', 'Bonisoli'),
    (3,'Paolo', 'Valente');


INSERT INTO `corsi` (`id`, `titolo`,`anno`,`semestre`,`idProfessore`) VALUES
    (1, 'Analisi matematica 1', 1, 1, 1),
    (2, 'Algebra lineare', 1, 1, 2),
    (3, 'Programmazione 1', 1, 1, 3),

    (4, 'Algoritmi e strutture dati', 1, 2, NULL),
    (5, 'Architettura degli elaboratori', 1, 2, NULL),
    (6, 'Programmazione 2', 1, 2, NULL);
  

INSERT INTO `argomenti` (`nome`,`idCorso`) VALUES
    ('Ordinamenti', 4);