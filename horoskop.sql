-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Värd: localhost
-- Tid vid skapande: 29 apr 2019 kl 17:41
-- Serverversion: 10.1.38-MariaDB
-- PHP-version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `horoskop`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `HoroscopeList`
--

CREATE TABLE `HoroscopeList` (
  `id` int(11) NOT NULL,
  `dateFrom` date NOT NULL,
  `dateUntil` date NOT NULL,
  `horoscopeSign` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `HoroscopeList`
--

INSERT INTO `HoroscopeList` (`id`, `dateFrom`, `dateUntil`, `horoscopeSign`) VALUES
(1, '2019-12-22', '2019-12-31', 'Capricorn'),
(2, '2019-01-20', '2019-02-18', 'Aquarius'),
(3, '2019-02-19', '2019-03-20', 'Pisces'),
(4, '2019-03-21', '2019-04-19', 'Aries'),
(5, '2019-04-20', '2019-05-20', 'Taurus'),
(6, '2019-05-21', '2019-06-20', 'Gemini'),
(7, '2019-06-21', '2019-07-22', 'Cancer'),
(8, '2019-07-23', '2019-08-22', 'Leo'),
(9, '2019-08-23', '2019-09-22', 'Virgo'),
(10, '2019-09-23', '2019-10-22', 'Libra'),
(11, '2019-10-23', '2019-11-21', 'Scorpio'),
(12, '2019-11-22', '2019-12-21', 'Sagittarius'),
(13, '2019-01-01', '2019-01-19', 'Capricorn');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `HoroscopeList`
--
ALTER TABLE `HoroscopeList`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `HoroscopeList`
--
ALTER TABLE `HoroscopeList`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
