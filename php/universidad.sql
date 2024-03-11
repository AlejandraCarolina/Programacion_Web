CREATE DATABASE IF NOT EXISTS universidad;
USE universidad;


CREATE TABLE IF NOT EXISTS `alumnos` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `matricula` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `edad` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_carrera` int(11) NOT NULL,
  FOREIGN KEY (id_carrera) REFERENCES carrera(id_carrera)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------
-- Estructura de tabla para la tabla `carrera`


CREATE TABLE IF NOT EXISTS `carrera` (
  `id_carrera` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

