-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2023 at 12:02 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bld_dntn`
--

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `sno` int(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `email` varchar(55) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `other` text NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`sno`, `name`, `age`, `gender`, `blood_group`, `email`, `phone`, `other`, `dt`) VALUES
(1, 'Namita Bhatt', 19, 'Female', 'B pos', 'namita038btaiml22@igdt', '9811792832', 'none', '2023-12-27 15:31:09'),
(2, 'Prerna Arya', 20, 'Female', 'B pos', 'prerna056btaiml22@igdt', '9754634578', 'no', '2023-12-27 15:54:26'),
(5, 'Anandita Mayer', 21, 'Female', 'A pos', 'anandita005btaiml22@ig', '9654367421', 'none as of yet', '2023-12-27 15:55:45'),
(6, 'Suhani Bhatt', 20, 'Female', 'A pos', 'suhani@gmail.com', '9878675888', '-', '2023-12-27 18:26:35'),
(7, 'Saanvi Gupta', 22, 'Female', 'A pos', 'saanvi@gmail.com', '9822342356', '', '2023-12-27 18:27:32'),
(8, 'Ram Gupta', 30, 'Male', 'A pos', 'ram@yahoo.in', '9988773245', '', '2023-12-27 18:28:16'),
(9, 'Shanaya Arora', 25, 'Female', 'A neg', 'shannu@gmail.com', '9878675777', '', '2023-12-27 18:29:12'),
(10, 'Shammi Kapoor', 40, 'Male', 'B pos', 'shammi123@gmail.com', '9822342353', '', '2023-12-27 18:29:52'),
(11, 'Ankita Rai', 23, 'Female', 'B neg', 'ankita@gmail.com', '9822342332', '', '2023-12-27 18:30:34'),
(12, 'Uma Bhatt', 55, 'Female', 'O pos', 'bhattuma123@gmail.com', '9968285983', '', '2023-12-27 18:31:23'),
(13, 'Kailash Bhatt', 60, 'Male', 'O neg', 'kailash@gmail.com', '9811792897', '', '2023-12-27 18:31:59'),
(14, 'Mudit Bhatt', 32, 'Male', 'AB pos', 'mudit@gmail.com', '9898767655', '', '2023-12-27 18:32:49'),
(15, 'Anant Saxena', 33, 'Male', 'AB neg', 'anant@yahoo.in', '9822342351', '', '2023-12-27 18:33:24'),
(16, 'Rachit Sharma', 20, 'Male', 'AB pos', 'rachit22@yahoo.in', '9822342351', '', '2023-12-27 18:34:28'),
(17, 'Garima Arora', 20, 'Female', 'AB pos', 'garima@hotmail.com', '9878675771', '', '2023-12-27 18:35:06'),
(18, 'Kartik Aryan', 34, 'Male', 'AB pos', 'kartik@email.com', '9431792834', 'none', '2023-12-27 21:08:34'),
(19, 'shruti sinha', 21, 'Female', 'AB pos', 'shruti@email.com', '9811792834', 'none', '2023-12-28 15:38:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
