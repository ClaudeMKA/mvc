-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 19 avr. 2023 à 14:49
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `prj_mvc`
--

-- --------------------------------------------------------

--
-- Structure de la table `borrows`
--

CREATE TABLE `borrows` (
  `id` int(11) NOT NULL,
  `id_abonne` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `date_start` datetime NOT NULL,
  `date_end` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `borrows`
--

INSERT INTO `borrows` (`id`, `id_abonne`, `id_product`, `date_start`, `date_end`) VALUES
(128, 10, 11, '2023-02-23 19:49:37', '2023-02-24 12:09:22'),
(129, 7, 10, '2023-02-23 19:52:41', '2023-02-25 14:18:12'),
(138, 11, 11, '2023-02-24 12:51:06', '2023-04-19 14:48:57'),
(139, 11, 14, '2023-02-24 12:55:52', '2023-04-19 14:48:59'),
(140, 10, 10, '2023-02-24 16:04:22', '2023-02-25 14:18:19'),
(141, 7, 14, '2023-02-24 22:01:15', '2023-02-25 14:18:21'),
(142, 12, 13, '2023-02-25 08:03:28', '2023-04-19 14:49:01'),
(143, 17, 15, '2023-02-25 14:24:04', '2023-04-19 14:49:03'),
(144, 18, 15, '2023-02-25 20:58:42', '2023-02-25 20:58:57'),
(145, 18, 15, '2023-02-25 20:59:24', '2023-04-19 14:49:04'),
(146, 18, 14, '2023-02-25 20:59:36', NULL),
(147, 13, 15, '2023-02-28 19:27:50', '2023-02-28 19:27:55'),
(148, 12, 10, '2023-04-19 14:38:59', NULL),
(149, 16, 10, '2023-04-19 14:39:04', NULL),
(150, 15, 10, '2023-04-19 14:39:07', NULL),
(151, 14, 10, '2023-04-19 14:39:11', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `borrows`
--
ALTER TABLE `borrows`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `borrows`
--
ALTER TABLE `borrows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
