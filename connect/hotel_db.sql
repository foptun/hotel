-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: May 14, 2018 at 09:27 AM
-- Server version: 10.2.14-MariaDB-10.2.14+maria~jessie
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`, `firstname`, `lastname`, `email`, `tel`) VALUES
(1, 'admin', '1234', 'admin', 'admin', 'admin@mail', '0801234567');

-- --------------------------------------------------------

--
-- Table structure for table `tb_booking`
--

CREATE TABLE `tb_booking` (
  `id` int(11) NOT NULL,
  `category_room_id` int(11) DEFAULT 0,
  `room_id` int(11) DEFAULT 0,
  `payment_type` enum('PromptPay','โอนผ่านธนาคาร') COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `card_number` varchar(13) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'เลขบัตรประชาชน',
  `phone` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'เบอร์โทรศัพท์',
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `check_in` date DEFAULT NULL,
  `check_out` date DEFAULT NULL,
  `total_price` int(11) NOT NULL,
  `bill` text COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'รูป สลิปการโอนเงิน,เงินสด',
  `status` enum('ยังไม่อนุมัติ','รอการอนุมัติ','อนุมัติ') COLLATE utf8_unicode_ci DEFAULT NULL,
  `time_reg` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_booking`
--

INSERT INTO `tb_booking` (`id`, `category_room_id`, `room_id`, `payment_type`, `first_name`, `last_name`, `card_number`, `phone`, `email`, `check_in`, `check_out`, `total_price`, `bill`, `status`, `time_reg`) VALUES
(1, 1, 2, 'โอนผ่านธนาคาร', 'a1', 'aa1', '1', '0101', 'a@a', '2018-05-14', '2018-05-15', 1200, '5af635d211519bill-promptpay.jpg', 'อนุมัติ', '2017-05-12 00:00:00'),
(2, 1, 12, 'โอนผ่านธนาคาร', 'a1', 'aa1', '1', '0101', 'a@a', '2018-05-14', '2018-05-15', 1200, '5af57f557213eK-Mobile-Banking-PLUS_Transfer-Success.jpg', 'อนุมัติ', '2018-01-02 00:00:00'),
(3, 3, 5, 'PromptPay', 'a1', 'aa1', '1', '0101', 'a@a', '2018-05-13', '2018-05-14', 1800, '5af57d897bd22bill-promptpay.jpg', 'อนุมัติ', '2018-02-12 00:00:00'),
(4, 1, 2, 'PromptPay', '2', '2', '1', '2', 'e@mail.com', '2018-05-14', '2018-05-15', 1200, '5af635e280bc8bill-promptpay.jpg', 'อนุมัติ', '2018-03-12 00:00:00'),
(5, 1, 1, 'PromptPay', '1', '1', '1', '1', 'w@w', '2018-05-12', '2018-05-13', 1200, '5af635ef15f23bill-promptpay.jpg', 'อนุมัติ', '2018-04-12 00:00:00'),
(6, 7, 18, 'PromptPay', 'a3', 'aa3', '3', '0300000000', 'e@e', '2018-05-17', '2018-05-20', 7500, '5af63d735a394bill-promptpay.jpg', 'อนุมัติ', '2018-05-12 00:00:00'),
(23, 3, 0, 'PromptPay', '6', '6', '6', '6', 'p@p', '2018-05-16', '2018-05-17', 1800, NULL, 'ยังไม่อนุมัติ', '2018-05-14 00:00:00'),
(24, 3, 0, 'โอนผ่านธนาคาร', '5', '5', '5', '5', 'r@t', '2018-05-23', '2018-05-24', 1800, NULL, 'ยังไม่อนุมัติ', '2018-05-14 00:00:00'),
(25, 2, 0, 'PromptPay', '4', '4', '4', '4', 'r@r', '2018-05-18', '2018-05-19', 1500, NULL, 'ยังไม่อนุมัติ', '2018-05-14 09:17:15');

-- --------------------------------------------------------

--
-- Table structure for table `tb_category_room`
--

CREATE TABLE `tb_category_room` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_category_room`
--

INSERT INTO `tb_category_room` (`id`, `name`, `detail`, `price`) VALUES
(1, 'ห้องมาตรฐานเตียงแฝด', 'ห้องพักปรับอากาศมีโทรทัศน์ระบบช่องสัญญาณเคเบิล ตู้เย็น มินิบาร์ และห้องน้ำในตัวพร้อมฝักบัว', 1200),
(2, 'ห้องมาตรฐานเตียงใหญ่', 'ห้องพักปรับอากาศมีโทรทัศน์ระบบช่องสัญญาณเคเบิล ตู้เย็น มินิบาร์ และห้องน้ำในตัวพร้อมฝักบัว', 1500),
(3, 'ห้องดีลักซ์เตียงใหญ่', 'ห้องพักปรับอากาศมีโทรทัศน์ระบบช่องสัญญาณเคเบิล ตู้เย็น มินิบาร์ และห้องน้ำในตัวพร้อมฝักบัว', 1800),
(4, 'ห้อง Sweet', 'ห้องพักปรับอากาศมีโทรทัศน์ระบบช่องสัญญาณเคเบิล ตู้เย็น มินิบาร์ และห้องน้ำในตัวพร้อมฝักบัว', 2100),
(5, 'ห้องใหญ่(พิเศษ)', 'ห้องพักปรับอากาศมีโทรทัศน์ระบบช่องสัญญาณเคเบิล ตู้เย็น มินิบาร์ และห้องน้ำในตัวพร้อมฝักบัว', 1200),
(7, 'ห้อง (VIP)', 'ห้องพักปรับอากาศมีโทรทัศน์ระบบช่องสัญญาณเคเบิล ตู้เย็น มินิบาร์ และห้องน้ำในตัวพร้อมฝักบัว', 2500),
(8, '3', '3', 3),
(9, 'ห้องพักสำรอง', 'ห้องพักปรับอากาศมีโทรทัศน์ระบบช่องสัญญาณเคเบิล ตู้เย็น มินิบาร์ และห้องน้ำในตัวพร้อมฝักบัว', 500);

-- --------------------------------------------------------

--
-- Table structure for table `tb_category_room_picture`
--

CREATE TABLE `tb_category_room_picture` (
  `id` int(11) NOT NULL,
  `category_room_id` int(11) NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_category_room_picture`
--

INSERT INTO `tb_category_room_picture` (`id`, `category_room_id`, `picture`) VALUES
(1, 1, 'room-1.jpg'),
(2, 2, 'room-2.jpg'),
(3, 3, 'room-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_room`
--

CREATE TABLE `tb_room` (
  `id` int(11) NOT NULL,
  `category_room_id` int(11) DEFAULT NULL,
  `room_number` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_room`
--

INSERT INTO `tb_room` (`id`, `category_room_id`, `room_number`) VALUES
(1, 1, '101'),
(2, 1, '102'),
(3, 2, '201'),
(4, 2, '202'),
(5, 3, '301'),
(12, 1, '103'),
(16, 7, '401'),
(17, 7, '402'),
(18, 7, '403'),
(19, 9, '501'),
(20, 9, '502'),
(21, 9, '503');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_booking`
--
ALTER TABLE `tb_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_category_room`
--
ALTER TABLE `tb_category_room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_category_room_picture`
--
ALTER TABLE `tb_category_room_picture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_room`
--
ALTER TABLE `tb_room`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_booking`
--
ALTER TABLE `tb_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_category_room`
--
ALTER TABLE `tb_category_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_category_room_picture`
--
ALTER TABLE `tb_category_room_picture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_room`
--
ALTER TABLE `tb_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
