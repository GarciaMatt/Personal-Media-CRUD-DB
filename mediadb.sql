-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 19, 2023 at 11:08 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `midtermdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `Book_Num` int NOT NULL AUTO_INCREMENT,
  `ISBN` bigint NOT NULL,
  `Auth` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Title` text NOT NULL,
  `Genre` text NOT NULL,
  PRIMARY KEY (`Book_Num`)
) ENGINE=MyISAM AUTO_INCREMENT=2147483648 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`Book_Num`, `ISBN`, `Auth`, `Title`, `Genre`) VALUES
(1, 9781534445987, 'John', 'Permanent Record', 'Young Adult/Romance'),
(2, 9781250886088, 'Travis Baldree', 'Legends & Lattes', 'Fantasy, Fantasy Fiction, Romantic fantasy, Gaslamp fantasy'),
(3, 9780593441275, 'Emily Henry', 'Happy Place', 'Romance, Fiction'),
(4, 590353403, 'J.K. Rowling', 'Harry Potter and the Sorcerer\'s Stone', 'Adventure, Fantasy'),
(5, 978043906866, 'J.K. Rowling', 'Harry Potter and The Chamber of Secrets', 'Adventure, Fantasy'),
(6, 9780439136358, 'J.K. Rowling', 'Harry Potter and The Prisoner of Azkaban', 'Adventure, Fantasy'),
(7, 9780439139595, 'J.K. Rowling', 'Harry Potter and The Goblet of Fire', 'Adventure, Fantasy'),
(8, 9780439785969, 'J.K. Rowling', 'Harry Potter and The Half-Blood Prince', 'Adventure, Fantasy'),
(9, 9780545139700, 'J.K. Rowling', 'Harry Potter and The Deathly Hallows', 'Adventure, Fantasy'),
(10, 9781338099133, 'John Tiffany and Jack Thorne', 'Harry Potter and The Cursed Child', 'Adventure, Fantasy'),
(11, 9780545241809, 'Rick Riordan', 'Percy Jackson & The Olympians: The Lightning Thief', 'Fantasy/Young Adult Fiction'),
(12, 9780545003407, 'Rick Riordan', 'Percy Jackson & The Olympians: The Sea of Monsters', 'Fantasy/Young Adult Fiction'),
(13, 9780545078337, 'Rick Riordan', 'Percy Jackson & The Olympians: The Titan\'s Curse', 'Fantasy/Young Adult Fiction'),
(14, 9781423101468, 'Rick Riordan', 'Percy Jackson & The Olympians: The Battle of The Labyrinth', 'Fantasy/Young Adult Fiction'),
(15, 9781423101475, 'Rick Riordan', 'Percy Jackson & The Olympians: The Last Olympian', 'Fantasy/Young Adult Fiction'),
(16, 9781423163008, 'Rick Riordan', 'The Demigod Diaries', 'Fantasy/Young Adult Fiction'),
(17, 9781423121664, 'Rick Riordan', 'Percy Jackson & The Olympians: The Demigod Files', 'Fantasy/Young Adult Fiction'),
(18, 9780545477963, 'Rick Riordan', 'The Heroes of Olympus: The Lost Hero', 'Fantasy/Young Adult Fiction'),
(19, 9781423140597, 'Rick Riordan', 'The Heroes of Olympus: The Son of Neptune', 'Fantasy/Young Adult Fiction'),
(20, 9781423140603, 'Rick Riordan', 'The Heroes of Olympus: The Mark of Athena', 'Fantasy/Young Adult Fiction'),
(21, 978142346728, 'Rick Riordan', 'The Heroes of Olympus: The House of Hades', 'Fantasy/Young Adult Fiction'),
(22, 9781423146735, 'Rick Riordan', 'The Heroes of Olympus: The Blood of Olympus', 'Fantasy/Young Adult Fiction'),
(23, 9780545400169, 'Rick Riordan', 'The Kane Chronicles: The Red Pyramid', 'Fantasy/Young Adult Fiction'),
(24, 9780545497282, 'Rick Riordan', 'The Kane Chronicles: The Throne of Fire', 'Fantasy/Young Adult Fiction'),
(25, 9780545594318, 'Rick Riordan', 'The Kane Chronicles: The Serpent\'s Shadow', 'Fantasy/Young Adult Fiction'),
(26, 9780439023528, 'Suzanne Collins', 'The Hunger Games', 'Dystopian Fiction'),
(27, 9781594135859, 'Suzanne Collins', 'Catching Fire', 'Dystopian Fiction'),
(28, 9781594135866, 'Suzanne Collins', 'Mockingjay', 'Dystopian Fiction'),
(29, 9781250076960, 'Leigh Bardugo', 'Six of Crows', 'Fantasy Fiction'),
(30, 9781250076977, 'Leigh Bardugo', 'Crooked Kingdom', 'Fantasy Fiction'),
(31, 9780525478812, 'John Green', 'The Fault In Our Stars', 'Young Adult Romance'),
(32, 9780545085598, 'Ryder Windham', 'Star Wars: The Life and Legend of Obi-Wan Kenobi', 'Epic Space Opera'),
(34, 9781932946109, 'Kevin P. Riehle', 'Russian Intelligence: A Case-base Study of Russian Services and Missions Past and Present', 'Political Science; Case Study'),
(35, 9781838571856, 'Paul Roland', 'The Crimes of Jack The Ripper: The White chapel Murders Re-Examined', 'True Crime'),
(36, 9780063158450, 'Tomihiko Morimi', 'The Tatami Galaxy', 'Psychological Fiction'),
(37, 9780593128503, 'Naomi Novik', 'The Scholomance: A Deadly Education', 'Contemporary Fantasy'),
(38, 9780593128886, 'Naomi Novik', 'The Scholomance: The Last Graduate', 'Contemporary Fantasy'),
(39, 9780593158371, 'Naomi Novik', 'The Scholomance: The Golden Enclaves', 'Contemporary Fantasy'),
(40, 9781449474256, 'Rupi Kaur', 'milk and honey', 'Poetry');

-- --------------------------------------------------------

--
-- Table structure for table `manga`
--

DROP TABLE IF EXISTS `manga`;
CREATE TABLE IF NOT EXISTS `manga` (
  `Man_Num` int NOT NULL AUTO_INCREMENT,
  `Auth` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `STitle` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Vol_Num` int NOT NULL,
  `Genre` text NOT NULL,
  PRIMARY KEY (`Man_Num`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `manga`
--

INSERT INTO `manga` (`Man_Num`, `Auth`, `STitle`, `Vol_Num`, `Genre`) VALUES
(1, 'Fujita', 'Wotakoi: Love is hard for Otaku', 1, 'Slice of Life/Romance'),
(2, 'Hideyuki Furuhashi', 'My Hero Academia: Vigilantes', 1, 'Shonen'),
(3, 'Hideyuki Furuhashi', 'My Hero Academia: Vigilantes', 2, 'Shonen'),
(4, 'Tite Kubo', 'Bleach', 3, 'Shonen/Fantasy'),
(5, 'Fujita', 'Wotakoi: Love is hard for Otaku', 2, 'Slice of Life/Romance'),
(6, 'Fujita', 'Wotakoi: Love is hard for Otaku', 3, 'Slice of Life/Romance'),
(7, 'Fujita', 'Wotakoi: Love is hard for Otaku', 4, 'Slice of Life/Romance'),
(8, 'Fujita', 'Wotakoi: Love is hard for Otaku', 5, 'Slice of Life/Romance'),
(9, 'Fujita', 'Wotakoi: Love is hard for Otaku', 6, 'Slice of Life/Romance'),
(10, 'Nanashi', 'Don\'t toy with me, Miss Nagatoro', 1, 'Comdey');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

DROP TABLE IF EXISTS `records`;
CREATE TABLE IF NOT EXISTS `records` (
  `Vin_Num` int NOT NULL AUTO_INCREMENT,
  `Artist` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Alb_Title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Rel_Yr` int NOT NULL,
  PRIMARY KEY (`Vin_Num`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`Vin_Num`, `Artist`, `Alb_Title`, `Rel_Yr`) VALUES
(1, 'Weezer', 'Weezer', 1994),
(2, 'Queen', 'The Game', 1980),
(3, 'Asia', 'Asia', 1982),
(4, 'AC/DC', 'Back in Black', 1980),
(5, 'The Seatbelts', 'Cowboy Bebop Soundtrack: Exclusive Club Members Only Edition', 2020),
(6, 'The Beatles', '1967-1970 Collection', 1973),
(7, 'Billy Joel', '52nd Street', 1978),
(8, 'The Dave Brubeck Quartet', 'Jazz Goes to College', 1954),
(9, 'Michael Jackson', 'Thriller', 1982),
(10, 'Johnny Cash', 'Ring of Fire: The Best of Johnny Cash', 1963),
(11, 'Johnny Cash', 'Blood, Sweat, and Tears', 1963),
(12, 'Jimmy Dean', 'Jimmy Dean is Here!', 1967),
(13, 'Neil Diamond', 'You Don\'t Bring Me Flowers', 1978),
(14, 'Walt Disney Productions', 'Walt Disney\'s Happiest Songs', 1967),
(15, 'Eagles', 'Their Greatest Hits', 1976),
(16, 'Earth, Wind, & Fire', 'The Best of Earth, Wind, and Fire Vol.1', 1978),
(17, 'Elvis', 'Girl Happy', 1965),
(18, 'Elvis', 'Elvis For Everyone!', 1965),
(19, 'Elvis', 'Girls! Girls! Girls!', 1962),
(20, 'Elvis', 'Elvis\' Golden Records', 1958),
(21, 'Pink Floyd', 'Dark Side Of The Moon', 1973),
(22, 'Willie Nelson', 'Always On My Mind', 1982),
(23, 'Amaro de Souza Ensemble', 'Saudades Do Brasil', 1981),
(24, 'The Philadelphia Orchestra; Eugene Ormandy', 'Prokofiev: Classical Symphony~The Love of Three Oranges~Lieutenant Kije', 2013),
(25, 'Antonio Vivaldi', 'Five Violin Concerti', 1981),
(26, 'Laurie Records', 'The Great American Rock \'N Roll Revival Vol. 1', 1980),
(27, 'Roulette Records', '20 Original Winners of 1964', 1965),
(29, 'K-Tel International', 'Wings of Sound', 1980),
(30, 'K-Tel International', 'Sound Waves', 1980),
(31, 'Ronco Teleproducts', 'A Christmas Present', 1973);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
