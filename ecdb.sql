-- phpMyAdmin SQL Dump
-- version 4.0.10.20
-- https://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 22 Décembre 2021 à 23:18
-- Version du serveur: 5.1.73
-- Version de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `ecdb_database`
--

-- --------------------------------------------------------

--
-- Structure de la table `category_head`
--

CREATE TABLE IF NOT EXISTS `category_head` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `category_head`
--

INSERT INTO `category_head` (`id`, `name`) VALUES
(1, 'Cables'),
(2, 'Condensateurs'),
(3, 'Connecteurs'),
(4, 'Diode'),
(5, 'CI'),
(6, 'Inductances'),
(7, 'Mechanique'),
(16, 'Modules'),
(8, 'Opto'),
(9, 'Protections'),
(18, 'Oscillateurs'),
(13, 'Resistances'),
(15, 'Capteurs'),
(10, 'Interrupteur/poussoirs'),
(11, 'Régulateurs/Transfo'),
(12, 'Transistors'),
(14, 'Ecrans'),
(17, 'Autres');

-- --------------------------------------------------------

--
-- Structure de la table `category_sub`
--

CREATE TABLE IF NOT EXISTS `category_sub` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `category_sub`
--

INSERT INTO `category_sub` (`id`, `name`) VALUES
(101, 'Ruban'),
(102, 'Coaxial'),
(199, 'Divers'),
(201, 'Ceramique'),
(202, 'Electrolytique'),
(203, 'Polyester'),
(204, 'Tantal'),
(205, 'Variable'),
(299, 'Divers'),
(301, 'Audio'),
(302, 'Coaxial'),
(303, 'DC-alim'),
(304, 'D-Sub'),
(399, 'Divers'),
(401, 'Redresseur'),
(402, 'Schottky'),
(403, 'Petits signaux'),
(404, 'Zener'),
(499, 'Divers'),
(501, '4xxx'),
(502, '74xx'),
(503, 'Microcontroller'),
(504, 'Comparateur'),
(505, 'AOP'),
(506, 'Temperature'),
(507, 'Timer & Osc.'),
(508, 'Référence de tension'),
(509, 'Régulateur de tension'),
(599, 'Divers'),
(601, 'Ferrite'),
(602, 'Filtre'),
(603, 'Inducteur'),
(699, 'Divers'),
(701, 'Box'),
(702, 'Distance'),
(703, 'Supports Fusibles'),
(704, 'Moteurs'),
(705, 'Relais'),
(799, 'Divers'),
(801, 'Barrières photo-electrique'),
(802, 'Laser'),
(803, 'LED'),
(804, 'LED 3mm'),
(805, 'LED 5mm'),
(806, 'Optocoupleur'),
(899, 'Divers'),
(901, 'Fusibles'),
(902, 'Varistances'),
(903, 'Thermistances CTN'),
(904, 'Thermistances CTP'),
(905, 'Support Fusibles'),
(999, 'Divers'),
(1001, 'Clavier'),
(1002, 'Momentanné'),
(1003, 'Monté sur PCB'),
(1004, 'Encodeur rotatif'),
(1005, 'Maintient'),
(1099, 'Divers'),
(1101, 'Alimentation'),
(1102, 'Transformateur'),
(1103, 'Convertisseur DC/DC'),
(1199, 'Divers'),
(1201, 'JBT'),
(1202, 'JFET'),
(1203, 'MOSFET'),
(1204, 'NPN'),
(1205, 'PNP'),
(1207, 'Thyristor'),
(1299, 'Divers'),
(1301, '1/4W Carbon'),
(1302, '1/4W Metal'),
(1303, '1/6W Carbon'),
(1304, '1/6W Metal'),
(1305, 'CMS-0603'),
(1306, 'CMS-0805'),
(1307, 'CMS-1206'),
(1308, 'Effect'),
(1309, 'Photo'),
(1399, 'Divers'),
(1601, 'GSM'),
(1602, 'GPS'),
(1699, 'Divers'),
(1401, 'LCD'),
(1402, 'VFD'),
(1404, 'LED'),
(1403, 'TFT'),
(807, 'IR LED'),
(1499, 'Divers'),
(708, 'IC Socket'),
(709, 'Radiateur'),
(510, 'Convertisseur Data'),
(511, 'A/D Multiplexeur'),
(512, 'Driver'),
(513, 'Opto Driver'),
(514, 'Convertisseur DC/DC'),
(515, 'Audio/Video'),
(516, 'Memoires'),
(1311, 'Temperature'),
(1310, 'Réseaux'),
(305, 'HF'),
(710, 'Bouton potar'),
(711, 'Metre'),
(103, 'Rouleau'),
(104, 'Cable PC'),
(105, 'Signal/Data'),
(106, 'Fibre optic'),
(306, 'PCB'),
(1603, 'Bluetooth'),
(1604, 'WLAN'),
(1605, 'ZigBee'),
(1606, 'RFID'),
(307, 'Cable PC'),
(1501, 'Humidité'),
(1502, 'Temperature'),
(1503, 'Pression'),
(1504, 'Magnetique'),
(1505, 'Effet hall'),
(1506, 'Gaz'),
(1507, 'Accelerometre'),
(1508, 'Lumières'),
(1509, 'Proximité'),
(1599, 'Divers'),
(1798, 'Consommables'),
(1799, 'Divers'),
(517, 'Logic'),
(1312, 'Potentiometre'),
(308, 'Data'),
(1801, 'Crystal'),
(1802, 'Resonateur'),
(1899, 'Divers'),
(1007, 'DIP'),
(406, 'Bridge'),
(1206, 'Triac'),
(1313, '1/3W Carbon'),
(1314, '1/3W Metal'),
(1315, 'Precision');

-- --------------------------------------------------------

--
-- Structure de la table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `owner` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `manufacturer` varchar(64) NOT NULL,
  `package` varchar(64) NOT NULL,
  `pins` varchar(11) NOT NULL,
  `smd` varchar(3) NOT NULL DEFAULT 'No',
  `quantity` varchar(11) NOT NULL,
  `order_quantity` varchar(11) NOT NULL,
  `location` varchar(32) NOT NULL,
  `scrap` varchar(3) NOT NULL DEFAULT 'No',
  `width` varchar(11) DEFAULT NULL,
  `height` varchar(11) DEFAULT NULL,
  `depth` varchar(11) DEFAULT NULL,
  `weight` varchar(11) DEFAULT NULL,
  `datasheet` varchar(256) NOT NULL,
  `comment` text NOT NULL,
  `category` varchar(11) NOT NULL,
  `public` varchar(3) NOT NULL DEFAULT 'No',
  `url1` varchar(256) NOT NULL,
  `url2` varchar(256) NOT NULL,
  `url3` varchar(256) NOT NULL,
  `url4` varchar(256) NOT NULL,
  `price` varchar(11) NOT NULL,
  KEY `Id` (`id`),
  KEY `owner` (`owner`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=517 ;

--
-- Contenu de la table `data`
--

INSERT INTO `data` (`id`, `owner`, `name`, `manufacturer`, `package`, `pins`, `smd`, `quantity`, `order_quantity`, `location`, `scrap`, `width`, `height`, `depth`, `weight`, `datasheet`, `comment`, `category`, `public`, `url1`, `url2`, `url3`, `url4`, `price`) VALUES
(1, 4, '1N4148', 'ST', 'SOT-21', '2', 'No', '100', '20', 'Drawer', 'No', '', '', '', '', '', '', '401', 'Yes', '', '', '', '', '0.001');

-- --------------------------------------------------------

--
-- Structure de la table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `login` varchar(32) NOT NULL,
  `mail` varchar(32) NOT NULL,
  `passwd` varchar(32) NOT NULL,
  `admin` int(11) NOT NULL DEFAULT '0',
  `measurement` int(11) NOT NULL DEFAULT '1',
  `currency` varchar(3) NOT NULL DEFAULT 'USD',
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`member_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1804 ;

--
-- Contenu de la table `members`
--

INSERT INTO `members` (`member_id`, `firstname`, `lastname`, `login`, `mail`, `passwd`, `admin`, `measurement`, `currency`, `reg_date`) VALUES
(4, 'Demo', 'Demo', 'demo', 'mail@mailen.com', 'fe01ce2a7fbac8fafaed7c982a04e229', 0, 1, 'USD', '2014-06-02 17:36:39'),

-- --------------------------------------------------------

--
-- Structure de la table `members_stats`
--

CREATE TABLE IF NOT EXISTS `members_stats` (
  `members_stats_id` int(11) NOT NULL AUTO_INCREMENT,
  `members_stats_member` int(11) NOT NULL,
  `members_stats_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`members_stats_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=258 ;

--
-- Contenu de la table `members_stats`
--

INSERT INTO `members_stats` (`members_stats_id`, `members_stats_member`, `members_stats_time`) VALUES
(1, 4, '2012-11-04 14:14:36');
-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `project_id` int(11) NOT NULL AUTO_INCREMENT,
  `project_owner` int(11) NOT NULL,
  `project_name` varchar(64) NOT NULL,
  PRIMARY KEY (`project_id`),
  KEY `project_owner` (`project_owner`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `projects`
--

INSERT INTO `projects` (`project_id`, `project_owner`, `project_name`) VALUES
(1, 4, 'Robot');

-- --------------------------------------------------------

--
-- Structure de la table `projects_data`
--

CREATE TABLE IF NOT EXISTS `projects_data` (
  `projects_data_id` int(11) NOT NULL AUTO_INCREMENT,
  `projects_data_owner_id` int(11) NOT NULL,
  `projects_data_project_id` int(11) NOT NULL,
  `projects_data_component_id` int(11) NOT NULL,
  `projects_data_quantity` int(11) NOT NULL,
  PRIMARY KEY (`projects_data_id`),
  KEY `owner_id` (`projects_data_owner_id`),
  KEY `project_id` (`projects_data_project_id`),
  KEY `component_id` (`projects_data_component_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=46 ;

--
-- Contenu de la table `projects_data`
--

INSERT INTO `projects_data` (`projects_data_id`, `projects_data_owner_id`, `projects_data_project_id`, `projects_data_component_id`, `projects_data_quantity`) VALUES
(1, 4, 1, 1, 10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
