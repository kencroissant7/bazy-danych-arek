-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2024 at 09:56 AM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `radosc`
--
CREATE DATABASE IF NOT EXISTS `radosc` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `radosc`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `efekt`
--

CREATE TABLE `efekt` (
  `ide` int(11) NOT NULL,
  `idw` int(11) NOT NULL,
  `nazwa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `efekt`
--

INSERT INTO `efekt` (`ide`, `idw`, `nazwa`) VALUES
(1, 1, 'radość'),
(2, 2, 'zatwardzenie'),
(3, 3, 'zdrętwienie nóg'),
(4, 4, 'głuchota'),
(5, 5, 'ślepota i bycie sigma'),
(6, 2, 'ból w stawei kolanowym oraz prawym łokciu'),
(7, 1, 'sigma'),
(8, 1, 'wilki'),
(9, 4, 'Patryk Bateman Amerykański Psychol 2001 film'),
(10, 5, 'Rajan Goslik w filmie edraiv');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wydarzenia`
--

CREATE TABLE `wydarzenia` (
  `idw` int(11) NOT NULL,
  `nazwa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wydarzenia`
--

INSERT INTO `wydarzenia` (`idw`, `nazwa`) VALUES
(1, 'kino'),
(2, 'wyjście do sklepu'),
(3, 'teatr'),
(4, 'gry'),
(5, 'seriale');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `efekt`
--
ALTER TABLE `efekt`
  ADD PRIMARY KEY (`ide`),
  ADD KEY `idw` (`idw`);

--
-- Indeksy dla tabeli `wydarzenia`
--
ALTER TABLE `wydarzenia`
  ADD PRIMARY KEY (`idw`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `efekt`
--
ALTER TABLE `efekt`
  MODIFY `ide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `wydarzenia`
--
ALTER TABLE `wydarzenia`
  MODIFY `idw` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `efekt`
--
ALTER TABLE `efekt`
  ADD CONSTRAINT `efekt_ibfk_1` FOREIGN KEY (`idw`) REFERENCES `wydarzenia` (`idw`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
