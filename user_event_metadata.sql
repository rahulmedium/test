-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2018 at 09:19 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airwhizz`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_event_metadata`
--

CREATE TABLE `user_event_metadata` (
  `id` int(89) NOT NULL,
  `event_id` int(67) NOT NULL,
  `intercom_event_id` varchar(255) NOT NULL,
  `metadata` varchar(255) NOT NULL,
  `created_at` varchar(67) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_event_metadata`
--

INSERT INTO `user_event_metadata` (`id`, `event_id`, `intercom_event_id`, `metadata`, `created_at`) VALUES
(1, 1, 'b002f8fc-2f70-11e8-bbe4-052525f8279b', '{\"date\":\"26-03-2018\",\"arr_airport\":\"BLR\",\"dep_airport\":\"MAA\",\"awp_flight_id\":\"19053\"}', ''),
(2, 13, 'd5af622c-2e88-11e8-aba4-5b21ec81ab24', '{\"date\":\"07-05-2018\",\"arr_airport\":\"BLR\",\"dep_airport\":\"DEL\",\"awp_flight_id\":\"19050\"}', ''),
(3, 14, 'bff09902-2e87-11e8-8ec5-031fda39e17c', '{\"date\":\"24-03-2018\",\"arr_airport\":\"MAA\",\"dep_airport\":\"BLR\",\"awp_flight_id\":\"19042\"}', ''),
(4, 15, 'bceee326-2e87-11e8-9116-77552d8568fd', '{\"date\":\"26-03-2018\",\"arr_airport\":\"BLR\",\"dep_airport\":\"MAA\",\"awp_flight_id\":\"19053\"}', ''),
(5, 17, 'b3664592-2e87-11e8-bae5-6dda47464036', '{\"date\":\"24-03-2018\",\"arr_airport\":\"MAA\",\"dep_airport\":\"BLR\",\"awp_flight_id\":\"19042\"}', ''),
(6, 18, '84ed02c8-2e87-11e8-9af4-272563c248d4', '{\"date\":\"27-04-2018\",\"arr_airport\":\"DEL\",\"dep_airport\":\"BLR\",\"awp_flight_id\":\"19048\"}', ''),
(7, 19, '7d2b5a62-2e87-11e8-add5-6fefbd31d239', '{\"date\":\"26-03-2018\",\"arr_airport\":\"BLR\",\"dep_airport\":\"MAA\",\"awp_flight_id\":\"19053\"}', ''),
(8, 20, '78fca5cc-2e87-11e8-9534-1f2f8fffd4f5', '{\"date\":\"27-04-2018\",\"arr_airport\":\"DEL\",\"dep_airport\":\"BLR\",\"awp_flight_id\":\"19048\"}', ''),
(9, 22, '70103b2c-2e87-11e8-a3a3-5b7a7ac8952a', '{\"date\":\"24-03-2018\",\"arr_airport\":\"MAA\",\"dep_airport\":\"BLR\",\"awp_flight_id\":\"19042\"}', ''),
(10, 26, '0d1f3874-2e87-11e8-8bdf-27d9a4c0289f', '{\"date\":\"24-03-2018\",\"arr_airport\":\"MAA\",\"dep_airport\":\"BLR\",\"awp_flight_id\":\"19042\"}', ''),
(11, 27, '055a784c-2e87-11e8-bc7b-1d3a0e90a8bf', '{\"date\":\"24-03-2018\",\"arr_airport\":\"MAA\",\"dep_airport\":\"BLR\",\"awp_flight_id\":\"19042\"}', ''),
(12, 31, 'bca47df2-2e84-11e8-8384-4d91f013b70c', '{\"date\":\"24-03-2018\",\"arr_airport\":\"MAA\",\"dep_airport\":\"BLR\"}', ''),
(13, 32, 'b91545ea-2e84-11e8-bfb9-6deb2374a6e1', '{\"date\":\"23-03-2018\",\"arr_airport\":\"MAA\",\"dep_airport\":\"BLR\"}', ''),
(14, 36, '9254e97e-2e84-11e8-b18b-71537ad43b00', '{\"awp_registration_method\":\"EMAIL\"}', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_event_metadata`
--
ALTER TABLE `user_event_metadata`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `event_id` (`event_id`),
  ADD UNIQUE KEY `intercom_event_id` (`intercom_event_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_event_metadata`
--
ALTER TABLE `user_event_metadata`
  MODIFY `id` int(89) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_event_metadata`
--
ALTER TABLE `user_event_metadata`
  ADD CONSTRAINT `user_event_metadata_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `user_event` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
