-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2021 at 06:12 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminpanel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `aname` varchar(250) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(250) NOT NULL,
  `utype` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `aname`, `mail`, `password`, `utype`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', '0');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` bigint(8) NOT NULL,
  `dob` date NOT NULL,
  `address` text NOT NULL,
  `district` varchar(250) NOT NULL,
  `pincode` int(11) NOT NULL,
  `uname` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `verification_key` varchar(250) NOT NULL,
  `is_email_verified` enum('0','1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `lname`, `email`, `phone`, `dob`, `address`, `district`, `pincode`, `uname`, `password`, `verification_key`, `is_email_verified`) VALUES
(1, 'Remya', 'R', 'remyasoman98@gmail.com', 7907170996, '2021-03-04', 'Kizhakkethoppu, TC-92/237, ARA-24, ANAYARA P O ,TRIVANDRUM-29 , KERALA', 'trivandrum', 695029, 'remya21', 'cd033e3b5f940a090e8f2506c559bcdbd9084d1889b266fc4fd8f0a3016e120debd1facc97eb7227c71a30932edf2caae36141d5d5d48d0a505f0e3de7355e19yj7B1Ib5jc5bmaAjiEYDxDSxBH+o8kzqFPzhYrTb35U=', 'bb96ce2c11b7952b11d1a5aaa91b7dbc', '1'),
(2, 'Remya', 'S', 'meenu@gmail.com', 6768698786, '2021-03-04', 'ARA-24 ANAYARA Trivandrum', 'trivandrum', 695029, 'remya123', '94ead56e6d5f1b2ba77e5b3581082d1094b6c753763d4143f141746f20b683c473da36306a09a00026da8301ab5f914ebbbc158fecd607a714c38a8dc4bee8f9kLFE1r+JUSSUf9UJV1ZLr7PfDsn05ig2chQPaUpi/ho=', '474cbb750939a44671ea9d4572315304', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
