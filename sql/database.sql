-- sudo mysql -upaoli7612 -p7612 < database.sql 

DROP DATABASE IF EXISTS eris;
CREATE DATABASE eris;

USE eris;
CREATE TABLE `professori` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `cognome` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE `semestri` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `parte` int(1) NOT NULL,
  `anno` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE `corsi` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `titolo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE `argomenti` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `path` varchar(100) NOT NULL,
  `idCorso` int(15) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`idCorso`)
    REFERENCES `corsi` (`id`)
) ENGINE=InnoDB;

CREATE TABLE `insegna` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `idProfessore` int(15) NOT NULL,
  `idCorso` int(15) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`idCorso`)
    REFERENCES `corsi` (`id`),
  FOREIGN KEY (`idProfessore`)
    REFERENCES `professori` (`id`)
) ENGINE=InnoDB;

INSERT INTO professori (`id`, `nome`, `cognome`) VALUES
  (1, 'Mufasa', 'Terri'),
  (2, 'Antonio', 'Boncelli'),
  (3, 'Vallico', 'Potente');
  (4, 'Romano', 'Cavilli');

INSERT INTO insegna(`idProfessore`, `idCorso`) VALUES
  (1, 1),
  (2, 2),
  (3, 3),
  (4, 3);

INSERT INTO corsi (`id`, `titolo`) VALUES
  (1, 'Analisi matematica 1'),
  (2, 'Algebra lineare'),
  (3, 'Programmazione 1'),
  (4, 'Algoritmi e strutture dati'),
  (5, 'Architettura degli elaboratori'),
  (6, 'Programmazione 2');

INSERT INTO semestri (`id`, `parte`, `anno`) VALUES
  (1, 1, 1),
  (2, 2, 1),
  (3, 1, 2),
  (4, 2, 2),
  (5, 1, 3),
  (6, 2, 3);