-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2025 at 08:39 AM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databasearek`
--
CREATE DATABASE IF NOT EXISTS `databasearek` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `databasearek`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `gory`
--

CREATE TABLE `gory` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(255) NOT NULL,
  `opis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gory`
--

INSERT INTO `gory` (`id`, `nazwa`, `opis`) VALUES
(1, 'tatry', 'Tatry są najwyższą grupą górską Karpat, należącą do Wewnętrznych Karpat Zachodnich. Znajdują się na pograniczu Polski i Słowacji. Zajmują około 785 km² powierzchni, z czego 25% znajduje się w granicach Polski. Ciągną się od Przełęczy Huciańskiej na zachod');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `name`) VALUES
(19, 'login123', '$2y$10$RI/u0ZcA9/3so3v65Rs2AO0lK.Mvj3TNoMSITvqOP4ILAMsdZ7r9K', 'artwoj123'),
(20, 'login', '$2y$10$cUpdcqgQ6gi9/itZ0BfXYO9MmtKW0gJ1xpDjkwbXr7wWcJlu4Czea', 'username'),
(21, 'login1', '$2y$10$JCG1zP0ITx2/QaLUM8LlsuRbCP6A6PDzzFYj8i9/pnlJpCyqr70c6', 'username1');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `gory`
--
ALTER TABLE `gory`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gory`
--
ALTER TABLE `gory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
