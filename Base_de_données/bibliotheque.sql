-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 24 oct. 2018 à 21:16
-- Version du serveur :  10.1.33-MariaDB
-- Version de PHP :  7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bibliotheque`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `AID` int(11) NOT NULL,
  `ANOM` varchar(150) NOT NULL,
  `APRENOM` varchar(150) NOT NULL,
  `AEMAIL` varchar(150) NOT NULL,
  `APASS` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`AID`, `ANOM`, `APRENOM`, `AEMAIL`, `APASS`) VALUES
(1, 'Riaze', 'Ahamed', 'admin@gmail.com', 'riazeahamed143');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `CID` int(11) NOT NULL,
  `LID` int(11) NOT NULL,
  `MID` int(50) DEFAULT NULL,
  `COMM` varchar(150) NOT NULL,
  `LOGS` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

CREATE TABLE `demande` (
  `DID` int(11) NOT NULL,
  `MID` int(11) NOT NULL,
  `MES` text NOT NULL,
  `LOGS` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `demande`
--

INSERT INTO `demande` (`DID`, `MID`, `MES`, `LOGS`) VALUES
(1, 4, 'Je voudrais roman policier', '2017-11-20 13:52:55'),
(2, 1, 'can u upload european food books pls', '2017-11-20 14:03:46'),
(6, 1, 'can u upload some linux books plsss', '2018-10-07 02:42:57'),
(7, 5, 'je veux encore quelque livres par rapport java poo pls', '2018-10-12 19:03:37'),
(14, 6, 'Je voudrais roman policier', '2018-10-13 15:30:32'),
(15, 7, 'can u upload european food books pls', '2018-10-13 15:34:36');

-- --------------------------------------------------------

--
-- Structure de la table `livres`
--

CREATE TABLE `livres` (
  `LID` int(50) NOT NULL,
  `LNOM` varchar(150) NOT NULL,
  `MOTCLE` varchar(150) NOT NULL,
  `CATEGORIES` varchar(150) NOT NULL,
  `DOSSIER` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livres`
--

INSERT INTO `livres` (`LID`, `LNOM`, `MOTCLE`, `CATEGORIES`, `DOSSIER`) VALUES
(3, 'Carnet_de_Recettes', 'Cuisine, Recettes', 'cuisine', 'upload/Carnet_de_Recettes.pdf'),
(4, 'Livret-Menu-Noel', 'Cuisine, Recette', 'cuisine', 'upload/Livret-Menu-Noel.pdf'),
(5, 'Developpez votre humour', 'Humour', 'humour', 'upload/Developpez votre humour.pdf'),
(6, 'Romans-Droles', 'Humour', 'humour', 'upload/Romans-Droles.pdf'),
(7, 'Pratique de la psychologie scolaire', 'Scolaire, Psychologie ', 'scolaire', 'upload/psychologie.pdf'),
(8, 'Livre blanc sur le sport', 'sport', 'sport', 'upload/livreblanc.pdf'),
(9, 'Concepts et langages des Bases de DonnÃ©es', 'Bases de DonnÃ©es, Informatique', 'informatique', 'upload/sgbd1_cours.pdf'),
(10, 'INITIATION A Lâ€™ALGORITHMIQUE ', 'Algorithme, Informatique', 'informatique', 'upload/algoINF102_2007.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `MID` int(11) NOT NULL,
  `NOM` varchar(150) NOT NULL,
  `PRENOM` varchar(150) NOT NULL,
  `EMAIL` varchar(150) NOT NULL,
  `ADDRESSE` varchar(150) NOT NULL,
  `CODEPOSTAL` int(150) NOT NULL,
  `VILLE` varchar(150) NOT NULL,
  `TELEPHONE` int(150) NOT NULL,
  `PASS` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`MID`, `NOM`, `PRENOM`, `EMAIL`, `ADDRESSE`, `CODEPOSTAL`, `VILLE`, `TELEPHONE`, `PASS`) VALUES
(5, 'Riaze', 'ahamed', 'ria.thas20@gmail.com', '8, rue des palombes', 77340, 'pontault combault', 695429394, 'riazeahamed143'),
(6, 'rejina', 'begam', 'rejina@hotmail.com', 'sirajulamillath street', 77450, 'torcy', 215582158, 'rejina'),
(7, 'hajira', 'BEE', 'hajira@hotmail.fr', 'ibrahim gardan', 60510, 'noisel', 120222253, 'hajira'),
(9, 'hajira', 'BEE', 'hajira@free.fr', 'ibrahim gardan', 60510, 'noisel', 120222253, 'hajira'),
(11, 'rejina', 'begam', 'rejina@hotmail.com', 'sirajulamillath street', 77450, 'torcy', 215582158, '1234');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AID`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`CID`);

--
-- Index pour la table `demande`
--
ALTER TABLE `demande`
  ADD PRIMARY KEY (`DID`);

--
-- Index pour la table `livres`
--
ALTER TABLE `livres`
  ADD PRIMARY KEY (`LID`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`MID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `AID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `demande`
--
ALTER TABLE `demande`
  MODIFY `DID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `livres`
--
ALTER TABLE `livres`
  MODIFY `LID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `MID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
