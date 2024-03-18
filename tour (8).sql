-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2024 at 05:06 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tour`
--

-- --------------------------------------------------------

--
-- Table structure for table `a_booking_table`
--

CREATE TABLE `a_booking_table` (
  `a_book_id` int(11) NOT NULL,
  `r_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `book_date` date NOT NULL,
  `journey_date` date NOT NULL,
  `total_person` int(11) NOT NULL,
  `total_amount` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `a_booking_table`
--

INSERT INTO `a_booking_table` (`a_book_id`, `r_id`, `package_id`, `book_date`, `journey_date`, `total_person`, `total_amount`) VALUES
(2, 3, 12, '2023-03-17', '2023-04-03', 2, 40000),
(3, 2, 1, '2023-03-21', '2023-04-03', 2, 32000),
(4, 6, 6, '2023-03-23', '2023-04-02', 3, 21000),
(5, 6, 5, '2023-03-23', '2023-03-25', 4, 40000),
(6, 3, 15, '2023-03-23', '2023-04-04', 2, 36000),
(7, 6, 12, '2023-03-23', '2023-04-03', 2, 40000),
(8, 2, 12, '2023-03-24', '2023-03-31', 2, 40000),
(9, 2, 2, '2023-03-24', '2023-03-31', 2, 36000),
(10, 2, 3, '2023-03-24', '2023-03-31', 2, 40000),
(11, 2, 5, '2023-03-24', '2023-04-01', 2, 20000),
(12, 2, 2, '2023-03-26', '2023-04-05', 2, 36000),
(13, 2, 18, '2023-03-27', '2023-04-02', 1, 23000),
(14, 2, 18, '2023-03-27', '2023-04-02', 1, 23000),
(15, 2, 1, '2023-04-01', '2023-04-22', 3, 48000),
(16, 6, 19, '2023-07-04', '2023-08-16', 2, 48000),
(17, 2, 18, '2023-08-11', '2023-08-16', 2, 46000),
(18, 2, 18, '2023-08-11', '2023-08-25', 2, 46000),
(19, 2, 18, '2023-08-11', '2023-08-25', 2, 46000),
(20, 2, 19, '2023-10-15', '2023-10-27', 2, 48000),
(21, 6, 6, '2023-12-27', '2023-12-30', 3, 21000),
(22, 5, 6, '2024-01-13', '2024-01-26', 3, 21000);

-- --------------------------------------------------------

--
-- Table structure for table `booking_table`
--

CREATE TABLE `booking_table` (
  `book_id` int(11) NOT NULL,
  `r_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `book_date` date NOT NULL,
  `journey_date` date NOT NULL,
  `total_person` int(3) NOT NULL,
  `total_amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_table`
--

INSERT INTO `booking_table` (`book_id`, `r_id`, `package_id`, `book_date`, `journey_date`, `total_person`, `total_amount`) VALUES
(27, 2, 19, '2023-10-15', '2023-10-27', 2, 48000),
(28, 6, 6, '2023-12-27', '2023-12-30', 3, 21000),
(29, 5, 6, '2024-01-13', '2024-01-26', 3, 21000);

-- --------------------------------------------------------

--
-- Table structure for table `cancel_table`
--

CREATE TABLE `cancel_table` (
  `cancel_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `image_table`
--

CREATE TABLE `image_table` (
  `image_id` int(11) NOT NULL,
  `image_path` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `image_table`
--

INSERT INTO `image_table` (`image_id`, `image_path`) VALUES
(1, 'web\\asam/1/1.jpg'),
(2, 'web\\asam/1/2.jpg'),
(3, 'web\\asam/1/3.jpg'),
(4, 'web\\asam/1/4.jpg'),
(5, 'web\\asam/2/1.jpg'),
(6, 'web\\asam/2/2.jpg'),
(7, 'web\\asam/2/3.jpg'),
(8, 'web\\asam/2/4.jpg'),
(9, 'web\\asam/3/1.jpg'),
(10, 'web\\asam/3/2.jpg'),
(11, 'web\\asam/3/3.jpg'),
(12, 'web\\asam/3/4.jpg'),
(13, 'web\\goa/1/1.jpg'),
(14, 'web\\goa/1/2.jpg'),
(15, 'web\\goa/1/3.jpg'),
(16, 'web\\goa/1/4.jpg'),
(17, 'web\\goa/2/1.jpg'),
(18, 'web\\goa/2/2.jpg'),
(19, 'web\\goa/2/3.jpg'),
(20, 'web\\goa/2/4.jpg'),
(21, 'web\\gujarat/1/1.jpg'),
(22, 'web\\gujarat/1/2.jpg'),
(23, 'web\\gujarat/1/3.jpg'),
(24, 'web\\gujarat/1/4.jpg'),
(25, 'web\\gujarat/2/1.jpg'),
(26, 'web\\gujarat/2/2.jpg'),
(27, 'web\\gujarat/2/3.jpg'),
(28, 'web\\gujarat/2/4.jpg'),
(29, 'web\\gujarat/3/1.jpg'),
(30, 'web\\gujarat/3/2.jpg'),
(31, 'web\\gujarat/3/4.jpg'),
(32, 'web\\gujarat/4/1.jpg'),
(33, 'web\\gujarat/4/2.jpg'),
(34, 'web\\gujarat/4/3.jpg'),
(35, 'web\\gujarat/4/4.jpg'),
(36, 'web\\himachal_pradesh/1/1.jpg'),
(37, 'web\\himachal_pradesh/1/2.jpg'),
(38, 'web\\himachal_pradesh/1/3.jpg'),
(39, 'web\\himachal_pradesh/1/4.jpg'),
(40, 'web\\himachal_pradesh/2/1.jpg'),
(41, 'web\\himachal_pradesh/2/2.jpg'),
(42, 'web\\himachal_pradesh/2/3.jpg'),
(43, 'web\\himachal_pradesh/2/4.jpg'),
(44, 'web\\himachal_pradesh/3/1.jpg'),
(45, 'web\\himachal_pradesh/3/2.jpg'),
(46, 'web\\himachal_pradesh/3/3.jpg'),
(47, 'web\\himachal_pradesh/3/4.jpg'),
(48, 'web\\kerala/1/1.jpg'),
(49, 'web\\kerala/1/2.jpg'),
(50, 'web\\kerala/1/3.jpg'),
(51, 'web\\kerala/1/4.jpg'),
(52, 'web\\kerala/2/1.jpg'),
(53, 'web\\kerala/2/2.jpg'),
(54, 'web\\kerala/2/3.jpg'),
(55, 'web\\kerala/2/4.jpg'),
(56, 'web\\kerala/3/1.jpg'),
(57, 'web\\kerala/3/2.jpg'),
(58, 'web\\kerala/3/3.jpg'),
(59, 'web\\kerala/3/4.jpg'),
(60, 'web\\kerala/4/1.jpg'),
(61, 'web\\kerala/4/2.jpg'),
(62, 'web\\kerala/4/3.jpg'),
(63, 'web\\kerala/4/4.jpg'),
(64, 'web\\rajsthan/1/1.jpg'),
(65, 'web\\rajsthan/1/2.jpg'),
(66, 'web\\rajsthan/1/3.jpg'),
(67, 'web\\rajsthan/1/4.jpg'),
(68, 'web\\rajsthan/2/1.jpg'),
(69, 'web\\rajsthan/2/2.jpg'),
(70, 'web\\rajsthan/2/3.jpg'),
(71, 'web\\rajsthan/2/4.jpg'),
(72, 'web\\rajsthan/3/1.jpg'),
(73, 'web\\rajsthan/3/2.jpg'),
(74, 'web\\rajsthan/3/3.jpg'),
(75, 'web\\rajsthan/3/4.jpg'),
(76, 'web\\rajsthan/4/1.jpg'),
(77, 'web\\rajsthan/4/2.jpg'),
(78, 'web\\rajsthan/4/3.jpg'),
(79, 'web\\rajsthan/4/4.jpg'),
(80, 'web\\rajsthan/5/1.jpg'),
(81, 'web\\rajsthan/5/2.jpg'),
(82, 'web\\rajsthan/5/3.jpg'),
(83, 'web\\rajsthan/5/4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `package_d_table`
--

CREATE TABLE `package_d_table` (
  `package_d_id` int(11) NOT NULL,
  `day_description` varchar(1000) NOT NULL,
  `package_id` int(11) NOT NULL,
  `image_id` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package_d_table`
--

INSERT INTO `package_d_table` (`package_d_id`, `day_description`, `package_id`, `image_id`) VALUES
(1, '4 Nights / 5 Days\r\nGuwahati (1N) → Shillong(2N) → Kaziranga National Park(1N)\r\nprice = 16000/-', 1, 3),
(2, '5 Nights / 6 Days\r\nGuwahati(0N) → Shillong(4N) → Cherrapunjee(0N) → Megalay(1N)\r\nprice = 18000/-', 2, 2),
(3, '6 Nights / 7 Days\nShillong(1N) → Cherrapunjee(2N) → Megalay(1N) -> Kanziranga national park(2N)\nprice = 20000/-', 3, 4),
(4, '3 Nights / 4 Days\r\nGoa() → Bardez(2N) → Calangute(1N) → Arpora(1N) → Anjuna(1N)\r\nprice = 15000/-', 4, 13),
(5, '2 Nights / 3 Days\r\nGoa() → Bardez(2N) → Calangute(1N) → Candolim(1N)\r\nprice = 10000/-', 5, 14),
(6, '2 Nights / 3 Days\r\nAhemdabad(0) → Vadodara(2N) → Ahemdabad(0) → \r\nprice = 7000/-', 6, 21),
(7, '4 Nights / 5 Days\r\nBhuj(3N) → Dwarka(2N) → Somnath(1N) → Sasan Gir(1N)\r\nprice = 15000/-', 7, 22),
(8, '7 Nights / 8 Days\r\nAhmedabad(0N) → Dwarka(2N) → Somnath(1N) → Diu(1N) → Junagadh(1N) → Ahmedabad(2N)\r\nprice = 18000', 8, 23),
(9, '4 Nights / 5 Days\r\nBhuj(2N) → Hodka(2N)\r\nprice = 12000/-', 9, 24),
(10, '2 Nights / 3 Days\r\nShimla(1N) → Manali(1N)\r\nprice = 12000/-', 10, 36),
(11, '3 Nights / 4 Days\r\nDelhi(0N) → Manali(3N) → Kullu (0N)\r\nprice = 15000/-', 11, 37),
(12, '4 Nights / 5 Days\r\nDelhi(0N) → Shimla(1N) → Kufri(0N) → Mashobra(0N) → Shimla(1N) → Kullu(0N) → Manali(2N)\r\nprice = 20000/-\r\n', 12, 38),
(13, '6 Nights / 7 Days\r\nKochi(2N) → Munnar(2N) → Thekkady(2N) \r\nprice = 23000/-', 13, 48),
(14, '4 Nights / 5 Days\r\nKochi(0N) → Munnar(2N) → Thekkady(1N) → Alleppey(1N)\r\nprice = 16000/-', 14, 49),
(15, '5 Nights / 6 Days\r\nKochi(0N) → Varkala(2N) → wayanda(3N)\r\nprice = 18000/-', 15, 50),
(16, '6 Nights / 7 Days\r\nKochi(0N) → Munnar(2N) → Thekkady(1N) → Alleppey(1N) → Varkala(1N) → Poovar(1N)\r\nprice = 22000/-\r\n', 16, 51),
(17, '5 Nights / 6 Days\r\nJaipur(2N) → Jodhpur(1N) → Udaipur(2N)\r\nprice = 18000/-', 17, 64),
(18, '7 Nights / 8 Days\r\nJaipur(2N) → Jodhpur(1N) → Udaipur(2N) → Mount Abu(2N)\r\nprice = 23000/-', 18, 65),
(19, '6 Nights / 7 Days\r\nJaipur(2N) → Jodhpur(1N) → Jaisalmer(2N) → Jodhpur(1N)\r\nprice = 24000/-', 19, 66),
(20, '4 Nights / 5 Days\r\nJaipur(2N) → Ranthambore(2N)\r\nprice = 13000/-', 20, 67),
(21, '3 Nights / 4 Days\r\nUdaipur(2N) → Jodhpur(1N)\r\nprice = 10000', 21, 68);

-- --------------------------------------------------------

--
-- Table structure for table `packa_table`
--

CREATE TABLE `packa_table` (
  `package_id` int(11) NOT NULL,
  `package_name` varchar(300) NOT NULL,
  `day_night` varchar(30) NOT NULL,
  `price` int(20) NOT NULL,
  `image` varchar(150) NOT NULL,
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `packa_table`
--

INSERT INTO `packa_table` (`package_id`, `package_name`, `day_night`, `price`, `image`, `state_id`) VALUES
(1, 'Asam', '4 Nights / 5 Days', 16000, 'web\\asam/1/ASAM_1.jpg', 3),
(2, 'Asam', '5 Nights / 6 Days', 18000, 'web\\asam/2/ASAM_2.jpg', 3),
(3, 'Asam', '6 Nights / 7 Days', 20000, 'web\\asam/3/ASAM_3.jpg', 3),
(4, 'Goa', '3 Nights / 4 Days', 15000, 'web\\goa/1/GOA_1.jpg', 5),
(5, 'Goa', '2 Nights / 3 Days', 10000, 'web\\goa/2/GOA_2.jpg', 5),
(6, 'Gujarat', '2 Nights / 3 Days', 7000, 'web\\gujarat/1/GUJARAT_1.jpg', 1),
(7, 'Gujarat', '4 Nights / 5 Days', 15000, 'web\\gujarat/2/GUJARAT_2.jpg', 1),
(8, 'Gujarat', '7 Nights / 8 Days', 18000, 'web\\gujarat/3/GUJARAT_3.jpg', 1),
(9, 'Gujarat', '4 Nights / 5 Days', 12000, 'web\\gujarat/4/GUJARAT_4.jpg', 1),
(10, 'Himacal pradesh', '2 Nights / 3 Days', 12000, 'web\\himachal_pradesh/1/HIMACHAL-PRADESH_1.jpg', 4),
(11, 'Himacal pradesh', '3 Nights / 4 Days', 15000, 'web\\himachal_pradesh/2/HIMACHAL-PRADESH_2.jpg', 4),
(12, 'Himacal pradesh', '4 Nights / 5 Days', 20000, 'web\\himachal_pradesh/3/HIMACHAL-PRADESH_3.jpg', 4),
(13, 'Kerala ', '6 Nights / 7 Days', 23000, 'web\\kerala/1/KERALA_1.jpg', 6),
(14, 'Kerala ', '4 Nights / 5 Days', 16000, 'web\\kerala/2/KERALA_2.jpg', 6),
(15, 'Kerala ', '5 Nights / 6 Days', 18000, 'web\\kerala/3/KERALA_3.jpg', 6),
(16, 'Kerala ', '6 Nights / 7 Days', 22000, 'web\\kerala/4/KERALA_4.jpg', 6),
(17, 'Rajasthan', '5 Nights / 6 Days', 18000, 'web\\rajsthan/1/RAJASTHAN_1.jpg', 2),
(18, 'Rajasthan', '7 Nights / 8 Days', 23000, 'web\\rajsthan/2/RAJASTHAN_2.jpg', 2),
(19, 'Rajasthan', '6 Nights / 7 Days', 24000, 'web\\rajsthan/3/RAJASTHAN_3.jpg', 2),
(20, 'Rajasthan', '4 Nights / 5 Days', 13000, 'web\\rajsthan/4/RAJASTHAN_4.jpg', 2),
(21, 'Rajasthan', '3 Nights / 4 Days', 10000, 'web\\rajsthan/5/RAJASTHAN_5.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `registration_table`
--

CREATE TABLE `registration_table` (
  `r_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email_id` varchar(25) NOT NULL,
  `password` int(8) NOT NULL,
  `state` varchar(20) NOT NULL,
  `city` varchar(25) NOT NULL,
  `pincode` int(6) NOT NULL,
  `contact_number` varchar(10) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration_table`
--

INSERT INTO `registration_table` (`r_id`, `name`, `email_id`, `password`, `state`, `city`, `pincode`, `contact_number`, `user_type`) VALUES
(1, 'admin', 'admin16@gmail.com', 123456, 'Gujarat', 'gandhinagar', 234567, '9876543210', 'admin'),
(2, 'Vishva Patel', 'vishva1062@gmail.com', 1062, 'gujarat', 'gandhinagar', 382835, '7069234523', 'user'),
(3, 'Astha', 'astha2273@gmail.com', 2273, 'gujarat', 'Gandhinagar', 324567, '9988745631', 'user'),
(4, 'Janvi', 'janvi@gmail.com', 1211, 'gujarat', 'palanpur', 769802, '9876543210', 'user'),
(5, 'Yash', 'yash29@gmail.com', 2964, 'gujarat', 'nadiad', 345678, '9087654321', 'user'),
(6, 'Jay', 'jay0978@gmail.com', 1681, 'gujarat', 'mehasana', 234567, '9087654321', 'user'),
(7, 'harshil', 'harshil@gmail.com', 1322, 'gujarat', 'vijapur', 345678, '9876543210', 'user'),
(8, 'Hitesh', 'hitesh23@gmail.com', 2309, 'Gujarat', 'Palanpur', 234567, '8907654321', 'user'),
(9, 'harsh', 'har@gmail.com', 5498, 'gujarat', 'gandhinagar', 234567, '9807654321', 'user'),
(16, 'prince', 'prince514@gmail.com', 2302, 'gujarat', 'mehsana', 234567, '9876543210', 'user'),
(17, 'radhika', 'radhi12@gmail.com', 123456, 'gujarat', 'gandhinagar', 123456, '0987654321', 'user'),
(18, 'Vishva', 'yash123@gmail.com', 12345, 'panjab', 'amritsar', 24356, '9876543210', 'user'),
(19, 'babu', 'babupatel@gmail.com', 0, 'gujarat', 'gandhinagar', 382835, '9999999999', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `state_table`
--

CREATE TABLE `state_table` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(50) NOT NULL,
  `state_image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `state_table`
--

INSERT INTO `state_table` (`state_id`, `state_name`, `state_image`) VALUES
(1, 'Gujarat', 'web\\gujarat/4/3.jpg'),
(2, 'Rajasthan', 'web\\rajsthan/1/1.jpg'),
(3, 'Asam', 'web\\asam/2/3.jpg'),
(4, 'Himachal-pradesh', 'web\\himachal_pradesh/3/1.jpg'),
(5, 'Goa', 'web\\goa/1/3.jpg'),
(6, 'Kerala', 'web\\kerala/2/3.jpg'),
(7, 'Delhi', 'web\\delhi/DELHI.jpg'),
(8, 'Maharashtra', 'web\\maharashtra/MAHARASHTRA.jpg'),
(9, 'West-bengal', 'web\\west_bengal/WEST-BENGAL.jpg'),
(10, 'sikkim', 'web\\sikkim/SIKKIM.jpg'),
(11, 'Jammu-kashmir', 'web\\jammu_kashmir/JAMMU_KASHMIR.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `a_booking_table`
--
ALTER TABLE `a_booking_table`
  ADD PRIMARY KEY (`a_book_id`),
  ADD KEY `r_id` (`r_id`),
  ADD KEY `package_id` (`package_id`);

--
-- Indexes for table `booking_table`
--
ALTER TABLE `booking_table`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `package_id` (`package_id`),
  ADD KEY `r_id` (`r_id`);

--
-- Indexes for table `cancel_table`
--
ALTER TABLE `cancel_table`
  ADD PRIMARY KEY (`cancel_id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `package_id` (`package_id`);

--
-- Indexes for table `image_table`
--
ALTER TABLE `image_table`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `package_d_table`
--
ALTER TABLE `package_d_table`
  ADD PRIMARY KEY (`package_d_id`),
  ADD KEY `image_id` (`image_id`),
  ADD KEY `package_id` (`package_id`);

--
-- Indexes for table `packa_table`
--
ALTER TABLE `packa_table`
  ADD PRIMARY KEY (`package_id`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `registration_table`
--
ALTER TABLE `registration_table`
  ADD PRIMARY KEY (`r_id`),
  ADD UNIQUE KEY `email_id` (`email_id`);

--
-- Indexes for table `state_table`
--
ALTER TABLE `state_table`
  ADD PRIMARY KEY (`state_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `a_booking_table`
--
ALTER TABLE `a_booking_table`
  MODIFY `a_book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `booking_table`
--
ALTER TABLE `booking_table`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `cancel_table`
--
ALTER TABLE `cancel_table`
  MODIFY `cancel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `image_table`
--
ALTER TABLE `image_table`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `package_d_table`
--
ALTER TABLE `package_d_table`
  MODIFY `package_d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `packa_table`
--
ALTER TABLE `packa_table`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `registration_table`
--
ALTER TABLE `registration_table`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `state_table`
--
ALTER TABLE `state_table`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `a_booking_table`
--
ALTER TABLE `a_booking_table`
  ADD CONSTRAINT `a_booking_table_ibfk_1` FOREIGN KEY (`r_id`) REFERENCES `registration_table` (`r_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `a_booking_table_ibfk_2` FOREIGN KEY (`package_id`) REFERENCES `packa_table` (`package_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `booking_table`
--
ALTER TABLE `booking_table`
  ADD CONSTRAINT `booking_table_ibfk_1` FOREIGN KEY (`package_id`) REFERENCES `packa_table` (`package_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_table_ibfk_2` FOREIGN KEY (`r_id`) REFERENCES `registration_table` (`r_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cancel_table`
--
ALTER TABLE `cancel_table`
  ADD CONSTRAINT `cancel_table_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `booking_table` (`book_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cancel_table_ibfk_2` FOREIGN KEY (`package_id`) REFERENCES `packa_table` (`package_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `package_d_table`
--
ALTER TABLE `package_d_table`
  ADD CONSTRAINT `package_d_table_ibfk_1` FOREIGN KEY (`image_id`) REFERENCES `image_table` (`image_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `package_d_table_ibfk_2` FOREIGN KEY (`package_id`) REFERENCES `packa_table` (`package_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `packa_table`
--
ALTER TABLE `packa_table`
  ADD CONSTRAINT `packa_table_ibfk_2` FOREIGN KEY (`state_id`) REFERENCES `state_table` (`state_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
