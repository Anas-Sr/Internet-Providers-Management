-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26 ديسمبر 2023 الساعة 21:42
-- إصدار الخادم: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tala`
--

-- --------------------------------------------------------

--
-- بنية الجدول `allaccount`
--

CREATE TABLE `allaccount` (
  `id` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `a_email` varchar(200) NOT NULL,
  `a_password` varchar(100) NOT NULL,
  `a_address` varchar(250) NOT NULL,
  `a_phone` bigint(20) NOT NULL,
  `kind` tinyint(1) NOT NULL,
  `real_cash` int(11) NOT NULL DEFAULT 0,
  `image_cash` int(11) NOT NULL DEFAULT 0,
  `deff_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `allaccount`
--

INSERT INTO `allaccount` (`id`, `fullname`, `a_email`, `a_password`, `a_address`, `a_phone`, `kind`, `real_cash`, `image_cash`, `deff_id`, `status`) VALUES
(8, 'anasalsrouji', 'anas@gmail.com', '145236', 'دمشق المهاجرين', 982188151, 1, 0, 0, 5, 0),
(9, 'محمد شفيق زيتونة', 'mmm@mm.com', '147852', 'دمشق المهاجرين', 982188151, 0, 0, 0, 5, 0);

-- --------------------------------------------------------

--
-- بنية الجدول `bills`
--

CREATE TABLE `bills` (
  `bill_id` int(11) NOT NULL,
  `deff_id` int(11) NOT NULL,
  `man_id` int(11) NOT NULL,
  `real_price` int(11) NOT NULL DEFAULT 0,
  `plus_avr` double NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `manufactory`
--

CREATE TABLE `manufactory` (
  `man_id` int(11) NOT NULL,
  `man_name` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL,
  `man_email` varchar(250) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `man_information` varchar(250) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `real_status` tinyint(4) NOT NULL DEFAULT 0,
  `display` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `manufactory`
--

INSERT INTO `manufactory` (`man_id`, `man_name`, `image`, `man_email`, `pass`, `man_information`, `status`, `real_status`, `display`) VALUES
(8, 'anasalsrouji', '65882293167f0.jpg', 'anas@gmail.com', '147852', 'دمشق المهاجرين', 1, 0, 1),
(9, 'رن نت', '658822a7548d1.jpg', 'aknancanon@gmail.com', '123456', 'دمشق حي التجارة الغربي', 0, 0, 1);

-- --------------------------------------------------------

--
-- بنية الجدول `price_type`
--

CREATE TABLE `price_type` (
  `deff_id` int(11) NOT NULL,
  `price_type_name` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `price_type`
--

INSERT INTO `price_type` (`deff_id`, `price_type_name`, `status`) VALUES
(5, 'VIP', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `u_email` varchar(300) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `rank` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `fullname`, `u_email`, `pass`, `rank`) VALUES
(1, 'محمد أنس السروجي', 'anas@gmail.com', '142536', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allaccount`
--
ALTER TABLE `allaccount`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deff_id` (`deff_id`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `deff_id` (`deff_id`),
  ADD KEY `man_id` (`man_id`);

--
-- Indexes for table `manufactory`
--
ALTER TABLE `manufactory`
  ADD PRIMARY KEY (`man_id`);

--
-- Indexes for table `price_type`
--
ALTER TABLE `price_type`
  ADD PRIMARY KEY (`deff_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allaccount`
--
ALTER TABLE `allaccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `manufactory`
--
ALTER TABLE `manufactory`
  MODIFY `man_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `price_type`
--
ALTER TABLE `price_type`
  MODIFY `deff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- قيود الجداول المُلقاة.
--

--
-- قيود الجداول `allaccount`
--
ALTER TABLE `allaccount`
  ADD CONSTRAINT `allaccount_ibfk_1` FOREIGN KEY (`deff_id`) REFERENCES `price_type` (`deff_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- قيود الجداول `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_ibfk_1` FOREIGN KEY (`deff_id`) REFERENCES `price_type` (`deff_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bills_ibfk_2` FOREIGN KEY (`man_id`) REFERENCES `manufactory` (`man_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
