-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2024 at 08:21 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pjprecord`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) NOT NULL,
  `customername` varchar(100) NOT NULL,
  `salescode` int(4) NOT NULL,
  `Cday` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customername`, `salescode`, `Cday`) VALUES
(43, 'F-561-003-051-Lao State Bus Co. Ltd.', 1284, NULL),
(44, 'F-561-003-052-Bounlam Transport CO., LTD', 1284, NULL),
(45, 'F-561-003-066-ບໍລິສິດ ລັດວິສະຫະກິດຂົນສົ່ງນ້ຳມັນເຊື້ອໄຟລາວ', 1284, NULL),
(46, 'F-561-003-067-Chansy Transport', 1284, NULL),
(47, 'F-561-003-103-ບໍລິສັດ ເບຍລາວ ຈຳກັດ', 1284, NULL),
(48, 'F-561-003-234-ບໍລິສັດ ຊ່າງພິນິດ ເອັນນີເນຍລິ່ງ 2539 ຈຳກັດ', 1284, NULL),
(49, 'F-562-003-051-Saengphet Tyres', 1284, NULL),
(50, 'ບໍລີສັດຂົນສົ່ງ ຮູ້ງອາລູນ ສາມແຍກຫນອງບືກ', 1284, NULL),
(51, 'D-561-001-001-Somkiet Motors Parts', 1302, NULL),
(52, 'D-561-001-002-KP Spare Parts (VTE)', 1302, NULL),
(53, 'D-561-001-003-S.SaNguan Tyre Repair Shop', 1302, NULL),
(54, 'D-561-001-005 Pasong Auto Parts and Tyre Seller', 1302, NULL),
(55, 'D-561-001-008-JK Chaleunyon', 1302, NULL),
(56, 'D-561-001-010 Kia Service', 1302, NULL),
(57, 'D-561-002-010-ຮ້ານ ບົວໄຊ ຂາຍຢາງລົດ', 1302, NULL),
(58, 'D-561-003-247-Sackxay Special Project', 1302, NULL),
(59, 'C-581-001-024-ຮ້ານ ໄຊມຸງຄຸນ ການຢາງ ສ່ວນບຸກຄົນ', 157, NULL),
(60, 'C-581-001-026-ຮ້ານ ລາວສໄຕລ໌', 157, NULL),
(61, 'C-581-001-027-ຮ້ານ ເລແທງວິງ ການຢາງ', 157, NULL),
(62, 'C-581-001-028-ບໍລິສັດ ແສງມະນີຈະເລີນ ການຄ້າ ຂາອອກ-ຂາເຂົ້າ ຈຳກັດຜູ້ດຽວ', 157, NULL),
(63, 'C-581-001-029-ຮ້ານ ອຼ່ເກດ ຈະເລີນ', 157, NULL),
(64, 'C-581-001-030-ຮ້ານ ສີງທອງ ສ່ວນບຸກຄົນ', 157, NULL),
(65, 'C-581-001-031-ຮ້ານ ຕຽງຄຳ ຈອດຢາງທັນສະໄໝ', 157, NULL),
(66, 'F-561-003-100-Phonsackdee Service', 157, NULL),
(67, 'F-561-003-242-ຮ້ານ ພີເຄ ອາໄຫຼ່', 157, NULL),
(68, 'C-581-001-001-Lao Toyota Service (Sikhottabong Branch) Co., Ltd', 1275, NULL),
(69, 'C-581-001-002-SVP Co., Ltd', 1275, NULL),
(70, 'C-581-001-003-PTT LAO Company (FIT Auto)', 1275, NULL),
(72, 'C-581-001-004-Sitthi Logictics Lao Co., Ltd', 1275, NULL),
(73, 'C-581-001-005-KP 3G & Nomura Trading Co., Ltd', 1275, NULL),
(74, 'C-581-001-006-Isuzu Lao Services Sole Co., Ltd.', 1275, NULL),
(75, 'C-581-001-010-Keo Auto Group Co, Ltd', 1275, NULL),
(76, 'C-581-001-011-ACE Auto Express', 1275, NULL),
(77, 'C-581-001-012-ບໍລິສັດ ໂອໂຕເອັກສ ຈໍາກັດ', 1275, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `username`, `password`, `name`, `level`) VALUES
(1, '111', '111', 'Khamsing', 'admin'),
(2, 'U1', '111', 'Touher', '1284'),
(3, 'U2', '222', 'Sivilay', '1302'),
(4, 'U3', '333', 'Manivanh', '157'),
(5, 'U4', '444', 'Phetsayvanh', '1275'),
(6, 'u5', '555', 'ICT', '555');

-- --------------------------------------------------------

--
-- Table structure for table `pjpdata`
--

CREATE TABLE `pjpdata` (
  `Entry_date` date NOT NULL,
  `action_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `sales_person` varchar(30) NOT NULL,
  `check_entry` varchar(3) NOT NULL,
  `customer_name` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pjpdata`
--

INSERT INTO `pjpdata` (`Entry_date`, `action_date`, `sales_person`, `check_entry`, `customer_name`) VALUES
('0000-00-00', '2021-08-09 08:21:31.380484', '1284 CP-309 Mr. Touher', 'IN', 'F-561-003-051-Lao State Bus Co. Ltd.'),
('0000-00-00', '2021-08-09 08:21:48.113596', '1284 CP-309 Mr. Touher', 'OUT', 'F-561-003-051-Lao State Bus Co. Ltd.'),
('0000-00-00', '2021-08-09 08:21:58.826725', '1284 CP-309 Mr. Touher', 'IN', 'F-561-003-051-Lao State Bus Co. Ltd.'),
('0000-00-00', '2021-08-09 08:22:05.233525', '1284 CP-309 Mr. Touher', 'OUT', 'F-561-003-051-Lao State Bus Co. Ltd.'),
('0000-00-00', '2021-08-09 08:26:12.506051', '1284 CP-309 Mr. Touher', 'IN', 'F-561-003-066-ບໍລິສິດ ລັດວິສະຫະກິດຂົນສົ່ງນ້ຳມັນເຊື້ອໄຟລາວ'),
('0000-00-00', '2021-08-09 08:26:21.938490', '1284 CP-309 Mr. Touher', 'OUT', 'F-561-003-066-ບໍລິສິດ ລັດວິສະຫະກິດຂົນສົ່ງນ້ຳມັນເຊື້ອໄຟລາວ'),
('2021-08-09', '2021-08-09 10:13:15.833835', '1284 CP-309 Mr. Touher', 'IN', 'F-561-003-051-Lao State Bus Co. Ltd.'),
('2021-08-10', '2021-08-09 10:20:23.264038', '1284 CP-309 Mr. Touher', 'IN', 'F-561-003-066-ບໍລິສິດ ລັດວິສະຫະກິດຂົນສົ່ງນ້ຳມັນເຊື້ອໄຟລາວ'),
('2021-08-10', '2021-08-10 03:19:46.102987', '1284 CP-309 Mr. Touher', 'IN', 'F-561-003-051-Lao State Bus Co. Ltd.'),
('2021-08-10', '2021-08-10 03:20:04.226301', '1284 CP-309 Mr. Touher', 'OUT', 'F-561-003-051-Lao State Bus Co. Ltd.'),
('0000-00-00', '2021-08-10 03:31:02.796967', '1284 CP-309 Mr. Touher', 'IN', 'F-561-003-051-Lao State Bus Co. Ltd.'),
('2021-08-10', '2021-08-10 03:31:22.997576', '1284 CP-309 Mr. Touher', 'IN', 'F-561-003-051-Lao State Bus Co. Ltd.'),
('2021-08-10', '2021-08-10 03:31:28.316041', '1284 CP-309 Mr. Touher', 'OUT', 'F-561-003-051-Lao State Bus Co. Ltd.'),
('2021-08-10', '2021-08-10 03:33:48.965028', '1302 CP-513 Mr. Sivilay Soneth', 'IN', 'D-561-001-001-Somkiet Motors Parts'),
('2021-08-10', '2021-08-10 03:33:53.956571', '1302 CP-513 Mr. Sivilay Soneth', 'OUT', 'D-561-001-001-Somkiet Motors Parts'),
('2021-08-10', '2021-08-10 03:34:28.876986', '157 CP-228 Manivanh Thutaveth', 'IN', 'C-581-001-024-ຮ້ານ ໄຊມຸງຄຸນ ການຢາງ ສ່ວນບຸກຄົນ'),
('2021-08-10', '2021-08-10 03:34:41.132986', '157 CP-228 Manivanh Thutaveth', 'OUT', 'C-581-001-024-ຮ້ານ ໄຊມຸງຄຸນ ການຢາງ ສ່ວນບຸກຄົນ'),
('2021-08-10', '2021-08-10 03:48:26.013571', '1275 CP-425 Mr. Phetsayvanh So', 'IN', 'C-581-001-003-PTT LAO Company (FIT Auto)'),
('2021-08-10', '2021-08-10 03:48:32.012262', '1275 CP-425 Mr. Phetsayvanh So', 'IN', 'C-581-001-003-PTT LAO Company (FIT Auto)');

-- --------------------------------------------------------

--
-- Table structure for table `salesperson`
--

CREATE TABLE `salesperson` (
  `id` bigint(20) NOT NULL,
  `salesname` varchar(40) NOT NULL,
  `s_scode` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salesperson`
--

INSERT INTO `salesperson` (`id`, `salesname`, `s_scode`) VALUES
(1, '1284 CP-309 Mr. Touher', 1284),
(2, '1302 CP-513 Mr. Sivilay Sonethongchan', 1302),
(3, '157 CP-228 Manivanh Thutaveth', 157),
(4, '1275 CP-425 Mr. Phetsayvanh Soukvongsa', 1275);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customername` (`customername`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `salesperson`
--
ALTER TABLE `salesperson`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `salesperson`
--
ALTER TABLE `salesperson`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
