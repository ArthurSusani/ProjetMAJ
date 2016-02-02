-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 29 Janvier 2016 à 16:53
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
  `id_user` int(11) NOT NULL,
  `begin` date NOT NULL,
  `end` date NOT NULL,
  `validate` date NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `bookings`
--

INSERT INTO `bookings` (`id_booking`, `id_user`, `begin`, `end`, `validate`, `price`) VALUES
(15, 11, '2016-01-27', '2016-01-27', '2016-01-27', 400),
(16, 11, '2016-01-28', '2016-01-28', '2016-01-28', 100),
(17, 11, '2016-01-29', '2016-01-29', '2016-01-05', 120),
(18, 12, '2016-04-15', '2016-04-21', '2016-02-18', 1);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL,
  `title` enum('Mr','Mme','','') DEFAULT 'Mr',
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='stoque les messages reçus par les visiteurs envoyés a l''admin';

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `logs`
--

INSERT INTO `logs` (`id`, `firstname`, `lastname`, `adressClient`, `postcodeClient`, `cityClient`, `telephone`, `mail`, `password`, `birthday`, `role`) VALUES
(11, 'julien', 'baudouin', '15, rue Henri dunant', '54150', 'briey', '0382460036', 'baudouinjulien@free.fr', '$2y$10$rO3ZZApA.XTaXxOSqLag3eLjNkJZinyH8NlPTbTJwyyMwSdq7Vtw.', '1983-01-03', 'user'),
(12, 'julien', 'baudouin', '15, rue Henri Dunant', '54150', 'BRIEY', '', 'baudouinjulien2@free.fr', '$2y$10$gM.cDjecpMX6hc4cGkir1O.g3fibEE6QE6B9z4nJYX4cMRzWUIdRm', '1983-03-01', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `opinion`
--

CREATE TABLE IF NOT EXISTS `opinion` (
  `id` int(11) NOT NULL,
  `id_booking` int(11) NOT NULL,
  `comment` text NOT NULL,
  `date_opinion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Stoque les avis des clients sur un séjour';

-- --------------------------------------------------------

--
-- Structure de la table `roombooking`
--

CREATE TABLE IF NOT EXISTS `roombooking` (
  `id` int(11) NOT NULL,
  `id_booking` int(11) NOT NULL,
  `id_room` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `roombooking`
--

INSERT INTO `roombooking` (`id`, `id_booking`, `id_room`) VALUES
(1, 15, 1),
(2, 16, 4),
(3, 18, 1),
(4, 17, 2);

-- --------------------------------------------------------

--
-- Structure de la table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `floor` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `singlebed` int(11) NOT NULL,
  `doublebed` int(11) NOT NULL,
  `price` float NOT NULL,
  `picture` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `floor`, `capacity`, `singlebed`, `doublebed`, `price`, `picture`) VALUES
(1, 'Chambre du roi', 3, 4, 0, 2, 107, 'http://www.hotel-imperator.com/slider/chambre.jpg'),
(2, 'Chambre de la dame', 3, 3, 1, 1, 150, 'http://www.salthillhotel.com/files/hotel/salthill-hotel/accommodation/triple/hotel-salthill-galway-triple-classic-room-01.jpg'),
(3, 'Chambre du fou', 2, 2, 2, 0, 89, 'http://www.listanahotel.com/wp-content/uploads/2015/07/2-single-bed.jpg'),
(4, 'Chambre du cavalier', 2, 1, 1, 0, 58, 'http://d2egp5o3tievl8.cloudfront.net/_novaimg/galleria/438191.jpg'),
(5, 'Chambre de la tour', 1, 3, 1, 1, 100, 'http://www.excelsior-paris-hotel.com/wcms/img/triple-classique-avec-lit-double-et-lit-simple-size-50141-1500-1000.jpg'),
(6, 'Chambre du roi', 3, 4, 0, 2, 107, 'http://www.hotel-imperator.com/slider/chambre.jpg'),
(7, 'Chambre de la dame', 3, 3, 1, 1, 150, 'http://www.salthillhotel.com/files/hotel/salthill-hotel/accommodation/triple/hotel-salthill-galway-triple-classic-room-01.jpg'),
(8, 'Chambre du fou', 2, 2, 2, 0, 89, 'http://www.listanahotel.com/wp-content/uploads/2015/07/2-single-bed.jpg'),
(9, 'Chambre du cavalier', 2, 1, 1, 0, 58, 'http://d2egp5o3tievl8.cloudfront.net/_novaimg/galleria/438191.jpg'),
(10, 'Chambre de la tour', 1, 3, 1, 1, 100, 'http://www.excelsior-paris-hotel.com/wcms/img/triple-classique-avec-lit-double-et-lit-simple-size-50141-1500-1000.jpg');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id_booking`);

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
-- Index pour la table `opinion`
--
ALTER TABLE `opinion`
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
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `opinion`
--
ALTER TABLE `opinion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `roombooking`
--
ALTER TABLE `roombooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
