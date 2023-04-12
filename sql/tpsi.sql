-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 12 avr. 2023 à 07:41
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tpsi`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(75) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(50) NOT NULL,
  `creationDate` date NOT NULL,
  `lastConnection` date NOT NULL,
  `connected` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `creationDate`, `lastConnection`, `connected`) VALUES
(1, 'Maxence', 'maxmahieux44@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '0000-00-00', '0000-00-00', 0),
(6, 'Leo', 'leoselimlegrand@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '0000-00-00', '0000-00-00', 0),
(7, 'Evan', 'evan.suire@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '0000-00-00', '0000-00-00', 0),
(31, 'Admin', 'contact@webask.fr', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '0000-00-00', '0000-00-00', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
