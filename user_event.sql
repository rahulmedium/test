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
-- Table structure for table `user_event`
--

CREATE TABLE `user_event` (
  `id` int(12) NOT NULL,
  `user_id` int(89) NOT NULL,
  `intercom_event_id` varchar(255) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `intercom_user_id` varchar(255) NOT NULL,
  `created_at` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_event`
--

INSERT INTO `user_event` (`id`, `user_id`, `intercom_event_id`, `event_name`, `intercom_user_id`, `created_at`) VALUES
(1, 55517, 'b002f8fc-2f70-11e8-bbe4-052525f8279b', 'aw_selected_flight_on_mytrips', '5ab4d63443892d1fb2262c29', '1521902167'),
(2, 55517, '1df02200-2f5c-11e8-bcb9-254491aeb183', 'aw_click_on_offers', '5ab4d63443892d1fb2262c29', '1521893332'),
(3, 55517, '1d559618-2f5c-11e8-8319-295ff67d817a', 'aw_click_on_dep', '5ab4d63443892d1fb2262c29', '1521893331'),
(4, 55517, '1d4ef52e-2f5c-11e8-ba51-25e43bd4f0d0', 'aw_click_on_arr', '5ab4d63443892d1fb2262c29', '1521893331'),
(5, 55517, '1cb65990-2f5c-11e8-8ac9-0d0802b9f3b5', 'aw_open_cab_booking', '5ab4d63443892d1fb2262c29', '1521893330'),
(6, 55517, '410ccdba-2ead-11e8-afe7-415eefee2287', 'aw_open_cab_booking', '5ab4d63443892d1fb2262c29', '1521818229'),
(7, 55517, '410b3f36-2ead-11e8-ab4d-496e236fabbd', 'aw_click_on_arr', '5ab4d63443892d1fb2262c29', '1521818229'),
(8, 55517, '410a2aa6-2ead-11e8-82c1-597992167eaa', 'aw_click_on_dep', '5ab4d63443892d1fb2262c29', '1521818229'),
(9, 55517, '318e20aa-2ead-11e8-a02d-57ff46366631', 'aw_open_cab_booking', '5ab4d63443892d1fb2262c29', '1521818203'),
(10, 55517, '318c0608-2ead-11e8-b5ae-1dd4caef8322', 'aw_click_on_arr', '5ab4d63443892d1fb2262c29', '1521818203'),
(11, 55517, '3187ce26-2ead-11e8-8af8-013b7dba16b8', 'aw_click_on_dep', '5ab4d63443892d1fb2262c29', '1521818203'),
(12, 55517, 'd8131450-2e88-11e8-9d85-57f9c23a4de3', 'aw_click_on_offers', '5ab4d63443892d1fb2262c29', '1521802591'),
(13, 55517, 'd5af622c-2e88-11e8-aba4-5b21ec81ab24', 'aw_selected_flight_on_mytrips', '5ab4d63443892d1fb2262c29', '1521802587'),
(14, 55517, 'bff09902-2e87-11e8-8ec5-031fda39e17c', 'aw_selected_flight_on_mytrips', '5ab4d63443892d1fb2262c29', '1521802121'),
(15, 55517, 'bceee326-2e87-11e8-9116-77552d8568fd', 'aw_selected_flight_on_mytrips', '5ab4d63443892d1fb2262c29', '1521802116'),
(16, 55517, 'b5cc00c4-2e87-11e8-8de6-2f2c93237411', 'aw_click_on_offers', '5ab4d63443892d1fb2262c29', '1521802104'),
(17, 55517, 'b3664592-2e87-11e8-bae5-6dda47464036', 'aw_selected_flight_on_mytrips', '5ab4d63443892d1fb2262c29', '1521802100'),
(18, 55517, '84ed02c8-2e87-11e8-9af4-272563c248d4', 'aw_selected_flight_on_mytrips', '5ab4d63443892d1fb2262c29', '1521802022'),
(19, 55517, '7d2b5a62-2e87-11e8-add5-6fefbd31d239', 'aw_selected_flight_on_mytrips', '5ab4d63443892d1fb2262c29', '1521802009'),
(20, 55517, '78fca5cc-2e87-11e8-9534-1f2f8fffd4f5', 'aw_selected_flight_on_mytrips', '5ab4d63443892d1fb2262c29', '1521802002'),
(21, 55517, '756dd480-2e87-11e8-b566-2103d95bbb97', 'aw_click_on_pnr_mytrips', '5ab4d63443892d1fb2262c29', '1521801996'),
(22, 55517, '70103b2c-2e87-11e8-a3a3-5b7a7ac8952a', 'aw_selected_flight_on_mytrips', '5ab4d63443892d1fb2262c29', '1521801987'),
(23, 55517, '6e4464f8-2e87-11e8-a582-2d6860b24748', 'aw_click_on_pnr_mytrips', '5ab4d63443892d1fb2262c29', '1521801984'),
(24, 55517, '11e6fb4e-2e87-11e8-b531-57456bfdb1ce', 'aw_click_on_pnr_mytrips', '5ab4d63443892d1fb2262c29', '1521801829'),
(25, 55517, '0ee4b558-2e87-11e8-b4ac-39f65ad62e26', 'aw_click_on_pnr_myflight', '5ab4d63443892d1fb2262c29', '1521801824'),
(26, 55517, '0d1f3874-2e87-11e8-8bdf-27d9a4c0289f', 'aw_selected_flight_on_mytrips', '5ab4d63443892d1fb2262c29', '1521801821'),
(27, 55517, '055a784c-2e87-11e8-bc7b-1d3a0e90a8bf', 'aw_selected_flight_on_mytrips', '5ab4d63443892d1fb2262c29', '1521801808'),
(28, 55517, '579de6f4-2e85-11e8-8b93-7b32b7731ae1', 'aw_click_on_pnr_mytrips', '5ab4d63443892d1fb2262c29', '1521801087'),
(29, 55517, 'c32fd98c-2e84-11e8-af41-17bc2882e073', 'aw_click_on_pnr_mytrips', '5ab4d63443892d1fb2262c29', '1521800838'),
(30, 55517, 'c203b4b6-2e84-11e8-b97a-7b6d7f8a5539', 'aw_flight_added', '5ab4d63443892d1fb2262c29', '1521800836'),
(31, 55517, 'bca47df2-2e84-11e8-8384-4d91f013b70c', 'aw_search_byroute', '5ab4d63443892d1fb2262c29', '1521800827'),
(32, 55517, 'b91545ea-2e84-11e8-bfb9-6deb2374a6e1', 'aw_search_byroute', '5ab4d63443892d1fb2262c29', '1521800821'),
(33, 55517, 'a85f31b6-2e84-11e8-8031-1d56e69dfe05', 'aw_click_on_add_flight_mytrips', '5ab4d63443892d1fb2262c29', '1521800793'),
(34, 55517, 'a60085d2-2e84-11e8-94e2-015b110a4a9b', 'aw_otp_verified', '5ab4d63443892d1fb2262c29', '1521800789'),
(35, 55517, '98e444d8-2e84-11e8-912d-4523e1f79e24', 'aw_otp_sent', '5ab4d63443892d1fb2262c29', '1521800767'),
(36, 55517, '9254e97e-2e84-11e8-b18b-71537ad43b00', 'aw_complete_registration', '5ab4d63443892d1fb2262c29', '1521800756'),
(37, 55551, '7ad633aa-366a-11e8-aa2a-7f74814caac0', 'aw_otp_verified', '5ac215baf37376666be3ad34', '1522669159'),
(38, 55551, '7616ce06-366a-11e8-97de-2dcf1a0495b6', 'aw_otp_verified', '5ac215baf37376666be3ad34', '1522669151'),
(39, 55551, '72863088-366a-11e8-8801-4798b46ae33a', 'aw_otp_sent', '5ac215baf37376666be3ad34', '1522669145'),
(40, 55548, 'd195bf74-35d6-11e8-a2f9-63faa13f2df2', 'aw_click_on_add_flight_mytrips', '5ac11e86bf86360c9a1d482d', '1522605739'),
(41, 55548, 'bb8c34c4-35d6-11e8-a163-159ff157e74b', 'aw_click_on_add_flight_mytrips', '5ac11e86bf86360c9a1d482d', '1522605702');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_event`
--
ALTER TABLE `user_event`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `intercom_event_id` (`intercom_event_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_event`
--
ALTER TABLE `user_event`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
