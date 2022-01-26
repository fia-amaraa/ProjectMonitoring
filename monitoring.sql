-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2022 at 02:47 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hafecs`
--

-- --------------------------------------------------------

--
-- Table structure for table `monitoring`
--

CREATE TABLE `monitoring` (
  `id` int(20) NOT NULL,
  `project_name` varchar(200) NOT NULL,
  `client` varchar(200) NOT NULL,
  `project_leader` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `progress` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `monitoring`
--

INSERT INTO `monitoring` (`id`, `project_name`, `client`, `project_leader`, `email`, `start_date`, `end_date`, `progress`) VALUES
(1, 'Pembuatan SI Keuangan', 'Bakeuda Prov. Kalsel', 'Indra Setiawan', 'indra.setiawan@gmail.com', '2022-01-14', '2022-08-14', 35),
(2, 'Learning Management System', 'Ruang Guru', 'Hilman Syaputera', 'hilman.syah@gmail.com', '2022-01-30', '2022-03-10', 0),
(3, 'SI Pendataan Atlet Daerah', 'Dispora Jawa Timur', 'Febri Gunawan', 'febri.gunawan@gmail.com', '2022-02-02', '2022-05-30', 0),
(4, 'Employee Monitoring', 'PT. Bina Sarana Sukses', 'Handoko Aji', 'handoko.aji@gmail.com', '2021-09-02', '2022-01-15', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `monitoring`
--
ALTER TABLE `monitoring`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `monitoring`
--
ALTER TABLE `monitoring`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
