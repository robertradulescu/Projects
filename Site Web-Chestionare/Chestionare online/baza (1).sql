-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 25, 2021 at 01:11 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baza`
--

-- --------------------------------------------------------

--
-- Table structure for table `intrebari`
--

DROP TABLE IF EXISTS `intrebari`;
CREATE TABLE IF NOT EXISTS `intrebari` (
  `id_intrebare` int NOT NULL AUTO_INCREMENT,
  `intrebare` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_intrebare`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `intrebari`
--

INSERT INTO `intrebari` (`id_intrebare`, `intrebare`) VALUES
(5, '2+2?');

-- --------------------------------------------------------

--
-- Table structure for table `intrebari1`
--

DROP TABLE IF EXISTS `intrebari1`;
CREATE TABLE IF NOT EXISTS `intrebari1` (
  `id_intrebare` int NOT NULL AUTO_INCREMENT,
  `intrebare` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_intrebare`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `intrebari1`
--

INSERT INTO `intrebari1` (`id_intrebare`, `intrebare`) VALUES
(1, 'Cand s-a terminat cel de al doilea razboi mondial ?'),
(2, 'Cat a durat razboiul de 100 de ani?'),
(3, 'In ce an a intrat Romania in U.E?'),
(4, 'In ce an a aderat Romania in N.A.T.O?'),
(5, 'In ce an a aderat Romania in spatiul Schengen?');

-- --------------------------------------------------------

--
-- Table structure for table `intrebari2`
--

DROP TABLE IF EXISTS `intrebari2`;
CREATE TABLE IF NOT EXISTS `intrebari2` (
  `id_intrebare` int NOT NULL AUTO_INCREMENT,
  `intrebare` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_intrebare`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `intrebari2`
--

INSERT INTO `intrebari2` (`id_intrebare`, `intrebare`) VALUES
(1, 'Care sunt cele 3 culori primare?'),
(2, 'Windows este un sistem de operare produs de... ?'),
(3, 'Care este valoarea numarului 224 in baza 2?'),
(4, 'Ce reprezinta prescurtarea \"HTML\"?'),
(5, 'Ce resprezinta prescurtarea \"CSS\"?');

-- --------------------------------------------------------

--
-- Table structure for table `raspuns`
--

DROP TABLE IF EXISTS `raspuns`;
CREATE TABLE IF NOT EXISTS `raspuns` (
  `id_rasp` int NOT NULL AUTO_INCREMENT,
  `rasp` text COLLATE utf8_bin NOT NULL,
  `id_intr` int NOT NULL,
  `corect` int NOT NULL,
  PRIMARY KEY (`id_rasp`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `raspuns`
--

INSERT INTO `raspuns` (`id_rasp`, `rasp`, `id_intr`, `corect`) VALUES
(1, '4', 1, 1),
(2, '2', 1, 0),
(3, '10', 1, 0),
(4, '3', 2, 0),
(5, '6', 2, 0),
(6, '10', 2, 1),
(7, '5', 3, 0),
(8, '15', 3, 0),
(9, '25', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `raspuns1`
--

DROP TABLE IF EXISTS `raspuns1`;
CREATE TABLE IF NOT EXISTS `raspuns1` (
  `id_rasp` int NOT NULL AUTO_INCREMENT,
  `rasp` text COLLATE utf8_bin NOT NULL,
  `id_intr` text COLLATE utf8_bin NOT NULL,
  `corect` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_rasp`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `raspuns1`
--

INSERT INTO `raspuns1` (`id_rasp`, `rasp`, `id_intr`, `corect`) VALUES
(1, '1938', '1', '0'),
(2, '1944', '1', '0'),
(3, '1945', '1', '1'),
(4, '100', '2', '0'),
(5, '98', '2', '0'),
(6, '116', '2', '1'),
(7, '2006', '3', '0'),
(8, '2007', '3', '1'),
(9, '2008', '3', '0'),
(10, '2004', '4', '1'),
(11, '1998', '4', '0'),
(12, '2007', '4', '0'),
(13, 'Nu a aderat', '5', '1'),
(14, 'A aderat anul trect', '5', '0'),
(15, 'A fost membru fondator', '5', '0');

-- --------------------------------------------------------

--
-- Table structure for table `raspuns2`
--

DROP TABLE IF EXISTS `raspuns2`;
CREATE TABLE IF NOT EXISTS `raspuns2` (
  `id_rasp` int NOT NULL AUTO_INCREMENT,
  `rasp` text COLLATE utf8_bin NOT NULL,
  `id_intr` text COLLATE utf8_bin NOT NULL,
  `corect` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_rasp`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `raspuns2`
--

INSERT INTO `raspuns2` (`id_rasp`, `rasp`, `id_intr`, `corect`) VALUES
(1, 'Rosu,Albastru,Verde', '1', '0'),
(2, 'Galben,Rosu,Mov', '1', '0'),
(3, 'Rosu,Albastru,Galben', '1', '1'),
(4, 'Microsoft', '2', '1'),
(5, 'Apple', '2', '0'),
(6, 'Asus', '2', '0'),
(7, '11100000', '3', '1'),
(8, '11100110', '3', '0'),
(9, '0110110', '3', '0'),
(10, 'Hiper Text Markup Language', '4', '0'),
(11, 'HyperText Markup Language', '4', '1'),
(12, 'Hyper Text Mark Language', '4', '0'),
(13, 'Cascading Style Sheets', '5', '1'),
(14, 'Creative Style Sheet', '5', '0'),
(15, 'Cascading Creative Style', '5', '0');

-- --------------------------------------------------------

--
-- Table structure for table `utilizatori`
--

DROP TABLE IF EXISTS `utilizatori`;
CREATE TABLE IF NOT EXISTS `utilizatori` (
  `nr` int NOT NULL AUTO_INCREMENT,
  `nume` text COLLATE utf8_bin NOT NULL,
  `prenume` text COLLATE utf8_bin NOT NULL,
  `username` text COLLATE utf8_bin NOT NULL,
  `Password` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`nr`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `utilizatori`
--

INSERT INTO `utilizatori` (`nr`, `nume`, `prenume`, `username`, `Password`) VALUES
(1, 'bizi', 'bizi', 'bizi', 'cfdc703c43646863fd4d9142843467f4');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
