-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2023 at 04:12 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cho_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `date_of_consultation` date NOT NULL,
  `family_serial_num` varchar(100) NOT NULL,
  `house_num` varchar(100) NOT NULL,
  `baranggay` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `birthday` varchar(100) NOT NULL,
  `age` int(50) NOT NULL,
  `height` double NOT NULL,
  `weight` double NOT NULL,
  `educational_attainment` varchar(100) NOT NULL,
  `mobile_number` int(50) NOT NULL,
  `allergy` varchar(100) NOT NULL,
  `disability` varchar(100) NOT NULL,
  `drug` varchar(100) NOT NULL,
  `handicap` varchar(100) NOT NULL,
  `impairment` varchar(100) NOT NULL,
  `last_men_period` date NOT NULL,
  `tetanus_toxoid` varchar(100) NOT NULL,
  `gravidity` varchar(100) NOT NULL,
  `estimated_due` date NOT NULL,
  `parity` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `pre_term` varchar(100) NOT NULL,
  `live_birth` varchar(100) NOT NULL,
  `abortion` varchar(100) NOT NULL,
  `menarche` int(50) NOT NULL,
  `period_duration` varchar(100) NOT NULL,
  `birth_control_method` varchar(100) NOT NULL,
  `what_age` int(50) NOT NULL,
  `syphilis_result` varchar(100) NOT NULL,
  `penicillin_treatment` varchar(100) NOT NULL,
  `menopause` varchar(100) NOT NULL,
  `test_class_hiv` varchar(100) NOT NULL,
  `prenatal_visits` varchar(100) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user',
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
