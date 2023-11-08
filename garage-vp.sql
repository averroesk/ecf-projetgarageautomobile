-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mer. 08 nov. 2023 à 12:48
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `garage-vp`
--

-- --------------------------------------------------------

--
-- Structure de la table `horaires_ouverture`
--

CREATE TABLE `horaires_ouverture` (
  `id` int(11) NOT NULL,
  `nom_jour` varchar(255) NOT NULL,
  `horaires_matin` varchar(255) NOT NULL,
  `horaires_soir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `horaires_ouverture`
--

INSERT INTO `horaires_ouverture` (`id`, `nom_jour`, `horaires_matin`, `horaires_soir`) VALUES
(1, 'Lundi', '11:00 - 12:00', '14:00 - 18:00'),
(2, 'Mardi', '10:00 - 12:00', '14:00 - 18:00'),
(3, 'Mercredi', '09:45 - 12:00', '14:00 - 18:00'),
(4, 'Jeudi', '08:45 - 12:00', '14:00 - 18:00'),
(5, 'Vendredi', '09:45 - 12:00', '14:00 - 18:00'),
(6, 'Samedi', '11: 00 - 12:00', '14:00 - 18:00'),
(7, 'Dimanche', 'Fermé', '');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `titre_service` text NOT NULL,
  `titre1` varchar(255) NOT NULL,
  `paragraphe1` text NOT NULL,
  `titre2` varchar(255) NOT NULL,
  `paragraphe2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `titre_service`, `titre1`, `paragraphe1`, `titre2`, `paragraphe2`) VALUES
(1, '          Service de réparation de véhicules   ', '          Article 1. Test. Test.', 'Integer ornare a mauris eget lobortis. Praesent sapien risus, pharetra a justo id, volutpat ultrices diam. Sed felis lectus, egestas non justo et, lobortis gravida justo. Ut sed odio sollicitudin, consectetur mauris sit amet, egestas leo. Vestibulum at varius ligula. Nunc rhoncus justo ut faucibus semper. Phasellus mattis porta nunc, ac interdum sem elementum non. Pellentesque pulvinar egestas lectus eget elementum. Nam nec porta lectus. Sed tempor posuere enim. Proin at ultricies diam, non vehicula diam. Pellentesque hendrerit sapien ultrices accumsan pellentesque. Suspendisse felis nulla, rhoncus ac fringilla id, placerat a dui. Curabitur rutrum erat libero, et semper erat consectetur vitae. Integer porttitor leo nec mauris pharetra, in luctus diam volutpat. Aliquam mollis iaculis nisl a lacinia. Sed eget elementum nibh. Sed sed tincidunt dui. Duis ut fringilla augue. Test service. Test service. Test service.', '          Article 2          ', 'Maecenas eu mauris vel nibh tempus faucibus. Integer in accumsan magna. Nam quis lacinia elit. Proin consequat pellentesque odio in rutrum. Donec eu aliquet nunc. Pellentesque ut arcu justo. Duis ut nulla nibh. Etiam dignissim venenatis blandit. Aliquam erat volutpat. Quisque viverra in lacus vel consequat. Cras ultrices aliquet purus, sit amet dignissim felis sollicitudin non. Vestibulum in nulla porta, consequat nisi a, porta ipsum. Sed quis mi a mi pharetra dapibus id ac felis. Integer viverra varius elit a pharetra.'),
(2, '  Service d\'entretien de véhicules  ', '  Article 1  ', 'Sed ut ante at lorem feugiat sagittis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus posuere est a magna feugiat consequat. Nam id tortor quis est tempus tempor. Sed vitae tortor elit. Sed congue in lacus a blandit. Integer posuere lobortis accumsan. Proin ante neque, sagittis sit amet tellus quis, ullamcorper fringilla velit. Sed sit amet quam non leo tempor venenatis. Quisque facilisis, purus commodo eleifend bibendum, lacus lorem tincidunt augue, eu ullamcorper nisl purus a orci. In hac habitasse platea dictumst.', '  Article 2  ', 'Aenean risus purus, accumsan id rhoncus nec, commodo quis neque. Sed ullamcorper quam nec lectus rhoncus pellentesque. Vivamus mattis quam nibh, nec mollis orci fringilla et. Vivamus quis porttitor orci. Integer dignissim at felis et bibendum. Proin non elit consequat, dignissim justo sed, pellentesque augue. Phasellus mollis viverra sollicitudin. Duis iaculis ut nisi interdum placerat. Quisque tristique ornare diam ac ultricies. Proin ante nisl, condimentum sed mi nec, interdum bibendum lorem. Duis tincidunt fringilla mauris, sed scelerisque urna porta at. Etiam sem diam, vehicula eu hendrerit in, finibus sit amet ex. Nunc sed eros sagittis, dictum libero et, egestas metus. Maecenas vestibulum augue vitae lobortis ullamcorper.'),
(3, 'Service d\'achat de véhicules d\'occasion', 'Article 1', 'Cras pretium dignissim tellus. Aliquam a finibus sem, et mollis mi. Maecenas faucibus urna non tellus cursus, eget dictum libero tempor. Praesent quis fermentum elit. Integer bibendum, tellus eu imperdiet pharetra, erat dolor vulputate arcu, sed aliquet est ante ac sem. Sed vel dolor sed erat pharetra gravida at rhoncus arcu. Curabitur eu urna sed tortor tempus tempus. Maecenas rutrum placerat nulla ultrices sodales. Nam imperdiet est ex, vel mattis leo lacinia eget. Ut ornare enim id lorem feugiat sagittis. Pellentesque dictum magna id mi condimentum, rutrum venenatis lacus commodo. Quisque faucibus odio porttitor fermentum fermentum. Duis nisi augue, sodales a est sed, feugiat pulvinar lorem. Praesent congue convallis nunc in auctor. Sed sed euismod sem, at volutpat urna.', 'Article 2', 'Sed fermentum fringilla arcu, accumsan tempus ligula feugiat quis. Nam lacinia scelerisque lectus, at hendrerit leo auctor vitae. Mauris tempus mauris a dignissim euismod. Duis ut dolor aliquet quam dignissim viverra quis at risus. Duis id mollis libero. In condimentum, felis ut ullamcorper maximus, risus lectus bibendum nisl, vitae bibendum nisl lectus quis nulla. Nam quis massa urna. Fusce non erat eu mi sodales ultricies eget a dolor. Integer ante ligula, pellentesque ac tellus nec, laoreet luctus magna. Donec sed ante urna. Sed eu turpis id ante elementum posuere eget id lectus. Donec aliquet volutpat mi, a sodales diam rhoncus sed. Nam sed justo feugiat neque molestie pulvinar. Integer at nisl ac risus luctus congue. Sed dignissim mattis convallis.');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` char(60) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `email`, `password`, `prenom`, `nom`, `role`) VALUES
(1, 'vincentparrot@test.com', '$2y$10$D6T.LhIAHAG81Ek0l4aaneI2BgrsI4ft3R7XCHfKgKgglMjh63xdq', 'Vincent', 'PARROT', 'admin'),
(4, 'jeandupont@test.com', '$2y$10$/PDSKfXy/TOYTsLZPcOhTOsTR/43K9bAyO5eJIaueZpQWvMfdSIBm', 'Jean', 'Dupont', 'employe');

-- --------------------------------------------------------

--
-- Structure de la table `vehicules_occasion`
--

CREATE TABLE `vehicules_occasion` (
  `id` int(11) NOT NULL,
  `image_voiture` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `titre_voiture` varchar(255) NOT NULL,
  `prix_voiture` int(255) NOT NULL,
  `annee_voiture` int(255) NOT NULL,
  `km_voiture` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `vehicules_occasion`
--

INSERT INTO `vehicules_occasion` (`id`, `image_voiture`, `titre_voiture`, `prix_voiture`, `annee_voiture`, `km_voiture`) VALUES
(1, 'image_audi.jpg', 'Audi', 100000, 2018, 80000),
(2, 'image_mercedes.jpg', 'Mercedes', 50000, 2019, 70000),
(3, 'image_lamborghini.png', 'Lamborghini', 150000, 2018, 150000),
(4, 'image_audir8.jpg', 'Audi R8', 180000, 2016, 160000),
(5, 'image_ferrari.jpg', 'Ferrari', 160000, 2020, 190000),
(6, 'image_toyota.jpg', 'Toyota', 40000, 2022, 190000),
(7, 'image_hyundai.jpg', 'Hyundai', 40000, 2023, 190000),
(8, 'image_montero.jpg', 'Montero Sport', 40000, 2022, 140000),
(9, 'image_range.jpg', 'Range Rover', 120000, 2019, 130000),
(13, '16976410391448757724-shenandoah-virginie.jpg', 'Test voiture', 200000, 2020, 100000),
(14, '16976423151156285191-mont-segla-ile-de-senja-norvege.jpg', 'Test voiture', 100000, 2020, 100000),
(15, '1697642349558914428-mont-segla-ile-de-senja-norvege.jpg', 'Test voiture', 100000, 2020, 100000),
(16, '169764237375816235-mont-segla-ile-de-senja-norvege.jpg', 'Test voiture', 100000, 2020, 100000),
(17, '1697642398773380613-chateau.jpg', 'Test voiture', 100000, 2020, 100000),
(18, '16976424511701286875-chateau.jpg', 'Test voiture', 100000, 2020, 100000),
(19, '169764247246670183-champ-de-lavande-sur-le-plateau-de-valensole-alpes-de-haute-provence.jpg', 'Test voiture', 100000, 2020, 100000),
(20, '16976553611165366712-le-grand-canyon-de-la-provence.jpg', 'Test V', 100000, 2020, 100000),
(21, '16978198531093113753-norddorf-auf-amrum-allemagne.jpg', 'Test voiture', 100000, 2020, 100000),
(23, '16978200521246992896-parc-forestier-glenariff-irlande.jpg', 'Test voiture', 100000, 2020, 100000);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `horaires_ouverture`
--
ALTER TABLE `horaires_ouverture`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vehicules_occasion`
--
ALTER TABLE `vehicules_occasion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `horaires_ouverture`
--
ALTER TABLE `horaires_ouverture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `vehicules_occasion`
--
ALTER TABLE `vehicules_occasion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
