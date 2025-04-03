-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 17 mars 2025 à 15:52
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pokedex-1`
--

-- --------------------------------------------------------

--
-- Structure de la table `pokemon`
--

DROP TABLE IF EXISTS `pokemon`;
CREATE TABLE IF NOT EXISTS `pokemon` (
  `id_pokemon` int(11) NOT NULL,
  `image_pokemon` varchar(500) DEFAULT NULL,
  `nom_pokemon` varchar(254) DEFAULT NULL,
  `description_pokemon` varchar(1000) DEFAULT NULL,
  `taille_pokemon` varchar(50) DEFAULT NULL,
  `poids_pokemon` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_pokemon`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pokemon`
--

INSERT INTO `pokemon` (`id_pokemon`, `image_pokemon`, `nom_pokemon`, `description_pokemon`, `taille_pokemon`, `poids_pokemon`) VALUES
(1, '../img/001.png', 'Bulbizarre', 'Au début de sa vie, il se nourrit des nutriments accumulés dans la graine sur son dos. Cela lui permet de grandir.', '0,7 m', '6,9 kg'),
(2, '../img/002.png', 'Herbizarre', 'Plus il expose au soleil, plus il emmagasine energie, ce qui permet au bourgeon sur son dos de se developper.', '1,0 m', '13,0 kg'),
(3, '../img/003.png', 'Florizarre', 'Ce Pokemon est capable de transformer la lumiere du soleil en energie. Il est donc encore plus fort en ete.', '2,0 m', '100,0 kg'),
(4, '../img/004.png', 'Salameche', 'La flamme au bout de sa queue représente sa vitalité. Quand Salamèche n’est pas au meilleur de sa forme, elle faiblit.', '0,6 m', '8,5 kg'),
(5, '../img/005.png', 'Reptincel', 'En agitant sa queue enflammée, il peut élever la température ambiante de manière exponentielle et ainsi tourmenter ses adversaires.', '1,1 m', '19,0 kg'),
(6, '../img/006.png', 'Dracaufeu', 'Quand Dracaufeu s’énerve réellement, la flamme au bout de sa queue devient bleue.', '1,7 m', '90,5 kg'),
(7, '../img/007.png', 'Carapuce', 'Ce Pokémon crache une écume redoutable. Après sa naissance, son dos gonfle et durcit pour former une carapace.', '0,5 m', '9,0 kg'),
(8, '../img/008.png', 'Carabaffe', 'Sa longue queue touffue est un symbole de longévité. Les personnes âgées apprécient donc particulièrement ce Pokémon.', '1,0 m', '22,5 kg'),
(9, '../img/009.png', 'Tortank', 'Il augmente délibérément sa masse corporelle pour contrer le recul de ses puissants jets d’eau.', '1,6 m', '85,5 kg\r\n'),
(10, '../img/010.png', 'Chenipan', 'Pour se protéger, il émet par ses antennes une odeur nauséabonde qui fait fuir ses ennemis.', '0,3 m', '2,9 kg'),
(11, '../img/011.png', 'Chrysacier', 'En attendant sa prochaine évolution, il ne peut que durcir sa carapace et rester immobile pour éviter de se faire attaquer.', '0,7 m', '9,9 kg'),
(12, '../img/012.png', 'Papilusion', 'Ce Pokémon raffole du nectar des fleurs. Il est capable de dénicher des champs fleuris même s’ils n’ont qu’une quantité infime de pollen.', '1,1 m', '32,0 kg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
