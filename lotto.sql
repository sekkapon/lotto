-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 11:48 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

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

--
-- Dumping data for table `tb_cf_lotto`
--

INSERT INTO `tb_cf_lotto` (`cf_id`, `user_id`, `type_lotto`, `minPerBet`, `maxPerBet`, `maxCostPerNumber`, `payRate`, `percent`, `status`) VALUES
(1, 1, '3upper', 100, 100, 10000, 100, 100, 1),
(2, 1, '3under', 5, 100, 10000, 100, 0, 1),
(3, 1, '3toad', 5, 100, 10000, 100, 0, 1),
(4, 1, '2upper', 5, 1000, 10000, 50, 0, 1),
(5, 1, '2under', 5, 1000, 10000, 50, 0, 1),
(6, 1, '2toad', 5, 1000, 10000, 50, 0, 1),
(7, 1, 'floatUpper', 5, 2000, 20000, 30, 0, 1),
(8, 1, 'floatUnder', 5, 2000, 20000, 30, 0, 1),
(9, 1, '4toad', 5, 500, 10000, 200, 0, 1),
(10, 1, '5toad', 5, 300, 10000, 250, 0, 1),
(12, 2, '3upper', 100, 100, 1, 11, 1, 1),
(13, 2, '3under', 1, 1, 1, 1, 11, 1),
(14, 2, '3toad', 1, 1, 1, 1, 1, 1),
(15, 2, '2upper', 1, 1, 1, 1, 1, 1),
(16, 2, '2under', 1, 1, 1, 1, 1, 1),
(17, 2, '2toad', 1, 1, 1, 1, 1, 1),
(18, 2, 'floatUpper', 1, 1, 1, 1, 1, 1),
(19, 2, 'floatUnder', 1, 1, 1, 1, 1, 1),
(20, 2, '4toad', 1, 1, 1, 1, 1, 1),
(21, 2, '5toad', 1, 1, 1, 1, 1, 1),
(22, 3, '3upper', 100, 100, 30, 30, 100, 1),
(23, 3, '3under', 30, 30, 30, 30, 30, 1),
(24, 3, '3toad', 30, 30, 30, 30, 30, 1),
(25, 3, '2upper', 30, 30, 30, 30, 30, 1),
(26, 3, '2under', 30, 30, 30, 30, 30, 1),
(27, 3, '2toad', 30, 30, 30, 30, 30, 1),
(28, 3, 'floatUpper', 30, 30, 30, 30, 30, 1),
(29, 3, 'floatUnder', 30, 30, 30, 30, 30, 1),
(30, 3, '4toad', 30, 30, 30, 30, 30, 1),
(31, 3, '5toad', 30, 30, 30, 30, 30, 1),
(32, 4, '3upper', 11, 1, 0, 1, 1, 1),
(33, 4, '3under', 1, 1, 0, 1, 1, 1),
(34, 4, '3toad', 1, 1, 0, 1, 1, 1),
(35, 4, '2upper', 1, 1, 0, 1, 1, 1),
(36, 4, '2under', 1, 1, 0, 1, 1, 1),
(37, 4, '2toad', 1, 1, 0, 1, 1, 1),
(38, 4, 'floatUpper', 1, 1, 0, 1, 1, 1),
(39, 4, 'floatUnder', 1, 1, 0, 1, 1, 1),
(40, 4, '4toad', 1, 1, 0, 1, 1, 1),
(41, 4, '5toad', 1, 1, 0, 1, 1, 1);

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
  `close_time` varchar(15) NOT NULL COMMENT 'เวลาปิดแทง',
  `open_time` varchar(15) NOT NULL COMMENT 'เปิดแทง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_close_time_bet`
--

INSERT INTO `tb_close_time_bet` (`close_time_id`, `close_time`, `open_time`) VALUES
(1, '16:18', '13:19');

-- --------------------------------------------------------

--
-- Table structure for table `tb_raward`
--

CREATE TABLE `tb_raward` (
  `reward_id` int(11) NOT NULL,
  `reward_date` int(11) NOT NULL COMMENT 'วันที่',
  `reward_1st` int(6) NOT NULL COMMENT 'รางวัลที่1',
  `reward_3upper` int(3) NOT NULL COMMENT '3ตัวล่าง',
  `reward_3under_1st` int(3) NOT NULL COMMENT '3ตัวล่าง รางวัลที่ 1',
  `reward_3under_2nd` int(3) NOT NULL COMMENT '3ตัวล่าง รางวัลที่ 2',
  `reward_2under` int(2) NOT NULL COMMENT '2 ตัวล่าง',
  `reward_2upper` int(2) NOT NULL COMMENT '2 ตัวบน',
  `reward_float_under` int(3) NOT NULL COMMENT 'ลอยล่าง',
  `reward_float_upper` int(3) NOT NULL COMMENT 'ลอยบน',
  `reward_4toad` int(4) NOT NULL COMMENT '4โต๊ด',
  `reward_5toad` int(5) NOT NULL COMMENT '5โต๊ด'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_ticket`
--

CREATE TABLE `tb_ticket` (
  `ticket_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `round` date NOT NULL DEFAULT current_timestamp(),
  `create_time` int(15) NOT NULL,
  `number_lotto` int(20) NOT NULL COMMENT 'ตัวเลขแทง',
  `type_lotto` varchar(50) NOT NULL COMMENT 'ประเภท',
  `amount_bet` int(11) NOT NULL COMMENT 'จำนวนเงินแทง',
  `if_win` int(11) NOT NULL COMMENT 'ถ้าชนะจะได้เท่าไร',
  `win_lose` int(1) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_ticket`
--

INSERT INTO `tb_ticket` (`ticket_id`, `user_id`, `round`, `create_time`, `number_lotto`, `type_lotto`, `amount_bet`, `if_win`, `win_lose`, `status`) VALUES
(1, 1, '2021-06-02', 1622615249, 123, '3upper', 10, 3000, 0, 0),
(2, 1, '2021-06-02', 1622615249, 33, '2upper', 20, 1200, 0, 0);

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
(0, '@programmer', 'โปรแกรมเมอร์', 0, '6a2997876543c71fb7efe6ad6ebd38bf8297501e', 'programmer', 0, 1),
(1, 'member1', 'member', 1111111111, '6a2997876543c71fb7efe6ad6ebd38bf8297501e', 'member', 1622267962, 1),
(2, '123132', 'member2', 2147483647, 'f84be43dd7bb8544f4ea0f4b79cf4c46797b9d95', 'member', 1622276102, 1),
(3, 'member2', 'member3', 1010, '4322a96e6a8eb5314a3a3404d123437ae1e26199', 'member', 1622277302, 1),
(4, 'test1', 'test1', 123, '2b917673bc2374eda754d3c4654ad0a292506bbc', 'member', 1622618024, 1);

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
  ADD PRIMARY KEY (`close_time_id`);

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
  MODIFY `cf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tb_close_time_bet`
--
ALTER TABLE `tb_close_time_bet`
  MODIFY `close_time_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_ticket`
--
ALTER TABLE `tb_ticket`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_cf_lotto`
--
ALTER TABLE `tb_cf_lotto`
  ADD CONSTRAINT `tb_cf_lotto_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_ticket`
--
ALTER TABLE `tb_ticket`
  ADD CONSTRAINT `tb_ticket_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
