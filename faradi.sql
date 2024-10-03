-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 17 juin 2024 à 13:02
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `faradi`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(250) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `age` int(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `firstname`, `lastname`, `age`, `email`, `password`) VALUES
(1, 'ayoub', 'faradi', 18, 'ayoubfaradi@gmail.com', 'ayoub2005'),
(2, 'hassan', 'ajdahim', 55, 'hssina1978@gmail.com', 'ask1455'),
(3, 'latifa', 'faradi', 49, 'latifafd@gmail.com', 'latifa1972'),
(4, 'aya', 'kamani', 19, 'ayakmr@gmail.com', 'aya123'),
(5, 'hassan', 'askif', 21, 'hasan18@gmail.com', 'hello world'),
(6, 'assia', 'hamilou', 20, 'assiahamilou@gmail.con', 'assia.hbila'),
(7, 'bouchra', 'ascour', 44, 'bouchraascour@gmail.com', 'bouchra2024'),
(8, 'othmane', 'haqay', 98, 'otman.haqay@gmail.com', 'othmane123'),
(9, 'kholoud', 'elkhatabi', 17, 'elkhatabi2006@gmail.com', 'bac2024');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(250) NOT NULL,
  `produit` varchar(250) NOT NULL,
  `marque` varchar(250) NOT NULL,
  `prix` int(100) NOT NULL,
  `disponible` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `produit`, `marque`, `prix`, `disponible`) VALUES
(1, 'phone', 'iphone 14 pro', 15000, 'oui'),
(2, 'laptop', 'hp pavillon gamer', 27000, 'oui'),
(3, 'phone', 's22 Ultra+', 24300, 'non'),
(4, 'TV', 'Samsung ', 30000, 'oui'),
(5, 'phone', 'iphone 11', 3500, 'non\r\n'),
(6, 'watch', 'apple watch serie 8', 3800, 'oui'),
(7, 'watch', 'huawie watch GT 3', 2800, 'non'),
(8, 'airpods', 'pro 2', 1950, 'non'),
(9, 'IMAC', 'M3 pro', 46000, 'oui'),
(10, 'IMAC', 'M3 pro', 46000, 'oui'),
(11, 'BMW', 'M5', 999999999, 'non');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
