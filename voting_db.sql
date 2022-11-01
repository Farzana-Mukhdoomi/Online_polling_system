-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2020 at 03:42 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `candidates_id` int(11) NOT NULL,
  `candidates_name` varchar(100) NOT NULL,
  `elections_name` varchar(100) NOT NULL,
  `total_votes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`candidates_id`, `candidates_name`, `elections_name`, `total_votes`) VALUES
(1, 'zee', ' CR ', 0),
(2, 'urain', ' CR ', 0),
(3, 'P. Saika', ' HOD ', 0),
(4, 'P. Irshad', ' HOD ', 0),
(5, 'P. waseem', ' HOD ', 0),
(6, 'ER- Bilaal', ' Principal ', 0),
(7, 'ER- Sameer', ' Principal ', 0),
(8, 'Adward', ' Priest ', 0),
(9, 'zuhaib', ' Monitor ', 0),
(10, 'ER- Taufeeeq', ' Principal ', 0),
(11, 'Sheikh zee', ' CR ', 0),
(14, 'i1', 'CR', 0),
(15, 'i2', 'CR', 0),
(16, 'Ia1', 'HOD', 1),
(17, 'i33', 'CR', 0),
(20, 'qweyu', ' CR ', 0),
(21, '0sz', ' CR ', 0),
(22, 'aaaaaaaaaaaaa', ' CR ', 0),
(50, 'Loki', 'CR', 3),
(66, 'Kami', 'CR', 1);

-- --------------------------------------------------------

--
-- Table structure for table `elections`
--

CREATE TABLE `elections` (
  `elections_id` int(11) NOT NULL,
  `elections_name` varchar(100) NOT NULL,
  `elections_start_date` date NOT NULL,
  `elections_end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `elections`
--

INSERT INTO `elections` (`elections_id`, `elections_name`, `elections_start_date`, `elections_end_date`) VALUES
(1, 'HOD', '2020-10-22', '2020-12-26'),
(2, 'Priest', '2020-02-11', '2020-03-27'),
(3, 'CR', '2020-04-14', '2020-04-15'),
(4, 'Monitor', '2020-06-20', '2020-07-11'),
(5, 'Principal', '2020-07-03', '2020-07-31');

-- --------------------------------------------------------

--
-- Table structure for table `id_request`
--

CREATE TABLE `id_request` (
  `id` int(11) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_province` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `candidates_name` varchar(100) NOT NULL,
  `elections_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `user_email`, `candidates_name`, `elections_name`) VALUES
(33, 'fah@gmail.com', 'Loki', 'CR'),
(34, 'urain@aol.com', 'Loki', 'CR'),
(35, 'sheikhzeeshan98@gmail.com', 'Loki', 'CR'),
(36, 'musaib@aol.com', 'Kami', 'CR'),
(37, 'sheikhzeeshan98@gmail.com', 'Ia1', 'HOD');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `aid` int(11) NOT NULL,
  `admin_username` varchar(30) NOT NULL,
  `admin_password` varchar(30) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`aid`, `admin_username`, `admin_password`, `time_stamp`) VALUES
(1, 'admin@icsc.com', '_admin', '2020-08-08 11:58:35');

-- --------------------------------------------------------

--
-- Table structure for table `users_db`
--

CREATE TABLE `users_db` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_gender` varchar(50) NOT NULL,
  `user_province` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `id_generated` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_db`
--

INSERT INTO `users_db` (`user_id`, `user_name`, `user_email`, `user_gender`, `user_province`, `user_password`, `id_generated`) VALUES
(2, 'Sheikh Zeeshan Ahmad', 'sheikhzeeshan98@gmail.com', 'Male', 'srinagar', '123', 'SRI1815783NGR'),
(3, 'Shah', 'me.timfranks@gmail.com', 'Other', 'sopore', 'khj', ''),
(6, 'sheikh zeeshan', 'Shk@gmail.com', 'Male', 'ganderbal', '123', ''),
(7, 'rasiq', 'rasi@gmail.com', 'Male', 'Kopwara', '123', ''),
(8, 'faheem', 'fah@gmail.com', 'Male', 'ganderbal', '123', 'GND8004269RBL'),
(9, 'urain', 'urain@aol.com', 'Female', 'budgam', '123', 'BUD8401934GAM'),
(10, 'Musaib', 'musaib@aol.com', 'Male', 'shopian', '123', 'SHP3150242IAN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`candidates_id`);

--
-- Indexes for table `elections`
--
ALTER TABLE `elections`
  ADD PRIMARY KEY (`elections_id`);

--
-- Indexes for table `id_request`
--
ALTER TABLE `id_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `users_db`
--
ALTER TABLE `users_db`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `candidates_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `elections`
--
ALTER TABLE `elections`
  MODIFY `elections_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `id_request`
--
ALTER TABLE `id_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_db`
--
ALTER TABLE `users_db`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
