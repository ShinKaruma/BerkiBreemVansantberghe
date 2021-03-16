-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 16 mars 2021 à 09:35
-- Version du serveur :  8.0.23-0ubuntu0.20.04.1
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `site_immo`
--

-- --------------------------------------------------------

--
-- Structure de la table `Bien`
--

CREATE TABLE `Bien` (
  `IDb` int NOT NULL,
  `Type` int NOT NULL,
  `Desc` varchar(500) NOT NULL,
  `Jardin` varchar(3) NOT NULL,
  `Taille` varchar(10) NOT NULL,
  `NbPiece` int NOT NULL,
  `Prix` int NOT NULL,
  `Ville` varchar(15) NOT NULL,
  `Adresse` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Bien`
--

INSERT INTO `Bien` (`IDb`, `Type`, `Desc`, `Jardin`, `Taille`, `NbPiece`, `Prix`, `Ville`, `Adresse`) VALUES
(1, 2, 'Ce magnifique appartement T3 saura ravir vos envies avec sa chambre deux personnes et sa salle de bain possedant douche, lavabo avec miroir et son porte serviette chauffant. Avec une exposition plein sud ainsi que son quartier calme à quelques minutes en transport en communs du centre-ville, cet appartement aura le charme que vous cherchez', 'non', '65m²', 3, 125000, 'Paris', '5 rue chepaou'),
(2, 1, 'Idéalement située dans un quartier très recherché, cette maison récente vous séduira par ses volumes, sa luminosité et sa fonctionnalité. Son jardin de 1221 M² orienté plein sud sans vis à vis comprend une piscine 10 X 5 M. Elle offre: Un salon/salle à manger baigné de lumière grâce à de grandes baies vitrées, une cuisine semi ouverte avec coin dînatoire et cellier attenant, une chambre spacieuse avec salle de bains et dressing, et des WC séparés.', 'oui', '100m²', 5, 828000, 'Dijon', '12 rue de la rue'),
(3, 1, 'Cette villa vous séduira par sa luminosité, la qualité de sa construction et ses volumes. Superbe pièce de vie de 97m² avec cuisine ouverte, entourée de baies vitrées donnant sur le jardin. Bel agencement intérieur créant des espaces bien distincts comprenant une suite parentale de 42m², deux chambres de 25m² avec chacune sa salle d\'eau, un grand bureau de 40m², un cellier, une buanderie,et 2 wc indépendants.', 'oui', '300m²', 10, 950000, 'Lille', '20 rue kelkeupar'),
(4, 1, 'Maison de ville à Plaisir - 5 pièce (s) - 111 m². Maison de ville située dans le quartier recherché de l\'aqueduc, 1mn du nouveau centre commercial Open Sky, proche des parcs, écoles, centre médical, cinéma, gare et accès A86/N12. Venez découvrir cette maison de 5 pièces avec jardin arboré et terrasse. Maison équipée de panneaux solaires et ballon thermo-dynamique. Le tout édifié sur un terrain de 117 m².', 'oui', '111m²', 5, 310000, 'Marseille', '29 rue du poisson'),
(5, 1, 'Maison mitoyenne centre ville d\'orchies, proche toutes commodités et gare. Elle se compose d\'une pièce de vie traversante avec accès sur le jardin, une cuisine indépendante,une salle de douche avec wc. Le premier étage offre une chambre de 16m² et un coin nuit (8m²) avec placard. les combles d\'environ 25m² sont isolés et aménageables. ', 'oui', '100m²', 3, 172000, 'Grenoble', '54 rue de la chienne'),
(6, 1, 'Idéalement situé dans la commune de Marchiennes, belle rénovation pour cette maison familiale de 168m² sur une parcelle de 336m². Au rez de chaussée le hall d\'entrée dessert un bureau (ou une chambre) de 17m², puis sur l\'arrière de la maison, vous découvrirez une pièce de vie de 54m² comprenant salon, séjour, et cuisine équipée ouverte donnant sur le jardin. Egalement, au rez de chaussée une salle d\'eau, une buanderie, un wc.', 'oui', '150m²', 6, 229000, 'roubaix', '65 rue de l\'alma'),
(7, 2, 'Luxueux appartement de type T3 (FF4) avec double séjour, deux grandes chambres dont une avec balcon, salle d\'eau avec douche à l\'italienne et une baignoire, cuisine spacieuse entièrement équipée, terrasse, cave et rare sur le secteur, un garage en sous-sol. Au pied de toutes les commodités et du tramway L2, cette résidence recherchée, sécurisée, boisée et calme vous séduira à coup sûr !', 'non', '100m²', 3, 20000, 'phinlenpin', '59 rue de phinlenpin'),
(8, 2, 'Au deuxième étage d\'un immeuble avec ascenseur, T2/3 entièrement rénové à deux pas des Halles Laissac et de la gare. Il est parfait pour un pied à terre, une colocation ou même une résidence principale. Ses principaux atouts sont , mis à part l\'ascenseur, la luminosité et le calme en plein centre ville...', 'non', '70m²', 3, 145000, 'nice', '4 rue de bryce'),
(9, 2, 'Appartement 4 pièces traversant, en dernier étage d\'une résidence sécurisée avec parc arboré. Double séjour lumineux ouvert sur balcon exposé Sud offrant une vue dégagée et sans vis à vis. Cuisine séparée, 2 chambres, dressing, Salle de bains avec buanderie et WC indépendants.', 'non', '95m²', 4, 200000, 'bordeaux', '7 rue du vin'),
(10, 2, 'Appartement T3 de 60m² composé d\'une entrée, d\'un grand séjour avec cuisine ouverte, d\'un couloir desservant deux chambres mobilier sur mesure, d\'une salle de bains et de WC séparés. Fonctionnel et lumineux, ce bien dispose également d\'une belle terrasse de 24,15 m² avec vue dégagée et d\'un emplacement de stationnement au sous-sol', 'non', '86m²', 3, 153000, 'la-rochelle', '94 rue du cailloux'),
(11, 2, 'T3 au 2ème étage sur 3 avec ascenseur au sein d\'une copropriété récente (2015) sécurisée bordant l\'agriparc des Grisettes. L\'appartement offre une belle vue dégagée sur les vignes avec deux belles chambres et grande terrasse, le tout au calme complet. L\'appartement dispose également d\'un garage et d\'un parking au rez-de-chaussée. ', 'non', '69m²', 3, 195000, 'Issou', 'rue du rissitas'),
(12, 2, 'T3 de 60 m2 environ sur le quartier Mas Drevon au 4ème et dernier étage. L\'appartement dispose d\'une entrée avec placard, cuisine indépendante avec loggia, séjour donnant sur terrasse, 2 chambres, salle d\'eau, wc, cave, parking libre. L\'appartement est traversant, exposé Sud-Ouest. Il nécessite un rafraîchissement.A proximité immédiate du tram ligne 2 et de toutes les commodités. ', 'non', '67m²', 5, 155000, 'soupex', '7 rue du potiron'),
(13, 3, 'Immeuble de rapport. A VENDRE IMMEUBLE DE RAPPORT - ROUBAIX HYPER CENTRE\r\nLions Habitat vous propose ce magnifique immeuble Hausmanien de très haut standing, entièrement rénové de 468 m². Proche de toutes commodités commerces, métro, écoles.Il se compose de: 6 appartements T3 cadastrés avec cachet préservé, offrant de belles prestations dont 2 avec terrasses bien exposées, 7 compteurs électriques, 6 compteurs d\'eaux, 8 places de parking interieures', 'non', '468m²', 18, 970000, 'drip', '9 rue de la drippperie'),
(14, 3, 'Immeuble à vendre Roubaix. Roubaix Conservatoire, dans un secteur recherché, en exclusivité, venez découvrir cet immeuble de 624 m² (485 m² chauffé) pouvant accueillir appartement, local commercial... Plusieurs places de stationnements sécurisées.', 'non', '624m²', 20, 970000, 'googleton', '60 rue de la recherche');

-- --------------------------------------------------------

--
-- Structure de la table `TypeBien`
--

CREATE TABLE `TypeBien` (
  `IdType` int NOT NULL,
  `LibeleeType` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `TypeBien`
--

INSERT INTO `TypeBien` (`IdType`, `LibeleeType`) VALUES
(1, 'Maison'),
(2, 'Appart'),
(3, 'Immeuble'),
(4, 'Terrain_nu'),
(5, 'commerce');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `login` varchar(20) NOT NULL,
  `passe` varchar(16) NOT NULL,
  `droits` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`login`, `passe`, `droits`) VALUES
('agent1', 'agent1', 1),
('agent2', 'agent2', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Bien`
--
ALTER TABLE `Bien`
  ADD PRIMARY KEY (`IDb`);

--
-- Index pour la table `TypeBien`
--
ALTER TABLE `TypeBien`
  ADD PRIMARY KEY (`IdType`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Bien`
--
ALTER TABLE `Bien`
  MODIFY `IDb` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `TypeBien`
--
ALTER TABLE `TypeBien`
  MODIFY `IdType` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
