-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2021 at 02:29 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lotto`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_cf_lotto`
--

CREATE TABLE `tb_cf_lotto` (
  `cf_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type_lotto` varchar(50) NOT NULL COMMENT 'ประเภทแท็กหวย',
  `minPerBet` int(20) NOT NULL COMMENT 'ต่ำสุดต่อไม้',
  `maxPerBet` int(20) NOT NULL COMMENT 'สูงสุดต่อไม้',
  `maxCostPerNumber` int(20) NOT NULL COMMENT 'ตั้งอั้น',
  `payRate` int(20) NOT NULL COMMENT 'อัตราจ่าย',
  `percent` int(20) NOT NULL COMMENT 'ส่วนลด',
  `status` int(1) NOT NULL COMMENT '0:ปิด 1:เปิด'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_close_number`
--

CREATE TABLE `tb_close_number` (
  `close_number_id` int(11) NOT NULL,
  `number_lotto` int(11) NOT NULL,
  `create_time` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_close_time_bet`
--

CREATE TABLE `tb_close_time_bet` (
  `close_time_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `close_time` int(11) NOT NULL COMMENT 'เวลาปิดแทง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_raward`
--

CREATE TABLE `tb_raward` (
  `reward_id` int(11) NOT NULL,
  `reward_date` int(11) NOT NULL COMMENT 'วันที่',
  `1st_prize` int(11) NOT NULL COMMENT 'รางวัลที่1',
  `1st_3under_prize` int(11) NOT NULL COMMENT '3ตัวล่างรางวัลที่1',
  `2st_3under_prize` int(11) NOT NULL COMMENT '3ตัวล่างรางวัลที่2',
  `1st_3front_prize` int(11) NOT NULL COMMENT '3ตัวหน้ารางวัลที่1',
  `2st_3front_prize` int(11) NOT NULL COMMENT '3ตัวหน้ารางวัลที่2',
  `2upder` int(11) NOT NULL COMMENT '2ตัวล่าง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_ticket`
--

CREATE TABLE `tb_ticket` (
  `ticket_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `create_time` int(15) NOT NULL,
  `number_lotto` int(20) NOT NULL COMMENT 'ตัวเลขแทง',
  `type_lotto` varchar(50) NOT NULL COMMENT 'ประเภท',
  `amount_bet` int(11) NOT NULL COMMENT 'จำนวนเงินแทง',
  `if_win` int(11) NOT NULL COMMENT 'ถ้าชนะจะได้เท่าไร'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `firstname` varchar(20) NOT NULL COMMENT 'ชื่อ',
  `phone` int(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `create_time` int(15) NOT NULL,
  `status` int(1) NOT NULL COMMENT '0:ปิด 1:เปิด 2:ระงับ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `username`, `firstname`, `phone`, `password`, `role`, `create_time`, `status`) VALUES
(0, '@programmer', 'โปรแกรมเมอร์', 0, '6a2997876543c71fb7efe6ad6ebd38bf8297501e', 'programmer', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_cf_lotto`
--
ALTER TABLE `tb_cf_lotto`
  ADD PRIMARY KEY (`cf_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tb_close_time_bet`
--
ALTER TABLE `tb_close_time_bet`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tb_ticket`
--
ALTER TABLE `tb_ticket`
  ADD PRIMARY KEY (`ticket_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_cf_lotto`
--
ALTER TABLE `tb_cf_lotto`
  MODIFY `cf_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_ticket`
--
ALTER TABLE `tb_ticket`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_cf_lotto`
--
ALTER TABLE `tb_cf_lotto`
  ADD CONSTRAINT `tb_cf_lotto_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_close_time_bet`
--
ALTER TABLE `tb_close_time_bet`
  ADD CONSTRAINT `tb_close_time_bet_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_ticket`
--
ALTER TABLE `tb_ticket`
  ADD CONSTRAINT `tb_ticket_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
