-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 10-03-2025 a las 02:30:24
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `editorial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `autor` varchar(255) DEFAULT NULL,
  `categoria` varchar(100) DEFAULT NULL,
  `minutos_leido` int(11) DEFAULT NULL,
  `veces_canjeado` int(11) DEFAULT NULL,
  `portada` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `titulo`, `autor`, `categoria`, `minutos_leido`, `veces_canjeado`, `portada`) VALUES
(1, 'Cien años de soledad', 'Gabriel García Márquez', 'Ficción', 300, 50, 'https://i.ibb.co/7xCGZ6y7/cover1.jpg'),
(2, 'La sombra del viento', 'Carlos Ruiz Zafón', 'Ficción', 350, 30, 'https://i.ibb.co/JwmyxWbz/cover2.webp'),
(3, 'El principito', 'Antoine de Saint-Exupéry', 'Ficción', 90, 70, 'https://i.ibb.co/v6X91KtV/cover3.jpg'),
(4, 'Sapiens: De animales a dioses', 'Yuval Noah Harari', 'No Ficción', 240, 45, 'https://i.ibb.co/jPZd0kWY/cover4.webp'),
(5, 'Educated', 'Tara Westover', 'No Ficción', 210, 40, 'https://i.ibb.co/5WJ7FF9M/cover5.jpg'),
(6, 'El arte de la guerra', 'Sun Tzu', 'No Ficción', 120, 20, 'https://i.ibb.co/HLC72LhZ/cover6.webp'),
(7, '1984', 'George Orwell', 'Ciencia Ficción', 300, 60, 'https://i.ibb.co/701j7zy/cover7.jpg'),
(8, 'Dune', 'Frank Herbert', 'Ciencia Ficción', 400, 35, 'https://i.ibb.co/ycn4SG7n/cover8.jpg'),
(9, 'Neuromante', 'William Gibson', 'Ciencia Ficción', 280, 25, 'https://i.ibb.co/KpP89jys/cover9.webp'),
(10, 'El juego del calamar', 'Hwang Dong-hyuk', 'Thriller', 150, 15, 'https://i.ibb.co/6R4fjZ0f/cover10.webp'),
(11, 'La chica del tren', 'Paula Hawkins', 'Thriller', 200, 55, 'https://i.ibb.co/1GwcFTkn/cover11.webp'),
(12, 'El silencio de los inocentes', 'Thomas Harris', 'Thriller', 260, 40, 'https://i.ibb.co/pBYGxSdC/cover12.webp'),
(13, 'El código Da Vinci', 'Dan Brown', 'Misterio', 300, 50, 'https://i.ibb.co/6Rm0tLhB/cover13.webp'),
(14, 'La verdad sobre el caso Harry Quebert', 'Joël Dicker', 'Misterio', 320, 30, 'https://i.ibb.co/5g8Y07Tc/cover14.webp'),
(15, 'El hombre de los gatos', 'Sophie Divry', 'Misterio', 220, 10, 'https://i.ibb.co/XrBzjk3h/cover15.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
