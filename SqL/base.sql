-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  mer. 11 déc. 2019 à 16:28
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `contenue` text NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `contenue`, `created_at`, `update_at`, `user_id`, `slug`) VALUES
(4, 'zaeaz', 'zezeazeazezea', '2019-12-04 16:12:34', '2019-12-04 16:12:34', 1, 'zaeaz'),
(5, 'ooooo', 'ooooefezdfefvbcdfsvbc fdsvc bv', '2019-12-04 16:13:04', '2019-12-04 16:13:04', 1, 'oooooo'),
(6, 'dfgh', 'dfg', '2019-12-10 11:42:30', '2019-12-10 11:42:30', 1, 'fgh'),
(7, 'dfghj', 'fdghj', '2019-12-10 11:42:50', '2019-12-10 11:42:50', 1, 'fghjk'),
(8, 'Hassen', 'Salut je suis Hassen un jeune musulman respectueux qui na jamais volé (enfin si une fois mais c\'était un carambar dans une statoin essence et ùmaintenant je regrette) du coup aujourdhui je suis tres chaste comme Tom hein pas vrai tom ? \"tom : oui je suis aussi chaste que mon nami Hassen\" ensui', '2019-12-10 14:53:18', '2019-12-10 14:53:18', 1, 'hassen'),
(9, 'le souvenir doulereux #1', 'en plein milieu d\'une grotte dans une montagne en levitation, nous fume reperé par une espece etrangement etrange car la derniere fois que jetais dehors il y avais plusieur centaine de montres Legandaire, le roi de cette tribu se nomme SUPRA Raven c\'est celui qui a  tué mon pote Tom, il etait bouboule avec ces joues maintenant a cvause de SUPRA Raven je peu plus tater les jioues de mon nami Tom Litaudon ni demander quelque pouvoir a son frere sam qui se nome freeeeeeeeeeezaaaa !!!!!!!! FREEEEEEEEEEEZAAAA VS SUPRA RAVEN (prochain episode ou devraije dier prochain article)', '2019-12-10 14:59:15', '2019-12-10 14:59:15', 1, 'sisilafamil'),
(10, 'le combat final !!!!!!!', 'nous continuons a marche, en disant \"nous\" je veux dire \"moi\" car mon nami Tom a été tuer par RAVEN. la derniere phrase de Tom etait \"ilé tro bo wlh\".....apres ce tragique accident je fus tombé dans un precipisse ou lequel jai vus passe indianajones.\r\ndu coup jetais plus tout seul jetais meme avec une personne que jadmirais enormemeny', '2019-12-10 15:21:51', '2019-12-10 15:21:51', 1, 'samVSraven');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment` varchar(255) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `update_at`) VALUES
(1, 'tom', 'tomtomtom', '2019-12-03 11:24:57', '2019-12-03 11:24:57'),
(2, 'sdfgh', 'dfgh', '2019-12-11 15:47:25', '2019-12-11 15:47:25'),
(3, 'aze', 'az', '2019-12-11 15:47:37', '2019-12-11 15:47:37'),
(4, 'toma', 'sdfghj', '2019-12-11 15:48:50', '2019-12-11 15:48:50'),
(7, '', '', '2019-12-11 16:16:59', '2019-12-11 16:16:59');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `fk_article_user_id` (`user_id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comments_user_id` (`user_id`),
  ADD KEY `fk_comments_article_id` (`article_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `fk_article_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_comments_article_id` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`),
  ADD CONSTRAINT `fk_comments_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
