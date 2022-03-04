-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 04 mars 2022 à 20:49
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `rendez-vous`
--

-- --------------------------------------------------------

--
-- Structure de la table `rendez_vous`
--

CREATE TABLE `rendez_vous` (
  `id_rv` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `e_mail` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `services` varchar(255) NOT NULL,
  `date_rv` date NOT NULL,
  `heure_rv` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rendez_vous`
--

INSERT INTO `rendez_vous` (`id_rv`, `nom`, `prenom`, `e_mail`, `adresse`, `telephone`, `services`, `date_rv`, `heure_rv`) VALUES
(1, 'GAYE', 'Abdoulaye', 'abdoulayeg389@gmail.com', 'Sénegal /Dakar/ Niarry Tally', '+221 0778585507', 'Ophtalmologie', '2022-02-28', '20:39:00'),
(2, 'Ndiaye', 'matar', 'ablayegaye207@gmail.com', 'Sénegal /Dakar/ Niarry Tally rue bis 12 angle numero 2123', '+221 778585507', 'Radiologie', '2022-02-27', '12:30:00'),
(4, 'GAYE', 'Abdoulaye', 'abdoulayeg389@gmail.com', 'Sénegal /Dakar/ Niarry Tally', '+221 0778585507', 'Dentiste', '2022-02-05', '23:53:00'),
(5, 'GAYE', 'Abdoulaye', 'abdoulayeg389@gmail.com', 'Sénegal /Dakar/ Niarry Tally', '+221 0778585507', 'Radiologie', '2022-03-05', '23:49:00'),
(6, 'GAYE', 'Abdoulaye', 'ablayegaye207@gmail.com', 'Sénegal /Dakar/ Niarry Tally', '0778585507', 'Ophtalmologie', '2022-03-02', '21:56:00'),
(7, 'GAYE', 'Abdoulaye', 'abdoulayeg389@gmail.com', 'Sénegal /Dakar/ Niarry Tally', '+221 0778585507', 'Dentiste', '2022-03-06', '23:15:00'),
(8, 'GAYE', 'Abdoulaye', 'abdoulayeg389@gmail.com', 'Sénegal /Dakar/ Niarry Tally', '+221 0778585507', 'Dentiste', '2022-03-04', '23:16:00'),
(9, 'GAYE', 'Abdoulaye', 'ablayegaye207@gmail.com', 'Sénegal /Dakar/ Niarry Tally', '0778585507', 'Généraliste', '2022-03-05', '22:18:00'),
(10, 'GAYE', 'Abdoulaye', 'ablayegaye207@gmail.com', 'Sénegal /Dakar/ Niarry Tally', '0778585507', 'Radiologie', '2022-03-04', '22:21:00'),
(11, 'GAYE', 'Abdoulaye', 'ablayegaye207@gmail.com', 'Sénegal /Dakar/ Niarry Tally', '0778585507', 'Généraliste', '2022-03-18', '03:35:00'),
(12, 'GAYE', 'Abdoulaye', 'ablayegaye207@gmail.com', 'Sénegal /Dakar/ Niarry Tally', '0778585507', 'Ophtalmologie', '2022-03-31', '05:37:00'),
(13, 'GAYE', 'Abdoulaye', 'ablayegaye207@gmail.com', 'Sénegal /Dakar/ Niarry Tally', '0778585507', 'Radiologie', '2022-03-04', '07:40:00'),
(14, 'GAYE', 'Abdoulaye', 'ablayegaye207@gmail.com', 'Sénegal /Dakar/ Niarry Tally', '0778585507', 'Dentiste', '2022-03-11', '07:43:00'),
(15, 'GAYE', 'Abdoulaye', 'ablayegaye207@gmail.com', 'Sénegal /Dakar/ Niarry Tally', '0778585507', 'Dentiste', '2022-03-11', '07:43:00'),
(16, 'GAYE', 'Abdoulaye', 'ablayegaye207@gmail.com', 'Sénegal /Dakar/ Niarry Tally', '0778585507', 'Ophtalmologie', '2022-03-19', '07:46:00'),
(17, 'GAYE', 'Abdoulaye', 'ablayegaye207@gmail.com', 'Sénegal /Dakar/ Niarry Tally', '0778585507', 'Ophtalmologie', '2022-03-07', '18:47:00'),
(18, 'GAYE', 'Abdoulaye', 'ablayegaye207@gmail.com', 'Sénegal /Dakar/ Niarry Tally', '0778585507', 'Ophtalmologie', '2022-03-08', '18:47:00'),
(19, 'GAYE', 'Abdoulaye', 'ablayegaye207@gmail.com', 'Sénegal /Dakar/ Niarry Tally', '0778585507', 'Ophtalmologie', '2022-04-02', '18:47:00'),
(20, 'GAYE', 'Abdoulaye', 'ablayegaye207@gmail.com', 'Sénegal /Dakar/ Niarry Tally', '0778585507', 'Généraliste', '2022-03-19', '12:04:00'),
(21, 'GAYE', 'Abdoulaye', 'ablayegaye207@gmail.com', 'Sénegal /Dakar/ Niarry Tally', '0778585507', 'Généraliste', '2022-03-10', '19:51:00'),
(22, 'Aissatou', 'cisse', 'aichacisse@gmail.com', 'rus bis 38', '775493456', 'Dentiste', '2022-03-03', '12:30:00'),
(23, 'Aissatou', 'cisse', 'aichacisse@gmail.com', 'rus bis 38', '775493456', 'Dentiste', '2022-03-10', '12:30:00'),
(24, 'GAYE', 'Abdoulaye', 'ablayegaye207@gmail.com', 'Sénegal /Dakar/ Niarry Tally', '0778585507', 'Ophtalmologie', '2022-03-06', '17:38:00');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `e_mail` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `prenom`, `nom`, `e_mail`, `mot_de_passe`) VALUES
(1, 'Abdoulaye', 'GAYE', 'ablayegaye207@gmail.com', '7025bb043c63f83ed2e55691853298b6');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  ADD PRIMARY KEY (`id_rv`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  MODIFY `id_rv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
