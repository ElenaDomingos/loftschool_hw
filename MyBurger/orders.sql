-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 29-Jul-2019 às 21:05
-- Versão do servidor: 5.6.41-84.1
-- versão do PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopf582_cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `street` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `building` int(11) NOT NULL,
  `part` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `appt` int(11) NOT NULL,
  `floor` int(11) NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `change` tinyint(1) NOT NULL,
  `paycard` tinyint(1) NOT NULL,
  `callback` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `street`, `building`, `part`, `appt`, `floor`, `comment`, `change`, `paycard`, `callback`) VALUES
(22, 2, 'José R Sobrinho, 76', 2, '2', 2, 2, 'Привет от старых щеблет', 1, 2, 0),
(23, 2, 'José R Sobrinho, 76', 2, '2', 2, 2, 'Спасибо', 1, 0, 1),
(25, 4, 'José R Sobrinho, 76', 2, '2', 2, 2, 'I am very hungry', 0, 2, 0),
(32, 10, 'José R Sobrinho', 76, '2', 45, 1, 'Thank you', 1, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
