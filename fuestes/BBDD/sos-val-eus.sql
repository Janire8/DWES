-- phpMyAdmin SQL Dump
-- bertsioa 5.2.1
-- https://www.phpmyadmin.net/
--
-- Zerbitzaria: 127.0.0.1
-- Sortze-denbora: 07-11-2024 orduan 17:44:21
-- Zerbitzariaren bertsioa: 10.4.32-MariaDB
-- PHP bertsioa: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

 /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
 /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
 /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 /*!40101 SET NAMES utf8mb4 */;

--
-- Datu-basea: `sos_valencia`
--

-- --------------------------------------------------------

--
-- Taularen egitura taularako `laguntza`
--

CREATE TABLE `laguntza` (
  `id` int(11) NOT NULL,
  `materiala_id` int(11) NOT NULL,
  `kopurua` int(11) NOT NULL,
  `oharra` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Taularen egitura taularako `materialak_beharrezkoak`
--

CREATE TABLE `materialak_beharrezkoak` (
  `id` int(11) NOT NULL,
  `izena` varchar(255) NOT NULL,
  `beharrezko_kopurua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indizeak taularen
--

--
-- Indizeak taularen `laguntza`
--
ALTER TABLE `laguntza`
  ADD PRIMARY KEY (`id`),
  ADD KEY `materiala_id` (`materiala_id`);

--
-- Indizeak taularen `materialak_beharrezkoak`
--
ALTER TABLE `materialak_beharrezkoak`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT taularen
--

--
-- AUTO_INCREMENT taularen `laguntza`
--
ALTER TABLE `laguntza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT taularen `materialak_beharrezkoak`
--
ALTER TABLE `materialak_beharrezkoak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Muga taularen
--

--
-- Filtroak taularen `laguntza`
--
ALTER TABLE `laguntza`
  ADD CONSTRAINT `laguntza_ibfk_1` FOREIGN KEY (`materiala_id`) REFERENCES `materialak_beharrezkoak` (`id`);
COMMIT;

 /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
 /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
 /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
