-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 04 Lut 2021, 10:08
-- Wersja serwera: 10.1.40-MariaDB
-- Wersja PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `zadanietestowe`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(36) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `culture` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `born` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `died` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `father` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mother` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `customer`
--

INSERT INTO `customer` (`id`, `name`, `gender`, `culture`, `born`, `died`, `father`, `mother`, `updated_at`, `created_at`) VALUES
(1, '', 'Female', 'Braavosi', NULL, NULL, '', '', '2021-02-03 16:56:08', '2021-02-03 16:56:08'),
(2, 'Walder', 'Male', '', NULL, NULL, '', '', '2021-02-03 16:56:08', '2021-02-03 16:56:08'),
(3, '', 'Male', '', NULL, NULL, '', '', '2021-02-03 16:56:08', '2021-02-03 16:56:08'),
(4, '', 'Female', 'Braavosi', NULL, NULL, '', '', '2021-02-03 16:56:08', '2021-02-03 16:56:08'),
(5, '', 'Male', '', NULL, NULL, '', '', '2021-02-03 16:56:08', '2021-02-03 16:56:08'),
(6, '', 'Female', 'Braavosi', NULL, NULL, '', '', '2021-02-03 16:56:08', '2021-02-03 16:56:08'),
(7, '', 'Female', '', NULL, NULL, '', '', '2021-02-03 16:56:08', '2021-02-03 16:56:08'),
(8, '', 'Male', '', NULL, NULL, '', '', '2021-02-03 16:56:08', '2021-02-03 16:56:08'),
(9, '', 'Female', '', NULL, NULL, '', '', '2021-02-03 16:56:08', '2021-02-03 16:56:08'),
(10, '', 'Female', 'Braavosi', NULL, NULL, '', '', '2021-02-03 16:56:08', '2021-02-03 16:56:08'),
(11, '', 'Female', 'Braavosi', 'In 263 AC or 264 AC', NULL, '', '', '2021-02-03 16:56:08', '2021-02-03 16:56:08'),
(12, 'Balon Greyjoy23', 'Male', NULL, NULL, '299 AC, at Pyke', 'https://www.anapioficeandfire.com/api/characters/836', NULL, '2021-02-04 07:25:42', '2021-02-03 16:56:08'),
(13, 'Chayle', 'Male', '', NULL, 'In 299 AC, at Winterfell', '', '', '2021-02-03 16:56:08', '2021-02-03 16:56:08'),
(14, 'Gillam', 'Male', '', NULL, NULL, '', '', '2021-02-03 16:56:08', '2021-02-03 16:56:08'),
(15, 'High Septon', 'Male', '', NULL, NULL, '', '', '2021-02-03 16:56:08', '2021-02-03 16:56:08'),
(16, 'Margaery Tyrell', 'Female', 'Westeros', 'In 283 AC, at Highgarden', NULL, '', '', '2021-02-03 16:56:08', '2021-02-03 16:56:08'),
(17, 'Melicent', 'Female', '', NULL, NULL, '', '', '2021-02-03 16:56:08', '2021-02-03 16:56:08'),
(18, 'Meribald', 'Male', '', 'In 247 AC or 248 AC, at the riverlands', NULL, '', '', '2021-02-03 16:56:08', '2021-02-03 16:56:08'),
(19, 'Moelle', 'Female', '', NULL, NULL, '', '', '2021-02-03 16:56:08', '2021-02-03 16:56:08'),
(20, 'Mordane', 'Female', '', NULL, 'In 298 AC, at King\'s Landing', '', '', '2021-02-03 16:56:08', '2021-02-03 16:56:08'),
(21, 'Nysterica', 'Female', '', NULL, NULL, '', '', '2021-02-03 16:56:08', '2021-02-03 16:56:08'),
(22, 'Ollidor', 'Male', '', NULL, NULL, '', '', '2021-02-03 16:56:08', '2021-02-03 16:56:08'),
(23, 'Osmynd', 'Male', '', NULL, NULL, '', '', '2021-02-03 16:56:08', '2021-02-03 16:56:08'),
(24, 'Raynard', 'Male', '', NULL, NULL, '', '', '2021-02-03 16:56:08', '2021-02-03 16:56:08'),
(25, 'Scolera', 'Female', '', NULL, NULL, '', '', '2021-02-03 16:56:08', '2021-02-03 16:56:08'),
(26, 'Torbert', 'Male', '', NULL, NULL, '', '', '2021-02-03 16:56:08', '2021-02-03 16:56:08'),
(27, 'Tywin Lannister', 'Male', '', 'In 242 AC', 'In 300 AC, at King\'s Landing', '', '', '2021-02-03 16:56:08', '2021-02-03 16:56:08'),
(28, 'Unella', 'Female', '', NULL, NULL, '', '', '2021-02-03 16:56:08', '2021-02-03 16:56:08'),
(29, 'Abelar Hightower', 'Male', '', NULL, NULL, '', '', '2021-02-03 16:56:08', '2021-02-03 16:56:08'),
(30, 'Addam Frey', 'Male', '', NULL, NULL, '', '', '2021-02-03 16:56:08', '2021-02-03 16:56:08'),
(31, 'Addam Marbrand', 'Male', '', NULL, NULL, '', '', '2021-02-03 16:56:08', '2021-02-03 16:56:08'),
(32, 'Addam Osgrey', 'Male', '', 'In 183 AC or 184 AC', 'In 196 AC, at Redgrass Field', '', '', '2021-02-03 16:56:08', '2021-02-03 16:56:08'),
(33, 'Addam Velaryon', 'Male', 'Valyrian', 'In 114 AC, at Hull', 'In 130 AC, at Tumbleton', '', '', '2021-02-03 16:56:08', '2021-02-03 16:56:08'),
(34, 'Addison Hill', 'Male', '', 'At Cornfield', NULL, '', '', '2021-02-03 16:56:08', '2021-02-03 16:56:08'),
(35, 'Aegon Blackfyre', 'Male', 'Valyrian', 'In 184 AC', 'In 196 AC, at Redgrass Field', '', '', '2021-02-03 16:56:08', '2021-02-03 16:56:08'),
(36, 'Aegon Frey', 'Male', '', 'In 249 AC (roughly)', 'In 299 AC, at the Twins', '', '', '2021-02-03 16:56:08', '2021-02-03 16:56:08'),
(37, 'Aegon Frey', 'Male', '', 'In or between 253 AC and 272 AC', NULL, '', '', '2021-02-03 16:56:08', '2021-02-03 16:56:08'),
(38, 'Aegon I2asdasd', 'Male', NULL, '27 BC, at Dragonstone', '37 AC, at Dragonstone', 'https://www.anapioficeandfire.com/api/characters/59', 'https://www.anapioficeandfire.com/api/characters/1070', '2021-02-03 18:58:02', '2021-02-03 16:56:08'),
(39, 'Aegon II', 'Male', '', '107 AC, at King\'s Landing', '131 AC, at King\'s Landing', 'https://www.anapioficeandfire.com/api/characters/1076', 'https://www.anapioficeandfire.com/api/characters/76', '2021-02-03 16:56:08', '2021-02-03 16:56:08'),
(40, 'Aegon III', 'Male', 'Valyrian', '120 AC, at Dragonstone', '157 AC, at King\'s Landing', 'https://www.anapioficeandfire.com/api/characters/269', 'https://www.anapioficeandfire.com/api/characters/874', '2021-02-03 16:56:08', '2021-02-03 16:56:08'),
(41, 'Aegon IV', 'Male', '', '135 AC, at King\'s Landing', '184 AC, at King\'s Landing', '', '', '2021-02-03 16:56:09', '2021-02-03 16:56:09'),
(42, 'Aegon Targaryen', 'Male', 'Valyrian', 'In 281 AC or 282 AC, at Dragonstone', 'In 283 AC (Supposedly), at King\'s Landing', '', '', '2021-02-03 16:56:09', '2021-02-03 16:56:09'),
(43, 'Aegon Targaryen', 'Male', 'Valyrian', 'In 26 AC', 'In 43 AC, at Gods Eye', '', '', '2021-02-03 16:56:09', '2021-02-03 16:56:09'),
(44, 'Aegon Targaryen', 'Male', 'Valyrian', NULL, NULL, '', '', '2021-02-03 16:56:09', '2021-02-03 16:56:09'),
(45, 'Aegon Targaryen', 'Male', 'Valyrian', 'In or between 50 AC and 59 AC', NULL, '', '', '2021-02-03 16:56:09', '2021-02-03 16:56:09'),
(46, 'Aegon V', 'Male', '', '200 AC, at King\'s Landing', '259 AC, at Summerhall', 'https://www.anapioficeandfire.com/api/characters/695', 'https://www.anapioficeandfire.com/api/characters/334', '2021-02-03 16:56:09', '2021-02-03 16:56:09'),
(47, 'Aegor Rivers', 'Male', '', 'In 172 AC', 'In 241 AC, at the Disputed Lands', '', '', '2021-02-03 16:56:09', '2021-02-03 16:56:09'),
(48, 'Aelinor Penrose', 'Female', 'Valyrian', NULL, NULL, '', '', '2021-02-03 16:56:09', '2021-02-03 16:56:09'),
(49, 'Aemma Arryn', 'Female', '', 'In 82 AC', 'In 105 AC', '', '', '2021-02-03 16:56:09', '2021-02-03 16:56:09'),
(50, 'Aemon Blackfyre', 'Male', 'Valyrian', 'In 184 AC', 'In 196 AC, at Redgrass Field', '', '', '2021-02-03 16:56:09', '2021-02-03 16:56:09');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
