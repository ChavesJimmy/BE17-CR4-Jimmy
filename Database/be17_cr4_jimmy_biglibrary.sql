-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 11. Nov 2022 um 10:46
-- Server-Version: 10.4.25-MariaDB
-- PHP-Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `be17_cr4_jimmy_biglibrary`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `medias`
--

CREATE TABLE `medias` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `ISBN_code` int(11) DEFAULT NULL,
  `short_description` varchar(500) DEFAULT NULL,
  `type` enum('CD','BOOK','DVD') DEFAULT NULL,
  `author_first_name` varchar(25) DEFAULT NULL,
  `author_last_name` varchar(35) DEFAULT NULL,
  `publisher_name` varchar(45) DEFAULT NULL,
  `publisher_address` varchar(250) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `media_status` enum('available','reserved') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `medias`
--

INSERT INTO `medias` (`id`, `title`, `image`, `ISBN_code`, `short_description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`, `media_status`) VALUES
(1, 'Naruto', 'https://cdn.pixabay.com/photo/2022/05/23/04/12/naruto-7215196__480.jpg', 123, 'The story of Naruto , who want to become the best ninja of his village.', 'BOOK', 'Masashi', 'Kishimoto', 'JUMP', 'Shueisha Tokyo, Japan', '2001-11-19', 'available'),
(3, 'Lord of the rings - trilogy', 'https://cdn.pixabay.com/photo/2022/04/19/19/25/saurons-eye-7143642__480.jpg', 234, 'The story of a community who are going to save the world from Sauron.', 'DVD', 'J.R.R.', 'Tolkien', 'Warner', 'Hollywood , USA', '2006-04-19', 'available'),
(4, 'One Piece', 'https://cdn.pixabay.com/photo/2020/04/25/09/52/onepiece-5090120__480.jpg', 345, 'The story of the pirate Luffy who is looking for the legendary treasure \"One Piece\".', 'BOOK', 'Eichiro', 'Oda', 'JUMP', 'Shueisha Tokyo, Japan', '1996-07-16', 'available'),
(5, 'PAW PATROL - MOVIE 2', 'https://cdn.pixabay.com/photo/2021/07/04/20/14/dog-6387529__480.png', 456, 'Ryder and his dogs are maintaining order on adventure bay.', 'DVD', 'unknown', 'unknown', 'Nickelodeon', 'Nickelodeon, San Francisco, USA', '2012-11-12', 'reserved'),
(6, 'Metallica - Nothing else matter', 'https://cdn.pixabay.com/photo/2017/11/07/00/18/guitar-2925274__480.jpg', 567, 'Re edition of the best album of Metallica', 'CD', 'Metallica', 'Metallica', 'Metal-Production', 'London - GB', '2022-11-30', 'reserved'),
(7, 'Eminem - Slim shady', 'https://cdn.pixabay.com/photo/2021/02/25/13/20/eminem-6049095__480.jpg', 567, 'Album Eminem', 'CD', 'Eminem', 'Eminem', 'Dr DRE', 'NYC, USA', '2021-09-06', 'available'),
(8, 'Men In Black', 'https://cdn.pixabay.com/photo/2020/02/07/19/05/spaceship-4828098__480.jpg', 789, 'L and J are fighting against aliens', 'DVD', 'John', 'Doe', 'Warner Bras', 'WB, L.A. USA', '2004-11-27', 'available'),
(9, 'BEST OF World Cup 2022', 'https://cdn.pixabay.com/photo/2017/12/17/12/45/football-3024154__480.jpg', 890, 'Best of football\'s WC 2022', 'DVD', 'Eurosport', 'Eurosport', 'Eurosport', 'Eurosport , Berlin ,Germany', '2023-02-01', 'reserved'),
(10, 'Frozen', 'https://media.istockphoto.com/id/1347295405/fr/photo/motifs-givr%C3%A9s-sur-le-bord-dune-fen%C3%AAtre-gel%C3%A9e.jpg?b=1&s=170667a&w=0&k=20&c=aEXCkNpM', 901, 'The story of Anna, Olaf and Elsa', 'DVD', 'Walt', 'Disney', 'Walt Disney', 'Walt Disney, Paris, France', '2017-07-02', 'available'),
(11, 'One Punch Man', 'https://cdn.pixabay.com/photo/2022/01/19/12/40/saitma-6949793__480.png', 258, 'The story of Saitama who can kill any monster with One punch but aspire to have a quiet life', 'BOOK', 'ONE', 'ONE', 'JUMP', 'Shueisha Tokyo, Japan', '2015-04-05', 'available');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `medias`
--
ALTER TABLE `medias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `medias`
--
ALTER TABLE `medias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
