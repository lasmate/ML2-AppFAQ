-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 04 fév. 2025 à 12:55
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
  `id_faq` bigint(11) NOT NULL,
  `question` text DEFAULT NULL,
  `reponse` text DEFAULT NULL,
  `dat_question` datetime NOT NULL DEFAULT current_timestamp(),
  `dat_reponse` datetime NOT NULL DEFAULT current_timestamp(),
  `id_user` bigint(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `ligue`
--

CREATE TABLE `ligue` (
  `id_ligue` bigint(11) NOT NULL,
  `lib_ligue` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
(1, 'lya_lasvenes', 'ABcd1234*', 'abc@gmail.com', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `usertype`
--

CREATE TABLE `usertype` (
  `id_usertype` bigint(11) NOT NULL,
  `lib_usertype` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `usertype`
--

INSERT INTO `usertype` (`id_usertype`, `lib_usertype`, `description`) VALUES
(1, 'super_administrateur', NULL),
(2, 'administrateur', NULL),
(3, 'utilisateur', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- Index pour la table `ligue`
--
ALTER TABLE `ligue`
  ADD PRIMARY KEY (`id_ligue`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Index pour la table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`id_usertype`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `faq`
--
ALTER TABLE `faq`
  MODIFY `id_faq` bigint(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ligue`
--
ALTER TABLE `ligue`
  MODIFY `id_ligue` bigint(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `id_usertype` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
