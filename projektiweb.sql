-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2023 at 12:27 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projektiweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `uploaded_by` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `file_name`, `uploaded_on`, `status`, `uploaded_by`) VALUES
(1, 'crispr.png', '2023-01-30 00:30:17', '1', 'administratori1'),
(2, 'columbia.png', '2023-01-30 00:31:35', '1', 'administratori2'),
(3, 'columbiajasht.jpg', '2023-01-30 00:31:51', '1', 'administratori2'),
(4, 'columbiaoborr.jpg', '2023-01-30 00:31:59', '1', 'administratori1'),
(5, 'medicinelab.jpg', '2023-01-30 00:33:05', '1', 'administratori1'),
(6, 'politik.jpeg', '2023-02-11 19:38:34', '1', 'administratori3'),
(7, 'psikologji.jpg', '2023-01-30 00:34:58', '1', 'administratori3'),
(8, 'robot.jpg', '2023-01-30 00:35:09', '1', 'administratori2'),
(9, 'ShkencatNatyrore.jpg', '2023-01-30 00:35:25', '1', 'administratori3'),
(11, 'Universiteti.jpg', '2023-02-12 11:24:27', '1', 'administratori1'),
(12, 'Socio2.png', '2023-01-30 00:36:01', '1', 'administratori3'),
(13, 'Tech2.jpg', '2023-01-30 00:36:14', '1', 'administratori2'),
(14, 'Tech3.jpg', '2023-01-30 00:36:26', '1', 'administratori1'),
(15, 'Tech1.jpg', '2023-02-11 23:26:06', '1', 'administratori1'),
(16, 'email2.png', '2023-02-11 23:55:47', '1', 'administratori3'),
(17, 'fbblack.png', '2023-02-11 23:56:17', '1', 'administratori2'),
(18, 'Phone.png', '2023-02-11 23:56:55', '1', 'administratori1'),
(19, 'youtube4.png', '2023-02-11 23:57:19', '1', 'administratori1'),
(20, 'copyright.png', '2023-02-11 23:57:32', '1', 'administratori3'),
(21, 'instagram.png', '2023-02-12 11:10:51', '1', 'administratori2');

-- --------------------------------------------------------

--
-- Table structure for table `lajmet`
--

CREATE TABLE `lajmet` (
  `ID` varchar(40) NOT NULL,
  `uploaded_by` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lajmet`
--

INSERT INTO `lajmet` (`ID`, `uploaded_by`) VALUES
('AMDnews.txt', 'administratori1'),
('ChessAI.txt', 'administratori2'),
('lajmi5g.txt', 'administratori1'),
('lajmiamd.txt', 'administratori1'),
('lajmigoogle.txt', 'administratori2'),
('lajmigoogle2.txt', 'administratori2'),
('LatestIntelNews.txt', 'administratori1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `emri` varchar(20) NOT NULL,
  `mbiemri` varchar(20) NOT NULL,
  `fjalekalimi` longtext NOT NULL,
  `mosha` int(11) NOT NULL,
  `llojiiuserit` int(11) DEFAULT 0,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `emri`, `mbiemri`, `fjalekalimi`, `mosha`, `llojiiuserit`, `email`) VALUES
(1, 'Florian', 'Idrizi', 'FlorianIdrizi1', 21, 1, 'florianidrizi@hotmail.com'),
(26, 'joadmin', 'joadmin', 'Joadmin123', 19, 0, 'joadmin@gmail.com'),
(27, 'Artan', 'Matoshi', 'ArtanMatoshi1', 18, 0, 'artanmatoshi@gmail.com'),
(29, 'Besim', 'Morina', 'BesimMorina1', 19, 0, 'besimmorina@gmail.com'),
(31, 'zxcvbnm', 'qwerty', 'Zxcvbnm1234', 20, 0, 'zxcvbnm@gmail.com'),
(32, 'pppp', 'pppp', 'PpppPppp1', 19, 0, 'pppp@gmail.com'),
(34, 'poiu', 'poiu', 'PoiuPoiu1', 18, 0, 'poiupoiu@gmail.com'),
(36, 'blerti', 'krasniqi', 'BlertiKrasniqi1', 20, 0, 'blertikrasniqi@gmail.com'),
(37, 'User', 'Useri', 'User1234', 21, 0, 'Useri0@gmail.com'),
(38, 'Testeri', 'Testues', 'Testeri123', 19, 0, 'TesetrFtefteri@hotmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lajmet`
--
ALTER TABLE `lajmet`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
