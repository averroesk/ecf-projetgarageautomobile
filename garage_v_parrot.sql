SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de données : `garage_v_parrot`
-- 
-- CREATE DATABASE IF NOT EXISTS garage_v_parrot 

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
(6, 'Samedi', '08:45 - 12:00', '14:00 - 18:00'),
(7, 'Dimanche', 'Fermé', '');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
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
(9, 'image_range.jpg', 'Range Rover', 120000, 2019, 130000);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `horaires_ouverture`
--
ALTER TABLE `horaires_ouverture`
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
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `vehicules_occasion`
--
ALTER TABLE `vehicules_occasion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

