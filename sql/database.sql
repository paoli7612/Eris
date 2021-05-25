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
  `idProfessore` int(15) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`idProfessore`)
    REFERENCES `professori` (`id`)
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
