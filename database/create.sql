DROP DATABASE IF EXISTS erris;
CREATE DATABASE erris;

USE erris;

CREATE TABLE `professori` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) NOT NULL,
  `cognome` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
) ENGINE=InnoDB;

CREATE TABLE `materie` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `titolo` varchar(20) NOT NULL,
  `anno` int(4) NOT NULL,
  `idProfessore` int(15) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`idProfessore`)
    REFERENCES `professori` (`id`)
    ON DELETE CASCADE,
) ENGINE=InnoDB;


INSERT INTO `professori` (`id`,`nome`,`cognome`) VALUES
    (1,'Michela', 'Eleuteri'),
    (2,'Arrigo', 'Bonisoli'),
    (3,'Lingua e letteratura italiana');
