-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : database
-- Généré le : dim. 18 fév. 2024 à 10:05
-- Version du serveur : 10.4.4-MariaDB-1:10.4.4+maria~bionic
-- Version de PHP : 8.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `artbox`
--

-- --------------------------------------------------------

--
-- Structure de la table `oeuvres`
--

CREATE TABLE `oeuvres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(128) COLLATE latin1_general_ci NOT NULL,
  `artist` varchar(64) COLLATE latin1_general_ci NOT NULL,
  `description` longtext COLLATE latin1_general_ci NOT NULL,
  `image` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `oeuvres`
--

INSERT INTO `oeuvres` (`id`, `title`, `artist`, `description`, `image`) VALUES
(1, 'Dodomu', 'Mia Tozerski', 'Mia Tozerski est une artiste peintre ukrainienne réfugiée de la guerre. Sur cette œuvre, Dodomu (\"\"domicile\"\" en ukrainien), elle nous montre la tristesse du peuple ukrainien qu\'elle partage, ayant elle-même dû quitter son foyer. L\'œuvre évoque le drapeau liquéfié d\'une Ukraine en souffrance, pleurant la mort de ses compatriotes. Ce travail chargé d\'émotion est le symbole d\'un événement qui marquera l\'Histoire. Cette peinture à l\'acrylique rayonne grâce à son fond lisse et ses mélanges de couleurs éclatantes.', 'img/clark-van-der-beken.png'),
(2, 'La marée rouge', 'Martin Rodriguez', 'Vivamus quis odio vel ligula feugiat facilisis. Donec eleifend pellentesque massa, ut malesuada est bibendum sit amet. Morbi tincidunt nec tellus vel ornare. Mauris dolor tellus, gravida eget euismod eu, viverra eget urna. Phasellus feugiat ipsum nec lorem accumsan, sed porta quam dictum massa nunc.', 'img/pawel-czerwinski-2.png'),
(3, 'Asimilacion', 'Angel Sanchez-Fernandez', 'Mauris ut justo ac mi pretium eleifend. Curabitur sed magna ut elit facilisis pharetra. Maecenas tincidunt fermentum ipsum ut sollicitudin. Nullam feugiat, neque vel egestas sollicitudin, quam leo mattis mauris, in lacinia sem mi id risus. Nullam ultrices quam eu leo auctor tempus. Fusce vestibulum mi ex, vel ultricies purus mollis sollicitudin. Aenean ac vehicula ipsum. Nam turpis ante, ultrices eget odio sed, luctus bibendum mauris sodales sed.', 'img/steve-johnson-2.png'),
(4, 'La Galaxia Gialla', 'Eduardo Tancredi', 'Mauris maximus, orci sollicitudin ultrices elementum, tellus neque feugiat leo, quis lobortis purus neque vel lectus. Ut sagittis eros id lectus porttitor tincidunt. Donec scelerisque diam nec felis egestas, eget finibus ante porttitor. Sed malesuada sapien ut semper accumsan. Duis tristique dui vel egestas porttitor. Nunc tristique dapibus orci a amet.', 'img/fly-d.png'),
(5, 'Puffy Amalgamate', 'Sandro De Blasi', 'Donec semper a massa quis congue. In malesuada lorem ligula, ut posuere magna pulvinar in. Proin vitae enim gravida, commodo odio.', 'img/orfeas-green.png'),
(6, 'Mirage', 'Stéphanie Kaiser', 'Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam iaculis lorem ac ex tristique egestas et nec sapien. Donec tincidunt id erat sit amet tempus. Nullam vel molestie dui. Duis a neque massa. Vivamus quis ornare lacus. Nullam eleifend condimentum egestas. Vivamus magna purus, fermentum mollis mauris sed, consectetur interdum libero. Duis interdum tortor tellus, eget sollicitudin quis.', 'img/steve-johnson-4.png'),
(7, 'Blaue Gelbe Muster', 'Adelheid Von Schreiber', 'Curabitur dui odio, porta vel tempor sed, consectetur vitae mi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Orci varius natoque penatibus nec.', 'img/steve-johnson-3.png'),
(8, 'Aashaaheen Baadal', 'Anaisha Devi', 'Sur cette oeuvre conceptuelle à la fois organique, minérale et liquide, Anaisha Devi nous transporte dans un nuage noir envoûtant. Un sombre tableau qui, par son verni éclatant, rayonne tel un marbre poli. Une oeuvre à la cohérence transcendantale, exécutée à la perfection', 'img/pawel-czerwinski-3.png'),
(9, 'Nightlife Traffic', 'Andrew Forsythe', 'Quisque accumsan ultrices ligula vestibulum posuere. Aliquam feugiat ligula eget massa blandit condimentum. Morbi volutpat erat luctus suscipit pellentesque. Quisque cursus tempor nibh at sollicitudin. Sed blandit libero velit. Etiam tincidunt facilisis mollis. Ut mollis nunc sit amet lacinia luctus. Suspendisse volutpat enim semper arcu rutrum, et iaculis risus interdum. Duis at libero.', 'img/dan-cristian-padure.png'),
(10, 'Le refuge de l\'Havre', 'Simon Pelletier', 'Nam tempus neque nec felis venenatis auctor. Nam velit risus, lobortis eu quam non, interdum efficitur nibh. Phasellus a augue ac orci lacinia mattis et vel lectus. Sed nec tellus urna. Donec at turpis turpis. Cras quam tellus, imperdiet vitae finibus id, varius quis felis. Maecenas blandit eleifend risus, vel hendrerit erat dignissim id. Nullam at laoreet nibh. Nulla gravida varius sollicitudin. Etiam non aliquam diam, tempor varius sapien. Aenean et velit eu nisi lobortis massa nunc.', 'img/steve-johnson-5.png'),
(11, 'Red Washover', 'Kit Van Der Borght', 'Nunc euismod ullamcorper tortor, id efficitur ante interdum in. Integer eu condimentum nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras viverra suscipit feugiat. Mauris vehicula luctus tellus, eu hendrerit libero laoreet ut. In tristique vehicula nisl in tempus. Morbi tempus aliquet gravida. In eget est congue, rhoncus sapien at, cursus metus.', 'img/steve-johnson.png'),
(12, 'Chromatics', 'Jean-Michel Delatronchette', 'Vivamus commodo non libero at hendrerit. In lacinia dui sit amet pellentesque iaculis. Donec at ultricies sem porttitor.', 'img/pawel-czerwinski.png'),
(13, 'Digital Negative', 'Hamish McKee', 'Integer in nisl posuere, pulvinar ex ac, tincidunt risus. Nullam vel lorem et leo dignissim accumsan. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempor, magna non consectetur dapibus, est libero iaculis lacus, eget semper turpis orci vitae felis. Fusce eget molestie.', 'img/jazmin-quaynor.png'),
(14, 'Blast from the past', 'Juliette Baskerville', 'Nunc fermentum purus dapibus justo fermentum auctor. Maecenas non tincidunt leo. Morbi vitae iaculis sem. Donec quis scelerisque massa. Fusce quis accumsan diam, et interdum lectus. Suspendisse mattis pulvinar vehicula. Duis nisi.', 'img/steve-johnson-6.png'),
(15, 'Hurricane', 'Natalie Wellington', 'Aliquam tristique tempus molestie. Nulla nisl eros, dapibus eu lectus in, cursus accumsan arcu. Suspendisse bibendum diam dignissim porta maximus. Praesent sollicitudin consectetur faucibus. Cras pulvinar massa a orci rutrum, id blandit enim viverra. Praesent sed congue augue. Suspendisse efficitur, nisl quis finibus faucibus, lacus felis bibendum leo, eu euismod lacus mauris in felis. Quisque dignissim et dui et aliquet. Donec ut lobortis eros, vitae tincidunt augue metus.', 'img/victor-grabarczyk.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `oeuvres`
--
ALTER TABLE `oeuvres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`,`artist`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `oeuvres`
--
ALTER TABLE `oeuvres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
