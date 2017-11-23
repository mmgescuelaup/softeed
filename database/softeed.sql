-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2017 a las 22:12:31
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `softeed`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Sexo` tinyint(1) NOT NULL,
  `Edad` int(4) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Escolaridad` varchar(50) NOT NULL,
  `Centro_de_Estudios` varchar(100) NOT NULL,
  `Imagen_Perfil` varchar(100) NOT NULL,
  `Alias` varchar(100) NOT NULL,
  `Telefono` varchar(15) NOT NULL,
  `Contraseña` varchar(16) NOT NULL,
  `Horario_Disponibilidad` varchar(100) NOT NULL,
  `Disponibilidad_Contratacion` tinyint(1) NOT NULL,
  `Carrera` varchar(70) NOT NULL,
  `Pais` int(30) NOT NULL,
  `Ciudad` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante_proyecto`
--

CREATE TABLE `estudiante_proyecto` (
  `id` int(11) NOT NULL,
  `id_Estudiante` int(11) NOT NULL,
  `id_Proyecto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante_reclutador`
--

CREATE TABLE `estudiante_reclutador` (
  `id` int(11) NOT NULL,
  `id_Estudiante` int(11) NOT NULL,
  `id_Reclutador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante_skill`
--

CREATE TABLE `estudiante_skill` (
  `id` int(11) NOT NULL,
  `id_Estudiante` int(11) NOT NULL,
  `id_Skill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medias`
--

CREATE TABLE `medias` (
  `id` int(11) NOT NULL,
  `Descripcion` varchar(40) NOT NULL,
  `Url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `media_proyecto`
--

CREATE TABLE `media_proyecto` (
  `id` int(11) NOT NULL,
  `id_Proyecto` int(11) NOT NULL,
  `id_media` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(70) NOT NULL,
  `Descripcion` varchar(250) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Portada` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reclutador`
--

CREATE TABLE `reclutador` (
  `id` int(11) NOT NULL,
  `RFC` varchar(15) NOT NULL,
  `Nom_Empresarial` varchar(50) NOT NULL,
  `Direccion_Empresarial` varchar(70) NOT NULL,
  `Nombre_Reclutador` varchar(30) NOT NULL,
  `Apellidos_Reclutador` varchar(30) NOT NULL,
  `Edad_Reclutador` int(11) NOT NULL,
  `Telefono` varchar(12) NOT NULL,
  `Correo` varchar(70) NOT NULL,
  `Contraseña` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estudiante_proyecto`
--
ALTER TABLE `estudiante_proyecto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_Estudiante` (`id_Estudiante`),
  ADD KEY `id_Proyecto` (`id_Proyecto`);

--
-- Indices de la tabla `estudiante_reclutador`
--
ALTER TABLE `estudiante_reclutador`
  ADD KEY `id_Estudiante` (`id_Estudiante`),
  ADD KEY `id_Reclutador` (`id_Reclutador`);

--
-- Indices de la tabla `estudiante_skill`
--
ALTER TABLE `estudiante_skill`
  ADD KEY `id_Estudiante` (`id_Estudiante`),
  ADD KEY `id_Skill` (`id_Skill`);

--
-- Indices de la tabla `medias`
--
ALTER TABLE `medias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `media_proyecto`
--
ALTER TABLE `media_proyecto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_Proyecto` (`id_Proyecto`),
  ADD KEY `id_media` (`id_media`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reclutador`
--
ALTER TABLE `reclutador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estudiante_proyecto`
--
ALTER TABLE `estudiante_proyecto`
  ADD CONSTRAINT `estudiante_proyecto_ibfk_1` FOREIGN KEY (`id_Estudiante`) REFERENCES `estudiante` (`id`),
  ADD CONSTRAINT `estudiante_proyecto_ibfk_2` FOREIGN KEY (`id_Proyecto`) REFERENCES `proyectos` (`id`);

--
-- Filtros para la tabla `estudiante_reclutador`
--
ALTER TABLE `estudiante_reclutador`
  ADD CONSTRAINT `estudiante_reclutador_ibfk_1` FOREIGN KEY (`id_Estudiante`) REFERENCES `estudiante` (`id`),
  ADD CONSTRAINT `estudiante_reclutador_ibfk_2` FOREIGN KEY (`id_Reclutador`) REFERENCES `reclutador` (`id`);

--
-- Filtros para la tabla `estudiante_skill`
--
ALTER TABLE `estudiante_skill`
  ADD CONSTRAINT `estudiante_skill_ibfk_1` FOREIGN KEY (`id_Estudiante`) REFERENCES `estudiante` (`id`),
  ADD CONSTRAINT `estudiante_skill_ibfk_2` FOREIGN KEY (`id_Skill`) REFERENCES `skills` (`id`);

--
-- Filtros para la tabla `media_proyecto`
--
ALTER TABLE `media_proyecto`
  ADD CONSTRAINT `media_proyecto_ibfk_1` FOREIGN KEY (`id_Proyecto`) REFERENCES `proyectos` (`id`),
  ADD CONSTRAINT `media_proyecto_ibfk_2` FOREIGN KEY (`id_media`) REFERENCES `medias` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
