-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 23 mei 2019 om 11:53
-- Serverversie: 10.1.37-MariaDB
-- PHP-versie: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `undefined`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `naam` varchar(100) NOT NULL,
  `bericht` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `form`
--

INSERT INTO `form` (`id`, `naam`, `bericht`) VALUES
(1, 'test', 'test'),
(2, 'asd', 'ads'),
(3, 'asd', 'ads'),
(7, 'asd', 'pOB37ySqZ9DAkQZGILtSzrtJgwK9hcsSsrHo9H7C764TDYuhiKBCKNH3oFXA8NPMf8oc0n4xj7smbUe3YmEq29J7GTErqSPhCj9F'),
(9, 'sadnsakdn', 'kjdskadjlsa'),
(10, 'asdm', 'jksadjmksa'),
(11, 'asdasd', 'asd'),
(12, 'sadhkjashdksahdkj', 'qhdjksahdkjsahdjk'),
(13, 'smd', 'md'),
(14, 'sjdnfkdsn', 'jndfknds\r\n'),
(15, 'askdjkasjd', 'sdjk'),
(16, 'sadk', 'sdk'),
(17, 'asjdkjsd', 'jsdk'),
(18, 'asdksadksladk', 'jsdkkdslk'),
(19, 'asjd', 'sdj'),
(20, 'dasda', 'dsadsa'),
(21, 'dsada', 'dsadas'),
(22, 'asdnskajdk', 'jdk'),
(23, 'testtesttest', 'lorem'),
(24, 'yeet', 'yeet'),
(25, 'lolis', 'lolis');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruikers`
--

CREATE TABLE `gebruikers` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `gebruikers`
--

INSERT INTO `gebruikers` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `gebruikers`
--
ALTER TABLE `gebruikers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT voor een tabel `gebruikers`
--
ALTER TABLE `gebruikers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
