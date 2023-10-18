-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mariadb
-- Generation Time: Oct 16, 2023 at 09:38 AM
-- Server version: 10.11.5-MariaDB-1:10.11.5+maria~ubu2204
-- PHP Version: 8.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--
CREATE DATABASE IF NOT EXISTS `blog` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `blog`;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `titre` varchar(500) DEFAULT NULL,
  `commentaire` text DEFAULT NULL,
  `competence` varchar(255) DEFAULT NULL,
  `niveau` varchar(255) DEFAULT NULL,
  `createdAt` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `nom`, `email`, `titre`, `commentaire`, `competence`, `niveau`, `createdAt`) VALUES
(1, 'jon doe', 'jjo@yahoo.uk', 'un titre pour jojj', 'There are a number of mailing lists devoted to talking about PHP and related projects. This list describes them all, has links to searchable archives for all of the lists, and explains how to subscribe to the lists.', 'python,html', 'expert', '2023-10-16 09:06:27'),
(2, 'jane doe', 'jiji@yahoo.uk', 'un titre pour jijij', 'A good place to start is by skimming through the ever-growing list of frequently asked questions (with answers, of course). Then have a look at the rest of the online manual and other resources in the documentation section. ', 'php,html', 'intermediate', '2023-10-16 09:06:27'),
(3, 'karl doe', 'kk@yahoo.uk', 'un titre pour kk', 'Chances are that there is a User Group in your neighborhood, which are generally a great resource both for beginners and experienced PHP users. Check out the User Group listing on PHP.ug to see if there is one close by.  ', 'python', 'beginner', '2023-10-16 09:06:27'),
(4, 'Michel Bertrand', 'miber@gmail.com', 'Pilot', 'This data was added with use of the phpmyadmin', 'Python', 'intermediaire', '2023-10-16 09:11:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
