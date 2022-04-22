-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 22 apr 2022 om 21:57
-- Serverversie: 10.4.22-MariaDB
-- PHP-versie: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizza`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `accounts`
--

CREATE TABLE `accounts` (
  `accountID` int(11) NOT NULL,
  `naam` varchar(120) NOT NULL,
  `wachtwoord` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `accounts`
--

INSERT INTO `accounts` (`accountID`, `naam`, `wachtwoord`, `email`) VALUES
(5, 'admin', 'admin', 'admin@gmail.com'),
(7, 'joran', 'joran', 'jorannicolai@gmail.com');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `products`
--

CREATE TABLE `products` (
  `productID` int(11) NOT NULL,
  `product_name` varchar(128) NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `image` varchar(512) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `products`
--

INSERT INTO `products` (`productID`, `product_name`, `price`, `image`, `description`) VALUES
(21, 'pizza', '3.00', '../media/fotosmenu/menubackgroudn.jpg', 'dit is een pizza met vlees'),
(23, 'pizza 3', '5.00', '../media/fotosmenu/pizzareserveren.jpg', 'dit is een lekeren pizza');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reserveren`
--

CREATE TABLE `reserveren` (
  `reserverenID` int(11) NOT NULL,
  `email` varchar(120) NOT NULL,
  `naam` varchar(120) NOT NULL,
  `opmerking` text NOT NULL,
  `mensen` int(20) NOT NULL,
  `datum` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `reserveren`
--

INSERT INTO `reserveren` (`reserverenID`, `email`, `naam`, `opmerking`, `mensen`, `datum`) VALUES
(24, 'lemmensthijmen@gmail.com', 'thijmen', 'hallo 2 tafels graag', 3, '2022-04-13 13:45:00');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`accountID`);

--
-- Indexen voor tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- Indexen voor tabel `reserveren`
--
ALTER TABLE `reserveren`
  ADD PRIMARY KEY (`reserverenID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `accounts`
--
ALTER TABLE `accounts`
  MODIFY `accountID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT voor een tabel `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT voor een tabel `reserveren`
--
ALTER TABLE `reserveren`
  MODIFY `reserverenID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
