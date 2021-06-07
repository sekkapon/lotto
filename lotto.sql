-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2021 at 11:40 AM
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
(1, 1, '3upper', 100, 100, 10000, 100, 33, 1),
(2, 1, '3under', 5, 100, 10000, 100, 30, 1),
(3, 1, '3toad', 5, 100, 10000, 100, 25, 1),
(4, 1, '2upper', 5, 1000, 10000, 50, 25, 1),
(5, 1, '2under', 5, 1000, 10000, 50, 25, 1),
(6, 1, '2toad', 5, 1000, 10000, 50, 20, 1),
(7, 1, 'floatUpper', 5, 2000, 20000, 30, 10, 1),
(8, 1, 'floatUnder', 5, 2000, 20000, 30, 10, 1),
(9, 1, '4toad', 5, 500, 10000, 200, 10, 1),
(10, 1, '5toad', 5, 300, 10000, 250, 10, 1),
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
  `open_time` varchar(15) NOT NULL COMMENT 'เปิดแทง',
  `round` varchar(15) NOT NULL COMMENT 'รอบ',
  `status` int(1) NOT NULL COMMENT '0:ปิด 1:ปิด'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_close_time_bet`
--

INSERT INTO `tb_close_time_bet` (`close_time_id`, `close_time`, `open_time`, `round`, `status`) VALUES
(1, '12:45', '11:49', '2021-06-01', 0),
(2, '16:18', '13:19', '2021-05-16', 0),
(3, '12:45', '11:49', '2021-06-01', 0),
(4, '11:57', '11:00', '2021-06-30', 0),
(5, '12:04', '16:07', '2021-06-04', 0),
(6, '15:00', '21:00', '2021-06-16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_cutoff`
--

CREATE TABLE `tb_cutoff` (
  `cutoff_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `round` date NOT NULL,
  `num_lotto` int(11) NOT NULL,
  `type_lotto` varchar(25) NOT NULL,
  `amount_cutoff` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_raward`
--

CREATE TABLE `tb_raward` (
  `reward_id` int(11) NOT NULL,
  `reward_date` date NOT NULL COMMENT 'วันที่',
  `reward_1st` longtext NOT NULL COMMENT 'รางวัลที่1',
  `reward_3upper` longtext NOT NULL COMMENT '3ตัวล่าง',
  `reward_3under_1st` longtext NOT NULL COMMENT '3ตัวล่าง รางวัลที่ 1',
  `reward_3under_2nd` longtext NOT NULL COMMENT '3ตัวล่าง รางวัลที่ 2',
  `reward_3under_3th` longtext NOT NULL,
  `reward_3under_4th` longtext NOT NULL,
  `reward_3toad` longtext NOT NULL,
  `reward_2under` longtext NOT NULL COMMENT '2 ตัวล่าง',
  `reward_2upper` longtext NOT NULL COMMENT '2 ตัวบน',
  `reward_2toad` longtext NOT NULL,
  `reward_float_under` longtext NOT NULL COMMENT 'ลอยล่าง',
  `reward_float_upper` longtext NOT NULL COMMENT 'ลอยบน',
  `reward_4toad` longtext NOT NULL COMMENT '4โต๊ด',
  `reward_5toad` longtext NOT NULL COMMENT '5โต๊ด'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_raward`
--

INSERT INTO `tb_raward` (`reward_id`, `reward_date`, `reward_1st`, `reward_3upper`, `reward_3under_1st`, `reward_3under_2nd`, `reward_3under_3th`, `reward_3under_4th`, `reward_3toad`, `reward_2under`, `reward_2upper`, `reward_2toad`, `reward_float_under`, `reward_float_upper`, `reward_4toad`, `reward_5toad`) VALUES
(1, '2021-06-16', '152353', '353', '125', '324', '', '', '0', '12', '53', '', '5', '3', '2353', '52353');

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
  `status` int(1) NOT NULL COMMENT '0/รอ  \r\n1/ได้\r\n2/เสีย',
  `commission` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_ticket`
--

INSERT INTO `tb_ticket` (`ticket_id`, `user_id`, `round`, `create_time`, `number_lotto`, `type_lotto`, `amount_bet`, `if_win`, `win_lose`, `status`, `commission`) VALUES
(1, 1, '2021-06-16', 1622615249, 123, '3upper', 50, 3000, 0, 0, '5.00'),
(2, 1, '2021-06-16', 1622615249, 33, '2upper', 20, 1200, 0, 0, '2.00'),
(3, 1, '2021-06-16', 1622615249, 567, '3upper', 500, 1200, 0, 0, '2.00'),
(4, 2, '2021-06-16', 1622615249, 250, '3upper', 100, 3000, 0, 0, '5.00'),
(5, 2, '2021-06-16', 1622615249, 114, '3under', 250, 3000, 0, 0, '5.00'),
(10, 2, '2021-06-16', 1622615249, 72, '2under', 500, 3000, 0, 0, '5.00'),
(13, 2, '2021-06-16', 1622615249, 54, '2under', 300, 3000, 0, 0, '5.00'),
(14, 2, '2021-06-16', 1622615249, 777, '3under', 100, 3000, 0, 0, '5.00'),
(15, 2, '2021-06-16', 1622615249, 777, '3upper', 100, 3000, 0, 0, '5.00'),
(16, 1, '2021-06-16', 1622865308, 12345, '5toad', 5, 1250, 0, 0, '0.50'),
(17, 1, '2021-06-16', 1622865308, 1234, '4toad', 5, 1000, 0, 0, '0.50'),
(18, 1, '2021-06-16', 1622865308, 123, '3upper', 100, 10000, 0, 0, '33.00'),
(19, 1, '2021-06-16', 1622865308, 123, '3toad', 100, 10000, 0, 0, '25.00'),
(20, 1, '2021-06-16', 1622865308, 123, '3under', 100, 10000, 0, 0, '30.00'),
(21, 1, '2021-06-16', 1622865308, 12, '2upper', 5, 250, 0, 0, '1.25'),
(22, 1, '2021-06-16', 1622865308, 12, '2toad', 5, 250, 0, 0, '1.00'),
(23, 1, '2021-06-16', 1622865308, 12, '2under', 5, 250, 0, 0, '1.25'),
(24, 1, '2021-06-16', 1622865308, 1, 'floatUpper', 5, 150, 0, 0, '0.50'),
(25, 1, '2021-06-16', 1622865308, 1, 'floatUnder', 5, 150, 0, 0, '0.50'),
(26, 1, '2021-06-16', 1622865308, 12345, '5toad', 5, 1250, 0, 0, '0.50'),
(27, 1, '2021-06-16', 1622865308, 45565, '5toad', 5, 1250, 0, 0, '0.50'),
(28, 1, '2021-06-16', 1622885181, 733, '3upper', 100, 10000, 0, 0, '33.00'),
(29, 1, '2021-06-16', 1622885181, 733, '3toad', 100, 10000, 0, 0, '25.00'),
(30, 1, '2021-06-16', 1622885181, 733, '3under', 100, 10000, 0, 0, '30.00'),
(31, 1, '2021-06-16', 1622885181, 544, '3upper', 100, 10000, 0, 0, '33.00'),
(32, 1, '2021-06-16', 1622885181, 544, '3toad', 100, 10000, 0, 0, '25.00'),
(33, 1, '2021-06-16', 1622885181, 544, '3under', 100, 10000, 0, 0, '30.00'),
(34, 1, '2021-06-16', 1622885181, 88, '2upper', 5, 250, 0, 0, '1.25'),
(35, 1, '2021-06-16', 1622885181, 88, '2toad', 5, 250, 0, 0, '1.00'),
(36, 1, '2021-06-16', 1622885181, 88, '2under', 5, 250, 0, 0, '1.25'),
(37, 1, '2021-06-16', 1622885181, 445, '3upper', 100, 10000, 0, 0, '33.00'),
(38, 1, '2021-06-16', 1622885181, 445, '3toad', 100, 10000, 0, 0, '25.00'),
(39, 1, '2021-06-16', 1622885181, 445, '3under', 100, 10000, 0, 0, '30.00'),
(40, 1, '2021-06-16', 1622885181, 544, '3upper', 50, 10000, 0, 0, '33.00');

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
-- Indexes for table `tb_cutoff`
--
ALTER TABLE `tb_cutoff`
  ADD PRIMARY KEY (`cutoff_id`);

--
-- Indexes for table `tb_raward`
--
ALTER TABLE `tb_raward`
  ADD PRIMARY KEY (`reward_id`);

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
  MODIFY `close_time_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_cutoff`
--
ALTER TABLE `tb_cutoff`
  MODIFY `cutoff_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_raward`
--
ALTER TABLE `tb_raward`
  MODIFY `reward_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_ticket`
--
ALTER TABLE `tb_ticket`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

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
