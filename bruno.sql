-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-12-2018 a las 18:57:52
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bruno`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `about`
--

CREATE TABLE `about` (
  `id` int(10) UNSIGNED NOT NULL,
  `h1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `about`
--

INSERT INTO `about` (`id`, `h1`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Nosotros', 'fondo.jpg', '2018-12-04 04:16:10', '2018-12-04 04:16:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `h1` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `abouts`
--

INSERT INTO `abouts` (`id`, `h1`, `content`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Nosotros', '<p>Dedicados a crear la mejor vestimenta para los amantes de la cocina. ¿Nuestro objetivo? Diseñar un uniforme que trabaje y se vea tan bien como tú.</p>', 1, 1, '2018-12-04 04:35:21', '2018-12-04 04:35:21'),
(2, 'Nuestro trabajo', '<ul>\r\n	<li>Experiencia de 15 años en diseño y confección de uniformes</li>\r\n	<li>Materiales de primera calidad</li>\r\n	<li>Corte adecuado y cómodo</li>\r\n	<li>Diseño novedoso</li>\r\n</ul>', 1, 1, '2018-12-04 04:36:26', '2018-12-04 04:36:26'),
(3, 'Valores', '<ul>\r\n	<li>Honestidad</li>\r\n	<li>Experiencia</li>\r\n	<li>Calidad</li>\r\n</ul>', 1, 1, '2018-12-04 04:36:56', '2018-12-05 04:13:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `articles`
--

INSERT INTO `articles` (`id`, `title`, `slug`, `content`, `description`, `keywords`, `img`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Test #1', 'test-1', '<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore vers', '1, 2, 3', 'article_5c07542c7884e7.13564143.jpg', 1, 1, '2018-12-05 04:29:32', '2018-12-05 04:29:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `h1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contact`
--

INSERT INTO `contact` (`id`, `h1`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Cotizamos\r\ndiseños\r\npersonalizados', 'fondo.jpg', '2018-12-04 04:16:17', '2018-12-04 04:18:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `header`
--

CREATE TABLE `header` (
  `id` int(10) UNSIGNED NOT NULL,
  `h1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `p` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `header`
--

INSERT INTO `header` (`id`, `h1`, `sub`, `p`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Bruno', 'Chef Wear', 'Diseño, fabricación y venta/comercialización\r\nde uniformes gastronómicos', 'fondo.jpg', '2018-12-04 04:16:27', '2018-12-04 04:17:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metadata`
--

CREATE TABLE `metadata` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `metadata`
--

INSERT INTO `metadata` (`id`, `title`, `description`, `keywords`, `created_at`, `updated_at`) VALUES
(1, 'Bruno | Chef Wear', 'Fabricantes de la mejor calidad y diseño en uniformes para chef en México. Todo lo que necesitas para uniformar a tu equipo ahora en Chihuahua.', 'Chef, Chihuahua, Filipinas', '2018-12-04 04:16:02', '2018-12-04 04:16:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_12_02_191548_create_header_table', 1),
(4, '2018_12_02_193304_create_about_table', 1),
(5, '2018_12_02_193950_create_contact_table', 1),
(6, '2018_12_02_195352_create_abouts_table', 1),
(7, '2018_12_02_195409_create_articles_table', 1),
(8, '2018_12_03_014346_create_metadata_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Israel', 'Arzate', 'israelofevil@gmail.com', NULL, '$2y$10$Tvxj5o8ZJZctseG7VN6m2.UUDqvWlNooSVabt6I.psljiN3fI2H5i', 1, NULL, '2018-12-03 22:00:00', '2018-12-03 22:00:00'),
(2, 'Israel', 'Arzate', 'israel.arzate@mixen.mx', NULL, '$2y$10$9rDBKi8MsI/tzSAYL1oXtOrMle.gqNhhvPAGrgOrueRDea7QuNKJC', 0, NULL, '2018-12-05 03:32:48', '2018-12-05 03:32:48');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `abouts_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_slug_unique` (`slug`),
  ADD KEY `articles_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `metadata`
--
ALTER TABLE `metadata`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `header`
--
ALTER TABLE `header`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `metadata`
--
ALTER TABLE `metadata`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `abouts`
--
ALTER TABLE `abouts`
  ADD CONSTRAINT `abouts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
