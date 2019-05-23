-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2019 at 11:37 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stage`
--

-- --------------------------------------------------------

--
-- Table structure for table `projet`
--

CREATE TABLE `projet` (
  `id_projet` int(11) NOT NULL,
  `Nprojet` varchar(50) NOT NULL,
  `dprojet` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projet`
--

INSERT INTO `projet` (`id_projet`, `Nprojet`, `dprojet`) VALUES
(1, 'aaa', ''),
(3, 'aaaadzd', 'adadaddad'),
(4, 'aa', ' asax');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mdp` varchar(20) NOT NULL,
  `id_projet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nom`, `email`, `mdp`, `id_projet`) VALUES
(6, 'aaa', 'asma.ayari811@gmail.com', '123456', 0),
(7, 'ali', 'ali@ali.com', '123456', 0),
(8, 'ab', 'ab', 'ab', 0),
(9, 'aada', 'iheb', 'ab', 0),
(10, 'hichem ayari', 'ad', 'ac', 0),
(11, 'hichem ayari', 'ii', 'ii', 0),
(12, 'hichem ayari', 'ii', 'ii', 0),
(13, 'admin', 'admin', 'admin', 0),
(14, 'hichem ayari', 'asma@gmail.com', '123456', 0),
(15, 'hichem ayari', 'asma@gmail.com', '123456', 0),
(16, 'hichem ayari', 'a@gmail.com', '123', 0),
(17, 'as', 'as', 'as', 0),
(18, 'ww', 'ww', 'ww', 0),
(19, 's', 's', 'ss', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_projet`
--

CREATE TABLE `user_projet` (
  `id_user` int(11) NOT NULL,
  `id_projet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_projet`
--

INSERT INTO `user_projet` (`id_user`, `id_projet`) VALUES
(6, 1),
(6, 3),
(6, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`id_projet`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_projet` (`id_projet`);

--
-- Indexes for table `user_projet`
--
ALTER TABLE `user_projet`
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_projet` (`id_projet`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projet`
--
ALTER TABLE `projet`
  MODIFY `id_projet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_projet`
--
ALTER TABLE `user_projet`
  ADD CONSTRAINT `id_projet` FOREIGN KEY (`id_projet`) REFERENCES `projet` (`id_projet`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
