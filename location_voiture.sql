-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : lun. 21 juil. 2025 à 03:43
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `location_voiture`
--

-- --------------------------------------------------------

--
-- Structure de la table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `car_name` varchar(255) NOT NULL,
  `car_prix` double NOT NULL,
  `category` varchar(255) NOT NULL,
  `disponible` tinyint(1) NOT NULL,
  `option_1` varchar(255) NOT NULL,
  `option_2` varchar(255) NOT NULL,
  `option_3` varchar(255) NOT NULL,
  `quantite` int(11) NOT NULL,
  `affiche` tinyint(1) NOT NULL DEFAULT 0,
  `date_retour` date DEFAULT NULL,
  `disponible_on` date DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `completed_option` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cars`
--

INSERT INTO `cars` (`id`, `car_name`, `car_prix`, `category`, `disponible`, `option_1`, `option_2`, `option_3`, `quantite`, `affiche`, `date_retour`, `disponible_on`, `image`, `completed_option`, `created_at`, `updated_at`) VALUES
(1, 'class a', 699, 'mercedes', 0, 'Blue', '4.2s', 'Manuelle', 2, 1, NULL, '2025-08-01', 'images/1753058602.png', 1, '2025-07-20 14:56:47', '2025-07-20 22:43:22'),
(2, 'kia ev3', 300, 'dacia', 1, 'black', '4.2s', 'Manuelle', 1, 1, NULL, NULL, 'images/1753054218.png', 0, '2025-07-20 21:30:18', '2025-07-20 21:30:18'),
(3, 'kia ev5', 600, 'kia', 1, 'Blue', '1.3s', 'Manuelle', 3, 0, NULL, NULL, 'images/1753054567.png', 0, '2025-07-20 21:31:35', '2025-07-20 21:36:07'),
(4, 'aoudi rs3', 800, 'aoudi', 1, 'Green', '7.2s', 'Automatic', 1, 0, NULL, NULL, 'images/1753054608.png', 0, '2025-07-20 21:32:21', '2025-07-20 21:36:48'),
(5, 'aoudi rs6', 950, 'aoudi', 1, 'Gray', '3.2s', 'Automatic', 2, 1, NULL, NULL, 'images/1753054395.png', 1, '2025-07-20 21:33:15', '2025-07-20 21:33:15'),
(6, 'kia ev1', 299, 'kia', 1, 'Gray', '9.2s', 'Manuelle', 1, 1, NULL, NULL, 'images/1753054631.png', 1, '2025-07-20 21:34:03', '2025-07-20 21:37:11'),
(7, 'aoudi rs5', 799, 'aoudi', 1, 'Gray', '1.3s', 'Automatic', 1, 0, NULL, NULL, 'images/1753054488.png', 0, '2025-07-20 21:34:48', '2025-07-20 21:34:48'),
(8, 'kia ev2', 399, 'kia', 1, 'Gray', '3.2s', 'Manuelle', 4, 0, NULL, NULL, 'images/1753054533.png', 0, '2025-07-20 21:35:33', '2025-07-20 21:35:33'),
(9, 'aoudi q3', 499, 'aoudi', 1, 'Gray', '4.2s', 'Automatic', 1, 0, NULL, NULL, 'images/1753055422.png', 0, '2025-07-20 21:50:22', '2025-07-20 21:50:22'),
(10, 'kia ev7', 300, 'kia', 1, 'Gray', '7.2s', 'Manuelle', 1, 0, NULL, NULL, 'images/1753055455.png', 0, '2025-07-20 21:50:55', '2025-07-20 21:50:55'),
(11, 'kia ev1', 350, 'kia', 1, 'Green', '1.3s', 'Manuelle', 1, 0, NULL, NULL, 'images/1753055514.png', 0, '2025-07-20 21:51:54', '2025-07-20 21:51:54'),
(12, 'kia ev3', 280, 'kia', 1, 'Gray', '4.2s', 'Manuelle', 1, 0, NULL, NULL, 'images/1753055563.png', 0, '2025-07-20 21:52:43', '2025-07-20 21:52:43');

-- --------------------------------------------------------

--
-- Structure de la table `car_informations`
--

CREATE TABLE `car_informations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sieges` int(11) NOT NULL,
  `portes` int(11) NOT NULL,
  `bagages` int(11) NOT NULL,
  `boite` varchar(255) NOT NULL,
  `kilometrage` varchar(255) NOT NULL,
  `station` varchar(255) NOT NULL,
  `car_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `car_informations`
--

INSERT INTO `car_informations` (`id`, `sieges`, `portes`, `bagages`, `boite`, `kilometrage`, `station`, `car_id`, `created_at`, `updated_at`) VALUES
(4, 4, 4, 2, 'Automatic', '150k', 'Mazot', 1, '2025-07-20 15:07:55', '2025-07-20 15:07:55'),
(5, 4, 4, 1, 'Mannuele', '150k', 'Mazot', 6, '2025-07-20 21:48:06', '2025-07-20 21:48:06'),
(6, 3, 4, 1, 'Automatic', '100K', 'Essence', 5, '2025-07-20 21:48:37', '2025-07-20 21:48:37');

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `cni` varchar(255) NOT NULL,
  `n_tel` varchar(255) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `car_id` bigint(20) UNSIGNED NOT NULL,
  `car_name` varchar(255) NOT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `commandes`
--

INSERT INTO `commandes` (`id`, `full_name`, `cni`, `n_tel`, `date_debut`, `date_fin`, `car_id`, `car_name`, `confirmed`, `created_at`, `updated_at`) VALUES
(1, 'hmida', 'FH60605', '0670127395', '2025-08-01', '2025-08-03', 1, 'class a', 1, '2025-07-20 21:26:21', '2025-07-20 21:29:05'),
(2, 'Rbandaz', 'FH99660', '0640219752', '2025-08-01', '2025-08-09', 2, 'kia ev3', 0, '2025-07-20 22:42:28', '2025-07-20 22:42:28');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `number`, `message`, `created_at`, `updated_at`) VALUES
(1, 'driss', '0760123598', 'khoya salam o 3alaykom b3da, goli chi dacia tma wlo', '2025-07-20 21:27:45', '2025-07-20 21:27:45');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_07_16_210647_create_cars_table', 1),
(5, '2025_07_19_134934_create_commandes_table', 1),
(6, '2025_07_20_015357_create_contacts_table', 1),
(7, '2025_07_20_140600_create_car_informations_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('r1hNGIpqZOAFR782QmYctF2tAqDF67GljW9InExe', NULL, '127.0.0.1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.6 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib0ZqT2VMbFFsemZ4WnJQUTB5OW9KdHVRVnlsWmI0Nll0WmtFUVFkNCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zZWVBbGxDYXJzIjt9fQ==', 1753060609);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'driss', 'bakhtaouidriss0@gmail.com', NULL, '$2y$12$XDLUzkvJO8Q6.WiSsDqH3e5FI1kawFC5ULJryQG6TSel3fD7goLaq', NULL, '2025-07-20 14:56:13', '2025-07-20 14:56:13');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Index pour la table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Index pour la table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `car_informations`
--
ALTER TABLE `car_informations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `car_informations_car_id_foreign` (`car_id`);

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `commandes_car_id_foreign` (`car_id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Index pour la table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `car_informations`
--
ALTER TABLE `car_informations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `car_informations`
--
ALTER TABLE `car_informations`
  ADD CONSTRAINT `car_informations_car_id_foreign` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`);

--
-- Contraintes pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `commandes_car_id_foreign` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
