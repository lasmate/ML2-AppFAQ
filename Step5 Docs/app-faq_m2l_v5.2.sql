-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 01 avr. 2025 à 11:14
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
-- Base de données : `app-faq_m2l`
--

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

CREATE TABLE `faq` (
  `id_Q` bigint(1) NOT NULL,
  `id_FAQ` int(1) NOT NULL DEFAULT 5,
  `question` text DEFAULT NULL,
  `reponse` text DEFAULT NULL,
  `dat_question` datetime NOT NULL DEFAULT current_timestamp(),
  `dat_reponse` datetime NOT NULL DEFAULT current_timestamp(),
  `id_user` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `faq`
--

INSERT INTO `faq` (`id_Q`, `id_FAQ`, `question`, `reponse`, `dat_question`, `dat_reponse`, `id_user`) VALUES
(1, 1, 'Quand est-ce qu\'il est le prochain tournoi ? ', 'Le prochain tournoi est dans 3 semaines.', '2025-02-04 14:04:41', '2025-02-04 14:04:41', 3),
(3, 3, 'Qu\'elle est l\'enjeux du prochain tournoi ?', 'L\'enjeux du prochain tournoi se sera les championnats de France.', '2025-02-04 14:09:41', '2025-02-04 14:09:41', 1),
(4, 5, 'j\'aimerai savoir quand se passera le tournoi de basket', NULL, '2025-03-05 16:10:43', '2025-03-05 16:10:43', 1),
(5, 2, 'combien de panier on ete marque pas le numero 6 cette saison? ', NULL, '2025-03-11 15:37:34', '2025-03-11 15:37:34', 3),
(6, 2, 'OÃ¹ se trouve le tournoi ?', NULL, '2025-03-27 14:18:40', '2025-03-27 14:18:40', 10);

-- --------------------------------------------------------

--
-- Structure de la table `ligue`
--

CREATE TABLE `ligue` (
  `id_ligue` bigint(11) NOT NULL,
  `lib_ligue` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `ligue`
--

INSERT INTO `ligue` (`id_ligue`, `lib_ligue`) VALUES
(5, 'all_ligues'),
(2, 'basket'),
(1, 'football'),
(4, 'handball'),
(3, 'volley');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` bigint(11) NOT NULL,
  `pseudo` varchar(20) DEFAULT NULL,
  `mdp` varchar(255) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `id_usertype` bigint(11) DEFAULT NULL,
  `id_ligue` bigint(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `pseudo`, `mdp`, `mail`, `id_usertype`, `id_ligue`) VALUES
(1, 'lya_lasvenes', 'ABcd1234*', 'abc@gmail.com', 1, 5),
(3, 'raphael_tonon', 'ABcd1234*', 'abcde@gmail.com', 1, 5),
(11, 'userfoot1', 'userfoot1', 'userfoot1@gmail.com', 3, 1),
(12, 'userfoot2', 'userfoot2', 'userfoot2@gmail.com', 3, 1),
(13, 'userfoot3', 'userfoot3', 'userfoot3@gmail.com', 3, 1),
(14, 'userfoot4', 'userfoot4', 'userfoot4@gmail.com', 3, 1),
(15, 'userfoot5', 'userfoot5', 'userfoot5@gmail.com', 3, 1),
(16, 'userbasket1', 'userbasket1', 'userbasket1@gmail.com', 3, 2),
(17, 'userbasket2', 'userbasket2', 'userbasket2@gmail.com', 3, 2),
(18, 'userbasket3', 'userbasket3', 'userbasket3@gmail.com', 3, 2),
(19, 'userbasket4', 'userbasket4', 'userbasket4@gmail.com', 3, 2),
(20, 'userbasket5', 'userbasket5', 'userbasket5@gmail.com', 3, 2),
(21, 'uservolley1', 'uservolley1', 'uservolley1@gmail.com', 3, 3),
(22, 'uservolley2', 'uservolley2', 'uservolley2@gmail.com', 3, 3),
(23, 'uservolley3', 'uservolley3', 'uservolley3@gmail.com', 3, 3),
(24, 'uservolley4', 'uservolley4', 'uservolley4@gmail.com', 3, 3),
(25, 'uservolley5', 'uservolley5', 'uservolley5@gmail.com', 3, 3),
(26, 'userhand1', 'userhand1', 'userhand1@gmail.com', 3, 4),
(27, 'userhand2', 'userhand2', 'userhand2@gmail.com', 3, 4),
(28, 'userhand3', 'userhand3', 'userhand3@gmail.com', 3, 4),
(29, 'userhand4', 'userhand4', 'userhand4@gmail.com', 3, 4),
(30, 'userhand5', 'userhand5', 'userhand5@gmail.com', 3, 4),
(31, 'adminbasket1', 'adminbasket1', 'adminbasket1@gmail.com', 2, 2),
(32, 'adminbasket2', 'adminbasket2', 'adminbasket2@gmail.com', 2, 2),
(33, 'adminfoot1', 'adminfoot1', 'adminfoot1@gmail.com', 2, 1),
(34, 'adminvolley1', 'adminvolley1', 'adminvolley1@gmail.com', 2, 3),
(35, 'adminhand1', 'adminhand1', 'adminhand1@gmail.com', 2, 4);

-- --------------------------------------------------------

--
-- Structure de la table `usertype`
--

CREATE TABLE `usertype` (
  `id_usertype` int(1) NOT NULL DEFAULT 3,
  `lib_usertype` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `usertype`
--

INSERT INTO `usertype` (`id_usertype`, `lib_usertype`) VALUES
(1, 'super_administrateur'),
(2, 'administrateur'),
(3, 'utilisateur');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id_Q`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `ligue`
--
ALTER TABLE `ligue`
  ADD PRIMARY KEY (`id_ligue`),
  ADD UNIQUE KEY `id_ligue` (`id_ligue`),
  ADD UNIQUE KEY `lib_ligue` (`lib_ligue`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `id_user` (`id_user`),
  ADD UNIQUE KEY `pseudo` (`pseudo`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- Index pour la table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`id_usertype`),
  ADD UNIQUE KEY `id_usertype` (`id_usertype`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `faq`
--
ALTER TABLE `faq`
  MODIFY `id_Q` bigint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `ligue`
--
ALTER TABLE `ligue`
  MODIFY `id_ligue` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
