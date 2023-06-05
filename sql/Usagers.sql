-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : sam. 03 juin 2023 à 16:59
-- Version du serveur : 10.3.29-MariaDB-0+deb10u1
-- Version de PHP : 8.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `SAE202`
--

-- --------------------------------------------------------

--
-- Structure de la table `Usagers`
--

CREATE TABLE `Usagers` (
  `id_usager` int(11) NOT NULL,
  `photo_usager` varchar(255) DEFAULT NULL,
  `nom_usager` varchar(255) DEFAULT NULL,
  `prenom_usager` varchar(255) DEFAULT NULL,
  `telephone_usager` varchar(255) DEFAULT NULL,
  `email_usager` varchar(255) DEFAULT NULL,
  `mdp_usager` varchar(255) DEFAULT NULL,
  `modele_vehicule` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Usagers`
--

INSERT INTO `Usagers` (`id_usager`, `photo_usager`, `nom_usager`, `prenom_usager`, `telephone_usager`, `email_usager`, `mdp_usager`, `modele_vehicule`) VALUES
(1, 'p1.png', 'Olympe', 'Livie', '0601020304', 'livi@gmail.com', 'sfsdsc', 'Peugeot 206'),
(2, 'p2.png', 'Justine', 'Marcellette', '0606020304', 'mrcelle@gmail.com', 'sfjkdsc', 'Peugeot 207'),
(3, 'p3.png', 'Joëlle', 'Baptiste', '0606025304', 'jojo@gmail.com', 'sfjfesdsc', 'Peugeot 208'),
(4, 'p4.png', 'Charles', 'Astrid', '0645025304', 'chastr@gmail.com', 'sfjfqfdsc', 'Peugeot 306'),
(5, 'p5.png', 'Cyrielle', 'Pascal', '0645012304', 'cyrcyr@gmail.com', 'ssdwcdsc', 'Peugeot 307'),
(6, 'p6.png', 'Rachel', 'Edith', '0645045304', 'piaf@gmail.com', 'ssfassc', 'Peugeot 3008'),
(7, 'p7.png', 'Vivien', 'Marianne', '0645565304', 'vivi@gmail.com', 'effdjssc', 'Peugeot 5008'),
(8, 'p8.png', 'Valérie', 'Jérémy', '0645568504', 'valo@gmail.com', 'dfseffdjssc', 'Porsche Cayenne'),
(9, 'p9.png', 'Roselle', 'Raphaëlle', '0645568414', 'roro@gmail.com', 'effdsc', 'Porsche 911'),
(10, 'p10.png', 'Lucille', 'Kenzo', '0641568414', 'Luli@gmail.com', 'effdqdsc', 'Lamborghini Urus');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Usagers`
--
ALTER TABLE `Usagers`
  ADD PRIMARY KEY (`id_usager`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Usagers`
--
ALTER TABLE `Usagers`
  MODIFY `id_usager` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
