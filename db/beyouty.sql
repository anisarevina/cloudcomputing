-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 11, 2021 at 10:45 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beyouty`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `bio` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `bio`) VALUES
(4, 'niss1919', 'akoeyangtersakiti4@gmail.com', '$2y$10$6/uty35cKacJdutOoWXiM.WYuYzxbWiVL9g6.cYEAWnQnD9wh4GRy', 'netflix and chill'),
(3, 'anisarevina', 'revinarahmanisa@gmail.com', '$2y$10$2IbyGoPdK3ye105zwRcROeWiJzJzTuGC52vArdXyaH9mRHiMQlPgW', 'Love urself'),
(5, 'niss1919', 'akoeyangtersakiti4@gmail.com', '$2y$10$RirSkzTvvWEGH0k8Ph2YT.6Q0pb1kdn06IrEbspAprAXkByyZZ7tq', 'netflix and chill'),
(6, 'niss1919', 'akoeyangtersakiti4@gmail.com', '$2y$10$wR5gR7COhPKFWkqrc5xahO5LKSbMuhGVGAooVkAznn9DKaQ6GV03e', 'netflix and chill'),
(7, 'niss1919', 'akoeyangtersakiti4@gmail.com', '$2y$10$dBR25WYYYtGyVm/4vdzmqu/d5oTFASLthavJ22//o5DZnkFH3r5Rm', 'netflix and chill'),
(8, 'vanilla', 'gabutbgt@gmail.com', '$2y$10$vndwiXUl9UHeK3NvGZcH2ukZ4NUe.QCOAbWxccXKxEnSDHQ.UN5RS', 'beauty enthusiast'),
(9, 'nisaa', 'nisacantik@gmail.com', '$2y$10$L65DBiCfGwjM9vovtAZXT.61ek3bOWPhTC1JwZICSySHyuOyT1n9W', 'love food'),
(10, 'anisarevinaa', 'revinaerha@gmail.com', '$2y$10$CrHMdn4bS1/QFz7JrJ5uHuJRmzTxrPCF3cnSzRObeLGmRMnQOzff2', 'beauty enthusiast'),
(11, 'nisarvn', 'nisarevina@gmail.com', '$2y$10$Pw30APxPymaE6KuKDqzoIuZ3QN0p5goZ0OWmGfYKQc3Gx3Ahj1P82', 'beauty enthusiast');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
