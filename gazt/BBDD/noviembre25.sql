-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2024 a las 10:51:04
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `noviembre25`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agresiones`
--

CREATE TABLE `agresiones` (
  `id` int(11) NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `contacto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_agresiones`
--

CREATE TABLE `tipos_agresiones` (
  `id` int(11) NOT NULL,
  `nombre` varchar(500) NOT NULL,
  `recursos` varchar(500) NOT NULL,
  `observaciones` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipos_agresiones`
--

INSERT INTO `tipos_agresiones` (`id`, `nombre`, `recursos`, `observaciones`) VALUES
(1, 'Agresión psicológica o emocional', '- Servicio de Asesoramiento de Emakunde: \n     -  900 840 111 (teléfono gratuito).  \n     -  www.emakunde.euskadi.eus\n   - Servicios psicológicos especializados: Ayuda psicológica a través de servicios sociales municipales o asociaciones especializadas', '- Insultar, menospreciar o humillar a las mujeres.\n   - Manipulación, chantaje emocional o debilitamiento de la autoestima.\n   - Discurso sexista o perpetuación de estereotipos que las discriminan.\n'),
(2, 'Agresión física', '   - Servicio de Emergencias (112): Atención inmediata ante situaciones de peligro.   \n   - SATEVI (Sistema de Acompañamiento y Protección): Acompañamiento y protección para mujeres en riesgo.  \n   - **Protección de víctimas (Ertzaintza)**: La Ertzaintza ', '   - Uso de la violencia física (golpes, empujones, agarrones violentos).\r\n   - Cualquier tipo de ataque físico contra el cuerpo de una mujer.\r\n'),
(3, 'Agresión sexual', '   - Servicios de Atención Integral en casos de Violencia Sexual:  \n   - Centros de Emergencia (Bilbao, Donostia, Vitoria): Recursos de acogida inmediata para mujeres en situación de violencia grave.\n', '   - Tocar de forma sexual, realizar comentarios inapropiados o forzar actividades sexuales sin consentimiento.\r\n   - Violencia sexual, incluyendo la violación.\r\n'),
(4, 'Violencia económica', '  - Lanbide (Servicio Vasco de Empleo): Ofrece apoyo para la inserción laboral y autonomía económica.  \r\n     - https://www.lanbide.euskadi.eus\r\n   - Renta de Garantía de Ingresos (RGI): Ayuda económica para garantizar la independencia.\r\n', '   - Privar o controlar a las mujeres en el acceso a recursos económicos.\r\n   - Brecha salarial, discriminación laboral o negarles el derecho a ingresos propios.\r\n'),
(5, 'Violencia simbólica', '   - Planes de Coeducación e Igualdad (en centros educativos). \r\n   - Control de discursos y publicidad sexista: Emakunde trabaja para identificar y corregir mensajes discriminatorios en los medios y la publicidad.\r\n', '   - Representar a las mujeres como objetos sexuales o sujetos de segunda clase a través de la cultura, los medios de comunicación o la publicidad.\r\n   - Promover roles de género estereotipados.\r\n'),
(6, 'Violencia institucional', '   - Centros de atención para mujeres (Bilbao, Donostia, Vitoria, etc.): Servicios municipales específicos para apoyar a mujeres víctimas de violencia de género (por ejemplo, Casa de las Mujeres).  \n   - Red de recursos de Emakunde: Coordinación institucional para garantizar el respeto a los derechos de las mujeres.\n', '   - **Centros de atención para mujeres (Bilbao, Donostia, Vitoria, etc.)**: Servicios municipales específicos para apoyar a mujeres víctimas de violencia de género (por ejemplo, **Casa de las Mujeres**).  \r\n   - **Red de recursos de Emakunde**: Coordinac'),
(7, 'Violencia digital', '     - PantallasAmigas: Herramientas de prevención y educación frente a la violencia sexista a través de tecnologías.  \r\n     - https://www.pantallasamigas.net\r\n   - Servicio Vasco de Ciberseguridad (EuskoCERT): Asistencia ante amenazas y agresiones en el entorno digital.  \r\n     - https://www.euskadigital.eus\r\n', '   - Acoso a través de redes sociales o tecnologías.\r\n   - Mensajes ofensivos, amenazas o difusión no consentida de imágenes íntimas.\r\n');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agresiones`
--
ALTER TABLE `agresiones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tipo` (`id_tipo`);

--
-- Indices de la tabla `tipos_agresiones`
--
ALTER TABLE `tipos_agresiones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agresiones`
--
ALTER TABLE `agresiones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipos_agresiones`
--
ALTER TABLE `tipos_agresiones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `agresiones`
--
ALTER TABLE `agresiones`
  ADD CONSTRAINT `agresiones_ibfk_1` FOREIGN KEY (`id_tipo`) REFERENCES `tipos_agresiones` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
