-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2018 at 02:21 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `north`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_joined` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `member_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `first_name`, `last_name`, `email`, `password`, `date_joined`, `member_type`) VALUES
(1, 'Derick', 'Masai', 'derick@north.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2018-12-09 08:00:00', 'Administrator'),
(2, 'Faith', 'Njeri', 'faithnjeri@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2018-12-09 08:00:00', 'Member'),
(3, 'James', 'Dibo', 'jamesdibo@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2018-12-09 08:00:00', 'Member'),
(4, 'Franscis', 'Amenya', 'francisamenya@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2018-12-15 12:57:19', 'Member'),
(5, 'Rahaat', 'Rajan', 'rahaatrajan@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2018-12-15 12:59:40', 'Member'),
(6, 'Sharon', 'Macharia', 'sharonmacharia@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2018-12-15 13:00:29', 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
