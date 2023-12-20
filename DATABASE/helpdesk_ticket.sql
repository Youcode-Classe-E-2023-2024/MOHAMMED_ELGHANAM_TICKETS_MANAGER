-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2023 at 11:10 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helpdesk_ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignement`
--

CREATE TABLE `assignement` (
  `id_user` int(11) NOT NULL,
  `id_ticket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `text` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_ticket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id_ticket` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `priorite` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id_ticket`, `title`, `description`, `priorite`, `status`) VALUES
(13, 'title', 'description', 'priority', 'tag'),
(14, 'tr', 'dddddddddddd dddddd d', 'medium', 'bug'),
(15, 'FFFFF', 'YTREZ GFDSQ', 'high', 'question'),
(16, 'FFFFF', 'YTREZ GFDSQ', 'high', 'question');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` longblob NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `name`, `image`, `email`, `password`) VALUES
(1, 'med', '', 'g@g', '123'),
(2, 'MOHAMMED ELGH', 0x433a78616d7070096d70706870313834362e746d70, 'g@g', '54fd1711209fb1c0781092374132c66e79e2241b'),
(3, 'MOHAMMED ELGH', 0x433a78616d7070096d70706870423146352e746d70, 'g@g', '54fd1711209fb1c0781092374132c66e79e2241b'),
(4, 'assya', 0x433a78616d7070096d70706870393936382e746d70, 'assya@assya', '4ca608a934491a1da90e4c95bf0e098208dd7bd4'),
(5, 'assya', 0x433a78616d7070096d70706870373943362e746d70, 'assya@assya', '4ca608a934491a1da90e4c95bf0e098208dd7bd4'),
(6, 'aya', 0x433a78616d7070096d70706870343939362e746d70, 'aya@aya', '6ae67d87b78409ccca0cbc814e787e98884fe04f'),
(7, 'ilyas', 0x433a78616d7070096d707068703139362e746d70, 'ILYAS@ILYAS', '611eb18adf106660ee44cd0019017722672d74bc'),
(8, 'ilyas', 0x433a78616d7070096d70706870464539352e746d70, 'ILYAS@ILYAS', '611eb18adf106660ee44cd0019017722672d74bc'),
(9, 'MOHAMMED ELGH', 0x433a78616d7070096d70706870373642352e746d70, 'ILYAS@ILYAS', '611eb18adf106660ee44cd0019017722672d74bc'),
(10, 'Hicham baydoni', 0x433a78616d7070096d70706870333634432e746d70, 'ILYAS@ILYASSSSSS', '8cb2237d0679ca88db6464eac60da96345513964');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignement`
--
ALTER TABLE `assignement`
  ADD KEY `id_ticket` (`id_ticket`),
  ADD KEY `id_user` (`id_user`) USING BTREE;

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `comment_ibfk_1` (`id_ticket`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id_ticket`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id_ticket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assignement`
--
ALTER TABLE `assignement`
  ADD CONSTRAINT `id_ticket` FOREIGN KEY (`id_ticket`) REFERENCES `ticket` (`id_ticket`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_ticket`) REFERENCES `ticket` (`id_ticket`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
