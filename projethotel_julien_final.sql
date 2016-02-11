-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 02 Février 2016 à 11:49
-- Version du serveur :  5.6.25
-- Version de PHP :  5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projethotel`
--

-- --------------------------------------------------------

--
-- Structure de la table `bookings`
--

CREATE TABLE IF NOT EXISTS `bookings` (
  `id_booking` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `begin` date NOT NULL,
  `end` date NOT NULL,
  `validate` datetime NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `bookings`
--

INSERT INTO `bookings` (`id_booking`, `id_user`, `begin`, `end`, `validate`, `price`) VALUES
(40, 11, '2016-02-02', '2016-02-02', '2016-02-02 10:43:28', 107);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL,
  `title` varchar(25) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COMMENT='stoque les messages reçus par les visiteurs envoyés a l''admin';

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`id`, `title`, `firstname`, `lastname`, `phone`, `mail`, `subject`, `message`) VALUES
(1, 'Mr', 'Nom Personne', 'Prénom personne', '0382460036', 'baudouinjulien@free.fr', 'Sujet', 'Message envoyé a l''admin'),
(2, 'Mr', '', 'baudouin', '', '', '15, rue Henri dunant', ''),
(3, 'Monsieur', 'julien', 'baudouin', '45674', 'baudouinjulien2@free.fr', 'Test envoi php mailer depuis le projet', 'xcdgjjestqetqeszrt'),
(4, 'Madame', 'julien', 'baudouin', '0382460036', 'baudouinjulien2@free.fr', 'sujet 123', 'message 123');

-- --------------------------------------------------------

--
-- Structure de la table `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `adressClient` varchar(100) NOT NULL,
  `postcodeClient` varchar(5) NOT NULL,
  `cityClient` varchar(30) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `birthday` date NOT NULL,
  `role` enum('admin','user','','') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `logs`
--

INSERT INTO `logs` (`id`, `firstname`, `lastname`, `adressClient`, `postcodeClient`, `cityClient`, `telephone`, `mail`, `password`, `birthday`, `role`) VALUES
(11, 'julien', 'baudouin', '15, rue Henri dunant', '54150', 'briey', '0382460036', 'baudouinjulien@free.fr', '$2y$10$rO3ZZApA.XTaXxOSqLag3eLjNkJZinyH8NlPTbTJwyyMwSdq7Vtw.', '1983-01-03', 'user'),
(12, 'julien', 'baudouin', '15, rue Henri Dunant', '54150', 'BRIEY', '', 'baudouinjulien2@free.fr', '$2y$10$gM.cDjecpMX6hc4cGkir1O.g3fibEE6QE6B9z4nJYX4cMRzWUIdRm', '1983-03-01', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `opinions`
--

CREATE TABLE IF NOT EXISTS `opinions` (
  `id` int(11) NOT NULL,
  `room` int(11) NOT NULL,
  `id_logs` int(11) NOT NULL,
  `comment` text NOT NULL,
  `datestart` date NOT NULL,
  `dateend` date NOT NULL,
  `rate` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `opinions`
--

INSERT INTO `opinions` (`id`, `room`, `id_logs`, `comment`, `datestart`, `dateend`, `rate`) VALUES
(1, 1, 1, 'trop bien l''hotel !', '2016-01-29', '0000-00-00', 0),
(2, 2, 1, 'Youpi trop bien la piscine', '2016-02-10', '0000-00-00', 0),
(9, 0, 11, 'Chambre très originale et agréable!', '2016-02-01', '2016-02-01', 5),
(10, 0, 11, '', '2016-02-02', '2016-02-03', 3),
(11, 0, 11, 'Chambre humide', '2016-02-02', '2016-02-06', 5),
(12, 0, 11, 'chambre très humide', '2016-02-01', '2016-02-01', 2);

-- --------------------------------------------------------

--
-- Structure de la table `roombooking`
--

CREATE TABLE IF NOT EXISTS `roombooking` (
  `id` int(11) NOT NULL,
  `id_booking` int(11) NOT NULL,
  `id_room` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `roombooking`
--

INSERT INTO `roombooking` (`id`, `id_booking`, `id_room`) VALUES
(73, 29, 1),
(74, 29, 2),
(75, 30, 3),
(76, 30, 4),
(77, 30, 5),
(78, 31, 6),
(79, 31, 7),
(80, 32, 8),
(81, 33, 1),
(82, 34, 1),
(83, 35, 1),
(84, 35, 2),
(85, 36, 3),
(86, 36, 7),
(87, 37, 7),
(88, 38, 8),
(89, 39, 3),
(90, 40, 1);

-- --------------------------------------------------------

--
-- Structure de la table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `capacity` int(11) NOT NULL,
  `singlebed` int(11) NOT NULL,
  `doublebed` int(11) NOT NULL,
  `price` float NOT NULL,
  `picture` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `capacity`, `singlebed`, `doublebed`, `price`, `picture`) VALUES
(1, 'Chambre du roi', 2, 0, 1, 107, 'http://www.hotel-imperator.com/slider/chambre.jpg'),
(2, 'Chambre de la dame', 2, 0, 1, 150, 'http://www.salthillhotel.com/files/hotel/salthill-hotel/accommodation/triple/hotel-salthill-galway-triple-classic-room-01.jpg'),
(3, 'Chambre du fou', 4, 0, 2, 89, 'http://www.listanahotel.com/wp-content/uploads/2015/07/2-single-bed.jpg'),
(4, 'Chambre du cavalier', 4, 0, 2, 58, 'http://d2egp5o3tievl8.cloudfront.net/_novaimg/galleria/438191.jpg'),
(5, 'Chambre de la tour', 2, 0, 1, 170, 'http://www.excelsior-paris-hotel.com/wcms/img/triple-classique-avec-lit-double-et-lit-simple-size-50141-1500-1000.jpg'),
(6, 'Chambre du roi', 3, 3, 0, 107, 'http://www.hotel-imperator.com/slider/chambre.jpg'),
(7, 'Chambre de la dame', 3, 3, 0, 150, 'http://www.salthillhotel.com/files/hotel/salthill-hotel/accommodation/triple/hotel-salthill-galway-triple-classic-room-01.jpg'),
(8, 'Chambre du fou', 2, 2, 0, 89, 'http://www.listanahotel.com/wp-content/uploads/2015/07/2-single-bed.jpg'),
(9, 'Chambre du cavalier', 2, 2, 0, 58, 'http://d2egp5o3tievl8.cloudfront.net/_novaimg/galleria/438191.jpg'),
(10, 'Chambre de la tour', 2, 0, 1, 200, 'http://www.excelsior-paris-hotel.com/wcms/img/triple-classique-avec-lit-double-et-lit-simple-size-50141-1500-1000.jpg');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- Index pour la table `opinions`
--
ALTER TABLE `opinions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `roombooking`
--
ALTER TABLE `roombooking`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `opinions`
--
ALTER TABLE `opinions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `roombooking`
--
ALTER TABLE `roombooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT pour la table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `logs` (`id`) ON DELETE SET NULL;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
