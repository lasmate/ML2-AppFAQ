-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2025 at 05:04 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app-faq_m2l`
--

-- --------------------------------------------------------

--
-- Table structure for table `faq`
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
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id_Q`, `id_FAQ`, `question`, `reponse`, `dat_question`, `dat_reponse`, `id_user`) VALUES
(1, 1, 'Quand est-ce qu\'il est le prochain tournoi ? ', 'Le prochain tournoi est dans 3 semaines.', '2025-02-04 14:04:41', '2025-02-04 14:04:41', 3),
(2, 2, 'Où se trouve le prochain tournoi ?', 'Il se trouve à Toulouse.', '2025-02-04 14:06:02', '2025-02-04 14:06:02', 2),
(3, 3, 'Qu\'elle est l\'enjeux du prochain tournoi ?', 'L\'enjeux du prochain tournoi se sera les championnats de France.', '2025-02-04 14:09:41', '2025-02-04 14:09:41', 1),
(4, 5, 'j\'aimerai savoir quand se passera le tournoi de basket', NULL, '2025-03-05 16:10:43', '2025-03-05 16:10:43', 1),
(5, 2, 'combien de panier on ete marque pas le numero 6 cette saison? ', NULL, '2025-03-11 15:37:34', '2025-03-11 15:37:34', 3);

-- --------------------------------------------------------

--
-- Table structure for table `ligue`
--

CREATE TABLE `ligue` (
  `id_ligue` bigint(11) NOT NULL,
  `lib_ligue` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ligue`
--

INSERT INTO `ligue` (`id_ligue`, `lib_ligue`) VALUES
(5, 'all_ligues'),
(2, 'basket'),
(1, 'football'),
(4, 'handball'),
(3, 'volley');

-- --------------------------------------------------------

--
-- Table structure for table `user`
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
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `pseudo`, `mdp`, `mail`, `id_usertype`, `id_ligue`) VALUES
(1, 'lya_lasvenes', 'ABcd1234*', 'abc@gmail.com', 1, 5),
(2, 'timothee_repingon', 'Abcd1234*', 'abcd@gmail.com', 3, 2),
(3, 'raphael_tonon', 'ABcd1234*', 'abcde@gmail.com', 2, 3),
(8, 'testuser', '$2y$10$wMX0JywtcbY7JmxUQcyVeeh1EBr26pcJZIjDTvcAZS61nsvWzaPVy', 'BALABU95@GMAIL.COM', 1, 3),
(9, 'newuser', '$2y$10$mNdiuYs.ti4hKyOgrDizXeJPQcrHC/Mk0KaUXlpnXYWib3P/K67gy', 'newnew@mail.org', 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `id_usertype` int(1) NOT NULL DEFAULT 3,
  `lib_usertype` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`id_usertype`, `lib_usertype`) VALUES
(1, 'super_administrateur'),
(2, 'administrateur'),
(3, 'utilisateur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id_Q`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `ligue`
--
ALTER TABLE `ligue`
  ADD PRIMARY KEY (`id_ligue`),
  ADD UNIQUE KEY `id_ligue` (`id_ligue`),
  ADD UNIQUE KEY `lib_ligue` (`lib_ligue`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `id_user` (`id_user`),
  ADD UNIQUE KEY `pseudo` (`pseudo`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`id_usertype`),
  ADD UNIQUE KEY `id_usertype` (`id_usertype`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id_Q` bigint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ligue`
--
ALTER TABLE `ligue`
  MODIFY `id_ligue` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
