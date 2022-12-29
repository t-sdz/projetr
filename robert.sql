-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour robert
CREATE DATABASE IF NOT EXISTS `robert` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `robert`;

-- Listage de la structure de table robert. comptes
CREATE TABLE IF NOT EXISTS `comptes` (
  `id_compte` int unsigned NOT NULL AUTO_INCREMENT,
  `motDePasse` varchar(255) NOT NULL,
  `telephone` int DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `NUMEN` varchar(13) DEFAULT NULL,
  PRIMARY KEY (`id_compte`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Listage des données de la table robert.comptes : ~1 rows (environ)
INSERT INTO `comptes` (`id_compte`, `motDePasse`, `telephone`, `mail`, `nom`, `prenom`, `NUMEN`) VALUES
	(12, '81dc9bdb52d04dc20036dbd8313ed055', 770975676, 'tesssandoz05@gmail.com', 'SANDOZ', 'tess', '12345');

-- Listage de la structure de table robert. eleves
CREATE TABLE IF NOT EXISTS `eleves` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `NOM` varchar(100) DEFAULT NULL,
  `PRENOM` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Listage des données de la table robert.eleves : ~8 rows (environ)
INSERT INTO `eleves` (`ID`, `NOM`, `PRENOM`) VALUES
	(1, 'Abbas', 'Franck'),
	(2, 'Barriaud', 'Barriaud'),
	(3, 'Bendjebbour', 'Ines'),
	(4, 'Bangoura', 'Fode'),
	(5, 'Lopes', 'Loretta'),
	(6, 'Dupond', 'Dupond'),
	(7, 'Robert', 'Tim'),
	(8, 'robert', 'Tim');

-- Listage de la structure de table robert. notes
CREATE TABLE IF NOT EXISTS `notes` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `NOTE` float DEFAULT NULL,
  `COEFF` float DEFAULT NULL,
  `MATIERE` varchar(30) DEFAULT NULL,
  `APPRECIATION` longtext,
  `DATE_EVAL` date DEFAULT NULL,
  `id_eleve` int NOT NULL,
  `nom` varchar(50) NOT NULL DEFAULT '',
  `prenom` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Listage des données de la table robert.notes : ~9 rows (environ)
INSERT INTO `notes` (`ID`, `NOTE`, `COEFF`, `MATIERE`, `APPRECIATION`, `DATE_EVAL`, `id_eleve`, `nom`, `prenom`) VALUES
	(1, 12, 1, 'Maths', 'Ensemble un peu juste', '2022-09-14', 1, 'Abbas', 'Franck'),
	(2, 18, 2, 'Francais', 'Excellent !', '2022-10-12', 2, 'Barriaud', 'Mathilde'),
	(3, 16, 1, 'Histoire Géo', 'Très bien, continuez', '2022-10-23', 3, 'Bendjebbour', 'Ines'),
	(4, 14, 1, 'Maths', 'Assez satisfaisant', '2022-09-14', 4, 'Bangoura', 'Fode'),
	(5, 11, 2, 'Informatique ', 'Trop de hors sujet', '2022-10-12', 5, 'Lopes', 'Loretta'),
	(6, 14, 2, 'Histoire Géo', 'Bien, soignez l ortograpphe', '2022-10-23', 6, 'Dupond', 'Antoine'),
	(8, 20, 10, 'Sport', 'incroyable', '2022-12-14', 7, 'SANDOZ', 'tess'),
	(13, 0, 2, 'Francais', 'Affligeant', '2022-12-09', 7, 'SANDOZ', 'Tess');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
