-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 04 fév. 2025 à 14:40
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
CREATE DATABASE IF NOT EXISTS `app-faq_m2l` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `app-faq_m2l`;

--
-- Déchargement des données de la table `faq`
--

INSERT INTO `faq` (`id_faq`, `question`, `reponse`, `dat_question`, `dat_reponse`, `id_user`) VALUES
(1, 'Quand est-ce qu\'il est le prochain tournoi ? ', 'Le prochain tournoi est dans 3 semaines.', '2025-02-04 14:04:41', '2025-02-04 14:04:41', 3),
(2, 'Où se trouve le prochain tournoi ?', 'Il se trouve à Toulouse.', '2025-02-04 14:06:02', '2025-02-04 14:06:02', 2),
(3, 'Qu\'elle est l\'enjeux du prochain tournoi ?', 'L\'enjeux du prochain tournoi se sera les championnats de France.', '2025-02-04 14:09:41', '2025-02-04 14:09:41', 1);

--
-- Déchargement des données de la table `ligue`
--

INSERT INTO `ligue` (`id_ligue`, `lib_ligue`) VALUES
(1, 'football'),
(2, 'basket'),
(3, 'volley'),
(4, 'handball'),
(5, 'all_ligues');

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `pseudo`, `mdp`, `mail`, `id_usertype`, `id_ligue`) VALUES
(1, 'lya_lasvenes', 'ABcd1234*', 'abc@gmail.com', 1, 5),
(2, 'timothee_repingon', 'Abcd1234*', 'abcd@gmail.com', 3, 2),
(3, 'raphael_tonon', 'ABcd1234*', 'abcde@gmail.com', 2, 3);

--
-- Déchargement des données de la table `usertype`
--

INSERT INTO `usertype` (`id_usertype`, `lib_usertype`, `description`) VALUES
(1, 'super_administrateur', NULL),
(2, 'administrateur', NULL),
(3, 'utilisateur', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
