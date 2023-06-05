-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : sam. 03 juin 2023 à 16:18
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
-- Structure de la table `Parking`
--

CREATE TABLE `Parking` (
  `id_parking` int(11) NOT NULL,
  `nom_parking` varchar(255) DEFAULT NULL,
  `emplacement_parking` varchar(255) DEFAULT NULL,
  `photo_parking` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Réservation`
--

CREATE TABLE `Réservation` (
  `id_reservation` int(11) NOT NULL,
  `id_usager` int(11) DEFAULT NULL,
  `id_trajet` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Trajet`
--

CREATE TABLE `Trajet` (
  `id_trajet` int(11) NOT NULL,
  `point_depart` varchar(255) DEFAULT NULL,
  `point_arrivee` varchar(255) DEFAULT NULL,
  `ville_depart` varchar(255) DEFAULT NULL,
  `ville_arrivee` varchar(255) DEFAULT NULL,
  `date_depart` date DEFAULT NULL,
  `heure_depart` time DEFAULT NULL,
  `heure_arrivee` time DEFAULT NULL,
  `places_dispo` int(11) DEFAULT NULL,
  `prix_passager` int(11) DEFAULT NULL,
  `id_usager` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Trajet`
--

INSERT INTO `Trajet` (`id_trajet`, `point_depart`, `point_arrivee`, `ville_depart`, `ville_arrivee`, `date_depart`, `heure_depart`, `heure_arrivee`, `places_dispo`, `prix_passager`, `id_usager`) VALUES
(1, '40 rue du Clair Bocage', '25 rue Banaudon', 'La Teste-de-buch', 'Lyon', '2023-06-03', '15:47:22', '21:47:22', 3, 30, 1),
(2, '21 boulevard Amiral', '87 avenue de Bouvines', 'Orvault', 'Sens', '2023-06-15', '13:40:00', '15:20:22', 2, 20, 2),
(3, '21 rue Banaudon', '62 Avenue des Tuileries', ' Lyon', 'Guyancourt', '2023-06-05', '16:19:20', '18:19:20', 1, 14, 3),
(4, '15 Rue Marie De Médicis', '77 Avenue des Tuileries', ' Cannes', 'Guyancourt', '2023-06-14', '15:19:20', '17:19:20', 1, 14, 4),
(5, '19 rue du Clair Bocage', '12 boulevard d\'Alsace', 'La Varenne-saint-hilaire', 'Vaulx-en-velin', '2023-06-22', '19:36:02', '22:36:02', 4, 63, 5),
(6, '62 rue de la Hulotais', '80 boulevard de la Liberation', 'Saint-priest', 'Marseille', '2023-06-08', '06:07:25', '09:07:25', 2, 42, 6),
(7, '22 rue des Chaligny', '54 Avenue Millies Lacroix', 'Nice', 'Dzaoudzi', '2023-06-25', '12:07:25', '14:07:25', 1, 24, 7),
(8, '90 Avenue De Marlioz', '32 Chemin Challet', 'Antony', 'Lille', '2023-06-16', '15:07:25', '18:07:25', 2, 29, 8),
(9, '98 rue Ernest Renan', '73 Rue Marie De Médicis', 'Chaumont', 'Cambrai', '2023-06-12', '14:07:25', '17:07:25', 6, 55, 9),
(10, '65 rue Descartes', '2 boulevard Bryas', 'Suresnes', 'Créteil', '2023-06-12', '12:07:25', '17:07:25', 3, 15, 10);

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
-- Index pour la table `Parking`
--
ALTER TABLE `Parking`
  ADD PRIMARY KEY (`id_parking`);

--
-- Index pour la table `Réservation`
--
ALTER TABLE `Réservation`
  ADD PRIMARY KEY (`id_reservation`),
  ADD KEY `FK_Réservation_id_usager` (`id_usager`),
  ADD KEY `FK_Réservation_id_trajet` (`id_trajet`);

--
-- Index pour la table `Trajet`
--
ALTER TABLE `Trajet`
  ADD PRIMARY KEY (`id_trajet`),
  ADD KEY `FK_Trajet_id_usager` (`id_usager`);

--
-- Index pour la table `Usagers`
--
ALTER TABLE `Usagers`
  ADD PRIMARY KEY (`id_usager`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Parking`
--
ALTER TABLE `Parking`
  MODIFY `id_parking` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Réservation`
--
ALTER TABLE `Réservation`
  MODIFY `id_reservation` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Trajet`
--
ALTER TABLE `Trajet`
  MODIFY `id_trajet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `Usagers`
--
ALTER TABLE `Usagers`
  MODIFY `id_usager` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
