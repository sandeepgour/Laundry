-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2019 at 07:34 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_add_hotel`
--

CREATE TABLE `tbl_add_hotel` (
  `id` int(11) NOT NULL,
  `hotel_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `phone_no` int(100) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `hotel_no` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `added_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_add_hotel`
--

INSERT INTO `tbl_add_hotel` (`id`, `hotel_name`, `address`, `owner`, `phone_no`, `email_id`, `hotel_no`, `status`, `added_at`) VALUES
(6, 'taj hotel mumbai', 'lucknow', 'Rampal singh', 2147483647, 'spgour8741@gmail.com', '10', 'assign', '2019-01-23 10:45:11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_add__services`
--

CREATE TABLE `tbl_add__services` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `services_owner` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `id_proof` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_add__services`
--

INSERT INTO `tbl_add__services` (`id`, `name`, `address`, `services_owner`, `phone_no`, `email_id`, `id_proof`, `status`) VALUES
(1, 'balwant singh', 'Lucknow', 'sandeep', '8907654321', 'spgour8741@gmail.com', '908765432123', 'false'),
(2, 'Shyam Lal', 'Lucknow', 'amit', '9087654321', 'sp@gmail.com', 'yes', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hotel`
--

CREATE TABLE `tbl_hotel` (
  `id` int(11) NOT NULL,
  `pick_up_date` varchar(255) NOT NULL,
  `no_of_clothes` int(200) NOT NULL,
  `extra_instruction` varchar(255) NOT NULL,
  `delivered_date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hotel`
--

INSERT INTO `tbl_hotel` (`id`, `pick_up_date`, `no_of_clothes`, `extra_instruction`, `delivered_date`, `status`) VALUES
(1, '2019-01-28', 10, 'two paints,two shirts, two jeans paints', '2019-01-28', 'washed');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(100) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `login_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `username`, `password`, `user_type`, `status`, `login_time`) VALUES
(1, 'laundry@gmail.com', 'laundry', 'laundry', 0, '2019-01-18 07:38:38'),
(2, 'admin@gmail.com', 'admin123', 'admin', 0, '0000-00-00 00:00:00'),
(3, 'hotel@gmail.com', 'hotel123', 'hotel', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `pid` int(100) NOT NULL,
  `clothes_id` int(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `payment_cut_off` int(100) NOT NULL,
  `payment_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`pid`, `clothes_id`, `amount`, `payment_cut_off`, `payment_status`) VALUES
(1, 1, 4500, 500, 'completed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_add_hotel`
--
ALTER TABLE `tbl_add_hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_add__services`
--
ALTER TABLE `tbl_add__services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_hotel`
--
ALTER TABLE `tbl_hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_add_hotel`
--
ALTER TABLE `tbl_add_hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_add__services`
--
ALTER TABLE `tbl_add__services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_hotel`
--
ALTER TABLE `tbl_hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `pid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
