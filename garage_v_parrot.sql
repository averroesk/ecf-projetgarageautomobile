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
-- Base de données : `garage_v_parrot`
--
/* CREATE DATABASE IF NOT EXISTS garage_v_parrot */
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
-- Index pour la table `vehicules_occasion`
--
ALTER TABLE `vehicules_occasion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `vehicules_occasion`
--
ALTER TABLE `vehicules_occasion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
