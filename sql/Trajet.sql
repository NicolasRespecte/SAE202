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

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Trajet`
--
ALTER TABLE `Trajet`
  ADD PRIMARY KEY (`id_trajet`),
  ADD KEY `FK_Trajet_id_usager` (`id_usager`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Trajet`
--
ALTER TABLE `Trajet`
  MODIFY `id_trajet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
