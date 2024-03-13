-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 07-03-2024 a las 04:41:54
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `jujutsu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id_Post` int NOT NULL AUTO_INCREMENT,
  `title` varchar(126) NOT NULL,
  `subtitle` varchar(126) NOT NULL,
  `author` varchar(64) NOT NULL,
  `post` varchar(700) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id_Post`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id_Post`, `title`, `subtitle`, `author`, `post`, `date`) VALUES
(1, 'Yuta muere a manos de sukuna', 'Lamentablemente parece que no aguanta un corte dimensional', 'julitoelnoob', 'Yuta era un niño muy normal pero llego sukun Y LE DIJO: EXPANSION DE DOMINIO, GUION', '2024-02-28'),
(2, 'Roberto fue fusilado a manos de la maestra gisella', 'Roberto era un niño noraml pero desgraciadamente no conocia el idioma de la mestra', 'JulitoElNoob', 'en 4kkkkk una foto para el fortnite y otra para onlyfans', '2024-03-08'),
(3, 'tirame una foto', 'que se vea', 'en la nave mientras hacemos cosas feas', 'mami ese toto, bellakea', '2024-04-18'),
(4, 'Paul marin es gay', 'Se descubrio que le encanta la pija', 'Roberto barrios', 'lorem ipsum', '2024-02-22');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
