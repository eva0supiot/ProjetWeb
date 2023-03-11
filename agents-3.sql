-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : sam. 11 mars 2023 à 22:09
-- Version du serveur :  5.7.34
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `agentsImmobilier`
--

-- --------------------------------------------------------

--
-- Structure de la table `agents`
--

CREATE TABLE `agents` (
  `id` int(11) NOT NULL,
  `Prenom` varchar(25) NOT NULL,
  `nomAgent` varchar(25) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `num` int(10) NOT NULL,
  `specialite` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `etude` varchar(80) NOT NULL,
  `experience` varchar(200) NOT NULL,
  `lundimatin` int(11) NOT NULL,
  `lundiaprem` int(11) NOT NULL,
  `lundi` varchar(300) NOT NULL,
  `mardimatin` int(11) NOT NULL,
  `mardiaprem` int(11) NOT NULL,
  `mardi` varchar(300) NOT NULL,
  `mercredimatin` int(11) NOT NULL,
  `mercrediaprem` int(11) NOT NULL,
  `mercredi` varchar(300) NOT NULL,
  `jeudimatin` int(11) NOT NULL,
  `jeudiaprem` int(11) NOT NULL,
  `jeudi` varchar(300) NOT NULL,
  `vendredimatin` int(11) NOT NULL,
  `vendrediaprem` int(11) NOT NULL,
  `vendredi` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `agents`
--

INSERT INTO `agents` (`id`, `Prenom`, `nomAgent`, `Email`, `num`, `specialite`, `age`, `etude`, `experience`, `lundimatin`, `lundiaprem`, `lundi`, `mardimatin`, `mardiaprem`, `mardi`, `mercredimatin`, `mercrediaprem`, `mercredi`, `jeudimatin`, `jeudiaprem`, `jeudi`, `vendredimatin`, `vendrediaprem`, `vendredi`) VALUES
(1, 'Louison', 'David', 'louison.david@immobeelier.fr', 651234266, 'Immobilier résidentiel', 20, 'Berlin', '- équipier chez Mc Donalds\r\n- Stage en agence immobilière/ Paris\r\n- 8 ans: freelance dans la vente de biens immobilier', 9, 0, '8h-16h', 0, 0, '8h-16h', 3, 3, 'Indisponible', 0, 3, '8h-12h', 9, 0, '8h-16h'),
(2, 'Julie', 'Legrand', 'julie.legrand@immobeelier.fr', 656887008, 'Immobilier résidentiel', 30, 'Londres', '- vendeuse Zara \r\n- stage dans un cabinet dentaire gestion d\'équipe d\'agents immobilier \r\n- 4 ans chez Bee Immobilier', 0, 3, '8h-12h', 3, 0, '12h-16h', 9, 0, '8h-16h', 0, 0, '8h-16h', 0, 0, '8h-16h'),
(3, 'Eva', 'Supiot', 'eva.supiot@immobeelier.fr', 654546997, 'Immobilier résidentiel', 27, 'La Sorbonne', '- stage de 8 mois chez Bee Immobilier', 0, 0, '8h-16h', 0, 0, '8h-16h', 3, 3, 'Indisponible', 0, 0, '8h-16h', 0, 0, '8h-16h'),
(4, 'Baptiste', 'Picot', 'baptiste.picot@immobeelier.fr', 654247997, 'Immobilier résidentiel', 29, 'Stockholm', '- Stage de 6 mois dans une agence immobilière \r\n- 10 ans chez Bee Immobilier', 9, 0, '8h-16h', 0, 0, '8h-16h', 3, 3, 'Indisponible', 0, 3, '8h-12h', 9, 0, '8h-16h'),
(5, 'Sara', 'Souleiman', 'sara.souleiman@immobeelier.fr', 654453890, 'Immobilier résidentiel', 42, 'Marseille ', '- équipier chez Mc Donalds\r\n- Stage en agence immobilière/ Paris\r\n- 8 ans: freelance dans la vente de biens immobilier 8 ans chez Bee Immobilier', 0, 3, '8h-12h', 3, 0, '12h-16h', 9, 0, '8h-16h', 0, 0, '8h-16h', 0, 0, '8h-16h'),
(6, 'Terrier', 'Christopher', 'christopher.terrier@immobeelier.fr', 674658908, 'Immobilier commercial', 45, 'Avignon', '- 6 ans: agent immobilier dans une agence immobilière \r\n- 10 ans chez Bee Immobilier', 0, 0, '8h-16h', 0, 0, '8h-16h', 3, 3, 'Indisponible', 0, 0, '8h-16h', 0, 0, '8h-16h'),
(7, 'Victor', 'Laville', 'victor.laville@immobeelier.fr', 643290767, 'Immobilier commercial', 38, 'Berlin', '- vendeuse Zara \r\n- stage dans un cabinet dentaire \r\n- gestion d\'équipe d\'agents immobilier \r\n- 4 ans chez Bee Immobilier', 9, 0, '8h-16h', 0, 0, '8h-16h', 3, 3, 'Indisponible', 0, 3, '8h-12h', 9, 0, '8h-16h'),
(8, 'Benjamin', 'Serret', 'benjamin.serret@immobeelier.fr', 682734259, 'Immobilier commercial', 40, 'Londres', '- 6 ans: agent immobilier dans une agence immobilière \r\n- 10 ans chez Bee Immobilier', 0, 3, '8h-12h', 3, 0, '12h-16h', 9, 0, '8h-16h', 0, 0, '8h-16h', 0, 0, '8h-16h'),
(9, 'Ghita', 'Ouannane', 'ghita.ouannane@immobeelier.fr', 698290182, 'Immobilier commercial', 45, 'La Sorbonne', '- Stage de 6 mois dans une agence immobilière \r\n- 10 ans chez Bee Immobilier', 0, 0, '8h-16h', 0, 0, '8h-16h', 3, 3, 'Indisponible', 0, 0, '8h-16h', 0, 0, '8h-16h'),
(10, 'Téo', 'Pennecot', 'teo.pennecot@immobeelier.fr', 642727878, 'Immobilier commercial', 35, 'Stockholm', '- stage de 8 mois chez Bee Immobilier', 9, 0, '8h-16h', 0, 0, '8h-16h', 3, 3, 'Indisponible', 0, 3, '8h-12h', 9, 0, '8h-16h'),
(11, 'Elliot', 'Thomas', 'elliot.thomas@immobeelier.fr', 625298926, 'Terrain', 31, 'Marseille', '- vendeur Zara \r\n- stage dans un cabinet dentaire \r\n- gestion d\'équipe d\'agents immobilier \r\n- 4 ans chez Bee Immobilier', 0, 3, '8h-12h', 3, 0, '12h-16h', 9, 0, '8h-16h', 0, 0, '8h-16h', 0, 0, '8h-16h'),
(12, 'Leticia', 'Caron', 'leticia.caron@immobeelier.fr', 682837911, 'Terrain', 35, 'Avignon', '- Stage de 12 mois dans une agence immobilière \r\n- 10 ans chez Bee Immobilier', 0, 0, '8h-16h', 0, 3, '8h-12h', 3, 0, '12h-16h', 0, 0, '8h-16h', 0, 0, '8h-16h'),
(13, 'Ilian', 'Davo', 'ilian.davo@immobeelier.fr', 688554689, 'Terrain', 35, 'Berlin', '- équipier chez Mc Donalds\r\n- Stage en agence immobilière/ Paris\r\n- 8 ans: freelance dans la vente de biens immobilier \r\n- 8 ans chez Bee Immobilier', 9, 0, '8h-16h', 0, 0, '8h-16h', 3, 3, 'Indisponible', 0, 3, '8h-12h', 9, 0, '8h-16h'),
(14, 'Alexandre', 'Mitta', 'alexandre.mitta@immobeelier.fr', 644329872, 'Terrain', 42, 'Londres', '- 9 ans chez Bee Immobilier', 0, 3, '8h-12h', 3, 0, '12h-16h', 9, 0, '8h-16h', 0, 0, '8h-16h', 0, 0, '8h-16h'),
(15, 'Fulop', 'Ludivine', 'ludivine.fulop@immobeelier.fr', 652438092, 'Terrain', 35, 'La Sorbonne', '- vendeuse Zara \r\n- stage dans un cabinet dentaire \r\n- gestion d\'équipe d\'agents immobilier \r\n- 4 ans chez Bee Immobilier', 0, 0, '8h-16h', 0, 0, '8h-16h', 3, 3, 'Indisponible', 0, 0, '8h-16h', 0, 0, '8h-16h'),
(16, 'Julie', 'Peltier', 'julie.peltier@immobeelier.fr', 646682691, 'Appartement à louer', 35, 'Stockholm', '- 12 ans chez Bee Immobilier', 9, 0, '8h-16h', 0, 0, '8h-16h', 0, 3, '8h-12h', 3, 0, '12h-16h', 0, 0, '8h-16h'),
(17, 'Matthieu', 'Gregoire', 'matthieu.gregoire@immobeelier.fr', 644290176, 'Appartement à louer', 33, 'Marseille ', '- Stage de 6 mois dans une agence immobilière \r\n- 10 ans chez Bee Immobilier', 0, 0, '8h-16h', 3, 3, 'Indisponible', 0, 9, '8h-16h', 0, 0, '8h-16h', 0, 0, '8h-16h'),
(18, 'Lucy', 'Thierry', 'lucy.thierry@immobeelier.fr', 652781098, 'Appartement à louer', 35, 'Avignon', '- 6 ans: agent immobilier dans une agence immobilière \r\n- 10 ans chez Bee Immobilier', 0, 0, '8h-16h', 0, 0, '8h-16h', 3, 3, 'Indisponible', 0, 0, '8h-16h', 0, 0, '8h-16h'),
(19, 'Helene', 'Dupuy', 'helene.dupuy@immobeelier.fr', 652781098, 'Appartement à louer', 43, 'Madrid', '- équipier chez Mc Donalds\r\n- Stage en agence immobilière/ Paris\r\n- 8 ans: freelance dans la vente de biens immobilier \r\n- 8 ans chez Bee Immobilier', 9, 0, '8h-16h', 0, 0, '8h-16h', 3, 3, 'Indisponible', 0, 3, '8h-12h', 9, 0, '8h-16h'),
(20, 'Danielle', 'Hamel', 'danielle.hamel@immobeelier.fr', 799261657, 'Appartement à louer', 42, 'Barcelone', '- vendeuse Zara \r\n- stage dans un cabinet dentaire \r\n- gestion d\'équipe d\'agents immobilier \r\n- 4 ans chez Bee Immobilier', 0, 3, '8h-12h', 3, 0, '12h-16h', 9, 0, '8h-16h', 0, 0, '8h-16h', 0, 0, '8h-16h');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
