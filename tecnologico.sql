-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-03-2020 a las 16:14:22
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tecnologico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `noAlumno` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `sexo` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `direccion` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `edad` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `semestre` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `graduado` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `promedio` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `carrera` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `activo` tinyint(4) DEFAULT NULL,
  `Tecnologico_no_tecnologico` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`noAlumno`, `nombre`, `apellido`, `sexo`, `direccion`, `edad`, `semestre`, `graduado`, `telefono`, `promedio`, `carrera`, `activo`, `Tecnologico_no_tecnologico`) VALUES
('16410109', 'Alan Alexis', 'Campos Gaytan', 'Masculino', 'Abeja #20', '21', '7', '0', '627111101', '89.97', 'Ingenieria en sistemas computacionales', 1, 4),
('16410112', 'Jose Alberto', 'Chavira Lujan', 'Hombre', 'Maria Montesori #10', '25', '12', '1', '6271152545', '82.35', 'Ingenieria en mecatronica', 0, 1),
('16410118', 'Missael', 'Flores Gonzalez', 'Hombre', 'Maria Montesori #23', '21', '7', '0', '6271130852', '88.73', 'Ingenieria en sistemas computacionales', 1, 1),
('16410121', 'Luis Angel', 'Parra Guerrero', 'Masculino', 'Maria Novena #13', '21', '7', '0', '627113052', '92.87', 'Ingenieria en mecatronica', 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_has_proyectos`
--

CREATE TABLE `alumno_has_proyectos` (
  `Alumno_no_alumno` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Proyectos_idProyectos` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `alumno_has_proyectos`
--

INSERT INTO `alumno_has_proyectos` (`Alumno_no_alumno`, `Proyectos_idProyectos`) VALUES
('16410109', '1'),
('16410112', '2'),
('16410118', '3'),
('16410118', '3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eneit`
--

CREATE TABLE `eneit` (
  `idEneit` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `eneit`
--

INSERT INTO `eneit` (`idEneit`, `Fecha`) VALUES
('1', '2015-06-20'),
('2', '2016-08-15'),
('3', '2017-09-09'),
('4', '2018-07-03'),
('5', '2019-11-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incubadora`
--

CREATE TABLE `incubadora` (
  `idIncubadora` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `incubadora`
--

INSERT INTO `incubadora` (`idIncubadora`, `nombre`, `estado`, `ciudad`) VALUES
('1', 'Encubatec', 'Chihuahu', 'Chihuahua'),
('2', 'Encumax', 'Sonora', 'Sonora'),
('3', 'Encuba2', 'Jalisco', 'Zapopan'),
('4', 'Encubadora', 'Coahuila', 'Torreon');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `idProyectos` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `Eneit_idEneit` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `dinero` double(20,2) NOT NULL,
  `meta` double(20,2) NOT NULL,
  `Incubadora_idIncubadora` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `tema` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(600) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`idProyectos`, `Eneit_idEneit`, `nombre`, `dinero`, `meta`, `Incubadora_idIncubadora`, `tema`, `descripcion`) VALUES
('1', '5', 'Riegomax', 213400.00, 200000.00, '', 'Software', 'El software que nosotros hacemos es para implementar un sistema de riego que controle la humedad de la tierra asi como otras propiedades que la tierra necesita para su optimo crecimiento. Por medio del uso de microcontroladores  y diferentes tipos de sensores, se tendra siempre un registro de cada detalle importante para el crecimiento optimo de las diferentes tipos plantas teniendo la oportunidad de usarse en muchos tipos de lugares tanto como hogares, vinedos, invernaderos e incluso en cosechas de gran tamano asi mismo una alarma que avisa de la existencia de plagas.'),
('2', '5', 'Reciclatec', 23000.00, 150000.00, '', 'Proceso', 'Nuestra propuesta es una opción ecológica donde utilizamos una alternativa para sustituir bolsas de plástico, con un  polímero que tiene varias características que podrían  n o solo no perjudicar nuestros ecosistemas, sino que  puede beneficiar tanto los ecosistemas marítimos como terrestres, ya que al estar en contacto con la tierra, ayuda a la formación de nutrientes útiles para la tierra e incluso pueden ser ingeridas por los seres vivos que habiten en el agua en dado caso de que este termine en el mar. Este polímero cuenta con una gran resistencia,  lo cual facilita su uso.   '),
('3', '4', 'pakayoke', 2000.00, 15000.00, '', 'Alimento', 'Nuestra opción es una alternativa en las salsas aprovechando los productos que supermercados o salsas desechan por estar a punto de podrirse o que no compran por tener un mal aspecto y con un bote reutilizable para el beneficio del medio ambiente. Al utilizar ciertos métodos naturales se pueden recuperar los nutrientes, con los cuales estos alimentos aun cuentan. Y al hacer uso de bote reutilizable de vidrio se contribuye al desarrollo sustentable, ya que no se contamina más el medio ambiente por el uso desmedido de plásticos y polímeros contaminantes.'),
('4', '5', 'Nopeba', 15000.00, 175000.00, '', 'Producto y servicio', 'Nuestro producto es un ladrillo constituido de nopal y una mezcla de otros elementos que tiene una dureza muy parecida al ladrillo convencional así mismo sirve para tener un efecto térmico en la casa, ya que tiene más propiedades que ayudan a  la conservación térmica. Al hacer uso de recursos naturales que normalmente no son explotados a su totalidad y se desperdicia cierto material valioso que podría usarse. También se contribuye al medio ambiente ya que la creación de ladrillo suele ser muy perjudicial a los diferentes ecosistemas ya que el proceso requiere un calor extremo.'),
('5', '5', 'Findme', 50000.00, 100000.00, '1', 'Innovacion social', 'Es un software gratuito que busca que sea más fácil encontrar todo lo que se  le ocurra al usuario desde unas llaves perdidas hasta personas teniendo conexiones con gente en todos lados así como en redes sociales para facilitar el tráfico de datos. Es necesaria la rapidez del flujo de información para lograr localizar gente que se ha perdido, las personas u animales contaran con una pulsera especial que mandara una notificación a los dispositivos que se encuentre cerca de ésta. Esto podría ayudar  a facilitar a encontrar de una manera más eficiente a las personas perdidas.'),
('6', '5', 'SecuriHouse', 60000.00, 14800.00, '2', 'Software', 'Nuestra propuesta es automatizar cualquier hogar y teniendo un control de este desde el teléfono así mismo tener cámaras conectadas al teléfono y que las puertas se cierren un tiempo después si el teléfono y las llaves abandonen la casa. Haciendo uso de la domótica se tendrá un control absoluto de cualquier parte de la casa que necesite un monitoreo constante y una mayor seguridad. También al usar candados y cerraduras inteligentes se podrá saber incluso sin el uso de las cámaras cuando se ha forzado una cerradura.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos_has_usuario`
--

CREATE TABLE `proyectos_has_usuario` (
  `Proyectos_idProyectos` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `Proyectos_idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `proyectos_has_usuario`
--

INSERT INTO `proyectos_has_usuario` (`Proyectos_idProyectos`, `Proyectos_idusuario`) VALUES
('1', 1),
('2', 3),
('3', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnologico`
--

CREATE TABLE `tecnologico` (
  `no_tecnologico` int(50) NOT NULL,
  `Nombre` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Estado` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ciudad` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `alumnos` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `proyectos` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tecnologico`
--

INSERT INTO `tecnologico` (`no_tecnologico`, `Nombre`, `Estado`, `ciudad`, `alumnos`, `proyectos`) VALUES
(1, 'Instituto Tecnologico de Parral', 'Chihuahua', 'Chihuahua', '2400', NULL),
(2, 'Instituto Tecnologico de Juarez', 'Chihuahua', 'Juarez', '5600', NULL),
(3, 'Instituto Tecnologico de Delicias', 'Chihuahua', 'Delicias', '1300', NULL),
(4, 'Instituto Tecnologico de Orizaba', 'Veracruz', 'Orizaba', '3456', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `contraseña` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipo` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre`, `correo`, `contraseña`, `tipo`) VALUES
(1, 'Alberto23', 'Alberto23@gmail.com', '1234', 0),
(2, 'Juan12', 'Juan12@gmail.com', '1234', 1),
(3, 'Luis78', 'Luis78@gmail.com', '1234', 0),
(4, 'misa47', 'misa47@gmail.com', '1234', 0),
(5, 'enrique63', 'enrique63@gmail.com', '1234', 1),
(6, 'Alex55', 'Alex55@gmail.com', '1234', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`noAlumno`),
  ADD KEY `Tecnologico_no_tecnologico` (`Tecnologico_no_tecnologico`);

--
-- Indices de la tabla `alumno_has_proyectos`
--
ALTER TABLE `alumno_has_proyectos`
  ADD KEY `alumno_has_proyectos_ibfk_2` (`Proyectos_idProyectos`),
  ADD KEY `Alumno_no_alumno` (`Alumno_no_alumno`) USING BTREE;

--
-- Indices de la tabla `eneit`
--
ALTER TABLE `eneit`
  ADD PRIMARY KEY (`idEneit`);

--
-- Indices de la tabla `incubadora`
--
ALTER TABLE `incubadora`
  ADD PRIMARY KEY (`idIncubadora`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`idProyectos`),
  ADD KEY `Eneit_idEneit` (`Eneit_idEneit`);

--
-- Indices de la tabla `proyectos_has_usuario`
--
ALTER TABLE `proyectos_has_usuario`
  ADD KEY `Proyectos_idProyectos` (`Proyectos_idProyectos`),
  ADD KEY `Proyectos_idusuario` (`Proyectos_idusuario`);

--
-- Indices de la tabla `tecnologico`
--
ALTER TABLE `tecnologico`
  ADD PRIMARY KEY (`no_tecnologico`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`Tecnologico_no_tecnologico`) REFERENCES `tecnologico` (`no_tecnologico`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `alumno_has_proyectos`
--
ALTER TABLE `alumno_has_proyectos`
  ADD CONSTRAINT `alumno_has_proyectos_ibfk_1` FOREIGN KEY (`Alumno_no_alumno`) REFERENCES `alumno` (`noAlumno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alumno_has_proyectos_ibfk_2` FOREIGN KEY (`Proyectos_idProyectos`) REFERENCES `proyectos` (`idProyectos`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD CONSTRAINT `proyectos_ibfk_1` FOREIGN KEY (`Eneit_idEneit`) REFERENCES `eneit` (`idEneit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `proyectos_has_usuario`
--
ALTER TABLE `proyectos_has_usuario`
  ADD CONSTRAINT `proyectos_has_usuario_ibfk_1` FOREIGN KEY (`Proyectos_idProyectos`) REFERENCES `proyectos` (`idProyectos`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `proyectos_has_usuario_ibfk_2` FOREIGN KEY (`Proyectos_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
